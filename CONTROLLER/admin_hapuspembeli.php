<?php
include 'action_admin.php';
// menangkap apa yang di get kan oleh tombol hapus
$id = $_GET["id"];

if (hapuspembeli($id) > 0) {
    echo "
            <script>
                alert('Data Berhasil Dihapus!');
                document.location.href = '../VIEW/USER/ADMIN/index.php';
            </script>
        ";
} else {
    echo "
    <script>
        alert('Data Gagal Dihapus!');
        document.location.href = '../VIEW/USER/ADMIN/index.php';
    </script>
";
}
