<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Form</title>
    <link rel="stylesheet" href="hasil.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>
<body>
    <header class="wraper">
        <img class="logo" src="pictures/AimerLogo.png" alt="logo AIMER" height="60px">  
        <div>
            <ul class="nav_links">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Meet Our Cats </a></li>
                <li><a href="#">Look Our Cafe</a></li>
                <li><a href="#">Book a Visit</a></li>
                <li><a href="about.html">About Me</a></li>
            </ul>
        </div>
    </header>
    <div class="container">
        <div class="main-content">
            <div class="content-me">Booked List</div>
    </div>
    <div class="main-content">
        <div class="content">
            <table>
            <div>
                <p>Nama Pengunjung : <?php echo $_POST['nama']; ?></p>
            </div>
            <div>
                <p>ID Pengunjung : <?php echo $_POST['ID']; ?></p>
            </div>
            <div>
                <p>Email Pengunjung : <?php echo $_POST['email']; ?></p>
            </div>
            <div>
                <p>Gender Pengunjung : <?php echo $_POST['jenis_kelamin']; ?></p>
            </div>
            <div>
                <p>Tanggal booking Pengunjung : <?php echo $_POST["tanggal_booking"]; ?></p>
            </div>
            </table>
        </div>
        </div>
    </div>
    <div class="footer">
        <ul class="footer-me">
            <ul class="footer-logo">
                <div align="center" class="image"><img src="pictures/AimerLogo.png" alt="AimerLogo" height="50px"></div>
                <div class="footer-owner"> © 2022 AIMER Cat & Coffee Co. Ltd.</div>
            </ul>
            <ul class="footer-me1">
                <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i>   Instagram</a></li>
                <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i>   Facebook</a></li>
                <li><a href="#" title="youtube"><i class="fa fa-youtube"></i>   YouTube</a></li>
            </ul>
            <button class="gelap" onclick="ubahwarna()">Change Dark Mode</button>
            <button class="terang" onclick="ubahwarna()">Change Light Mode</button>
        </ul>
    </div>
    <div class="footer-copyright">
        Copyright &copy; 2022 Designed by Adlina Safa Sephia Putri. All rights reserved. AIMER | Cat & Coffee. co.Ltd.
    </div>
</body>
</html>