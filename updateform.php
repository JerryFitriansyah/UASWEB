<?php
    require 'koneksi.php';
    $id = $_GET['id'];

    $result = mysqli_query($conn, "SELECT * FROM barang WHERE id=$id");
    $pesanan = [];

    while ($row = mysqli_fetch_assoc(($result))){
        $pesanan[] = $row;
    }

    $pesan = $pesanan[0];

    if (isset($_POST['tambah'])){
        $perusahaan = $_POST["perusahaan"];
        $no_handphone = $_POST["no_handphone"];
        $merek = $_POST["merek"];
        $berat = $_POST["berat"];
        $jenis = $_POST["jenis"];
        $gambar = $_FILES["gambar"]["name"];

        $x = explode(".", $gambar);
        $extensi = strtolower(end($x));
        $gambar_baru = "$namafile.$extensi";
        $temp = $_FILES["gambar"]["tmp_name"];

        if (move_uploaded_file($temp, 'imagetambah/'. $barang ."/" . $gambar_baru)){
            $query = mysqli_query($conn, "UPDATE barang SET perusahaan = '$perusahaan', no_handphone = '$no_handphone', merek = '$merek', berat = '$berat', jenis = '$jenis', gambar = '$gambar_baru', waktu = '$waktu' WHERE id = '$id'");
            if ($query) {
                echo "
                    <script>
                        alert('Pesanan Anda Berhasil Diubah!!!');
                        document.location.href = 'hasilform.php';
                    </script>
                ";
            } else {
                echo error_log($query);
            }
        }
        else{
            echo "
                <script>
                    alert('Data Gagal Ditambahkan!!!');
                    document.location.href = 'updateform.php';
                </script>
            ";
        }
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
    <link rel="stylesheet" href="formscript.css">
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
        <h1>Silahkan Ubah Data</h1>
    </header>


    <main>
    <div class="form">
        <div class="tampilan">
            <form action="" method="post">
                <div class="isi">
                    <div class="input-box">
                        <label for="Asal-Produksi">Perusahaan Produksi: </label>
                        <input type="text" name="perusahaan" required><br><br>
                    </div>
                    <div class="input-box">
                        <label for="Nomor-Telepon">Nomor Handphone Perusahaan: </label>
                        <input type="tel" name="no_handphone" required><br><br>
                    </div>
                    <div class="input-box">
                        <label for="Merek-Produk">Merk Produk: </label>
                        <input type="text" name="merek" required><br><br>
                    </div>
                    <div class="input-box">
                        <label for="Berat">Berat per gram: </label>
                        <input type="number" name="berat" required><br><br>
                    </div>
                    <div class="input-check">
                        <input type="radio" name="jenis" value="Produk Jadi" id="radio1">
                        <input type="radio" name="jenis" value="Produk Setengah Jadi" id="radio2">
                        <span class="jenis-judul"> Jenis Produk </span>
                        <div class="category">
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="metode">Produk jadi</span>
                            </label>
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="metode">Produk setengah jadi</span>
                            </label>
                        </div>
                    </div>
                    <div class="gambar-produk">
                        <span class="gambar-barang"> Masukan Gambar Produk!! <br> </span>
                        <input type="file" name="gambar">
                    </div>
                    <button type="submit" name="tambah">Tambah</button>
                </div>
            </form>
        </div>
    </div>
    </main>

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