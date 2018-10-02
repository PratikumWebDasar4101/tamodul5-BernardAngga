<!DOCTYPE html>
<html>
<head>
    <title>Daftar</title>
    <style type="text/css">
        th {
            text-align: left;
        }
        input[type=text] , select{
            width: 200px;
        }
    </style>
</head>
<body>
	<form action="proses_registrasi.php" method="post" enctype="multipart/form-data">
		<table>
            <tr>
                <td>Nama</td>
                <td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
                <td>NIM</td>
                <td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
                <td>Email</td>
                <td>:</td>
				<td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" value="Laki-laki">Laki-laki<br>
                    <input type="radio" name="jk" value="Perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td>Fakultas</td>
                <td>:</td>
                <td>
                    <select name="fakultas">
                        <option value="Ilmu Terapan"><b>Ilmu Terapan</b></option>
                        <option value="Rekayasa Industri"><b>Rekayasa Industri</b></option>
                        <option value="Elektro"><b>Elektro</b></option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td>
                    <select name="prodi">
                        <option value="D3 Manajemen Informatika"><b>D3 Manajemen Informatika</b></option>
                        <option value="D3 Teknik Telekomunikasi"><b>D3 Teknik Telekomunikasi</b></option>
                        <option value="D3 Teknik Komputer"><b>D3 Teknik Komputer</b></option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="hobi[]" value="Berenang"><b>Berenang</b><br>
                    <input type="checkbox" name="hobi[]" value="Menggambar"><b>Menggambar</b><br>
                    <input type="checkbox" name="hobi[]" value="Travelling"><b>Travelling</b><br>
                </td>
            </tr>
            <tr>
                <td>Upload Foto</td>
                <td>:</td>
                <td><input type="file" name="foto" id="foto"></td>
            </tr>
			<tr>
				<td><input type="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>