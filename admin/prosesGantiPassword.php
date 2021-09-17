<?php

include "../koneksi.php";

session_start();


$dp = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM tb_user where id_user = '$_SESSION[id_user]'"));


$pass_baru = md5($_POST['pass_baru']);
$pass_lama = md5($_POST['pass_lama']);


	if($pass_lama == $dp['password']){
		if($_POST['pass_baru']== $_POST['pass_baru1']){
		mysqli_query($koneksi,"UPDATE tb_user set password = '$pass_baru' where id_user = '$_SESSION[id_user]'");

		echo "
        <script>
        window.alert('Password berhasil diganti !!')
        </script>
      ";

      echo "
        <meta http-equiv='refresh' content ='0; url=beranda.php?hal=dashboard'>
      ";}
      	else{
      		echo "
		        <script>
		        window.alert('Password baru tidak  sama !!')
		        </script>
		      ";


		      echo "
		        <meta http-equiv='refresh' content ='0; url=beranda.php?hal=GantiPass'>
		      ";  

      	}





	}else{
			echo "
		        <script>
		        window.alert('Password Lama tidak  sama !!')
		        </script>
		      ";


		      echo "
		        <meta http-equiv='refresh' content ='0; url=beranda.php?hal=GantiPassword'>
		      ";  
	}

		
		

?>