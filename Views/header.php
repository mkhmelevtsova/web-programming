<?php //define("SITE_HOST", "http://k503labs.ukrdomen.com/535a/Khmelevtsova/")?>
<?php define("SITE_HOST", "http://localhost:8080/m/")?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="<?=SITE_HOST;?>Scripts/jquery-3.4.1.min.js"></script>
    <script src="<?=SITE_HOST;?>Scripts/jquery.jcarousel.js"></script>
    <title>Testwork</title>
    <link rel="stylesheet" href="<?=SITE_HOST;?>Styles/home.css">
    <link rel="stylesheet" href="<?=SITE_HOST;?>Styles/patientinfo.css">
    <link rel="stylesheet" href="<?=SITE_HOST;?>Styles/redirect.css">
    <link rel="stylesheet" href="<?=SITE_HOST;?>Styles/infovars.css">
    <link rel="stylesheet" href="<?=SITE_HOST;?>Styles/file.css">
    <link rel="stylesheet" href="<?=SITE_HOST;?>Styles/xml.css">
    <link rel="stylesheet" href="<?=SITE_HOST;?>Styles/ajax.css">
    <link rel="stylesheet" href="<?=SITE_HOST;?>Styles/jqueryvalidation.css">
    <link rel="stylesheet" href="<?=SITE_HOST;?>Styles/ajaxcarousel.css">
    <link rel="stylesheet" href="<?=SITE_HOST;?>Styles/css3table.css">
    <link rel="stylesheet" href="<?=SITE_HOST;?>Styles/resize.css">
</head>

<body>
    <header>
        <a href="<?=SITE_HOST;?>index.php" id="logo-tooth"><img src="<?=SITE_HOST;?>Pictures/logohealth.png" alt="Dental health"></a>
        <div class="headbar">
            <div class="left-headbar">
                <div class="company-name">
                    <img src="<?=SITE_HOST;?>Pictures/DENTAL.png" alt="DENTAL" id="dental">
                    <img src="<?=SITE_HOST;?>Pictures/HELTH.png" alt="HEALTH" id="health">
                </div>
                <div class="company-description">
                    These innovations have served to enable us to <br>
                    better live our mission; "To build partnerships <br>
                    that improve our customers' earnings by co-managing <br>
                    their supply, equipment and practice management needs".
                </div>
                <div class="date">
                    Wednesday, October 23, 2002
                </div>
            </div>
            <div class="right-headbar">
                <div class="contact-tools">
                    <a href=""><img src="<?=SITE_HOST;?>Pictures/info.png" alt="?   !   sms"></a>
                </div>
                <div class="search-tools">
                    <p>SEARCH:</p>
                    <input type="text">
                    <a href=""><img src="<?=SITE_HOST;?>Pictures/ok.png" alt="OK"></a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="main-site">
            <div class="sidebar">
                <div class="place"></div>
                <nav class="links">
                    <ul>
                        <li> <a href="<?=SITE_HOST;?>index.php">Home</a></li>
                        <li> <a href="<?=SITE_HOST;?>patientinfo.php">Registration</a></li>
                        <li> <a href="<?=SITE_HOST;?>redirect.php">Redirect</a></li>
                        <li> <a id="animation">Animation</a></li>
                        <li> <a href="<?=SITE_HOST;?>phpvalidation.php">php Validation</a></li>
                        <li> <a href="<?=SITE_HOST;?>infovars.php">Server vars</a></li>
                        <li> <a href="<?=SITE_HOST;?>file.php">File manager</a></li>
                        <li> <a href="<?=SITE_HOST;?>xml.php">Xml</a></li>
                        <li> <a href="<?=SITE_HOST;?>ajax.php">Ajax</a></li>
                        <li> <a href="<?=SITE_HOST;?>jgueryvalidation.php">jQuery Validation</a></li>
                        <li> <a href="<?=SITE_HOST;?>ajaxcarousel.php">Ajax and jCarousel</a></li>
                        <li> <a href="<?=SITE_HOST;?>html5validation.php">HTML 5 Validation</a></li>
                        <li> <a href="<?=SITE_HOST;?>css3table.php">CSS3 Table</a></li>
                        <li> <a href="<?=SITE_HOST;?>graphic.php">Canvas graphic</a></li>
                        <li> <a href="<?=SITE_HOST;?>resize.php">Canvas graphic</a></li>
                    </ul>
                </nav>

                <div class="features">
                    <img src="<?=SITE_HOST;?>Pictures/splghtftrs.png" alt="Spotlight Features">
                </div>
                <div class="some-info">
                    <img src="<?=SITE_HOST;?>Pictures/tablets.png" alt="Product">
                    <p>
                        <b>Seminars in your area</b>
                        <br>
                        Dates, topics, locations,
                        <br>
                        & prices. Save 10% when
                        <br>
                        3 or more sign-up!
                        <br><br>
                        <b>Topics, Trends <br>Techniques</b><br>
                        Don't let your patients<br>
                        give you the brush-off.<br>
                        Increase patient<br>
                        acceptance!
                    </p>
                </div>
            </div>

            <section class="content">