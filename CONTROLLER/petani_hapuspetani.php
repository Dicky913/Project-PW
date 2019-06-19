<?php
include 'action_petani.php';
// menangkap apa yang di get kan oleh tombol hapus
$id = $_GET["id"];

if (hapuspetani($id) > 0) {
    echo "
            <script>
                alert('Data Berhasil Dihapus!');
                document.location.href = '../VIEW/USER/PETANI/indexpetani.php';
            </script>
        ";
} else {
    echo "
    <script>
        alert('Data Gagal Dihapus!');
        document.location.href = '../VIEW/USER/PETANI/indexpetani.php';
    </script>
";
}
