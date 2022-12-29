<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
<?php 
// isi nama host, username mysql, dan password mysql anda
$host = mysql_connect("localhost","root","xxx");
 
if($host){
	echo "koneksi host berhasil.<br/>";
}else{
	echo "koneksi gagal.<br/>";
}
// isikan dengan nama database yang akan di hubungkan
$db = mysql_select_db("");
 
if($db){
	echo "koneksi database berhasil.";
}else{
	echo "koneksi database gagal.";
}
?>
    
<?php
 
interface Musician {
    public function bermainMusik();
}
interface Lecturer{
    public function MengajarMahasiswa();
}
Class Human implements Musician, Lecturer
{
    public function breath() {
       echo "Bernapas dengan paru-paru <br/>" ;
    }// put y
    public function sleep(){
        echo "tidur pada malam hari <br/>";
    }
    public function eat (){
        echo "memakan segalanya <br/>";
    }
    public function bermainMusik() {
        echo "Bermain Gitar di depan Rumah <br/>";
    }
    public function MengajarMahasiswa() {
       echo "Mengajar di Kampus Ketintang UNESA <br/>"; 
    }

}
$icha = new Human();
$icha ->breath();
        
?>
