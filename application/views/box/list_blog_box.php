<ul class="list-unstyled mb-0">

 <?php

  $i = -1;
  foreach($blogposts as $blogpost) {

  $i = ++$i;
  if(isset($blogposts[$i])){
  ?>
    <li class="list-item d-flex align-items-center position-relative mt-4">
      <div class="ratio ratio-16x9 bg-light me-3" style="max-width: 100px;">
        <div class="bg-cover rounded" style="background-image:url(<?php if(isset($blogposts[$i]['jetpack_featured_media_url'])){echo$blogposts[$i]['jetpack_featured_media_url'];}?>);"></div>
      </div>
      <a href="#" class="link-normal small stretched-link"><?php echo $blogposts[$i]['title']['rendered']; ?></a>
    </li>
     <?php
     }
     }
     ?>
</ul>