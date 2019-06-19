<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "petanidb");

function register($data)
{
    global $conn;

    $nama = $data["nama"];
    //mysqli_real_escape_string adalah memungkinkan user dapat membuat password menggunakan tanda " (petik)
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $alamat = $data["alamat"];
    $no_hp = $data["no_hp"];
    $email = $data["email"];

    //cek username sudah ada atau belum
    $cek = mysqli_query($conn, "SELECT email FROM pembeli WHERE email = '$email'");

    if (mysqli_fetch_assoc($cek)) {
        echo "<script>
                    alert('Username Telah Tersedia');
              </script>";
        return false;
    }

    //cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
                    alert('Password Tidak Sesuai');
              </script>";

        return false;
    }

    //tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO pembeli VALUES ('', '$nama', '$password', '$alamat', '$no_hp', '$email', '', '1')");
    return mysqli_affected_rows($conn);
}

function thisquery($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    //siapkan array kosong penampung data yang akan diimport dari db
    $rows  = [];
    while ($row = mysqli_fetch_array($result)) {
        //ini maksudnya agar setiap data yang diambil ke dn oleh $row akan disimpan dalam array $rows
        $rows[] = $row;
    }
    return $rows;
}

function ubah($data)
{
    global $conn;

    $id = $data["id"];
    $nama = $data["nama"];
    $password = $data["password"];
    $alamat = $data["alamat"];
    $email = $data["email"];
    $no_hp = $data["no_hp"];




    //gambar jika tidak ada perubahan pada gambar lama, hanya edit data profil
    $gambarLama = $data["gambarLama"];

    //cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }



    //query insert data
    $query = "UPDATE pembeli SET
                nama = '$nama',
                password = '$password',
                alamat = '$alamat',
                no_hp = '$no_hp',
                email = '$email',
                gambar = '$gambar',
                id_admin = '1'
            WHERE id_pembeli = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    //fungsi ini akan mengebalikan 2 data, dijelaskan diatas
    //jika return false; maka upload akan gagal

    //data diambil dari variabel superglobal $_FILES lalu untuk ["gambar"] berasal name="gambar" pada form input gambar di file tambah.php, lalu untuk nama, size, error, tmp dll itu bisa dilihat di var_dump($_FILES);
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $errorFile = $_FILES['gambar']['error'];
    $tmpFile = $_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada gambar yang diuload
    //error 4 dalam $_FILES adalah tidak ada gambar yg diupload
    if ($errorFile === 4) {
        echo "
            <script>
                alert('Tidak ada Foto yang dipilih');
            </script>
        ";
        //jika gagal upload, maka fungsinya di stop dengan return false, supaya tidak bisa upload data tanpa gambar
        return false;
    }

    //cek apakah yang diuload adalah gambar-part 1
    //buat variabel penampung ektensi gambar apa saja yang dibolehkan
    $ekstensiGambarYangDibolehkan = ['jpg', 'jpeg', 'png', 'gif'];

    //dikarenakan $_FILES untuk name menyantumkan nama file dan juga ekstensinya, maka harus dipisahkan supaya ekstensinya bisa diambil
    //fungsi di php yg bernama explode => explode (delimiter, string), digunkan untuk memecahkan sebuah string menjadi array, memecahkannya menggunakan delimiter
    //jika dalam string tersebut ketemu karakter tertentu, maka akan dipencah menjadi array
    $ekstensiGambar =  explode('.', $namaFile);
    //hasil menggunakan explode: ex= ophal.jpg maka hasilnya ['ophal', 'jpg']

    //trtolower digunakan untuk membuat text menjadi kecil, mengantisipasi extensi JPG dll, dengan strtolower maka hasilnya menjadi jpg
    //end digunakan untuk mengambil array paling akhir, mencengah adanya file seperti ophal.11.12.13.jpg, maka end array yang diambil adalah jpg karena fungsi end
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    //cek apakah yang diuload adalah gambar-part2
    //in_array mengembalikan nilai true
    // in_array($needle, $haystack) adalah fungsi dalam php untuk mencari string dalam array, needle/jarum adalah gambar yang diupload yg telah di explode, lalu haystack/jerami extensi gambar yang telah ditentukan
    // in_array jika diupload benar , jika untuk mencari ekstensi yang salah maka gunakan !in_array
    if (!in_array($ekstensiGambar, $ekstensiGambarYangDibolehkan)) {
        echo "
            <script>
                alert('Yang anda upload Bukan Gambar');
            </script>
        ";
        return false;
    }

    //cek jika ukuran terlalu besar, in this case kasi 2mb an lah
    if ($ukuranFile > 2500000) {
        echo "
            <script>
                alert('Ukuran Gambar terlalu besar');
            </script>
        ";
        return false;
    }

    //generate nama baru
    //mencegah nama foto sama tapi foto berbeda
    //akibat dari nama yang sama akan menimbulkan foto yg berbeda itu ditimpa menjadi foto baru, pdhl nama saja yg sama tetapi fotonya beda
    $namaFileBaru = uniqid();
    // var_dump($namaFileBaru); digunakan untuk mengecek kebenaran nilai random

    //diatas baru nama random saja, belum dengan ektensinya
    $namaFileBaru .= '.'; //untuk menyambukan titik stelah nama random itu
    $namaFileBaru .= $ekstensiGambar; //digabungkan dengan salah satu ektensi diatas

    //lolos pengecekan, gambar setiap diupload
    // move_uploaded_file adalah fungsi untuk memidahkan file yang sudah diupload dari tmp ke tempat tujuan
    $path = "../../IMAGE/images_pembeli/" . $namaFileBaru;
    move_uploaded_file($tmpFile, $path);

    return $namaFileBaru;
}

function ubahpassword($data)
{
    global $conn;

    $id = $data["id"];
    $password = $data["password"];
    $password_confirm = $data["password_confirm"];
    $passwordbaru = $data["passwordbaru"];
    $passwordbaru_confirm = $data["passwordbaru_confirm"];

    if ($password !== $password_confirm) {
        return false;
    }
    if ($passwordbaru !== $passwordbaru_confirm) {
        return false;
    }

    $password = $passwordbaru;

    $query = "UPDATE pembeli SET
                password = '$password',
                id_admin = '1'
            WHERE id_pembeli = $id
            ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapuspembeli($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM pembeli WHERE id_pembeli = $id");

    return mysqli_affected_rows($conn);
}
