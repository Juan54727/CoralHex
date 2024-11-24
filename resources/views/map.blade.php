<x-layout>
    <h1 class="text-center m-8 text-4xl font-medium">Coral Reef<br>Map Distribution</h1>

    <!-- Tombol untuk mengontrol layer -->
    <div class="text-center mb-4">
        <button onclick="toggleMapCR()"
            class="bg-orange-500 hover:bg-orange-700 text-yellow-200 font-bold py-2 px-4 rounded">Coral
            Distribution</button>
        <button onclick="toggleMapVS()"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Virtual Stations</button>
    </div>

    <!-- Elemen untuk menampilkan peta -->
    <div id="map" style="height: 600px;"></div>
    <p class="text-center text-xs">*by NOAA Coral Reef Watch (CRW) Virtual Stations</p>

    <!-- Tambahkan JS untuk Leaflet -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        // Inisialisasi peta
        var map = L.map('map').setView([-5.0, 120.0], 5);

        // Tambahkan tile layer (peta dasar)
        L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            attribution: 'Tiles &copy; Esri &mdash; Source: Esri, Earthstar Geographics, and the GIS User Community',
            maxZoom: 20
        }).addTo(map);

        // Inisialisasi layer untuk mapcr dan mapvs
        var mapCRLayer = null;
        var mapVSLayer = null;

        // Fungsi untuk mengatur gaya warna untuk mapcr
        function styleMapCR(feature) {
            return {
                color: "#ff7800",
                fillColor: "#fffc00",
                fillOpacity: 0.5,
                weight: 2
            };
        }

        // Fungsi untuk memuat layer mapcr
        function loadMapCR() {
            return fetch('/maps/mapcr.json')
                .then(response => response.json())
                .then(data => L.geoJSON(data, {
                    style: styleMapCR
                }));
        }

        // Fungsi untuk memuat layer mapvs
        function loadMapVS() {
            return fetch('/maps/mapvs.json')
                .then(response => response.json())
                .then(data => L.geoJSON(data, {
                    onEachFeature: function(feature, layer) {
                        layer.bindPopup("Virtual Stations");
                    }
                }));
        }

        // Fungsi untuk toggle mapcr
        function toggleMapCR() {
            if (mapCRLayer) {
                map.removeLayer(mapCRLayer);
                mapCRLayer = null;
            } else {
                loadMapCR().then(layer => {
                    mapCRLayer = layer;
                    map.addLayer(mapCRLayer);
                });
            }
        }

        // Fungsi untuk toggle mapvs
        function toggleMapVS() {
            if (mapVSLayer) {
                map.removeLayer(mapVSLayer);
                mapVSLayer = null;
            } else {
                loadMapVS().then(layer => {
                    mapVSLayer = layer;
                    map.addLayer(mapVSLayer);
                });
            }
        }
    </script>
</x-layout>
