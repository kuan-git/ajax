<?php

include_once "base.php";

$uni_id=$_GET['uni_id'];
$sql="select * form students where uni_id='$uni_id'";

$stu=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

echo json_encode($stu);
?>