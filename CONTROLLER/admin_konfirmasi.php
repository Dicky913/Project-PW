<?php
include 'action_admin.php';
// menangkap apa yang di get kan oleh tombol hapus
$id = $_GET["id"];

if (konfirmasi($id) > 0) {
    echo "
            <script>
                alert('Data Berhasil Dikonfirmasi!');
                document.location.href = '../VIEW/USER/ADMIN/view_orders.php';
            </script>
        ";
} else {
    echo "
    <script>
        alert('Data Gagal Dihapus!');
        document.location.href = '../VIEW/USER/ADMIN/view_orders.php';
    </script>
";
}
