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
    </header>

    <div class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.670178023487!2d117.1301725!3d-0.4981135!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67f018216349f%3A0x484ae9f80911fb0b!2zMMKwMjknNTEuNyJTIDExN8KwMDcnNDUuNiJF!5e0!3m2!1sid!2sid!4v1664186873234!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home" id="home"></i>
                    <span>
                        <h5> Jalan P Antasari Gg. Nusa Indah </h5>
                        <p> Samarinda, Kalimantan Timur</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5> 0858-8308-9058 </h5>
                        <p> Tidak ada toko offline </p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        <h5> jryfitri@gmail.com </h5>
                        <p> ini email saya ^^^ </p>
                    </span>
                </div>
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