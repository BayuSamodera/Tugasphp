<html>
<head>

<title>Daftar</title>

<style>
p.bor{border-width:solid;background-color:#cccccc;border-width:50%;}
</style>
</head>
<body>
<h1>Daftar</h1>
<form>
<table border="1" cellpadding="4" cellspacing="0">
<tr>
<td><?php echo "Nama Lengkap : "; ?></td>
<td><input type="text" name="name" size="20"></td>
</tr>
<tr>
<td><?php echo "User : "; ?></td>
<td><input type="text" name="User" size="20"></td>
</tr>
<tr>
<td><?php echo "Password : "; ?></td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td><?php echo "Confirm Password : "; ?></td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="submit">
<input type="reset" value="reset"></td>
</tr>
</table>
</form>


<?php
echo "<ul type = square>
<li>Membuat sambungan Database</li>
<li>Memilih Database</li>
<li>Membuat query</li>
<li>Menjalankan query</li>
<li>Mengambil Hasilnya</li>
<li>Memposes Hasilnya</li>";
?>

<p>query yang akan digunakan adalah : </p>
<p class="bor">Select * From Usertable Where UserName : 'input dari user'</p>

<p>query ini akan dimasukkan kedalam script menjadi :</p>
<p class="bor">$query = Select * FROM Usertable WHERE UserName = '$Login'</p>

<p>Dan dieksekusi dengan kode : </p>
<p class="bor">$Hasil=mysql_query($query);</p> 