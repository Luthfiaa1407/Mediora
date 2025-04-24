<?php
// mediora_faq.php
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertanyaan Umum - Mediora</title>
    <style>
       header {
    background-color: #9BD8DB;
    padding: 1px;
    display: flex;
    align-items: center;
    justify-content: space-between; /* tambahkan ini untuk spasi antara kiri-kanan */
    border-bottom: 2px solid #b6e3df;
    position: fixed; /* Agar header tetap di posisi atas */
    top: 0; /* Memastikan header di atas halaman */
    left: 0;
    width: 100%; /* Agar header memenuhi lebar layar */
    z-index: 1000; /* Agar header tetap di atas konten lainnya */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Menambahkan shadow agar header lebih menonjol */
}

body {
    font-family: Arial, sans-serif;
    background-image: url('background.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    margin: 0;
    padding: 0;
}

.container {
    padding: 30px;
    text-align: center;
    margin-top: 80px; /* Memberikan ruang agar konten tidak tertutup header */
}


        header a {
            text-decoration: none;
            color: #000;
        }
        header a img{
            width: 17px;
            height: 17px;
            margin-left: 25px;
            
        }

        header img {
            width: 85px;
            height: 50px;
            margin-left: auto; /* dorong ke kanan */
        }


        .right-section {
    width: 600px; /* atau sesuaikan dengan kebutuhan */
    margin-left: auto;
    margin-right: 200px; /* jarak dari sisi kanan halaman */
    text-align: center;
}



.faq-box {
    background-image: url('faq box.jpeg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    
    border-radius: 20px;
    padding: 20px;
    max-width: 600px;
    margin: 0 auto 40px auto;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.faq-item {
    margin-bottom: 20px;
    border: none;
}

.faq-question {
    padding: 15px;
    background-color: #ffffff;
    border-radius: 10px;
    cursor: pointer;
    font-size: 16px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    list-style: none;
    text-align: left;
    position: relative; /* Menambahkan posisi relative */
    user-select: none; /* Menghindari pemilihan teks */
}

/* Menambahkan tanda panah segitiga */
.faq-question::after {
    content: "";
    position: absolute;
    right: 15px; /* Jarak dari sisi kanan */
    top: 50%;
    transform: translateY(-50%); /* Menyelaraskan tanda panah di tengah vertikal */
    border-left: 8px solid transparent;
    border-right: 8px solid transparent;
    border-top: 8px solid #000; /* Panah mengarah ke atas */
    transition: transform 0.3s ease;
}

/* Mengubah panah menjadi ke bawah ketika elemen <details> dibuka */
details[open] .faq-question::after {
    transform: translateY(-50%) rotate(360deg); /* Memutar panah 180 derajat */
    border-top: none;
    border-bottom: 8px solid #000; /* Panah mengarah ke bawah */
}



.faq-answer {
    background-color: #ffffff;
    margin-top: 10px;
    padding: 15px;
    border-radius: 10px;
    font-size: 14px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    text-align: left; 
}


        .topics {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: flex-start;
    gap: 80px;
    margin-top: 20px;
}

.topic-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100px;
    transform: none;
}

.topic {
    background-color: #F1F9FB;
    border-radius: 45%;
    padding: 15px;
    width: 136px;
    height: 80px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    transition: transform 0.2s;
    display: flex;
    align-items: center;
    justify-content: center;
}

.topic:hover {
    transform: translateY(-5px);
}

.topic img {
    width: 85px;
    height: 50px;
}

.topic-label {
    margin-top: 8px;
    font-size: 14px;
}

    </style>
</head>
<body>
    <header>
        <a href="#"><img src="panah.png" alt="panah"> Pertanyaan Umum</a>
        <img src="logo.png" alt="logo">
    </header>

    <div class="container">
    <div class="right-section">
        <h2>Website</h2>

        <div class="faq-box">
    <details class="faq-item">
        <summary class="faq-question">Apa itu Mediora?</summary>
        <div class="faq-answer">
            Mediora adalah platform layanan kesehatan online yang menyediakan berbagai produk kesehatan secara mudah dan terpercaya.
        </div>
    </details>

    <details class="faq-item">
        <summary class="faq-question">Bagaimana cara menggunakan website Mediora?</summary>
        <div class="faq-answer">
            Anda dapat membuat akun terlebih dahulu, lalu memilih layanan atau produk yang diinginkan dan mengikuti petunjuk pemesanan.
        </div>
    </details>
</div>



        <h3>Pilih topik sesuai pertanyaan anda</h3>

<!-- Baris pertama -->
<div class="topics">
    <div class="topic-container">
        <div class="topic">
            <img src="logo.png" alt="Website">
        </div>
        <div class="topic-label">Website</div>
    </div>
    <div class="topic-container">
        <div class="topic">
            <img src="keranjang.png" alt="Pemesanan">
        </div>
        <div class="topic-label">Pemesanan</div>
    </div>
    <div class="topic-container">
        <div class="topic">
            <img src="pengiriman.png" alt="Pengiriman">
        </div>
        <div class="topic-label">Pengiriman</div>
    </div>
</div>

<!-- Baris kedua -->
<div class="topics">
    <div class="topic-container">
        <div class="topic">
            <img src="pembayaran.png" alt="Pembayaran">
        </div>
        <div class="topic-label">Pembayaran</div>
    </div>
    <div class="topic-container">
        <div class="topic">
            <img src="retur.png" alt="Retur">
        </div>
        <div class="topic-label">Retur</div>
    </div>
</div>


</div>
    </div>
</body>
</html>
