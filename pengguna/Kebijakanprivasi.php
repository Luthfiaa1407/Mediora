<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apotek Mediora - Kebijakan Privasi</title>
    <style>
        :root {
            --primary: #00B3B3;
            --primary-dark: #008B8B;
            --secondary: #FF6B6B;
            --light: #FFFFFF;
            --dark: #333333;
            --gray: #F5F5F5;
            --dark-gray: #777777;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgba(0, 0, 0, 0.5);
        }
        
        .privacy-popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%;
            max-width: 800px;
            max-height: 80vh;
            background-color: var(--light);
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            overflow-y: auto;
            z-index: 1000;
            padding: 25px;
        }
        
        .privacy-header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid var(--primary);
            padding-bottom: 15px;
        }
        
        .privacy-header h2 {
            color: var(--primary);
            margin: 0;
        }
        
        .privacy-content {
            margin-bottom: 25px;
            line-height: 1.6;
            color: var(--dark);
        }
        
        .privacy-content h3 {
            color: var(--primary-dark);
            margin-top: 20px;
        }
        
        .privacy-content ul {
            padding-left: 20px;
        }
        
        .privacy-content li {
            margin-bottom: 8px;
        }
        
        .privacy-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }
        
        .privacy-btn {
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .privacy-btn.accept {
            background-color: var(--primary);
            color: var(--light);
        }
        
        .privacy-btn.accept:hover {
            background-color: var(--primary-dark);
        }
        
        .privacy-btn.decline {
            background-color: var(--secondary);
            color: var(--light);
        }
        
        .privacy-btn.decline:hover {
            opacity: 0.8;
        }
        
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 999;
        }
        
        @media (max-width: 600px) {
            .privacy-popup {
                width: 95%;
                padding: 15px;
            }
            
            .privacy-buttons {
                flex-direction: column;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php if (!$privacyAccepted): ?>
        <div class="overlay"></div>
        <div class="privacy-popup">
            <div class="privacy-header">
                <h2>Kebijakan Privasi Mediora</h2>
            </div>
            
            <div class="privacy-content">
                <p>Terima kasih telah menggunakan layanan Apotek Online kami. Kami menghargai privasi Anda dan berkomitmen untuk melindungi data pribadi Anda.</p>
                
                <h3>Informasi yang Kami Kumpulkan</h3>
                <ul>
                    <li>Data pribadi (nama, alamat, nomor telepon, email)</li>
                    <li>Informasi kesehatan yang relevan untuk pemesanan obat</li>
                    <li>Data transaksi dan pembayaran</li>
                    <li>Riwayat pembelian dan konsultasi</li>
                </ul>
                
                <h3>Penggunaan Informasi</h3>
                <ul>
                    <li>Memproses pesanan dan pengiriman obat</li>
                    <li>Memberikan layanan konsultasi apoteker</li>
                    <li>Meningkatkan kualitas layanan kami</li>
                    <li>Mengirim informasi penting terkait pesanan</li>
                    <li>Memenuhi kewajiban hukum dan regulasi</li>
                </ul>
                
                <h3>Keamanan Data</h3>
                <p>Kami menggunakan teknologi enkripsi untuk melindungi data Anda dan menerapkan kebijakan akses yang ketat.</p>
                
                <h3>Persetujuan</h3>
                <p>Dengan melanjutkan, Anda menyetujui pengumpulan dan penggunaan informasi sesuai dengan kebijakan ini.</p>
            </div>
            
            <form class="privacy-buttons">
                <button type="button" onclick="window.location.href='../pengguna/Login/landingpage2.php'" class="privacy-btn accept">Saya Setuju</button>
                <button type="button" onclick="window.location.href='../php/landingpage2.php'" class="privacy-btn decline">Tidak Setuju</button>
            </form>

        </div>
    <?php endif; ?>
</body>
</html>