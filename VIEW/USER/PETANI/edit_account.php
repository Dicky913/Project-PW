<?php
include '../../../CONTROLLER/action_petani.php';
session_start();

//jika belum login, maka session["login] belum terbentuk dan tidak boleh masuk ke index
if (!isset($_SESSION["login"])) {
	header("Location: login_petani.php");
	exit;
}

//untuk ubah data pake dibawah ini
//ambil data di URL
$id = $_SESSION['id'];
//query data mahasiswa berdasarkan idnya
$data = thisquery("SELECT * FROM petani WHERE id_petani = $id")[0];

//kenapa adad [0] di akhir query? karena stlah di ambil datanya disimpan dalam array kosong($rows) makanya harus gitu

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
	//cek apakah data berhasil diubah atau tidak
	//jika di var_dump() mysqli_affected_rows hanya meng-outpukan kan 1 jika ada baris yg berubah(berhasil) dan -1 jika gagal
	if (ubah($_POST) > 0) {
		//karena difunction yg menjadi returnnya adalah mysqli_affected_rows maka disini hanya di cek saja nilainya berapa
		echo "
            <script>
                alert('Data Berhasil Diubah');
                document.location.href = 'indexpetani.php';
            </script>
        ";
	} else {
		echo "
            <script>
                alert('Gagal');
                document.location.href = 'indexpetani.php';
            </script>
        ";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Edit_account</title>
	<link rel="stylesheet" href="../../CSS/main.css">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<style>
		.tubuh {
			width: 100%;
			height: 400px;
		}
	</style>
</head>

<body>

	<div class="subnavbar">
		<div class="logo">

		</div>
		<a class="btn">
			<span></span>
			<span></span>
			<span></span>
		</a>
		<div class="menu">
			<a href="indexpetani.php">Home</a>
			<i class="fas fa-home"></i>
			<a href="../../../CONTROLLER/logout.php">Logout</a>
			<i class="fas fa-sign-in-alt"></i>
		</div>
	</div>
	<div class="navbar">
		<a class="btn">
			<span></span>
			<span></span>
			<span></span>
		</a>

		<div class="menu">
			<a href="profile.php">Profil</a>
			<a href="my_store.php">My Store</a>
			<a href="edit_account.php">Edit Account</a>
			<a href="change_pass.php">Change Password</a>
			<a href="delete_account.php">Delete Account</a>
		</div>
	</div>
	<div class="tubuh">
		<br>



		<form action="" method="post" enctype="multipart/form-data">

			<table align="center" width="750">

				<tr align="center">
					<td colspan="6">
						<h2>Update your Account</h2>
					</td>
				</tr>
				<tr>
					<input type="hidden" name="id" value="<?php echo $data["id_petani"] ?>">
				</tr>
				<tr>
					<td align="right">Seller Name:</td>
					<td><input type="text" name="nama" id="nama" required value="<?php echo $data["nama"] ?>"></td>
				</tr>

				<tr>
					<td align="right">Seller Address:</td>
					<td><input type="text" name="alamat" id="alamat" required value="<?php echo $data["alamat"] ?>"></td>
				</tr>

				<tr>
					<td align="right">Seller Email:</td>
					<td><input type="text" name="email" id="email" required value="<?php echo $data["email"] ?>"></td>
				</tr>

				<tr>
					<td><input type="hidden" name="password" id="password" required value="<?php echo $data["password"] ?>"></td>
				</tr>

				<tr>
					<td align="right">Seller Image:</td>
					<td>
						<input type="hidden" name="gambarLama" value="<?php echo $data["gambar"] ?>">
						<img src="../../IMAGE/images_petani/<?php echo $data["gambar"] ?>" alt="" width="120">
						<input type="file" name="gambar" id="gambar">
					</td>
				</tr>

				<tr>
					<td align="right">Seller Contact:</td>
					<td><input type="text" name="no_hp" id="no_hp" required value="<?php echo $data["no_hp"] ?>"></td>
				</tr>




				<tr align=" center">
					<td colspan="6"><input type="submit" name="submit" value="Update Account" /></td>
				</tr>



			</table>

		</form>


	</div>
	<!-- <div class="footer" align="center">
		<table width=100%>
			<tr>

				<td align="center">
					<p id="lol" font></p>
					<script>
						function Person(first) {
							this.firstName = first;
						}
						var orang1 = new Person("KAK EKA");
						var orang2 = new Person("DICKY");
						var orang3 = new Person("OPHAL");

						document.getElementById("lol").innerHTML =
							"Copyright &copy; 2014 " + orang1.firstName + " " + orang2.firstName + " And " + orang3.firstName;
					</script>
				</td>

			</tr>
		</table>

	</div> -->
</body>

</html>