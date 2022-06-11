<?php
session_start();
session_encode();
session_destroy();
echo '<script language="javascript">alert("SUCCESS");document.location="../index.php";</script>';

?>
