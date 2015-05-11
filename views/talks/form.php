<div class="panel panel-default">

    <div class="panel-heading">
        <h3 class="panel-title"><?= $data['form_header'] ?></h3>
    </div>

    <div class="panel-body">

        <?php echo Message::show(); ?>

        <?php
        $talk = $data['talk'];
        if (isset($talk['id'])) :
            ?>

            <form role="form" action="<?= DIR ?>talks/insert" method="POST">
                <input class="form-control" type="text" name="title" placeholder="Title of Talk" value="<?= $talk['title'] ?>">
                <textarea class="form-control" type="text" name="description" placeholder="Description"
                          rows="4"><?= $talk['description'] ?></textarea>
                <input class="form-control" type="text" name="host" placeholder="Host Name" value="<?= $talk['host'] ?>">
                <input class="form-control" type="url" name="url" placeholder="Info URL" value="<?= $talk['url'] ?>">
                <div class="form-group">
                    <input class="form-control" type="url" name="image" placeholder="Image URL"
                           value="<?= $talk['image'] ?>">
                    <p class="help-block">Please use a <a href="http://search.creativecommons.org/" target="_blank">creative commons image</a>.</p>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?= $talk['id'] ?>">
            </form>

        <?php else : ?>

            <form role="form" action="<?= DIR ?>talks/insert" method="POST">
                <input class="form-control" type="text" name="title" placeholder="Title of Talk" value="<?= $talk['title'] ?>">
                <textarea class="form-control" type="text" name="description" placeholder="Description"
                          rows="4"><?= $talk['description'] ?></textarea>
                <input class="form-control" type="text" name="host" placeholder="Host Name" value="<?= $talk['host'] ?>">
                <input class="form-control" type="url" name="url" placeholder="Info URL" value="<?= $talk['url'] ?>">

                <div class="form-group">
                    <input class="form-control" type="url" name="image" placeholder="Image URL"
                           value="<?= $talk['image'] ?>">
                    <p class="help-block">Please use a <a href="http://search.creativecommons.org/" target="_blank">creative commons image</a>.</p>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <button type="submit" class="btn btn-primary btn-block">Create</button>
                    </div>
                </div>
            </form>

        <?php endif; ?>

    </div>
    <!-- / .panel-body -->
</div> <!-- / .panel -->