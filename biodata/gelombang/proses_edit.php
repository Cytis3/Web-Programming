<?php
    #1. Meng-koneksikan PHP ke MySQL
    include("../koneksi.php");

    #2. Mengambil Value dari Form Tambah
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $gelombang = $_POST['gelombang'];
    $tgl_awal = $_POST['tgl_awal'];
    $tgl_akhir = $_POST['tgl_akhir'];

    
    #3. Query Update (proses edit data)
    $query = "UPDATE gelombang SET kode='$kode', gelombang='$gelombang', tgl_awal='$tgl_awal', tgl_akhir='$tgl_akhir' 
    WHERE id='$id'";
    
    $tambah = mysqli_query($koneksi,$query);

    #4. Jika Berhasil triggernya apa? (optional)
    if($tambah){
        header("location:index.php");
    }else{
        echo "Data Gagal ditambah";
    }
?>