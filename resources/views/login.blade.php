<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>CoralHex</title>
</head>

<body class="bg-[#222222]">
    <header class="text-gray-600 body-font">
        <div class=" bg-[#3B86CC] mx-auto flex flex-wrap flex-col md:flex-row items-center my-8 rounded-xl w-5/6 h-14">
        </div>
    </header>

    <div class="flex bg-[#C5DBF0]">
        <div class="flex justify-center w-3/5 p-20">
            <div class="bg-[#C5DBF0] p-8 w-full max-w-md">
                <!-- Logo -->
                <div class="flex justify-center">
                    <a href="/">
                        <img src="img/logo.png" alt="Logo" class="w-48">
                    </a>
                </div>

                <!-- Form Title -->
                <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Login to your account</h2>

                <!-- Social Login Buttons -->
                <div class="flex justify-center mb-8">
                    <button class="flex items-center px-4 mx-7 py-2 bg-blue-700 text-white rounded-md space-x-2">
                        <img class="w-5 h-5" src="img/fb.webp" alt="Facebook">
                        <span class="font-bold">Facebook</span>
                    </button>
                    <button
                        class="flex items-center px-4 mx-7 py-2 border border-red-300 text-black rounded-md space-x-2">
                        <img class="w-5 h-5" src="img/google.png" alt="Google">
                        <span class="font-bold">Google</span>
                    </button>
                </div>

                <!-- Login Form Fields -->
                <form action="#" method="POST" class="space-y-4">
                    <!-- Username Field -->
                    <div class="relative">
                        <label class="sr-only" for="username">Username</label>
                        <input id="username" name="username" type="text" placeholder="Username"
                            class="w-full pl-10 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required>
                        <img class="absolute left-2 top-1/2 transform -translate-y-1/2 w-5 h-5" src="img/un.png"
                            alt="User Icon">
                    </div>

                    <!-- Email Field -->
                    <div class="relative">
                        <label class="sr-only" for="email">Email</label>
                        <input id="email" name="email" type="email" placeholder="Email"
                            class="w-full pl-10 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required>
                        <img class="absolute left-2 top-1/2 transform -translate-y-1/2 w-5 h-5" src="img/email.png"
                            alt="Email Icon">
                    </div>

                    <!-- Password Field -->
                    <div class="relative">
                        <label class="sr-only" for="password">Password</label>
                        <input id="password" name="password" type="password" placeholder="Password"
                            class="w-full pl-10 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required>
                        <img class="absolute left-2 top-1/2 transform -translate-y-1/2 w-5 h-5" src="img/pw.png"
                            alt="Password Icon">
                    </div>

                    <!-- Login Button -->
                    <button type="submit"
                        class="w-full py-2 mt-4 bg-red-600 text-white rounded-md font-bold hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                        Login
                    </button>
                </form>
            </div>
        </div>
        <div class="w-2/5 flex flex-col items-center p-10 bg-white rounded-lg shadow-lg">
            <!-- Gambar coral -->
            <img src="img/cba.png" alt="Coral Image" class="w-72 mb-4">

            <!-- Penjelasan coral -->
            <p class="text-lg text-gray-700 text-center mb-6">
                <span class="text-blue-500 font-bold">Coral</span><span class="text-black font-bold">Hex</span> helps
                you identify coral types based on lifeforms and analyze their distribution effortlessly. Utilize its
                intuitive tools to better understand coral ecosystems and support sustainable marine management—anytime,
                anywhere.
            </p>

            <!-- Fun Fact Section -->
            <div class="flex justify-center">
                <img src="img/ff.png" class="w-40">
            </div>
            <p class="text-center text-sm text-gray-600">
                <span class="text-red-600 font-bold">Not Plants,</span><span class="text-blue-600 font-bold">But
                    Animals!</span><br>
                Despite their plant-like appearance, corals are actually tiny animals called polyps that live in
                colonies. They are related to jellyfish and sea anemones.
            </p>
        </div>
    </div>

    <footer class="text-white justify-around flex font-medium bg-blue-500 p-4">
        <p>&copy; 2024</p>
        <p>CoralHex</p>
        <p>@2209476</p>
    </footer>


</body>

</html>
