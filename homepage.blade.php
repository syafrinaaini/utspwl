<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shizune's Flower Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-KyZXEAg3QhqLMpG8r+Knujsl5+z0D5/fZbHo+T3q8P3dI+li2g4t06XfR6LQQQxL4Z7m3FLcyMkWQI1A9ptkmQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    body {
      background-color: #f0e68c; /* Ganti dengan kode warna kuning yang diinginkan */
    }

    nav {
      background-color: #4caf50; /* Ganti dengan kode warna hijau yang diinginkan */
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 1000;
    }

    h1 {
      text-align: center;
      margin-top: 80px; /* Sesuaikan dengan kebutuhan Anda */
      font-size: 36px; /* Sesuaikan dengan kebutuhan Anda */
      color: #333; /* Sesuaikan dengan warna teks yang diinginkan */
    }

    .container {
      margin-top: 20px; /* Sesuaikan dengan kebutuhan Anda */
    }

    .flower-box {
      text-align: center;
      padding: 20px;
      border: 1px solid #ddd;
      margin: 10px;
      background-color: #fff; /* Ganti dengan warna latar belakang yang diinginkan */
      height: 300px; /* Sesuaikan dengan kebutuhan Anda */
    }

    .flower-name {
      font-size: 18px;
      margin-top: 10px;
    }

    .flower-description {
      font-size: 14px;
      color: #555; /* Sesuaikan dengan warna teks yang diinginkan */
    }

    .arrow-down {
      font-size: 24px;
      margin-top: 10px;
      color: #333; /* Sesuaikan dengan warna panah yang diinginkan */
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-success navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Flower Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Admin</a>
      </li>
    </ul>
  </div>
</nav>

<h1>Shizune's Flower Shop</h1>

<div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="flower-box">
        <h3>Catalog Flower 1</h3>
        <p class="flower-name">Rose</p>
        <p class="flower-description">keharuman alami dan mempesona dengan berbagai jenis mawar di dunia tersedia disini.</p>
        <i class="fas fa-arrow-down arrow-down"></i>
      </div>
    </div>
    <div class="col-md-3">
      <div class="flower-box">
        <h3>Catalog Flower 2</h3>
        <p class="flower-name">Tulip</p>
        <p class="flower-description">warna warni tulip yang indah nan menawan siap mewarnai hari mu, lihat lebih banyak disini .</p>
        <i class="fas fa-arrow-down arrow-down"></i>
      </div>
    </div>
    <div class="col-md-3">
      <div class="flower-box">
        <h3>Catalog Flower 3</h3>
        <p class="flower-name">Sunflower</p>
        <p class="flower-description">berbagai jenis Bunga matahari siap mencerahkan harimu dan tersedia dari seluruh penjuru dunia ada disini cek untuk selengkapnya.</p>
        <i class="fas fa-arrow-down arrow-down"></i>
      </div>
    </div>
    <div class="col-md-3">
      <div class="flower-box">
        <h3>Catalog Flower 4</h3>
        <p class="flower-name">Lily</p>
        <p class="flower-description">berbagai jenis lyly dari seluruh penjuru dunia ada disini cek untuk selengkapnya .</p>
        <i class="fas fa-arrow-down arrow-down"></i>
      </div>
    </div>
  </div>
</div>

</body>
</html>
