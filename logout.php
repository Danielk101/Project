<?php

session_start();
session_unset();
session_destroy();
header("Location: ./index");
session_start();
$_SESSION['uitgelogd']="U bent uitgelogd!";
exit;
?>