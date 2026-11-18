<?php
session_start();

// TODO 4: remove everything from the session and end it.
$_SESSION = [];
session_destroy();

// this deletes the cookie by resetting the time by an hour.
setcookie(session_name(), '', time() - 3600, '/');

header('Location: login.php');
exit;
