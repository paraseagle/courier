<?php
session_start();
unset($_SESSION['aid']);
echo"<script>
window.location='../admin.php';</script>;"
?>