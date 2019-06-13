<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

header("Location: ../VIEW/HOME/index.php");
exit;
