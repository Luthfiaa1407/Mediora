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
        header {
            background-color: #9BD8DB;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between; /* tambahkan ini untuk spasi antara kiri-kanan */
            border-bottom: 2px solid #b6e3df;
        }

        header a {
            text-decoration: none;
            color: #000;
        }

        header img {
            width: 85px;
            height: 50px;
            margin-left: auto; /* dorong ke kanan */
        }


        .container {
            padding: 30px;
            text-align: center;
        }
        .right-section {
    width: 600px; /* atau sesuaikan dengan kebutuhan */
    margin-left: auto;
    margin-right: 200px; /* jarak dari sisi kanan halaman */
    text-align: center;
}



        .faq-box {
            background: linear-gradient(to right, #b2e2df, #a3dcd8);
            border-radius: 20px;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto 40px auto;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transform: none;
        
        }
        .faq-box select {
            width: 90%;
            padding: 10px;
            border-radius: 8px;
            margin: 10px auto;
            font-size: 16px;
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
        <a href="#">⬅ Pertanyaan Umum</a>
        <img src="logo.png" alt="logo">
    </header>

    <div class="container">
    <div class="right-section">
        <h2>Pengiriman</h2>

        <div class="faq-box">
            <select>
                <option selected disabled>Apa itu Mediora ?</option>
                <option>Mediora adalah platform layanan kesehatan online...</option>
            </select>
            <select>
                <option selected disabled>Bagaimana cara menggunakan website Mediora ?</option>
                <option>Anda dapat mulai dengan membuat akun, lalu memilih layanan yang diinginkan...</option>
            </select>
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
