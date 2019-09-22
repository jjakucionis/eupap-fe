<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./src/assests/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./src/assests/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./src/assests/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="./src/assests/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="./src/assests/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./src/assests/plugins/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="./src/assests/plugins/jquery-ui/jquery-ui.min.css"/>
    <link rel="stylesheet" href="./src/assests/plugins/Trumbowyg-master/dist/ui/trumbowyg.min.css">
    <link rel="stylesheet" href="./src/assests/plugins/Trumbowyg-master/dist/plugins/table/ui/trumbowyg.table.css">
    <link type="text/css" rel="stylesheet" href="./src/assests/css/main.css">

</head>
<body>
<div class="loader" style="top: 0; left: 0; width: 100%; height: 100%; position: fixed; background-color: #fff; z-index: 100;"></div>
<header class="header">
    <div class="container">
        <div class="header_logo-wrap">
            <a href="/" class="header_logo header_logo--onShrink"><img src="./src/assests/img/logo_centro_shrinked.svg" alt=""></a>
            <a href="/" class="header_logo header_logo--white"><img src="./src/assests/img/eupap_logo_white.svg" alt=""></a>
        </div>
        <div class="header_menu">
            <ul class="menu">
                <li class="menu-item active">
                    <a href="/blocks-loged.php">WP1</a>
                </li>
                <li class="menu-item">
                    <a href="/blocks-loged.php">WP2</a>
                </li>
                <li class="menu-item">
                    <a href="/blocks-loged.php">WP3</a>
                </li>
                <li class="menu-item">
                    <a href="/blocks-loged.php">WP4</a>
                </li>
                <li class="menu-item">
                    <a href="/survey.php">Survey</a>
                </li>
                <li class="menu-item onlymob">
                    <a href="/create-report.php">Report</a>
                </li>
                <li class="menu-item onlymob">
                    <a href="/create-survey.php">Survey</a>
                </li>
            </ul>
            <div class="header-signin--mobile onlymob">
                <a href="/signin.php" class="sign_mobile">Sign in</a>
            </div>
        </div>
        <div class="header_menu--right flex-wrap">
            <div class="flex-wrap">
                <div class="submenu-wrap center-vertical nomob">
                    <ul class="menu">
                        <li class="menu-item has-submenu">
                            <a href="#">Create</a>
                            <ul class="submenu">
                                <li>
                                    <a href="/create-report.php">Report</a>
                                </li>
                                <li>
                                    <a href="/create-survey.php">Survey</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="header-signin nomob">
                    <a href="/signin.php" class="sign_in_btn">Sign in</a>
                </div>
                <div class="mobile-menu-btn onlymob">
                    <div class="mobile-menu-btn--round">
                        <div class="mobile-menu-btn--block first"></div>
                        <div class="mobile-menu-btn--block second"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>