<?php 
$nama = $_POST["nama"];
$nim = $_POST["nim"];
$email = $_POST["email"];
$jenisklmn = $_POST["jk"];
$fakultas = $_POST["fakultas"];
$prodi = $_POST["prodi"];
$hobi = $_POST["hobi"];
$nama_file = $_FILES["foto"]["name"];
$nama_file_tmp = $_FOTO["foto"]["tmp_name"];
$dir = "uploads/";
$simpan = $dir . $nama_file;

$inputlagi = "<br><a href='registrasi.php'>Input Lagi</a>";
$br = "<br>";
if (strlen($nama) > 25) {
	echo "Nama tidak boleh lebih dari 25 huruf.";
	echo $inputlagi;
	echo $br;
}
if (!is_numeric($nim) || strlen((string)$nim) > 10) {
	echo "NIM harus angka dan tidak boleh lebih dari 10 digit.";
	echo $inputlagi;
	echo $br;
}
if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $email)) {
	echo "Format email anda salah!";
	echo $inputlagi;
	echo $br;
}else {
	move_uploaded_file($nama_file_tmp, $simpan);
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tampilan</title>
</head>
<body>
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $nama; ?></td>
		</tr>
		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><?php echo $nim; ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><?php echo $email; ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><?php echo $jenisklmn; ?></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><?php echo $fakultas; ?></td>
		</tr>
		<tr>
			<td>Prodi</td>
			<td>:</td>
			<td><?php echo $prodi; ?></td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td>
			<?php 
				foreach ($hobi as $value) {
					echo $value . ",";
				}
			?>
			</td>
		</tr>
		<tr>
				<img width="150px" src="uploads/<?php echo $nama_file; ?>" alt="">
			</td>
		</tr>
	</table>
</body>
</html>
<?php
}
?>