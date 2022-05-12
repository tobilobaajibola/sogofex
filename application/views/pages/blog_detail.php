
            <!-- start :: blog content -->
            <section>
                <div class="container"> 

                    <div class="row">

                        <div class="col-lg-9 order-2 order-lg-1">

                            <div class="mb-4">

                                <h1 class="h3 h4-xs font-weight-medium mb-0">
                                    <?php echo $blogdetail[0]['title']['rendered'];?>
                                </h1>

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb fs--14 mb-3">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                        <li class="breadcrumb-item"><a href="#">Category</a></li>
                                    </ol>
                                </nav>

                                <p class="d-block text-muted fs--14">
                                    Post Date: <time datetime="<?php echo convert_date($blogdetail[0]['date']);?>"><?php echo convert_date($blogdetail[0]['date']); ?></time>
                                </p>

                            </div>



                            <!-- FEATURED POST : ALWAYS LAST ADDED -->
                            <div class="clearfix mb-5">

                                <!-- SWIPER -->
                                <div class="swiper-container swiper-btn-group swiper-btn-group-end text-white p-0 mb-4 max-h-100vh overflow-hidden" data-aos="fade-in" data-aos-delay="0" 
                                    data-swiper='{
                                        "slidesPerView": 1,
                                        "spaceBetween": 0,
                                        "autoplay": { "delay" : 4500, "disableOnInteraction": false },
                                        "loop": true,
                                        "effect": "fade"
                                    }'>

                                    <div class="swiper-wrapper">
                                        
                                        <!-- slide -->
                                        <div class="swiper-slide overlay-dark overlay-opacity-1 rounded overflow-hidden  h--500">
                                            <img class="img-fluid" src="<?php if(isset($blogdetail[0]['jetpack_featured_media_url'])){echo $blogdetail[0]['jetpack_featured_media_url'];
            }   ?>" alt="...">
                                        </div>

                                       

                                    </div>

                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next swiper-button-white"></div>
                                    <div class="swiper-button-prev swiper-button-white"></div>

                                </div>  
                                <!-- /SWIPER -->

                            </div>
                            <!-- /FEATURED POST : ALWAYS LAST ADDED -->
                          

                            <!--
                                .article-format class will add some slightly formattings for a good text visuals. 
                                This is because most editors are not ready formatted for bootstrap
                                Blog content should come inside this container, as it is from database!
                                src/scss/_core/base/_typography.scss
                            -->
                            <div class="article-format">


                                <h2><?php echo $blogdetail[0]['title']['rendered'];?></h2>
                                <?php echo $blogdetail[0]['content']['rendered'];?>
                               
                            </div>


                            <p class="text-muted border-bottom pb-2 fs--13 mt--60">
                                Last Update: Feb 07, 2019 / 02:49 AM
                            </p>



                        </div>

                        <div class="col-lg-3 order-1 order-lg-2 mb-5">


                            <!-- SEARCH -->
                            <form method="get" action="#" class="input-group-over d-block mb-2">
                                
                                <div class="form-label-group mb-3">
                                    <input required placeholder="Blog search..." id="blog_search" name="keywords" type="text" class="form-control">
                                    <label for="blog_search">Blog search...</label>
                                </div>

                                <button type="submit" class="btn fs--12">
                                    <i class="fi fi-search m-0"></i>
                                </button>

                            </form>
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




                                <!-- BANNER -->
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

