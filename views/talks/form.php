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
         <input class="form-control" type="text" name="title" placeholder="Title" value="<?= $talk['title'] ?>">
         <input class="form-control" type="text" name="description" placeholder="Description" value="<?= $talk['description'] ?>">
         <input class="form-control" type="text" name="host" placeholder="Host" value="<?= $talk['host'] ?>">
         <input class="form-control" type="url" name="url" placeholder="URL" value="<?= $talk['url'] ?>">
         <input class="form-control" type="url" name="image" placeholder="Image" value="<?= $talk['image'] ?>">
         <div class="row">
            <div class="col-xs-6">
               <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
         </div>
         <input type="hidden" name="id" value="<?= $talk['id'] ?>">
      </form>

      <?php else : ?>

      <form role="form" action="<?= DIR ?>talks/insert" method="POST">
         <input class="form-control" type="text" name="title" placeholder="Title" value="<?= $talk['title'] ?>">
         <input class="form-control" type="text" name="description" placeholder="Description" value="<?= $talk['description'] ?>">
         <input class="form-control" type="text" name="host" placeholder="Host" value="<?= $talk['host'] ?>">
         <input class="form-control" type="url" name="url" placeholder="URL" value="<?= $talk['url'] ?>">
         <input class="form-control" type="url" name="image" placeholder="Image" value="<?= $talk['image'] ?>">
         <div class="row">
            <div class="col-xs-6">
               <button type="submit" class="btn btn-primary btn-block">Create</button>
            </div>
         </div>
      </form>

   <?php endif; ?>

   </div> <!-- / .panel-body -->
</div> <!-- / .panel -->