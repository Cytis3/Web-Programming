<?php
    #1. Meng-koneksikan PHP ke MySQL
    include("../koneksi.php");

    #2. Mengambil Value dari Form Tambah
    $kode = $_POST['kode'];
    $gelombang = $_POST['gelombang'];
    $tgl_awal = $_POST['tgl_awal'];
    $tgl_akhir = $_POST['tgl_akhir'];

    #3. Query Insert (proses tambah data)
    $query = "INSERT INTO gelombang (kode,gelombang,tgl_awal,tgl_akhir) 
    VALUES ('$kode','$gelombang','$tgl_awal','$tgl_akhir')";

    $tambah = mysqli_query($koneksi,$query);

    #4. Jika Berhasil triggernya apa? (optional)
    if($tambah){
        header("location:index.php");
    }else{
        echo "Data Gagal ditambah";
    }
?>