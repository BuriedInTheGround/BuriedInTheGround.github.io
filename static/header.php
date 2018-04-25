<?php
    global $MAIN_COLOR, $SECONDARY_COLOR;
    $MAIN_COLOR = 'light-blue darken-1';
    $SECONDARY_COLOR = 'light-blue darken-4';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Simone Ragusa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/materialize.css" />
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="navbar-fixed">
            <nav class="<?php echo $GLOBALS['MAIN_COLOR']; ?>">
                <div class="nav-wrapper">
                    <a href="index.php?controller=HomeController&action=showHome" class="center brand-logo"><img class="responsive-img" src="images/logo-light.png" style="height: 64px;"></a>
                    <a href="#" data-target="mobile-hamburger" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="left hide-on-med-and-down">
                        <li><a href="index.php?controller=HomeController&action=showHome">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="index.php?controller=HomeController&action=showAboutMe">About Me</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <ul class="sidenav <?php echo $GLOBALS['MAIN_COLOR']; ?>" id="mobile-hamburger">
            <li><a style="color: white;" href="index.php?controller=HomeController&action=showHome">Home</a></li>
            <li><a style="color: white;" href="#">Blog</a></li>
            <li><a style="color: white;" href="index.php?controller=HomeController&action=showAboutMe">About Me</a></li>
        </ul>
    </header>

    <main>
