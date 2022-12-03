<?php
    $conn = mysqli_connect("ftp.epizy.com", "epiz_33120297", "nfJJ8P94nYBYH", "epiz_33120297_form_barang");

    if (!$conn){
        die("Gagal Terhubung ke Database anda ".mysqli_connect_error());
    }
?>