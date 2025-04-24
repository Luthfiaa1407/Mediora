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
        <div class="w-full max-w-4xl flex bg-white/80 backdrop-blur-lg rounded-xl shadow-lg overflow-hidden">
            <div class="w-1/2 p-6">
                <form method="POST">
                    <div class="mb-4 text-left shadow-lg">
                        <label class="block text-sm font-medium text-gray-600 mb-2">NAMA</label>
                        <input 
                            type="text" 
                            placeholder="Type admin full name" 
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"
                        >
                    </div>

                    <div class="mb-6 text-left shadow-lg">
                        <label class="block text-sm font-medium text-gray-600 mb-2">EMAIL</label>
                        <input 
                            type="text" 
                            placeholder="Type a valid email" 
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"
                        >
                    </div>

                    <div class="flex flex-wrap gap-4 mb-4">
                      <div class="flex-1 min-w-[200px]">
                      <label class="block text-sm font-medium text-[#474747] mb-2">USERNAME</label>
                      <input 
                      type="text" 
                      placeholder="Type username" 
                      class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                    </div>

                    <div class="flex-1 min-w-[200px]">
                      <label class="block text-sm font-medium text-[#474747] mb-2">PASSWORD</label>
                      <input 
                      type="password" 
                      placeholder="Type password" 
                      class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                    </div>
                </div>

                <div class="flex flex-wrap gap-4 mb-4">
                      <div class="flex-1 min-w-[200px]">
                      <label class="block text-sm font-medium text-[#474747] mb-2">TEMPAT LAHIR</label>
                      <input 
                      type="text" 
                      placeholder="Type birthplace" 
                      class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                    </div>

                    <div class="flex-1 min-w-[200px]">
                      <label class="block text-sm font-medium text-[#474747] mb-2">TANGGAL LAHIR</label>
                      <input 
                      type="date" 
                      class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                    </div>
                </div>

                <div class="flex flex-wrap gap-4 mb-4">
                      <div class="flex-1 min-w-[200px]">
                      <label class="block text-sm font-medium text-[#474747] mb-2">GENDER</label>
                      <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                      <option value="">---</option>
                      <option value="Swamedikasi">Laki-Laki</option>
                      <option value="Wellnes & Prevention">Perempuan</option>
                       </select>
                    </div>

                    <div class="flex-1 min-w-[200px]">
                    <label class="block text-sm font-medium text-[#474747] mb-2">PHOTO</label>
                     <input 
                    type="file"
                    class= "w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                </div>
                </div>


                <button type="button" onclick="window.location.href='editprofile.php'"  class="w-full bg-[#3C949E] text-white py-3 rounded-lg font-medium hover:bg-[#337c84] transition duration-200 mb-8">UPDATE</button>
                <button type="button" onclick="window.location.href='dashboard.php'"  class="w-full bg-[#8DE5DB] text-black py-3 rounded-lg font-medium hover:bg-[#337c84] transition duration-200 mb-8">KEMBALI</button>

                </form>
            </div>

            <!-- Right side - Image -->
            <div class="w-1/2 bg-cover bg-center" style="background-image: url('./image/image 20.png');">
                <div class="absolute top-1 right-8 w-24 h-24">
                    <img src="./image/logo_mediora-removebg-preview.png" alt="logo" class="w-full h-full object-contain">
                </div>
            </div>
        </div>
    </div>
</body>
</html>