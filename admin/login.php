<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mediora - Sign In</title>
    <link rel="stylesheet" href="../src/output.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url('./image/3cf5776380b6b4264c81c2ae19daf1bf.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">
    <div class="w-full h-full flex items-center justify-center">
        <div class="w-full max-w-4xl flex bg-white/20 backdrop-blur-lg rounded-xl shadow-lg overflow-hidden">
            <div class="w-1/2 p-10">
                <div class="text-center mb-8">
                    <h1 class="text-2xl font-semibold text-black-800 mb-1">SIGN IN</h1>
                    <p class="text-sm text-gray-500">(AS ADMINISTRATOR)</p>
                </div>

                <form method="POST">
                    <div class="mb-5 text-left shadow-lg">
                        <label class="block text-sm font-medium text-gray-600 mb-2">USERNAME / EMAIL</label>
                        <input 
                            type="text" 
                            placeholder="Type your username / email here..." 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"
                        >
                    </div>

                    <div class="mb-6 text-left shadow-lg">
                        <label class="block text-sm font-medium text-gray-600 mb-2">PASSWORD</label>
                        <input 
                            type="password" 
                            placeholder="Type your secret password..." 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"
                        >
                    </div>

                    <button type="button" onclick="window.location.href='dashboard.php'"  class="w-full bg-[#3C949E] text-white py-3 rounded-lg font-medium hover:bg-[#337c84] transition duration-200 mb-8">
                        LOGIN
                    </button>
                </form>
            </div>

            <!-- Right side - Image -->
            <div class="w-1/2 bg-cover bg-center" style="background-image: url('./image/309bc5f1cc6b56bcea92c38bb5eb4848 1.png');">
                <div class="absolute bottom-4 right-8 w-24 h-24">
                    <img src="./image/logo_mediora-removebg-preview.png" alt="logo" class="w-full h-full object-contain">
                </div>
            </div>
        </div>
    </div>
</body>
</html>