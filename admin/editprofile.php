<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mediora - Edit Profile</title>
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
        .form-container {
            background-color: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
        }
        .input-field {
            transition: all 0.3s ease;
        }
        .input-field:focus {
            box-shadow: 0 0 0 3px rgba(60, 148, 158, 0.2);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-6xl">
        <div class="flex flex-col md:flex-row bg-white/80 backdrop-blur-lg rounded-xl shadow-lg overflow-hidden">
            <!-- Form Section -->
            <div class="w-full md:w-1/2 p-8">
                <h1 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Edit Profile</h1>
                
                <form method="POST" class="space-y-4">
                    <!-- Nama -->
                    <div class="space-y-1">
                        <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input 
                            type="text" 
                            placeholder="Masukkan nama lengkap" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg input-field focus:outline-none focus:border-[#3C949E] bg-white"
                        >
                    </div>

                    <!-- Email -->
                    <div class="space-y-1">
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input 
                            type="email" 
                            placeholder="Masukkan email valid" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg input-field focus:outline-none focus:border-[#3C949E] bg-white"
                        >
                    </div>

                    <!-- Username & Password -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label class="block text-sm font-medium text-gray-700">Username</label>
                            <input 
                                type="text" 
                                placeholder="Masukkan username" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg input-field focus:outline-none focus:border-[#3C949E] bg-white"
                            >
                        </div>

                        <div class="space-y-1">
                            <label class="block text-sm font-medium text-gray-700">Password</label>
                            <input 
                                type="password" 
                                placeholder="Masukkan password" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg input-field focus:outline-none focus:border-[#3C949E] bg-white"
                            >
                        </div>
                    </div>

                    <!-- Tempat & Tanggal Lahir -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label class="block text-sm font-medium text-gray-700">Tempat Lahir</label>
                            <input 
                                type="text" 
                                placeholder="Masukkan tempat lahir" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg input-field focus:outline-none focus:border-[#3C949E] bg-white"
                            >
                        </div>

                        <div class="space-y-1">
                            <label class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                            <input 
                                type="date" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg input-field focus:outline-none focus:border-[#3C949E] bg-white"
                            >
                        </div>
                    </div>

                    <!-- Gender & Photo -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg input-field focus:outline-none focus:border-[#3C949E] bg-white">
                                <option value="">Pilih jenis kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="space-y-1">
                            <label class="block text-sm font-medium text-gray-700">Foto Profil</label>
                            <input 
                                type="file"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg input-field focus:outline-none focus:border-[#3C949E] bg-white file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-[#3C949E] file:text-white hover:file:bg-[#337c84]"
                            >
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="pt-4 space-y-3">
                        <button 
                            type="button" 
                            onclick="window.location.href='editprofile.php'"  
                            class="w-full bg-[#3C949E] text-white py-3 rounded-lg font-medium hover:bg-[#337c84] transition duration-200"
                        >
                            Update Profile
                        </button>
                        <button 
                            type="button" 
                            onclick="window.location.href='dashboard.php'"  
                            class="w-full bg-[#8DE5DB] text-gray-800 py-3 rounded-lg font-medium hover:bg-[#7dcec5] transition duration-200"
                        >
                            Kembali ke Dashboard
                        </button>
                    </div>
                </form>
            </div>

            <!-- Image Section -->
            <div class="hidden md:block md:w-1/2 bg-cover bg-center relative" style="background-image: url('./image/image 20.png');">
                <div class="absolute top-4 right-4 w-20 h-20">
                    <img src="./image/logo_mediora-removebg-preview.png" alt="Logo Mediora" class="w-full h-full object-contain">
                </div>
            </div>
        </div>
    </div>
</body>
</html>