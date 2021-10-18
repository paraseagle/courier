<?php
session_start();
unset($_SESSION['cid']);
echo"<script>
window.location='../admin.php';</script>;"
?>