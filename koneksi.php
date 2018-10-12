<?php 
error_reporting(0);
	 //include'tes.php';
	
	$host="localhost";
	$user="root";
	$pass="";
	$db="mahasiswa";
	$conn=mysqli_connect($host,$user,$pass,$db)or die("Koneksi gagal");

	if(isset($_POST['submit'])){
		$nim=$_POST['nim'];
		$nama=$_POST['nama'];
		$kelas=$_POST['kelas'];
		$kelamin=$_POST['kelamin'];
		$hobi=$_POST['hobi'];
		$fakultas=$_POST['fakultas'];
		$alamat=$_POST['alamat'];
		$password=$_POST['password'];


				if(strlen($nim)==10){
				if(strlen($nama)<=35){
						if(strlen($password)<=5){
							$sql=$conn->query("INSERT INTO `datamahasiswa`(`nim`,`nama`,`kelas`,`kelamin`,`hobi`,`fakultas`,`alamat`,`password`)VALUES(`$nim`,`$nama`,`$kelas`,`$kelamin`,`$hobi`,`$fakultas`,`$alamat`,`$password`)");
						echo"Registrasi telah berhasil";

						}else{
							echo "Gagal, password lebih dari 5 karakter";
						}
				}else{
					echo "Gagal, nama tidak boleh lebih dari 35 karakter";
				}
				
			}else{
				echo "Gagal, NIM harus 10 karakter dan harus angka";
				}
		}

			
	
?>