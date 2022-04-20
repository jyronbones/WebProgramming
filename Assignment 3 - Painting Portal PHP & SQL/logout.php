<?php
session_start();
include("includes/config.php");
date_default_timezone_set('America/New_York');

$logout = date('Y-m-d H:i:s');
$sql = "update userlog SET logout=?, status='0' WHERE id=?";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(1, $logout, PDO::PARAM_STR);
$stmt->bindParam(2, $_SESSION['log_id'], PDO::PARAM_INT);
$stmt->execute();

session_destroy();
?>

<script language="javascript">
document.location="index.php";
</script>
