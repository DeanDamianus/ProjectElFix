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
    <link rel="icon" href="images/Logo.png" type="image/icon type">
    <link rel="stylesheet" href="base.css">
</head>
<body>
    <nav>
        <label class="logo"><img src="Logo.png" alt="NYIKATBUOS!"></label>
        
        <ul class="bar">
            <li><a class="active" href="#home">HOME</a></li>
            <li><a href="#LAYANAN">LAYANAN</a></li>
            <li><a href="#logofoot">ABOUT</a></li>

        </ul>
    </nav>
    <div class="parallax-banner">
        <h1>
            NYIKATBUOS!
        </h1>
        <br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <div>
        <span id="LAYANAN">LAYANAN KAMI</span>

        <div id="content">
        <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $categoryName = $row['jenis_layanan'];
                $categoryName2 = $row['deskripsi'];
                $urlFriendlyName = strtolower(str_replace(' ', '_', $categoryName));
                ?>
                <div class="col">
                    <img id="level1" src=<?php echo $urlFriendlyName . '.png'; ?> alt="Level1">
                    <h2 id = "kategori"><a href="<?php echo $urlFriendlyName . '.php'; ?>"><?php echo $categoryName; ?></a></h2>
                    <span id="desc"><?php echo $categoryName2; ?></span>
                </div>

                <?php 
            }
            ?>
        </div>
    </div>
    

<footer class="footer-distributed">

      <div class="footer-left">

      <label id="logofoot"><img src="Logo.png" alt="NYIKATBUOS!"></label>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Jalan Kepuh GK III NO.890, RT.48 /RW 12</span>Klitren Gondokusuman</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+62882-3971-4024 </p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">mikaelrajasa05@gmail.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>Kami merupakan jasa perawatan sepatu di Yogyakarta berbasis media sosial yang telah berdiri selama lebih dari 3 tahun.</span>
        </p>

        <div class="footer-icons">
    
  </div>

      </div>

    </footer>

        </span>
    <script>
        document.addEventListener('scroll', function () {
            const scrollPosition = window.scrollY;
            const parallaxBanner = document.querySelector('.parallax-banner');
            const contentSection = document.getElementById('content');
            parallaxBanner.style.backgroundPositionY = -scrollPosition * 0.5 + 'px';
            contentSection.style.backgroundPositionY = -scrollPosition * 0.3 + 'px';
        });
    </script>


</body>
</html>
