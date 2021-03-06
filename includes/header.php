<?php include "config.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <script src="https://use.fontawesome.com/c7ba93ac29.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
    <sript src="js/script.js"></sript>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="css/tables.css" />
</head>

<body>
    <!-- A wrapper can be used to contain the web page -->
    <div id="wrapper">
    <header>
        <h1>Psychology Report <br /> Will Fisher</h1>
        <nav>
            <div id="cssmenu" class="align-center">
                <ul>
                    <?=makeLinks($nav1)?>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Start Left Column-->   
    <section>
        <h2 class="pageID"><?=$PageID?></h2>