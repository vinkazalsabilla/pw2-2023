<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */
$buah1 = [
  'id'=>'bh1',
  'nama' => 'pisang', 
  'color' => 'kuning',
  'stok' => '10 sisir',
  'harga' => 'Rp.12000',
  'deskripsi' => ' pisang juga memiliki sejumlah manfaat yang baik untuk kesehatan. Dalam sebuah pisang terkandung serat, kalium, vitamin B6, vitamin C, dan berbagai antioksidan serta fitonutrien yang dibutuhkan tubuh.'
];
$buah2 = [
  'id'=>'bh2',
  'nama' => 'Naga', 
  'color' => 'ungu',
  'stok' => '19 buah',
  'harga' => 'Rp.10000',
  'deskripsi' => ' Selain menurunkan kolesterol, kandungan asam lemak omega-3 dan omega-9 dalam biji buah naga merah juga dapat mengurangi risiko terjadinya penyakit jantung.'
];
$buah3 = [
  'id'=>'bh3',
  'nama' => 'melon', 
  'color' => 'hijau',
  'stok' => '14 sisir',
  'harga' => 'Rp.19000',
  'deskripsi' => ' Melon (Cucumis melo L.) merupakan tanaman buah termasuk famili Cucurbitaceae, banyak yang menyebutkan buah melon berasal dari Lembah Panas Persia atau daerah Mediterania yang merupakan perbatasan antara Asia Barat dengan Eropa dan Afrika.'
];
$buah4 = [
  'id'=>'bh4',
  'nama' => 'salak', 
  'color' => 'colat',
  'stok' => '10 buah',
  'harga' => 'Rp.19000',
  'deskripsi' => ' Salak, buah berkulit sisik berwarna coklat, mudah ditemukan di Indonesia. Salak ini mempunyai ciri khas buahnya yang empuk dan terdapat biji keras berwarna coklat di dalamnya.'
];
$buah5 = [
  'id'=>'bh1',
  'nama' => 'mangga', 
  'color' => 'kuning',
  'stok' => '19 buah',
  'harga' => 'Rp.15000',
  'deskripsi' => ' Vitamin C pada mangga juga dapat membantu tubuh menghasilkan lebih banyak sel darah putih untuk melawan penyakit, membantu sel-sel tubuh bekerja lebih efektif, dan meningkatkan pertahanan kulit.'
];

$m_data = [$buah1, $buah2, $buah3, $buah4, $buah5]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach($m_data as $data) { ?> 
        <tr>
          <td><?= $data ['id'];?></td>
          <td><?= $data ['nama'];?></td>
          <td><?= $data ['color'];?></td>
          <td><?= $data ['stok'];?></td>
          <td><?= $data ['harga'];?></td>
          <td><?= $data ['deskripsi'];?></td>
        </tr> 
        <?php 
      } 
      ?>
      </tbody>
    </table>
  </div>
</body>
</html>