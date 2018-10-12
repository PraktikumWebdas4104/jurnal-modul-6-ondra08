<form method="POST">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="number" name="nim" length="10" required="Harus diisi" placeholder="Maksimal 10 karakter" >
			</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" length ="35" required="Harus diisi" placeholder="Maksimal 35 karakter"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td>
				<input type="radio" name="kelas" value="41-01"> 41-01&nbsp;<input type="radio" name="kelas" value="41-02"> 41-02<br>
				<input type="radio" name="kelas" value="41-03"> 41-03&nbsp;<input type="radio" name="kelas" value="41-04"> 41-04<br>
			</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="kelamin" value="Laki-Laki">Laki-Laki&nbsp;<input type="radio" name="kelamin"value="Perempuan">Perempuan</td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td><input type="checkbox" name="hobi" value="Bersepeda">Bersepeda
				<input type="checkbox" name="hobi" value="Sepak Bola">Sepak Bola
				<input type="checkbox" name="hobi" value="Membaca Buku">Membaca Buku
				<input type="checkbox" name="hobi" value="Main Game">Main Game
				<input type="checkbox" name="hobi" value="Mendengarkan Musik">Mendengarkan Musik
				<input type="checkbox" name="hobi" value="Menulis Cerita">Menulis Cerita</td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name ="fakultas">
				<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
				<option value="Fakultas Rekayasa Industri">Fakultas Rekayasa Industri</option>
				<option value="Fakultas Ekonomi Bisnis">Fakultas Ekonomi Bisnis</option>
				<option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option>
				<option value="Fakultas Komunikasi Bisnis">Fakultas Komunikasi Bisnis</option>
				<option value="Fakultas Teknik Elektro">Fakultas Teknik Elektro</option>
			</select></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat">Masukkan alamat...</textarea></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password" length ="5" required="Harus diisi" placeholder="Harus 5 karakter"></td>
		</tr>
		<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
		<tr>
			<td><input type="submit" name="submit" value="Daftar"></td>
		</tr>
	</table>
</form>

<?php 

	if(isset($_POST['submit'])){
		include 'koneksi.php';
			

			

		

	}


 ?>