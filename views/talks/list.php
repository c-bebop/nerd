<div class="row list-group talks">

   <?php echo Message::show(); ?>

   <?php
      if (!sizeof($data['talks'])) {
         echo '<div class="alert alert-info">No Talks listed yet.... <a href="' . DIR . 'talks/add">Create one!</a>!</div>';
      }
      else {
         foreach ($data['talks'] as $talk) {
            echo
            '<div class="item col-xs-12 col-md-4">
               <div class="thumbnail" style="background-image: url(' . $talk['image'] . ')">
                  <div class="buttons-edit">
                     <a class="btn btn-default btn-sm" href="' . DIR . 'talks/edit/' . $talk['id'] . '">Edit</a>
                  </div>
                  <div class="caption clearfix">
                     <h4><a href="' . $talk['url'] . '" title="' . $talk['title'] . '">' . $talk['title'] . '</a></h4>
                     <p>' . $talk['description'] . '</p>
                     <p><b>' . $talk[host] . '</b></p>
                     <span class="lead">' . $talk['votes'] . ' Votes</span>
                     <a class="btn btn-default pull-right" href="' . DIR . 'talks/vote/' . $talk['id'] . '">Vote</a>
                  </div>
               </div>
            </div>';
         }
      }
   ?>

</div> <!-- / .talks -->