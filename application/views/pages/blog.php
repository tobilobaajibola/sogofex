      <!-- COVER -->
      <section class="p-0 jarallax bg-cover overlay-dark overlay-opacity-7 text-white position-relative" style="background-image:url('demo.files/images/unsplash/covers/andrew-neel-cckf4TsHAuw-unsplash.jpg')">

        <div class="container position-relative z-index-2"> 

          <div class="d-middle min-h-50vh text-center">

            <div class="mt-7overflow-hidden mb-4" data-aos="fade-in" data-aos-delay="150">

              <!-- 

                SEO PURPOSE
                h1 CAN BE USED HERE ONLY ON HOME/CATEGORIES
                ON BLOG POST WE REPLACE THIS h1 WITH A DIV
                h1 WILL BE USED BY POST TITLE

                Blogs are generating the most quality content, especially
                on ecommerce websites (usually, the SEO is very, very low on content). 
                So please pay attention to titles/descriptions.

              -->
              <h1 class="mb-0 display-3 h1-xs">
                <span class="text-warning font-weight-medium">Sogofex</span> Blog
              </h1>
              
              <p class="h1 h4-xs font-weight-normal mb-5">
                Follow us, daily fresh news!
              </p>

            </div>

          </div>

        </div>


        <!-- svg shape -->
        <div class="absolute-full w-100 overflow-hidden opacity-5">
          <img class="img-fluid" width="2000" height="2000" src="<?php echo base_url();?>assets/images/masks/shape-line-lense.svg" alt="...">
        </div>


      </section>  
      <!-- /COVER -->


      <!-- start :: blog content -->
      <section>
        <div class="container"> 

          <div class="row">

            <div class="col-lg-9 order-2 order-lg-1">

      
              <!-- /FEATURED POST : ALWAYS LAST ADDED -->
              <a href="<?php echo base_url();?>media/<?php echo $blogposts[0]['slug']?>" class="d-block mb-7 position-relative text-dark clearfix text-decoration-none">

                <figure class="d-block text-center overlay-dark-hover overlay-opacity-2 rounded overflow-hidden">
                  <img class="img-fluid rounded" src="<?php echo $blogposts[0]['jetpack_featured_media_url']; ?>" alt="...">
                </figure>

                <p class="text-muted small">
                  Post Date: <time datetime="<?php echo convert_date($blogposts[0]['date']); ?>"><?php echo convert_date($blogposts[0]['date']); ?></time>
                </p>
                <h2 class="h4"><?php echo $blogposts[0]['title']['rendered']; ?></h2>

              </a>

              <!-- FEATURED POST : ALWAYS LAST ADDED -->



              <!-- posts -->
              <div class="row">

                 <!-- posts -->
          <div class="row">
           
            <?php 
  $i = 0;

foreach($blogposts as $blogpost ) {

$i = ++$i;
if(isset($blogposts[$i])){
?>
  
            <!-- post -->
            <a href="<?php echo base_url();?>media/<?php echo $blogposts[$i]['slug']?>" class="col-12 col-md-6 mb-5 position-relative text-dark clearfix text-decoration-none">

      <figure class="d-block text-center overlay-dark-hover overlay-opacity-2 rounded overflow-hidden h--200">
          <img class="img-fluid rounded" src=" <?php if(isset($blogposts[$i]['jetpack_featured_media_url'])){echo$blogposts[$i]['jetpack_featured_media_url'];
            }   ?>" alt="...">
              
              </figure>

              <p class="mt-3 fs--20 mb-2">
                <span class="h6-xs text-dark d-block">
                  <?php echo $blogposts[$i]['title']['rendered']; ?>
                </span>
                
                   <div class="article-format">
                                <?php echo $blogposts[$i]['excerpt']['rendered'];?>
                               
                            </div>

                <span class="d-block text-muted font-regular fs--14">
                  Post Date: <time datetime="<?php echo convert_date($blogposts[$i]['date']); ?>"> <?php echo convert_date($blogposts[$i]['date']); ?></time>
                </span>
              </p>

            </a>
       <?php
     }
     }
     ?>
          </div>
          <!-- /posts -->


              </div>
              <!-- /posts -->



              <!-- pagination : center -->
              <nav aria-label="pagination" class="my-5">
                <ul class="pagination pagination-pill justify-content-center">

                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  
                  <li class="page-item">
                    <a class="page-link" href="<?php echo base_url();?>articles">1</a>
                  </li>
                  
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="<?php echo base_url();?>articles?page=2">2 <span class="sr-only">(current)</span></a>
                  </li>
                  
                  <li class="page-item">
                    <a class="page-link" href="<?php echo base_url();?>articles?page=3">3</a>
                  </li>
                  
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>

                </ul>
              </nav>
              <!-- /pagination : center -->
                





<form novalidate="" method="post" action="#" class="bs-validate d-block bg-white shadow-primary-xs px-4 py-5 mt-5 text-center rounded">
                <div class="py-4 col-lg-8 ms-lg-auto me-lg-auto">

                  <h3 class="mb-0">Subscribe</h3>
                  <p class="lead mb-5 text-muted">Get for free our tips, tricks &amp; news</p>

                  <input required="" placeholder="your email address..." name="subscriber_email" class="form-control text-center mb-2" type="email" value="">

                  <button type="submit" class="btn btn-primary w-100">
                    Subscribe me!
                  </button>

                </div>
              </form>
            </div>

            <div class="col-lg-3 order-1 order-lg-2 mb-5">


              <!-- /SEARCH -->



              <!-- CATEGORIES -->
              <nav class="nav-deep nav-deep-light mb-2">

                <!-- mobile only -->
                <button class="clearfix btn btn-toggle btn-sm btn-block text-align-left shadow-md border rounded mb-1 d-block d-lg-none" data-target="#nav_responsive" data-toggle-container-class="d-none d-sm-block bg-white shadow-md border animate-fadein rounded p-3">
                  <span class="group-icon px-2 py-2 float-start">
                    <i class="fi fi-bars-2"></i>
                    <i class="fi fi-close"></i>
                  </span>

                  <span class="h5 py-2 m-0 float-start">
                    Categories
                  </span>
                </button>

                <!-- desktop only -->
                <h3 class="h5 pt-3 pb-3 m-0 d-none d-lg-block">
                  Categories
                </h3>


                <!-- navigation -->
                <ul id="nav_responsive" class="nav flex-column d-none d-lg-block">
                    <?php
                    foreach($blogcategories as $blogcategory ) {
                      ?>
                     <li class="nav-item">
                    <a class="nav-link px-0" href="<?php echo base_url();?>articles?categories=<?php echo $blogcategory['id'];?>">
                      <i class="fi fi-arrow-end m-0 fs--12"></i> 
                      <span class="px-2 d-inline-block">
                        <?php echo $blogcategory['name'];?>
                      </span>
                    </a>
                  </li>
                   <?php
                 }
                 ?>
                
                </ul>

              </nav>
              <!-- /CATEGORIES -->







              <!-- mobile trigger : expand -->
              <button class="clearfix btn btn-toggle btn-sm btn-block text-align-left shadow-md border rounded mb-1 d-block d-lg-none" data-target="#sidebar_expand_mobile" data-toggle-container-class="d-none d-sm-block bg-white shadow-md border animate-fadein rounded p-3">
                <span class="group-icon px-2 py-2 float-start">
                  <i class="fi fi-bars-2"></i>
                  <i class="fi fi-close"></i>
                </span>

                <span class="h5 py-2 m-0 float-start">
                  Explore
                </span>
              </button>


              <div id="sidebar_expand_mobile" class="d-none d-lg-block">

                <!-- RECOMMENDED -->
                <h3 class="h5 mt-5 mt-0-xs">
                  Latest Posts
                </h3>
                <ul class="list-unstyled">
                
            <?php 
  $i = 0;

          foreach($blogposts as $blogpost ) {

          $i = ++$i;
          if(isset($blogposts[$i])){
          ?>
            
            <!-- post -->
               <li class="list-item border-bottom py-1">
                    <a class="text-dark font-weight-light fs--15" href="<?php echo base_url();?>media/<?php echo $blogposts[$i]['slug']?>"> <?php echo $blogposts[$i]['title']['rendered']; ?></a>
                  </li>
                 <?php
               }
               }
               ?>
                 
                </ul>
                <!-- /RECOMMENDED -->




                <!-- BANNER -->
               <!--  <a href="#!" class="mt-5 d-block text-center overlay-dark-hover overlay-opacity-2 rounded overflow-hidden">
                  <img class="w-100 img-fluid rounded" src="demo.files/images/unsplash/portfolio/thumb_330/boxed-water-is-better-6RTh34xCS1M-unsplash-min.jpg" alt="...">
                </a> -->
                   <?php $this->load->view('box/advert');?>

                <h4 class="fs--13 text-gray-500 font-weight-normal mt-1 mb-0">
                  Sponsored Ad
                </h4>
                <!-- /BANNER -->

              </div>

            </div>

          </div>

        </div>
      </section>  
      <!-- end :: blog content -->





