<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=l, initial-scale=1.0">
    <title>AIMER: Cat & Coffee | Relax Your Day </title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>
<body>
    <header>
        <nav class="wraper">   
            <img class="logo" src="pictures/AimerLogo.png" alt="logo AIMER" height="60px">  
            <div>
                <ul class="nav_links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Meet Our Cats </a></li>
                    <li><a href="#">Look Our Cafe</a></li>
                    <li><a href="#book">Book a Visit</a></li>
                    <li><a href="about.html">About Me</a></li>
                </ul>
            
            </div>
        <a chref="#"><button class="contact">Contact</button></a>
        </nav>
    </header>

    <main>
        <div class="main-content">
            <div align="" class="content-img"><img src="pictures/cat2.png" ><img src="" alt=""></div>
            <div class="main-text"><h2>AIMER :<br>Cat & Coffee</h2>
                <p class="sub-content">-Relax Your Day-<br>"Grab a drink and Hang out with our adorable furry"</p></div>   
        </div>  
        <button class="button2" id='btn'>Look Our Cafe</button>  


        
        <div id="book" class="sec-content-form">
            <h2>BOOK A VISIT</h2>
            <form action="hasil.php" method="post">
           <!-- form field di sini -->
           <table>
            <div class="formgrup1">
                    <label>Nama Pengunjung:</label>
                    <input type="text" name="nama" placeholder="Nama lengkap..." />
            </div>
            <div class="formgrup1">
                    <label>ID Pengunjung:</label>
                    <input type="number" name="ID" placeholder="ID Pengunjung..." />
            </div>
            <div class="formgrup1">
                <label>Email:</label>
                <input type="email" name="email" placeholder="Email Pengunjung..." />
            </div>
            <div  class="formgrup2">
                    <label>Tanggal Booking:</label>
                    <input type="date" name="tanggal_booking" />
            </div>
            <div class="formgrup3">
                    <label>Jenis kelamin:</label>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan</label>
            </div>
            <div class="formgrup">
                <input type="submit" name="submit" class="submit" value="Book a Visit" />
            </div>

     
           </table>
           </form>
           </div>



        <div class="sec-content">
            <h2>DONATE ME!</h2>
        <section class="section-card">
            <div class="card card-1">
                <img src="pictures/cat3.png" class="card_img">
                <div class="card-details">
                    <ul>
                        <li>All you need is love and a cat.</li>
                        <li>Not all angels have wings. Sometimes they have whiskers.</li>
                    </ul>
                </div>
                <a href="#popup" class="btn1">Donate Me</a>
            </div>
            <div class="card card-2">
                <img src="pictures/cat4.jpg" class="card_img">
                <div class="card-details">
                    <ul>
                        <li>All you need is love and a cat.</li>
                        <li>Not all angels have wings. Sometimes they have whiskers.</li>
                    </ul>
                </div>
                <a href="#popup" class="btn1">Donate Me</a>
            </div>
            <div class="card card-3">
                <img src="pictures/cat5.png" class="card_img">
                <div class="card-details">
                    <ul>
                        <li>All you need is love and a cat.</li>
                        <li>Not all angels have wings. Sometimes they have whiskers.</li>

                    </ul>
                </div>
                <a href="#popup" class="btn1">Donate Me</a>
            </div>

        </section>
        </div>
        <div class="popup" id="popup">
            <div class="popup_content">
                <div class="popup_img">
                    <img src="pictures/cat3.png">
                    <img src="pictures/cat4.jpg">
                    <img src="pictures/cat5.png">
                </div>
                <div class="popup_header">
                    <h1>Start Donate Our furry</h1>
                    <h2>Plese read these terms before Donate</h2>
                </div>
                <a href="#" class="btn1 popup_btn">Donate Now</a>
            </div>
        </div>
    </main>

    <div class="footer">
        <ul class="footer-me">
            <ul class="footer-logo">
                <div align="center" class="image"><img src="pictures/AimerLogo.png" alt="AimerLogo" height="50px"></div>
                <div class="footer-owner"> ?? 2022 AIMER Cat & Coffee Co. Ltd.</div>
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

    <script src="main.js"></script>
</body>
</html>
