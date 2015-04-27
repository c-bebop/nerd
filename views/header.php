<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $data['title'] . ' - ' . SITETITLE ?></title>

    <link rel="stylesheet" href="<?= URL::STYLES('bootstrap.min') ?>">
    <link rel="stylesheet" href="<?= URL::STYLES('style') ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My first LiveScript Application.">

    <meta name="author" content="Maximilian Beier">
    <meta name="author" content="Florian Willich">
    <meta name="author" content="Gabriel">


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
                </div><!-- /input-group -->
            </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?= DIR ?>talks/add">new <strong>Talk</strong></a></li>
        </ul>
    </div>
</nav>


<div class="jumbotron">

    <div class="container">
        <p>Nerd, Entertainment, Research and Design Talks at the Usability and Quality Labs, Technische Universi&auml;t zu Berlin.</p>
    </div>

</div>

<div class="container">