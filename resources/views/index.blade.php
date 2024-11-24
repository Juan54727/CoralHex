<x-layout>
    <div class="p-5 bg-no-repeat bg-cover text-white" style="background-image: url('img/hero.png')">
        <div class="relative w-[90%] h-28">
            <div class="bg-[#CD0A8E] w-72 h-28 absolute left-16 top-[204px]"></div>
            <h1 class="text-5xl font-medium w-full absolute left-[50px] top-52 ml-12">
                BE A PART OF MARINE CONSERVATION <br>
                BEGIN TO ANALYZE YOUR CORALS WITH CORALHEX
            </h1>
        </div>
        <h1 class="text-2xl font-medium text-center pt-52 my-5">Welcome !!! <br>
            Click the button below to start uploading coral images and analyzing their cover.</h1>

        <!-- Tombol untuk menuju halaman upload -->
        <div class="flex justify-center">
            <a href="/upload"
                class="bg-red-500 hover:bg-blue-700 text-white font-bold py-3 px-6 mt-10 rounded-lg text-lg">Start
                Analyze</a>
        </div>

        <div class="w-28 flex mb-10 mt-14 mx-6">
            <img src="img/sdgs13.png" class="mx-4" alt="sdgs13">
            <img src="img/sdgs14.png" class="mx-4" alt="sdgs14">
        </div>
    </div>

    <!-- Tailwind JS (optional for interactive elements like dropdowns) -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</x-layout>
