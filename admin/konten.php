<!DOCTYPE html>
<html lang="en">
<head>
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
    .konten {
      display: none;
      position: fixed;
      z-index: 50;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0,0,0,0.4);
    }
    .konten-content {
      background-color: #fefefe;
      margin: 5% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 50%;
      border-radius: 10px;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    }
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }
    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
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
      <button type="button" onclick="window.location.href='konten.php'" class="italic text-[8px] text-[#284B63] rounded">Edit Profile</button>
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

      <div class="w-full bg-[#F1F9FB] rounded-md shadow p-4 mt-6">
            <h2 class="font-semibold text-[15px] text-[#284B63] mb-4">Filter</h2>
            <div class="flex flex-wrap items-end gap-4">
              <div>
                <label class="block text-sm font-medium text-[#B3B3B3] mb-2">Pencarian</label>
                <input type="text" placeholder="Cari disini..." class="w-48 h-8 border px-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#9BD8DB] shadow-lg">
              </div>
              <div>
                <label class="block text-sm font-medium text-[#B3B3B3] mb-2">Tanggal Awal</label>
                <input type="date" class="w-48 h-8 border px-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#9BD8DB] shadow-lg">
              </div>
              <div>
                <label class="block text-sm font-medium text-[#B3B3B3] mb-2">Tanggal Akhir</label>
                <input type="date" class="w-48 h-8 border px-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#9BD8DB] shadow-lg">
              </div>
              <div>
                <label class="block text-sm font-medium text-[#B3B3B3] mb-2">Status</label>
                <select class="w-48 h-8 border border-gray-300 rounded-lg px-2 focus:outline-none focus:ring-2 focus:ring-[#9BD8DB] shadow-lg">
                  <option>---</option>
                  <option>Aktif</option>
                  <option>Non-Aktif</option>
                </select>
              </div>
              <div class="pt-2">
                <button type="button" onclick="openKonten()" class="bg-[#024F55] text-white text-[12px] px-4 py-2 rounded-lg font-medium hover:bg-[#337c84] transition duration-200">
                  Tambah Baru
                </button>
              </div>
            </div>
      </div>

      <div class="mt-6 overflow-x-auto rounded-2xl">
            <table class="w-full text-sm text-left text-gray-500">
              <thead class="text-xs text-[#051F20] uppercase bg-[#3C949E]">
                <tr>
                  <th scope="col" class="px-6 py-3">#</th>
                  <th scope="col" class="px-6 py-3">Nama Obat</th>
                  <th scope="col" class="px-6 py-3">Jenis Obat</th>
                  <th scope="col" class="px-6 py-3">Deskripsi</th>
                  <th scope="col" class="px-6 py-3">Kategori</th>
                  <th scope="col" class="px-6 py-3">Harga</th>
                  <th scope="col" class="px-6 py-3"></th>
                </tr>
              </thead>
              <tbody class="text-xs text-[#555555] uppercase bg-[#F1F9FB]">
              <tr>
                  <td class="px-8 py-6">1</td>
                  <td class="px-6 py-4">Pamol Sirup 60ml</td>
                  <td class="px-6 py-4">Swamedikasi</td>
                  <td class="px-6 py-4">Obat anak-anak penurun demam dan pereda nyeri seper...</td>
                  <td class="px-6 py-4">Obat Anak</td>
                  <td class="px-6 py-4">47.500,00</td>
                  <td class="px-6 py-4 flex gap-2">
                  </td>
                </tr>
                <tr>
                  <td class="px-8 py-6">2</td>
                  <td class="px-6 py-4">Grafadon</td>
                  <td class="px-6 py-4">Swamedikasi</td>
                  <td class="px-6 py-4">Grafadon obat penurun demam, sakit kepala, sakit gigi, dan nye...</td>
                  <td class="px-6 py-4">Demam & Flue</td>
                  <td class="px-6 py-4">4.550,00-</td>
                  <td class="px-6 py-4 flex gap-2">
                  </td>
                </tr>
                <tr>
                  <td class="px-8 py-6">3</td>
                  <td class="px-6 py-4">Cendo Hyalub</td>
                  <td class="px-6 py-4">Swamedikasi</td>
                  <td class="px-6 py-4">Obat tetes mata untuk terapi simtomatik mata kering</td>
                  <td class="px-6 py-4">Mata</td>
                  <td class="px-6 py-4">50.000,00</td>
                  <td class="px-6 py-4 flex gap-2">
                  </td>
                </tr>
              </tbody>
            </table>
      </div>
    </main>
  </div>
</div>

<div id="tambahKonten" class="konten">
  <div class="konten-content">
    <span class="close" onclick="closeKonten()">&times;</span>
    <div class="flex justify-between items-center mb-6">
      <h2 class="text-xl font-semibold text-[#284B63]">Menambahkan Konten</h2>
    </div>

    <form>
  <div class="mb-4">
    <label class="block text-sm font-medium text-[#474747] mb-2">TAMBAH OBAT</label>
    <input 
      type="text" 
      placeholder="Tuliskan Nama Obat" 
      class="w-full h-10 border px-4 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#9BD8DB] shadow-lg"
    >
  </div>

  <div class="flex flex-wrap gap-4 mb-4">
    <div class="flex-1 min-w-[200px]">
      <label class="block text-sm font-medium text-[#474747] mb-2">JENIS OBAT</label>
      <input 
        type="text" 
        placeholder="Tuliskan Jenis Obat" 
        class="w-full h-10 border px-4 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#9BD8DB] shadow-lg"
      >
    </div>
    
    <div class="flex-1 min-w-[200px]">
      <label class="block text-sm font-medium text-[#474747] mb-2">KATEGORI</label>
      <select 
        class="w-full h-10 border border-gray-300 rounded-lg px-4 focus:outline-none focus:ring-2 focus:ring-[#9BD8DB] shadow-lg"
      >
        <option value="">--- Pilih Kategori ---</option>
        <option value="Swamedikasi">Swamedikasi</option>
        <option value="Wellnes & Prevention">Wellnes & Prevention</option>
      </select>
    </div>
  </div>

  <div class="mb-4">
  <label class="block text-sm font-medium text-[#474747] mb-2">DESKRIPSI</label>
  <textarea
    class="w-full h-32 border px-4 py-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#9BD8DB] shadow-lg resize-none"
    rows="5"
  ></textarea>
</div>

<div class="flex flex-wrap gap-4 mb-4">
    <div class="flex-1 min-w-[200px]">
      <label class="block text-sm font-medium text-[#474747] mb-2">HARGA</label>
      <input 
        type="text" 
        class="w-full h-10 border px-4 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#9BD8DB] shadow-lg"
      >
    </div>
    
    <div class="flex-1 min-w-[200px]">
      <label class="block text-sm font-medium text-[#474747] mb-2">PHOTO</label>
      <input 
      type="file"
      class="w-full h-10 border border-gray-300 rounded-lg px-4 focus:outline-none focus:ring-2 focus:ring-[#9BD8DB] shadow-lg"
  >
    </div>
  </div>

  <button type="button" onclick="closeKonten()" class="bg-[#024F55] text-white text-[12px] px-4 py-2 w-full h-10 rounded-lg font-medium hover:bg-[#337c84] transition duration-200">TAMBAHKAN KONTEN</button>
</form>
<script>
  var modal = document.getElementById("tambahKonten");
  
  function openKonten() {
    modal.style.display = "block";
  }
  
  function closeKonten() {
    modal.style.display = "none";
  }
  
  window.onclick = function(event) {
    if (event.target == modal) {
      closeKonten();
    }
  }
</script>
</body>
</html>