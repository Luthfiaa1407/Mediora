<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Konten</title>
  <link rel="stylesheet" href="../src/output.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url('./image/image 23.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
<div class="flex min-h-screen">
  <aside class="w-64 bg-transparent shadow-lg p-4">
    <div class="flex items-center gap-2 text-xl font-bold mb-6">
      <div class="absolute top-4 left-4 w-24 h-24">
        <img src="./image/logo aja.png" alt="logo" class="w-full h-full object-contain">
      </div>
      <div class="w-2 h-4 ml-24 mt-20"></div>
      <div>
      <p class="italic text-[14px] text-[#838383]">Hai,</p>
      <h1 class="text-[21px] font-semibold">Mediora</h1>
      <button type="button" onclick="window.location.href='login.php'" class="italic text-[8px] text-[#284B63] rounded">Logout     |</button>
      <button class="italic text-[8px] text-[#284B63] rounded">Edit Profile</button>
      </div>
    </div>
    <nav class="space-y-4 mt-4">
      <button type="button" onclick="window.location.href='dashboard.php'" class="block w-full text-left font-semibold text-[#284B63] px-4 py-2 hover:bg-[#9BD8DB] rounded">Dashboard</button>
      <button class="block w-full text-left font-semibold text-[#284B63] px-4 py-2 hover:bg-[#9BD8DB] rounded">Pengelola</button>
      <button class="block w-full text-left font-semibold text-[#284B63] px-4 py-2 hover:bg-[#9BD8DB] rounded">Users</button>
      <button class="block w-full text-left font-semibold text-[#284B63] px-4 py-2 hover:bg-[#9BD8DB] rounded">Financial</button>
      <button class="block w-full text-left font-semibold text-[#284B63] px-4 py-2 hover:bg-[#9BD8DB] rounded">FAQ</button>
      <button class="block w-full text-left font-semibold text-white bg-[#3C949E] rounded px-4 py-2">Content</button>
      <button type="button" onclick="window.location.href='login.php'" class="block w-full text-left font-semibold text-[#284B63] px-4 py-2 hover:bg-[#9BD8DB] rounded">Logout</button>
    </nav>
  </aside>

  <div class="flex-1 flex flex-col">

  <header class="w-322 h-15 bg-[#9BD8DB] shadow-lg flex items-center gap-4 px-4 py-2">
    <h1 class="px-12 py-3 text-[21px] font-semibold text-[#284B63]">Konten</h1>
    <input placeholder="search..."
        class="w-200 h-8 px-2  bg-white rounded-md shadow-lg"
    >
    <div class="flex items-center gap-2">
    <div class="w-10 h-10">
      <img src="./image/image 20.png" alt="logo" class="w-full h-full rounded-full object-cover">
    </div>
    <h1 class="text-[21px] font-semibold text-[#000000]">
      Mediora
    </h1>
  </div>
  </header>

  <main class="bg-transparent py-4 px-6 mt-4">
  <h1 class="text-xl font-semibold text-[#284B63]">Mengelola Konten</h1>
  <p class="text-reguler text-[#979797] mb-6">Kelola semua isi konten web yang tersedia, jalankan operasi bila diperlukan</p>

  <div class= "w-310 h-28 bg-[#F1F9FB] rounded-md shadow p-4 mt-6">
    <h class="text-bold font-semibold text-[15px] text-[#284B63]">Filter</h>
    <div class="flex items-start gap-4">
    <div>
        <label class="block text-sm font-medium text-gray-600 mb-2">PENCARIAN</label>
            <input 
               type="text" 
                placeholder="Cari disini..." 
                class="w-50 h-8 border px-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#9BD8DB] shadow-lg">
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-600 mb-2">Tanggal</label>
            <input 
               type="text" 
                placeholder="Cari disini..." 
                class="w-50 h-8 border px-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#9BD8DB] shadow-lg">
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-600 mb-2">Tanggal</label>
            <input 
               type="text" 
                placeholder="Cari disini..." 
                class="w-50 h-8 border px-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#9BD8DB] shadow-lg">
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-600 mb-2">Status</label>
            <input 
               type="text" 
                placeholder="Cari disini..." 
                class="w-50 h-8 border px-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#9BD8DB] shadow-lg">
      </div>
      <div class="flex">
      <button type="button" onclick="window.location.href='dashboard.php'"  class="w-full bg-[#3C949E] text-white py-3 rounded-lg font-medium hover:bg-[#337c84] transition duration-200 mb-8">
        TAMBAH BARU
      </button>
      </div>
</main>
</div>

</div>
</body>
</html>