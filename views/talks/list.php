<div class="talks row">

   <?php echo Message::show(); ?>

   <?php
      if (!sizeof($data['talks'])) {
         echo '<div class="alert alert-info">No Talks listed yet.... <a href="' . DIR . 'talks/add">Create one!</a>!</div>';
      }
      else {
         foreach ($data['talks'] as $talk) {

             $thumb = 'glyphicon glyphicon-thumbs-up';

             if(Session::get('vote_' . $talk['id'])) {
                 $thumb = 'glyphicon glyphicon-thumbs-down';
             }

            echo
            '<div class="item col-md-4">
               <div class="talk thumbnail" style="background-image: url(' . $talk['image'] . ')">
                  <div class="buttons-edit">
                     <a class="btn btn-default btn-sm" href="' . DIR . 'talks/edit/' . $talk['id'] . '">Edit</a>
                  </div>';

                  if (Session::get('master')) {

                      echo '<div class="buttons-delete">
                                <a class="btn btn-default btn-sm" href="' . DIR . 'talks/delete/' . $talk['id'] . '">Delete</a>
                            </div>';

                  }

                  echo '<div class="talk-caption">
                     <h4 class="talk-title"><a href="' . $talk['url'] . '" title="' . $talk['title'] . '">' . $talk['title'] . '</a></h4>
                     <p class="talk-description">' . $talk['description'] . '</p>
                     <p><b>' . $talk[host] . '</b></p>
                     <span class="lead">' . $talk['votes'] . ' Votes</span>
                     <a class="btn btn-default pull-right" href="' . DIR . 'talks/vote/' . $talk['id'] . '"><span style="font-size: 1.5em" class="' . $thumb . '" aria-hidden="true"></span></a>
                  </div>
               </div>
            </div>';
         }
      }
   ?>

</div> <!-- / .talks -->