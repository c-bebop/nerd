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

    <div class="container">

        <div class="panel panel-default">

            <div class="panel-heading">
                <h3 class="panel-title">Login</h3>
            </div>

            <div class="panel-body">

                <?php echo Message::show(); ?>

                <form role="form" action="<?= DIR ?>talks/login" method="POST">
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                        <span class="help-block with-errors"></span>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>

            </div> <!-- / .panel-body -->
        </div> <!-- / .panel -->

    </div>

</body>
</html>