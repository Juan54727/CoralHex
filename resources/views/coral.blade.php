<x-layout>
    <!-- Header -->
    <header class="h-[500px] text-center text-white bg-no-repeat bg-cover mt-5"
        style="background-image: url('img/cbg2.jpg')">
        <h1 class="text-5xl pt-8 font-bold">Types Of Coral</h1>
        <p class="mt-3 text-lg font-medium">Learn more about the different types of coral and their ecosystems.</p>
    </header>

    <!-- Main Content -->
    <div class="bg-cover" style="background-image: url(img/cbg1.jpg)">
        <main class="p-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">

            <!-- Acropora Branching -->
            <div class="bg-white p-5 rounded-lg shadow-lg transform transition duration-300 hover:scale-105 cursor-pointer"
                onclick="openModal('Acropora Branching', 'img/acb.jpg', 'Karang Acropora jenis branching memiliki struktur bercabang yang tumbuh dengan cepat, memberikan tempat perlindungan bagi ikan kecil dan invertebrata.')">
                <img src="img/acb.jpg" alt="Acropora Branching" class="rounded-md mb-4 w-[450px] h-60">
                <h2 class="text-xl font-semibold text-blue-600">Acropora Branching</h2>
                <p class="mt-2 text-gray-700">Struktur bercabang dengan pertumbuhan cepat...</p>
            </div>

            <!-- Acropora Digitate -->
            <div class="bg-white p-5 rounded-lg shadow-lg transform transition duration-300 hover:scale-105 cursor-pointer"
                onclick="openModal('Acropora Digitate', 'img/acd.jpeg', 'Acropora digitate memiliki cabang-cabang pendek menyerupai jari, sering tumbuh di area dengan arus rendah.')">
                <img src="img/acd.jpeg" alt="Acropora Digitate" class="rounded-md mb-4 w-[450px] h-60">
                <h2 class="text-xl font-semibold text-blue-600">Acropora Digitate</h2>
                <p class="mt-2 text-gray-700">Cabang pendek menyerupai jari...</p>
            </div>

            <!-- Acropora Encrusting -->
            <div class="bg-white p-5 rounded-lg shadow-lg transform transition duration-300 hover:scale-105 cursor-pointer"
                onclick="openModal('Acropora Encrusting', 'img/ace.jpg', 'Karang Encrusting adalah Acropora yang membentuk cabang-cabang panjang menyerupai tanduk rusa, yang sering ditemukan di perairan dangkal.')">
                <img src="img/ace.jpg" alt="Acropora Encrusting" class="rounded-md mb-4 w-[450px] h-60">
                <h2 class="text-xl font-semibold text-blue-600">Acropora Encrusting</h2>
                <p class="mt-2 text-gray-700">Cabang panjang menyerupai tanduk rusa...</p>
            </div>

            <!-- Acropora Tabulate -->
            <div class="bg-white p-5 rounded-lg shadow-lg transform transition duration-300 hover:scale-105 cursor-pointer"
                onclick="openModal('Acropora Tabulate', 'img/act.jpg', 'Acropora jenis Tabulate memiliki bentuk menyerupai meja atau piring besar, ideal untuk menyediakan perlindungan bagi berbagai ikan dan organisme kecil.')">
                <img src="img/act.jpg" alt="Acropora Tabulate" class="rounded-md mb-4 w-[450px] h-60">
                <h2 class="text-xl font-semibold text-blue-600">Acropora Tabulate</h2>
                <p class="mt-2 text-gray-700">Bentuk menyerupai meja atau piring besar...</p>
            </div>

            <!-- Coral Branching -->
            <div class="bg-white p-5 rounded-lg shadow-lg transform transition duration-300 hover:scale-105 cursor-pointer"
                onclick="openModal('Coral Branching', 'img/cb.jpg', 'Koral jenis branching memiliki cabang-cabang seperti pohon yang dapat menyediakan tempat perlindungan bagi berbagai organisme laut kecil.')">
                <img src="img/cb.jpg" alt="Coral Branching" class="rounded-md mb-4 w-[450px] h-60">
                <h2 class="text-xl font-semibold text-blue-600">Coral Branching</h2>
                <p class="mt-2 text-gray-700">Koral jenis branching memiliki cabang-cabang seperti pohon...</p>
            </div>

            <!-- Coral Encrusting -->
            <div class="bg-white p-5 rounded-lg shadow-lg transform transition duration-300 hover:scale-105 cursor-pointer"
                onclick="openModal('Coral Encrusting', 'img/ce.jpg', 'Koral encrusting tumbuh menyebar di permukaan dan menutupi substrat, biasanya ditemukan di area dengan arus yang kuat.')">
                <img src="img/ce.jpg" alt="Coral Encrusting" class="rounded-md mb-4 w-[450px] h-60">
                <h2 class="text-xl font-semibold text-blue-600">Coral Encrusting</h2>
                <p class="mt-2 text-gray-700">Koral encrusting tumbuh menyebar di permukaan...</p>
            </div>

            <!-- Coral Foliose -->
            <div class="bg-white p-5 rounded-lg shadow-lg transform transition duration-300 hover:scale-105 cursor-pointer"
                onclick="openModal('Coral Foliose', 'img/cf.jpeg', 'Koral foliose berbentuk seperti lembaran atau daun dan memiliki struktur yang kompleks, yang menawarkan banyak tempat untuk perlindungan hewan kecil.')">
                <img src="img/cf.jpeg" alt="Coral Foliose" class="rounded-md mb-4 w-[450px] h-60">
                <h2 class="text-xl font-semibold text-blue-600">Coral Foliose</h2>
                <p class="mt-2 text-gray-700">Koral foliose berbentuk seperti lembaran atau daun...</p>
            </div>

            <!-- Coral Heliopora -->
            <div class="bg-white p-5 rounded-lg shadow-lg transform transition duration-300 hover:scale-105 cursor-pointer"
                onclick="openModal('Coral Heliopora', 'img/chl.jpg', 'Koral Heliopora berbentuk seperti lembaran atau daun dan memiliki struktur yang kompleks, yang menawarkan banyak tempat untuk perlindungan hewan kecil.')">
                <img src="img/chl.jpg" alt="Coral Heliopora" class="rounded-md mb-4 w-[450px] h-60">
                <h2 class="text-xl font-semibold text-blue-600">Coral Heliopora</h2>
                <p class="mt-2 text-gray-700">Koral Heliopora berbentuk seperti lembaran atau daun...</p>
            </div>

            <!-- Coral Massive -->
            <div class="bg-white p-5 rounded-lg shadow-lg transform transition duration-300 hover:scale-105 cursor-pointer"
                onclick="openModal('Coral Massive', 'img/cm.webp', 'Koral massive memiliki bentuk yang besar dan padat, tumbuh lambat, dan biasanya lebih tahan terhadap gelombang besar.')">
                <img src="img/cm.webp" alt="Coral Massive" class="rounded-md mb-4 w-[450px] h-60">
                <h2 class="text-xl font-semibold text-blue-600">Coral Massive</h2>
                <p class="mt-2 text-gray-700">Koral massive memiliki bentuk yang besar dan padat...</p>
            </div>

            <!-- Coral Millepora -->
            <div class="bg-white p-5 rounded-lg shadow-lg transform transition duration-300 hover:scale-105 cursor-pointer"
                onclick="openModal('Coral Millepora', 'img/cme.jpeg', 'Koral Millepora memiliki bentuk yang besar dan padat, tumbuh lambat, dan biasanya lebih tahan terhadap gelombang besar.')">
                <img src="img/cme.jpeg" alt="Coral Millepora" class="rounded-md mb-4 w-[450px] h-60">
                <h2 class="text-xl font-semibold text-blue-600">Coral Millepora</h2>
                <p class="mt-2 text-gray-700">Koral Millepora memiliki bentuk yang besar dan padat...</p>
            </div>

            <!-- Coral Mushroom -->
            <div class="bg-white p-5 rounded-lg shadow-lg transform transition duration-300 hover:scale-105 cursor-pointer"
                onclick="openModal('Coral Mushroom', 'img/cmr.jpg', 'Koral mushroom memiliki bentuk menyerupai jamur dan sering ditemukan di dasar laut, umumnya dalam area yang tidak banyak arus.')">
                <img src="img/cmr.jpg" alt="Coral Mushroom" class="rounded-md mb-4 w-[450px] h-60">
                <h2 class="text-xl font-semibold text-blue-600">Coral Mushroom</h2>
                <p class="mt-2 text-gray-700">Koral mushroom memiliki bentuk menyerupai jamur...</p>
            </div>

            <!-- Coral Tubipora -->
            <div class="bg-white p-5 rounded-lg shadow-lg transform transition duration-300 hover:scale-105 cursor-pointer"
                onclick="openModal('Coral Tubipora', 'img/ctu.jpeg', 'Koral Tubipora membentuk struktur pipih dan lebar, seperti piring, dan biasanya ditemukan di area dengan pencahayaan rendah.')">
                <img src="img/ctu.jpeg" alt="Coral Tubipora" class="rounded-md mb-4 w-[450px] h-60">
                <h2 class="text-xl font-semibold text-blue-600">Coral Tubipora</h2>
                <p class="mt-2 text-gray-700">Koral Tubipora membentuk struktur pipih dan lebar...</p>
            </div>

        </main>
    </div>

    <!-- Modal -->
    <div id="coralModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white p-6 rounded-lg max-w-lg text-center">
            <h2 id="modalTitle" class="text-2xl font-bold mb-4 text-blue-600"></h2>
            <img id="modalImage" src="" alt="Coral Image" class="my-4 rounded-md w-[450px]">
            <p id="modalDescription" class="text-gray-700"></p>
            <button onclick="closeModal()" class="mt-4 px-4 py-2 bg-red-500 text-white rounded-lg">Tutup</button>
        </div>
    </div>

    <!-- Script -->
    <script>
        function openModal(title, imageUrl, description) {
            document.getElementById('modalTitle').textContent = title;
            document.getElementById('modalImage').src = imageUrl;
            document.getElementById('modalDescription').textContent = description;
            document.getElementById('coralModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('coralModal').classList.add('hidden');
        }
    </script>
</x-layout>
