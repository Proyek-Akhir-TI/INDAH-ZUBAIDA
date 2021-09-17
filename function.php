<?php
//Include file koneksi ke database
include "koneksi.php";

// Tentutan variable input
$username = $_POST['username'];
  $nama_user = $_POST['nama_user'];
  $password = md5($_POST['password']);
  $password2 = md5($_POST['password2']);


// cek dulu ketersediaan kuota registrasi
$cek_kuota = mysqli_num_rows(mysqli_query($koneksi,"SELECT * from tb_user"));

//apabila sudah kouta lebih dari 2 orang di db maka regis digagalkan

if($cek_kuota >= 2){
  echo "
      <script>
        alert('Maaf Kuota Registrasi Sudah Penuh');
        window.location = 'Registrasi.php'
      </script>
    ";
} else {

  //jika kuota masih ada, cek lagi apakah username yang akan regis sudah ada di dalam db

      $cek_username = mysqli_num_rows(mysqli_query($koneksi,"SELECT username from tb_user where username = '$_POST[username]'"));


//apabila sudah ada username di db maka regis digagalkan

if($cek_username > 0){
  echo "
      <script>
        alert('Username Sudah ada, coba yang lain');
        window.location = 'Registrasi.php'
      </script>
    ";
} else {


  //validasi password 1 dan password 2

  if($_POST['password'] == $_POST['password2']){

  

  $simpan = mysqli_query($koneksi,"INSERT into tb_user VALUES('','$nama_user','$username','$password')");
     echo "
      <script>
        alert('Pendaftaran berhasil');
        window.location = 'index.html'
      </script>
    ";
  } else {

     echo "
      <script>
        alert('Password konfirmasi tidak sama!!');
        window.location = 'Registrasi.php'
      </script>
    ";
  }


}
}

?>