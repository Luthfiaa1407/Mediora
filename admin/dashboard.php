<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
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
      <button class="block w-full text-left font-semibold text-white bg-[#3C949E] rounded px-4 py-2">Dashboard</button>
      <button class="block w-full text-left font-semibold text-[#284B63] px-4 py-2 hover:bg-[#9BD8DB] rounded">Pengelola</button>
      <button class="block w-full text-left font-semibold text-[#284B63] px-4 py-2 hover:bg-[#9BD8DB] rounded">Users</button>
      <button class="block w-full text-left font-semibold text-[#284B63] px-4 py-2 hover:bg-[#9BD8DB] rounded">Financial</button>
      <button class="block w-full text-left font-semibold text-[#284B63] px-4 py-2 hover:bg-[#9BD8DB] rounded">FAQ</button>
      <button type="button" onclick="window.location.href='konten.php'" class="block w-full text-left font-semibold text-[#284B63] px-4 py-2 hover:bg-[#9BD8DB] rounded">Content</button>
      <button type="button" onclick="window.location.href='login.php'" class="block w-full text-left font-semibold text-[#284B63] px-4 py-2 hover:bg-[#9BD8DB] rounded">Logout</button>
    </nav>
  </aside>

  <header class="w-356 h-15 bg-[#9BD8DB] shadow-lg flex items-center gap-4 px-4 py-2">
    <h1 class="px-12 py-3 text-[21px] font-semibold text-[#284B63]">Dashboard</h1>
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
  
</div>
</body>
</html>