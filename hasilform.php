<?php
    require 'koneksi.php';

    $result = mysqli_query($conn, "SELECT * FROM barang");
    $produk = [];

    while($row = mysqli_fetch_assoc($result)){
        $produk[] = $row;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEMBAKO MASJAYA</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="tampilkanPhp.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="image/ikon.ico">
</head>
<body>
    <header class="head">
        <nav>
            <div class="header-logo img">
                <img src="image/logo-header.png" alt=""/>
            </div>
            <div class="header-nav">
                <ul>
                    <li> <a href="index.php"> Home </a></li>
                    <li> <a href="form.php"> Input Barang </a></li>
                    <li> <a href="hasilform.php"> Lihat Barang </a></li>
                    <li> <a href="VisitMe.php">Visit Me?</a> </li>
                    <li> <a href="logout.php">Logout</a> </li>
                    <li> <label>
                        <input type="checkbox" class="checkbox" id="tombol">
                        <span class="check"></span>
                    </label></li>
                </ul>
            </div>
        </nav>
        <h1> DAFTAR PESANAN YANG TERSEDIA </h1>
        <div class="table-section">
            <table>
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> Nama </th>
                        <th> Nomor HP </th>
                        <th> Merek </th>
                        <th> Berat </th>
                        <th> Jenis </th>
                        <th> Gambar </th>
                        <th> Waktu <th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; foreach ($produk as $barang): ?>
                    <tr>
                        <td> <?php echo $i ;?></td>
                        <td> <?php echo $barang['perusahaan'] ;?></td>
                        <td> <?php echo $barang['no_handphone'] ;?></td>
                        <td> <?php echo $barang['merek'] ;?></td>
                        <td> <?php echo $barang['berat'] ;?></td>
                        <td> <?php echo $barang['jenis'] ;?></td>
                        <td> <img src="imagetambah/<?= $barang['gambar']?>" width="80" height="100"><br><?php echo $barang["gambar"]; ?></td>
                        <td> <?php echo $barang['waktu'] ;?> </td>
                        <td> 
                            <button> <a href="hapusform.php?id=<?php echo $barang["id"]; ?>" onclick="return confirm('Yakin ingin Menghapus data ini?')" role='button'><i class="fa fa-trash"></i> </a> </button>
                            <button> <a href="updateform.php?id=<?php echo $barang["id"]; ?>"> <i class="fa fa-file-text"></i> </a></button>
                        </td>
                    </tr>
                    <?php $i++; endforeach; ?>
                </tbody>
            </table>
        </div>
    </header>

    <footer class="foot">
        <h4> About Me </h4>
        <p> Saya Jerry Fitriansyah seorang mahasiswa informatika angkatan 2021 yang bukan wibu,<br/>
            sedang belajar pemrograman web walau kebanyakan nonton tutorial</p>
        <div class="icon">
            <i class="fa fa-whatsapp"> 0858-8308-9058 </i>
            <i class="fa fa-instagram"> erry.fth </i>
            <i class="fa fa-envelope-o"> jryfitri@gmail.com </i>
        </div>
        <p> @Copyright 2022 - jerryfitriansyah - Made with HTML - CSS - Javascript </p>
    </footer>
    <script>
        var tombol = document.getElementById("tombol");

        tombol.onclick = function(){
            document.body.classList.toggle("mode-gelap");
        }
    </script>
</body>
</html>