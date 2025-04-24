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
            justify-content: space-between; 
            border-bottom: 2px solid #b6e3df;
            position: fixed; 
            top: 0; 
            left: 0;
            width: 100%; 
            z-index: 1000; 
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); 
        }

body {
    font-family: Arial, sans-serif;
    background-image: url('../image/background.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: scroll;
    margin: 0;
    padding: 0;
}

.container {
    padding: 30px;
    text-align: center;
    margin-top: 80px; 
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
            margin-left: auto; 
        }


        .right-section {
    width: 600px; 
    margin-left: auto;
    margin-right: 200px; 
    text-align: center;
}



.faq-box {
    background-image: url('../image/faq box.jpeg');
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
    position: relative; 
    user-select: none; 
}


.faq-question::after {
    content: "";
    position: absolute;
    right: 15px; 
    top: 50%;
    transform: translateY(-50%); 
    border-left: 8px solid transparent;
    border-right: 8px solid transparent;
    border-top: 8px solid #000; 
    transition: transform 0.3s ease;
}


details[open] .faq-question::after {
    transform: translateY(-50%) rotate(360deg); 
    border-top: none;
    border-bottom: 8px solid #000; 
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
        <a href="#"><img src="../image/panah.png" alt="panah"> Pertanyaan Umum</a>
        <img src="../image/logo.png" alt="logo">
    </header>

    <div class="container">
    <div class="right-section">
        <h2>Website</h2>

        <div class="faq-box">
    <details class="faq-item">
        <summary class="faq-question">Apa itu Mediora?</summary>
        <div class="faq-answer">
        MEDIORA (Medicine Easy Delivery, Innovative Online Retail for All) adalah sistem informasi berbasis web yang dirancang untuk memudahkan masyarakat dalam memesan obat secara online dan mendapatkan pengiriman langsung ke alamat melalui jaringan apotek mitra di seluruh Lampung.
        </div>
    </details>

    <details class="faq-item">
        <summary class="faq-question">Bagaimana cara menggunakan website Mediora?</summary>
        <div class="faq-answer">
    Secara singkat cara menggunakan Mediora berikut:
    <ol>
        <li>Buat akun baru atau login dengan email/HP</li>
        <li>Ketik nama obat di kolom pencarian atau pilih kategori</li>
        <li>Klik “Pesan” lalu masukkan alamat</li>
        <li>Checkout dengan memilih metode pembayaran</li>
        <li>Pantau status pemesanan</li>
        <li>Chat apoteker untuk bertanya obat tertentu</li>
        <li>Berikan rating setelah obat diterima</li>
    </ol>
</div>

    </details>
</div>



        <h3>Pilih topik sesuai pertanyaan anda</h3>


<div class="topics">
    <div class="topic-container">
        <div class="topic">
            <img src="../image/logo.png" alt="Website">
        </div>
        <div class="topic-label">Website</div>
    </div>
    <div class="topic-container">
        <div class="topic">
            <img src="../image/keranjang.png" alt="Pemesanan">
        </div>
        <div class="topic-label">Pemesanan</div>
    </div>
    <div class="topic-container">
        <a href="pengiriman.php">
            <div class="topic">
                <img src="../image/pengiriman.png" alt="Pengiriman">
            </div>
        </a>
        <div class="topic-label">Pengiriman</div>
    </div>
</div>


<div class="topics">
    <div class="topic-container">
        <div class="topic">
            <img src="../image/pembayaran.png" alt="Pembayaran">
        </div>
        <div class="topic-label">Pembayaran</div>
    </div>
    <div class="topic-container">
        <div class="topic">
            <img src="../image/retur.png" alt="Retur">
        </div>
        <div class="topic-label">Retur</div>
    </div>
</div>


</div>
    </div>
</body>
</html>
