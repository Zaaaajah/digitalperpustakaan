<?php 
session_start();
require('config/fungsi.php');
$fung = new Fungsi;
if(!isset($_SESSION['data'])){
    echo "<script>";
    echo "alert(' Login Dulu!!');";
      echo "window.location.href ='index.php?page=login';";
      echo "</script>";
}
require('layout/dashboard/header.php');

if($_GET['page'] == 'admin'){
    include('auth/admin.php');
} elseif($_GET['page'] == 'petugas'){
    include('auth/petugas.php');
} elseif($_GET['page'] == 'user'){
    include('auth/user.php');
}


//kategori buku
elseif($_GET['page'] == 'kategoribuku'){
    include('auth/kategoribuku.php');
} elseif($_GET['page'] == 'viewKategori'){
    $fung->viewKategori();
}elseif ($_GET['page'] == 'postKategori'){
    $NamaKategori = $_POST ['NamaKategori'];
    $fung->tambahKategori($NamaKategori);
}elseif($_GET['page'] == 'editKategori'){
    $KategoriID = $_POST ['KategoriID'];
    $fung->editKategori($KategoriID);
}elseif($_GET['page'] == 'updateKategori'){
    $KategoriID = $_POST ['KategoriID'];
    $NamaKategori = $_POST ['NamaKategori'];
    $fung->updateKategori($KategoriID, $NamaKategori);
}elseif($_GET['page'] == 'hapusKategori'){
    $fung->hapusKategori($_GET['KategoriID']);
}
//data buku
elseif($_GET['page'] == 'databuku'){
    include('auth/databuku.php');
} elseif($_GET['page'] == 'viewbuku'){
    $fung->viewbuku();
}elseif ($_GET['page'] == 'postdatabuku') {
    $Judul = $_POST['Judul'];
    $Penulis = $_POST['Penulis'];
    $Penerbit = $_POST['Penerbit'];
    $TahunTerbit = $_POST['TahunTerbit'];
    $fung->tambahdatabuku($Judul, $Penulis, $Penerbit, $TahunTerbit);
}elseif($_GET['page'] == 'editdatabuku'){
    $BukuID = $_POST ['BukuID'];
    $Judul = $_POST ['Judul'];
    $Penulis = $_POST['Penulis'];
    $Penerbit = $_POST['Penerbit'];
    $TahunTerbit = $_POST['TahunTerbit'];
    $fung->editdatabuku($BukuID);
}elseif($_GET['page'] == 'updatedatabuku'){
    $BukuID = $_POST ['BukuID'];
    $Judul = $_POST ['Judul'];
    $Penulis = $_POST['Penulis'];
    $Penerbit = $_POST['Penerbit'];
    $TahunTerbit = $_POST['TahunTerbit'];
    $fung->updatedatabuku($BukuID, $Judul, $Penulis, $Penerbit, $TahunTerbit);
}elseif($_GET['page'] == 'hapusdatabuku'){
    $fung->hapusdatabuku($_GET['BukuID']);
}


//peminjaman
elseif($_GET['page'] == 'peminjaman'){
    include('auth/peminjaman.php');
} elseif($_GET['page'] == 'viewpeminjaman'){
    $fung->viewpeminjaman();
}elseif($_GET['page'] == 'hapuspeminjaman'){
    $fung->hapuspeminjaman($_GET['PeminjamanID']);
}




//ulasan buku
elseif($_GET['page'] == 'ulasanbuku'){
    include('auth/ulasanbuku.php');
} elseif($_GET['page'] == 'viewulasanbuku'){
    $fung->viewulasanbuku();
}elseif($_GET['page'] == 'editulasanbuku'){
    $UlasanID = $_POST ['UlasanID'];
    $UserID = $_POST ['UserID'];
    $BukuID = $_POST['BukuID'];
    $Ulasan = $_POST['Ulasan'];
    $Rating = $_POST['Rating'];
    $fung->editulasanbuku($UlasanID);
}elseif($_GET['page'] == 'updateulasanbuku'){
    $UlasanID = $_POST ['UlasanID'];
    $UserID = $_POST ['UserID'];
    $BukuID = $_POST['BukuID'];
    $Ulasan = $_POST['Ulasan'];
    $Rating = $_POST['Rating'];
    $fung->updateulasanbuku($UlasanID, $UserID, $BukuID, $Ulasan, $Rating);
}elseif($_GET['page'] == 'hapusulasanbuku'){
    $fung->hapusulasanbuku($_GET['UlasanID']);
}

require('layout/dashboard/footer.php');