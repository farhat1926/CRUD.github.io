<?php
if(!isset ($_GET["nim"]) || 
    ($_GET["nama"])  
    ($_GET["kode_prodi"])
    ($_GET["status_aktivitas"])){
    header("Location:get.php");
    exit;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PAGI</h1>
    <ul>
        <li><?= $_GET ["nim"];?></li>
        <li><?= $_GET ["nama"];?></li>
        <li><?= $_GET ["kode_prodi"];?></li>
        <li><?= $_GET ["status_aktivitas"];?></li>
    </ul>
</body>
</html>