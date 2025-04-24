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
            background-image: url('./image/68a7f34090bd445a1c07ad0ad8081bd6 (1) 1.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">
    <div class="w-full h-full flex items-center justify-center">
        <div class="w-full max-w-2xl flex bg-white/5 backdrop-blur-lg rounded-xl shadow-lg overflow-hidden">
            <div class="w-full p-10">
                <div class="text-center mb-8">
                    <h1 class="text-2xl font-semibold text-black-800 mb-1">SIGN IN</h1>
                    <p class="text-sm text-gray-500">(AS APOTEK MANAGER)</p>
                </div>

                <form method="POST">
                    <div class="mb-5 text-left shadow-lg">
                        <label class="block text-sm font-medium text-gray-600 mb-2">USERNAME / EMAIL</label>
                        <input 
                            type="text" 
                            placeholder="Type your username / email here..." 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        >
                    </div>

                    <div class="mb-4 text-left">
                    <label class="block text-sm font-medium text-gray-600 mb-2">PASSWORD</label>
                        <input 
                            type="password" 
                            placeholder="Type your secret password..." 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        >
                    </div>

                    <div class="mb-6 text-right">
                        <a href="#" class="text-sm text-[#6bb2a0] hover:text-white">Forgot Your Password?</a>
                    </div>

                    <button type="button" onclick="window.location.href='dashboard.php'" class="w-full bg-[#3C949E] text-white py-3 rounded-lg font-medium hover:bg-[#337c84] transition duration-200 mb-6">
                        SIGN IN
                    </button>
                </form>

                <div class="text-center text-sm text-gray-800 mb-4 relative">
                    <span class="relative px-2 bg-transparent z-10">Or</span>
                    <div class="absolute top-1/2 left-0 right-0 border-t border-gray-300/30 z-0"></div>
                </div>

                <div class="text-center text-sm">
                    <span class="text-gray-600">Don't have an account</span>
                    <a href="#" class="text-white hover:text-white font-medium ml-1">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>