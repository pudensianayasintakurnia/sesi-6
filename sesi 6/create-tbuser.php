<?php
    include("konfigurasi.php");

    $s_db = "CREATE TABLE tbUSER(
         id int auto_increment primary key,
         name varchar(35),
         email varchar(255),
         username varchar(10),
         passkey varchar(255),
         iduser varchar(255)
    );";
    echo "SQL : ".$s_db."<br>";

    //koneksi ke DBMS Mysql

   $koneksi = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);
   if($koneksi){
    echo "koneksi ke DBMS mysql Sukses<br>";
    $hsl = mysqli_query($koneksi, $s_db);
    if($hsl) {
        echo "Membuat Tabel tbUSER sukses <br>";
   }else{
    echo "Membuat Tabel tbUSER Gagal<br>";
   }
    }else{
        echo "koneksi ke DBMS mysql Gagal<br>";
    }