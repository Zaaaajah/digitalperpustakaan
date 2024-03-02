<?php
class Koneksi
{
    public function koneksi(){
        $kon = mysqli_connect('localhost','root','','digital_perpustakaan');
        return $kon;
    }
}