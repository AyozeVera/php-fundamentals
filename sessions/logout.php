<?php
session_start();
session_destroy();
$_SESSION = [];
//also must delete de cookie
header('Location: login.php');
