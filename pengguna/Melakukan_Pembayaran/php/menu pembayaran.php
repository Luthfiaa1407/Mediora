<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Checkout Mediora</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: url('../image/background.jpg') no-repeat center center fixed;
      background-size: cover;
      margin: 0;
      padding: 0;
    }

    .checkout-container {
      max-width: 600px;
      background-color: #f8fdfd;
      margin: 50px auto;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .checkout-header {
      display: flex;
      align-items: center;
      gap: 15px;
      margin-bottom: 20px;
    }

    .checkout-header img {
      height: 40px;
    }

    .checkout-header-title {
      font-size: 22px;
      font-weight: bold;
      color: #2a8a8d;
    }

    label {
      font-weight: bold;
      display: block;
      margin-top: 20px;
      margin-bottom: 10px;
    }

    details {
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 20px;
    }

    summary {
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
    }

    .payment {
      padding: 15px;
      background-color: #ffffff;
      border-radius: 10px;
      cursor: pointer;
      font-size: 16px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      list-style: none;
      text-align: left;
      position: relative;
      user-select: none;
    }

    .payment::after {
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

    details[open] .payment::after {
      transform: translateY(-50%) rotate(360deg);
      border-top: none;
      border-bottom: 8px solid #000;
    }

    .payment-option {
      display: flex;
      align-items: center;
      background-color: #ffffff;
      border-radius: 8px;
      padding: 10px;
      margin-top: 10px;
      gap: 10px;
    }

    .payment-option input[type="radio"] {
      transform: scale(1.2);
    }

    .payment-option img {
      height: 24px;
    }

    .payment-option span {
      font-size: 16px;
    }

    .btn-confirm {
      margin-top: 30px;
      background-color: #1c9c98;
      color: white;
      border: none;
      padding: 12px;
      width: 100%;
      border-radius: 10px;
      font-size: 16px;
      cursor: pointer;
    }

    .btn-confirm:hover {
      background-color: #157d7a;
    }
  </style>
</head>
<body>
  <div class="checkout-container">
    <div class="checkout-header">
      <img src="../image/logo.png" alt="Logo Mediora">
      <div class="checkout-header-title">Mediora Checkout</div>
    </div>

    <label>Metode pembayaran apa yang ingin anda pakai?</label>

    <details>
      <summary class="payment">E-Wallet (OVO, Dana, ShopeePay, dll)</summary>
      <div class="payment-option">
        <input type="radio" name="pembayaran" value="Dana">
        <img src="../image/dana.png" alt="Dana">
        <span>Dana</span>
      </div>
      <div class="payment-option">
        <input type="radio" name="pembayaran" value="OVO">
        <img src="../image/ovo.png" alt="OVO">
        <span>OVO</span>
      </div>
      <div class="payment-option">
        <input type="radio" name="pembayaran" value="ShopeePay">
        <img src="../image/shopeepay.png" alt="ShopeePay">
        <span>ShopeePay</span>
      </div>
      <div class="payment-option">
        <input type="radio" name="pembayaran" value="GoPay">
        <img src="../image/gopay.png" alt="GoPay">
        <span>GoPay</span>
      </div>
      <div class="payment-option">
        <input type="radio" name="pembayaran" value="LinkAja">
        <img src="../image/linkaja.png" alt="LinkAja">
        <span>LinkAja</span>
      </div>
    </details>

    <details>
      <summary class="payment">Transfer Bank</summary>
      <div class="payment-option">
        <input type="radio" name="pembayaran" value="Bank BCA">
        <img src="../image/bca.png" alt="Bank BCA">
        <span>Bank BCA</span>
      </div>
      <div class="payment-option">
        <input type="radio" name="pembayaran" value="Bank BNI">
        <img src="../image/bni.png" alt="Bank BNI">
        <span>Bank BNI</span>
      </div>
      <div class="payment-option">
        <input type="radio" name="pembayaran" value="Bank BSI">
        <img src="../image/bsi.png" alt="Bank BSI">
        <span>Bank BSI</span>
      </div>
      <div class="payment-option">
        <input type="radio" name="pembayaran" value="Bank BRI">
        <img src="../image/bri.png" alt="Bank BRI">
        <span>Bank BRI</span>
      </div>
    </details>

    <button class="btn-confirm">KONFIRMASI METODE PEMBAYARAN</button>
  </div>
</body>
</html>
