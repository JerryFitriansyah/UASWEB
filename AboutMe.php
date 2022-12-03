<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEMBAKO MASJAYA</title>
    <link rel="stylesheet" href="stylesheet.css">
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
                    <li> <a href="AboutMe.php">About Me</a> </li>
                    <li> <a href="logout.php">Logout</a> </li>
                    <li> <label>
                        <input type="checkbox" class="checkbox" id="tombol">
                        <span class="check"></span>
                    </label></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="diri-saya">
        <div class="row">
            <div class="about-col">
                <h1> Halo gess tolong dibaca yaa</h1>
                <p>Saya Jerry Fitriansyah dengan NIM 2109106067 adalah mahasiswa yang terburu-buru dalam mencari kebahagiaan,
                saya telah memasuki semester 3 dan mencoba membuat dengan HTML-CSS, awalnya sih saya mau buat situs porno
                tapi masa iya seorang mahasiswa melakukan hal yang tidak bermoral.
                Dan sekarang inilah hasil dari website saya<br/> <br/> 

                Ini Biodata <br/> <br/>
                Nama : Jerry Fitriansyah <br/>
                NIM : 2109106067 <br/>
                Tempat Turu : Samarinda, 25 November 2003 <br/>
                Wanggsap : 0858-8308-9058 <br/>
                Nama Jalan : Jl. P Antasari Gg. Nusa Indah <br/>
                </p>
            </div>
            <div class="about-col">
                <img src="image/gambar diri.jpg">
            </div>
        </div>
    </div>

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