<x-layout>
    <div class="mt-4 mx-auto p-5 bg-[#3B86CC] rounded-lg">
        <h1 class="text-white text-center text-3xl font-medium mt-8 mb-2">Analisis Tutupan Karang</h1>
        <div class="flex w-5/6 mx-auto">
            <div class="w-1/2 my-auto">

                <!-- Gambar Hasil Deteksi -->
                <div id="result" class="flex justify-center bg-gray-400 w-[600px] h-[338px] mx-auto">
                    <img id="detectedImage" src="" class="w-auto">
                </div>
                <form id="uploadForm" enctype="multipart/form-data" class="flex m-8 center justify-center">
                    <div class="m-auto">
                        <!-- Input file yang disembunyikan -->
                        <input type="file" name="image" id="image" accept="image/*" required class="hidden">

                        <!-- Tombol custom untuk unggah -->
                        <button type="button" onclick="document.getElementById('image').click()"
                            class="bg-red-400 hover:bg-red-600 text-white font-bold mx-auto py-3 px-6 rounded-lg text-lg">
                            Add Photo
                        </button>
                    </div>
                    <button type="submit"
                        class="bg-red-400 hover:bg-red-600 text-white font-bold mx-auto py-3 px-6 rounded-lg text-lg">
                        Analyze
                    </button>
                </form>
            </div>
            <div id="result" class="w-1/2">
                <!-- Diagram Lingkaran -->
                <h3 class="text-xl text-center text-white font-medium mt-10 mb-5">Diagram Lingkaran<br>Tutupan Karang
                </h3>
                <div class="bg-gray-400 w-96 h-96 mx-auto">
                    <img id="pieDiagramImage" src="" class="w-full h-auto rounded-lg shadow-md">
                </div>
                <!-- Tabel Analisis -->
                <div id="analysisTable" class="w-[500px] my-10 mx-auto text-lg text-white">
                    <h4 class="mt-4 font-medium">Kelas yang Terdeteksi:</h4>
                    <h3 class="text-xl font-medium mt-4">Data Analisis</h3>
                    <ul>
                        <li>Karang</li>
                        <li>Ikan</li>
                        <li>Bukan Karang</li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="w-28 flex mb-10 mt-14 mx-6">
            <img src="img/sdgs13.png" class="mx-4" alt="sdgs13">
            <img src="img/sdgs14.png" class="mx-4" alt="sdgs14">
        </div>
    </div>

    <!-- jQuery dan AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Event untuk menampilkan pratinjau gambar sebelum diunggah
            $('#image').change(function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $('#detectedImage').attr('src', e.target
                            .result); // Tampilkan gambar pada area hasil deteksi
                    };
                    reader.readAsDataURL(file);
                }
            });

            // Event untuk mengirim gambar ke backend dan menampilkan hasil analisis
            $('#uploadForm').submit(function(e) {
                e.preventDefault();

                const formData = new FormData(this);

                $.ajax({
                    url: 'http://127.0.0.1:5001/analyze',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.result === 'success') {
                            // Gambar hasil analisis
                            $('#detectedImage').attr('src', response.image_url);

                            // Diagram Lingkaran
                            $('#pieDiagramImage').attr('src', response.diagram);

                            // Tabel Analisis
                            const detectedClassesList = response.analysis_data.detected_classes
                                .map(cls => `<li>${cls}</li>`).join('');
                            $('#analysisTable').html(
                                `<h3 class="text-xl font-medium mt-4">Data Analisis</h3>` +
                                `<p>Total Pixels: ${response.analysis_data.total_pixels}</p>` +
                                `<p>Karang Pixels: ${response.analysis_data.karang_pixels}</p>` +
                                `<p>Persentase Karang: ${response.analysis_data.percentage_karang.toFixed(2)}%</p>` +
                                `<h4 class="mt-4 font-medium">Kelas yang Terdeteksi:</h4>` +
                                `<ul>${detectedClassesList}</ul>`
                            );

                            // Tampilkan hasil
                            $('#result').show();
                        } else {
                            alert('Error: ' + response.error);
                        }
                    },
                    error: function() {
                        alert('Terjadi kesalahan saat mengirim permintaan.');
                    }
                });
            });
        });
    </script>
</x-layout>
