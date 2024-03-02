<?php
require "config/koneksi.php";

//kategori buku
class Fungsi {
    public function viewKategori(){
        $cek = new Koneksi;
        $sql = "select * from kategoribuku";
        $query = mysqli_query($cek->koneksi(),$sql);
        $select = [];
        while($d = mysqli_fetch_assoc($query)){
        $select[] = $d;}
        return $select;
    }
    public function tambahKategori($NamaKategori){
        $cek = new Koneksi;
        $sql = "INSERT INTO kategoribuku VALUES (null, '$NamaKategori')" ;
        $hitung = mysqli_num_rows(mysqli_query($cek->koneksi(), "SELECT * FROM kategoribuku WHERE NamaKategori = '$NamaKategori'"));
        
        if ($hitung < 1){
            $query = mysqli_query($cek->koneksi(), $sql);
                echo "<script>";
                echo 'alert("Buku berhasil ditambahkan"); ' ;
                echo 'window.location.href = "dashboard.php?page=kategoribuku";';
                echo '</script>';
                // echo '<script>window.location="dashboard.php?page=kategoribuku"</script>';
        }else{
             echo "<script>";
             echo 'alert("Tambah Kategori Berhasil\."); ' ;
             echo 'window.location.href = "dashboard.php?page=kategoribuku";';
             echo '</script>';  
            //  echo '<script>window.location="dashboard.php?page=kategoribuku"</script>';

        }
    }
    public function editKategori($KategoriID)
    {
        $cek = new Koneksi;
        $sql = "SELECT * FROM kategoribuku WHERE KategoriID = '$KategoriID'";
        $query = mysqli_query($cek->koneksi(),$sql);
        $data = mysqli_fetch_assoc($query);

        return $data;

            echo "<script>";
            // echo 'alert("Kategori gagal ditambahkan");';
            // echo 'window.location.href = "dashboard.php?page=kategoribuku";';
            echo '</script>';
            echo '<script>window.location="dashboard.php?page=kategoribuku"</script>';

    }
    public function updateKategori($KategoriID, $NamaKategori)
    {
        $cek = new Koneksi;
        $sql = "UPDATE kategoribuku SET NamaKategori = '$NamaKategori' WHERE KategoriID='$KategoriID'";
        $query = mysqli_query($cek->koneksi(),$sql);
        if($query){
            echo "<script>";
            // echo 'alert("berhasil edit data");';
            // echo 'window.location.href = "dashboard.php?page=kategoribuku";';
            echo '</script>';
            echo '<script>window.location="dashboard.php?page=kategoribuku"</script>';

         }else{
            echo "<script>";
            // echo 'alert("berhasil edit data");';
            // echo 'window.location.href = "dashboard.php?page=kategoribuku";';
            echo '</script>';
            echo '<script>window.location="dashboard.php?page=kategoribuku"</script>';

         }
    }
        
    public function hapusKategori($KategoriID)
    {
        $cek = new Koneksi;
        $sql = "DELETE FROM kategoribuku WHERE KategoriID = '$KategoriID'";
        $query = mysqli_query($cek->koneksi(), $sql);
        
        echo "<script>";
        // echo 'alert("Kategori berhasil dihapus"); ' ;
        // echo 'window.location.href = "dashboard.php?page=kategoribuku";';
        echo '</script>';

        echo '<script>window.location="dashboard.php?page=kategoribuku"</script>';
    }



    //data buku
    public function viewbuku(){
        $cek = new Koneksi;
        $sql = "SELECT * FROM buku";
        $query = mysqli_query($cek->koneksi(),$sql);
        $select = [];
        while($d = mysqli_fetch_assoc($query)){
        $select[] = $d;}
        return $select;
    }

public function tambahdatabuku($Judul, $Penulis, $Penerbit, $TahunTerbit)
{
    $cek = new Koneksi;
    $sql = "INSERT INTO buku VALUES (null,'$Judul', '$Penulis', '$Penerbit', '$TahunTerbit')";
    // $query = mysqli_query($cek->koneksi(), $sql);
    $buku = mysqli_num_rows (mysqli_query($cek->Koneksi(), "SELECT * FROM buku WHERE Judul = '$Judul'"));

    if ($buku < 1){
        $query = mysqli_query($cek->koneksi(), $sql);
            echo "<script>";
            // echo 'alert("Buku berhasil ditambahkan"); ' ;
            // echo 'window.location.href = "dashboard.php?page=databuku";';
            echo '</script>';
            echo '<script>window.location="dashboard.php?page=databuku"</script>';

        }else{
            echo "<script>";
            // echo 'alert("Buku gagal ditambahkan"); ' ;
            // echo 'window.location.href = "dashboard.php?page=databuku";';
            echo '</script>';
            echo '<script>window.location="dashboard.php?page=databuku"</script>';


        }
    }
    public function editdatabuku($BukuID)
    {
        $cek = new Koneksi;
        $sql = "SELECT * FROM buku WHERE BukuID = '$BukuID'";
        $query = mysqli_query($cek->koneksi(),$sql);
        $data = mysqli_fetch_assoc($query);

        return $data;

            echo "<script>";
            // echo 'alert("Buku gagal ditambahkan"); ' ;
            // echo 'window.location.href = "dashboard.php?page=databuku";';
            echo '</script>';
            echo '<script>window.location="dashboard.php?page=databuku"</script>';

    }
    public function updatedatabuku($BukuID, $Judul, $Penulis, $Penerbit, $TahunTerbit)
    {
        $cek = new Koneksi;
        $sql = "UPDATE buku SET Judul = '$Judul', Penulis = '$Penulis', Penerbit = '$Penerbit', TahunTerbit = '$TahunTerbit' WHERE BukuID='$BukuID'";
        $query = mysqli_query($cek->koneksi(),$sql);
        if($query){
            echo "<script>";
            // echo 'alert("berhasil edit data");';
            // echo 'window.location.href = "dashboard.php?page=databuku";';
            echo '</script>';
            echo '<script>window.location="dashboard.php?page=databuku"</script>';

         }else{
            echo "<script>";
            // echo 'alert("berhasil edit data");';
            // echo 'window.location.href = "dashboard.php?page=databuku";';
            echo '</script>';
         }
         echo '<script>window.location="dashboard.php?page=databuku"</script>';

    }
    public function hapusdatabuku($BukuID)
    {
        $cek = new Koneksi;
        $sql = "DELETE FROM buku WHERE BukuID = '$BukuID'";
        $query = mysqli_query($cek->koneksi(), $sql);
        
        echo "<script>";
        // echo 'alert("Buku berhasil dihapus"); ' ;
        // echo 'window.location.href = "dashboard.php?page=databuku";';
        echo '</script>';

        echo '<script>window.location="dashboard.php?page=databuku"</script>';
    }




//ulasan buku


public function viewulasanbuku(){
    $cek = new Koneksi;
    $sql = "SELECT * FROM ulasanbuku";
    $query = mysqli_query($cek->koneksi(),$sql);
    $select = [];
    while($d = mysqli_fetch_assoc($query)){
    $select[] = $d;}
    return $select;
}

public function ulasanbuku($UserID,$BukuID,$Ulasan,$Rating)
{
    $cek = new Koneksi;
    $sql = "INSERT INTO ulasanbuku VALUES (null,'$UserID','$BukuID','$Ulasan','$Rating')";
    // $query = mysqli_query($cek->koneksi(), $sql);
    $ulasan = mysqli_num_rows (mysqli_query($cek->Koneksi(), "SELECT * FROM ulasanbuku WHERE UserID = '$UserID'"));

    if ($buku < 1){
        $query = mysqli_query($cek->koneksi(), $sql);
            echo "<script>";
            // echo 'alert("Buku berhasil ditambahkan"); ' ;
            // echo 'window.location.href = "dashboard.php?page=ulasanbuku";';
            echo '</script>';
            echo '<script>window.location="dashboard.php?page=ulasabuku"</script>';

        }else{
            echo "<script>";
            // echo 'alert("Buku gagal ditambahkan"); ' ;
            // echo 'window.location.href = "dashboard.php?page=ulasanbuku";';
            echo '</script>';
            echo '<script>window.location="dashboard.php?page=ulasanbuku"</script>';


        }
    }
    public function editulasanbuku($UlasanID)
    {
        $cek = new Koneksi;
        $sql = "SELECT * FROM ulasanbuku WHERE UlasanID = '$UlasanID'";
        $query = mysqli_query($cek->koneksi(),$sql);
        $data = mysqli_fetch_assoc($query);

        return $data;

            echo "<script>";
            // echo 'alert("Buku gagal ditambahkan"); ' ;
            // echo 'window.location.href = "dashboard.php?page=ulasanbuku";';
            echo '</script>';
            echo '<script>window.location="dashboard.php?page=ulasanbuku"</script>';

    }
    public function updateulasanbuku($UlasanID,$UserID,$BukuID,$Ulasan,$Rating)
    {
        $cek = new Koneksi;
        $sql = "UPDATE ulasanbuku SET UserID = '$UserID', BukuID = '$BukuID', Ulasan = '$Ulasan', Rating = '$Rating' WHERE UlasanID='$UlasanID'";
        $query = mysqli_query($cek->koneksi(),$sql);
        if($query){
            echo "<script>";
            // echo 'alert("berhasil edit ulasan");';
            // echo 'window.location.href = "dashboard.php?page=ulasanbuku";';
            echo '</script>';
            echo '<script>window.location="dashboard.php?page=ulasanbuku"</script>';

         }else{
            echo "<script>";
            // echo 'alert("berhasil edit ulasan");';
            // echo 'window.location.href = "dashboard.php?page=ulasanbuku";';
            echo '</script>';
         }
         echo '<script>window.location="dashboard.php?page=ulasanbuku"</script>';

    }
    public function hapusulasanbuku($UlasanID)
    {
        $cek = new Koneksi;
        $sql = "DELETE FROM ulasanbuku WHERE UlasanID = '$UlasanID'";
        $query = mysqli_query($cek->koneksi(), $sql);
        
        echo "<script>";
        // echo 'alert("Ulasan berhasil dihapus"); ' ;
        // echo 'window.location.href = "dashboard.php?page=ulasanbuku";';
        echo '</script>';

        echo '<script>window.location="dashboard.php?page=ulasanbuku"</script>';
    }


    //peminjaman

    public function viewpeminjaman(){
        $cek = new Koneksi;
        $sql = "SELECT * FROM peminjaman";
        $query = mysqli_query($cek->koneksi(),$sql);
        $select = [];
        while($d = mysqli_fetch_assoc($query)){
        $select[] = $d;}
        return $select;
    }
    
    public function peminjaman($UserID,$BukuID,$TanggalPeminjaman,$TanggalPengembalian,$StatusPeminjaman)
    {
        $cek = new Koneksi;
        $sql = "INSERT INTO peminjaman VALUES (null,'$UserID','$BukuID','$TanggalPeminjaman','$TanggalPengembalian','$StatusPeminjaman')";
        // $query = mysqli_query($cek->koneksi(), $sql);
        $ulasan = mysqli_num_rows (mysqli_query($cek->Koneksi(), "SELECT * FROM peminjaman WHERE UserID = '$UserID'"));
    
        if ($buku < 1){
            $query = mysqli_query($cek->koneksi(), $sql);
                echo "<script>";
                // echo 'alert("Buku berhasil ditambahkan"); ' ;
                // echo 'window.location.href = "dashboard.php?page=peminjaman";';
                echo '</script>';
                echo '<script>window.location="dashboard.php?page=peminjaman"</script>';
    
            }else{
                echo "<script>";
                // echo 'alert("Buku gagal ditambahkan"); ' ;
                // echo 'window.location.href = "dashboard.php?page=peminjaman";';
                echo '</script>';
                echo '<script>window.location="dashboard.php?page=peminjaman"</script>';
    
    
            }
        }
        public function hapuspeminjaman($PeminjamanID)
    {
        $cek = new Koneksi;
        $sql = "DELETE FROM peminjaman WHERE PeminjamanID = '$PeminjamanID'";
        $query = mysqli_query($cek->koneksi(), $sql);
        
        echo "<script>";
        // echo 'alert("peminjaman berhasil dihapus"); ' ;
        // echo 'window.location.href = "dashboard.php?page=peminjaman";';
        echo '</script>';

        echo '<script>window.location="dashboard.php?page=peminjaman"</script>';
    }

}