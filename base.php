<?php
require_once('test.php');
$con = mysqli_connect("localhost", "root", "", "nyikatbuos");

if (!$con) {
    die("Koneksi Error");
}

$query = "SELECT * FROM layanan LIMIT 6";
$result = mysqli_query($con, $query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Lato:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
    <title>NYIKATBUOS!</title>
    <link rel="icon" href="Logo.png" type="image/icon type">
    <link rel="stylesheet" href="base.css">
</head>
<body>
    
    <nav>
        <label class="logo"><img src="Logo.png" alt="Jiga Logo"></label>
        
        <ul class="bar">
            <li><a class="active" href="#home">HOME</a><li>
            <li><a href="#LAYANAN">LAYANAN</a><li>
            <li><a href="#ABOUT">ABOUT</a><li>
        </ul>
    </nav>
    <div id="banner">
        <h1>
            NYIKATBUOS!
        </h1>
        <br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <span id="LAYANAN">LAYANAN KAMI</span>
    <div id="content">
    <?php
        while ($row = mysqli_fetch_assoc($result)) {
            $categoryName = $row['jenis_layanan'];
            $categoryName2 = $row['deskripsi'];
            $urlFriendlyName = strtolower(str_replace(' ', '_', $categoryName));
            ?>
            <div class="col">
                <img id="level1" src="level1.png" alt="Level1">
                <h2><a href="<?php echo $urlFriendlyName . '.php'; ?>"><?php echo $categoryName; ?></a></h2>
            </div>

            <?php
            
        }
        ?>
    </div>
    <span id="ABOUT">TENTANG KAMI</span>
    
</body>
</html>
