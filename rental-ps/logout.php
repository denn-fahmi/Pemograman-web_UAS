<?php
session_start();
session_unset();
session_destroy();

// Redirect ke halaman login lewat index.php
header("Location: index.php?url=login");
exit();