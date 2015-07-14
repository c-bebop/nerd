<div class="panel panel-default">

    <div class="panel-heading">
        <h3 class="panel-title"><?= $data['form_header'] ?></h3>
    </div>

    <div class="panel-body">

        <?php echo Message::show(); ?>

        <?php
        $talk = $data['talk'];
        ?>

        <form role="form" action="<?= DIR ?>talks/insert" method="POST" data-toggle="validator">
            <div class="form-group">

                <input class="form-control" type="text" name="title" id="titleField" placeholder="Title of Talk"
                       value="<?= $talk['title'] ?>" required>
                <span class="help-block with-errors"></span>
            </div>
            <div class="form-group">
            <textarea class="form-control" type="text" name="description" id="descriptionArea" placeholder="Description what it's about (maximum 140 characters)"
                      rows="4" maxlength="140" required><?= $talk['description'] ?></textarea>
                <span class="help-block with-errors"></span>
            </div>
            <div class="form-group"><input class="form-control" type="text" name="host" placeholder="Name of host or speaker"
                                           value="<?= $talk['host'] ?>" required>
                <span class="help-block with-errors"></span>
            </div>
            <div class="form-group"><input class="form-control" type="url" name="url" placeholder="Info URL (optional)"
                                           value="<?= $talk['url'] ?>">
                <span class="help-block with-errors"></span>
            </div>
            <div class="form-group">
                <input class="form-control" type="url" name="image" placeholder="Image URL (optional)"
                       value="<?= $talk['image'] ?>">
                <span class="help-block with-errors"></span>

                <p class="help-block">Please link a <a href="http://search.creativecommons.org/" target="_blank">creative
                        commons image</a>.</p>

            </div>

            <?php
            if (isset($talk['id'])) {

                if (Session::get('master')) {

                    ?>

                    <div class="form-group">
                        <input class="form-control" type="text" name="event_date" placeholder="Date of event."
                                                   value="<?= $talk['event_date'] ?>">
                        <span class="help-block with-errors"></span>
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="text" name="event_location" placeholder="Location of event."
                                                   value="<?= $talk['event_location'] ?>">
                        <span class="help-block with-errors"></span>
                    </div>

                    <?php

                }

                ?>
                
                <div class="row">
                    <div class="col-xs-6">
                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?= $talk['id'] ?>">
            <?php } else { ?>
                <div class="row">
                    <div class="col-xs-6">
                        <button type="submit" class="btn btn-primary btn-block">Create</button>
                    </div>
                </div>
            <?php } ?>

        </form>


    </div>
    <!-- / .panel-body -->
</div> <!-- / .panel -->