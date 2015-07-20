<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $data['title'] . ' - ' . SITETITLE ?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Nerd, Entertainment, Research and Design Talks.">

    <link rel="stylesheet" href="<?= URL::STYLES('bootstrap.min') ?>">
    <link rel="stylesheet" href="<?= URL::STYLES('style') ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700">

</head>
<body>


<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <a class="navbar-brand" href="<?= DIR ?>">N.E.R.D.</a>
        </div>
        <form class="navbar-form navbar-right form-search" role="search" action="<?= DIR ?>talks/search/" method="GET">
            <div class="form-group">
                <div class="input-group">
                    <input class="form-control" type="search" name="q" placeholder="Suchbegriff">
                  <span class="input-group-btn">
                     <button type="submit" class="btn btn-default">Search</button>
                  </span>
                </div>
                <!-- /input-group -->
            </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?= DIR ?>talks/add">new <strong>Talk</strong></a></li>
        </ul>
    </div>
</nav>


<div class="jumbotron">

    <div class="container">

        <div class="row">
            <p>Nerd, Entertainment, Research and Design Talks at the Quality and Usability Lab, Technische Universi&auml;t
                 Berlin.</p>
        </div>

    </div>

</div>

<?php
if (sizeof($data['next_talk'])) {
    $talk = $data['next_talk'];

    ?>

    <div class="jumbotron" id="nextTalk" style="background-image: url(<?php echo $talk['image'] ?>)">

        <div class="container-fluid">
            <div class="container" >
                <div class="row">
                    <?php

                    echo '<p style="font-size:12pt; font-weight: bold">Next Talk by ' . $talk['host'] . '</p>';
                    echo '<p style="font-size:24pt; font-weight: normal">' . $talk['title'] . '</p>';
                    echo '<p style="font-size:10pt;">' . $talk['description'] . '<br/><br/></p>';
                    echo '<p style="font-size:12pt; font-weight: bold; text-align: right"> ' . $talk['event_date'] . ' &nbsp;/&nbsp; ' . $talk['event_location'] . '</p>';
                    ?>
                </div>
            </div>
        </div>

    </div>

<?php
}
?>


<div class="container">