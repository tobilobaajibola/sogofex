
          <!-- PAGE TITLE -->
          <header>
            
            <div class="row g-1 align-items-center">
              <div class="col">

                <h1 class="h4">Add Product</h1>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb small">
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
                    <li class="breadcrumb-item text-muted active" aria-current="page">Product list</li>
                  </ol>
                </nav>

              </div>

              
            </div>

          </header>


          <div class="section p-0">


            <!-- <form novalidate class=" bs-validate"  onsubmit="form_submitter('#addproduct', '<?php echo base_url();?>admin/products/add_products' );return false" id="addproduct" data-error-scroll-up="true"> -->

          <form novalidate class="bs-validate" method="post" action="<?php echo base_url();?>admin/product_add" enctype="multipart/form-data">
            <input type="hidden" name="add_product">
            <!--
              
              PRODUCT DETAIL

            -->
            <section>

              <div class="row gutters-sm">

                <div class="col-12 col-lg-12 col-xl-8 mb-5">

                  <!--
                    PRODUCT TITLE
                  -->
                  <div class="form-label-group mb-3">
                    <input required placeholder="Product Name" id="product_name" name="product_name" type="text" value="<?php echo set_value('product_name', ''); ?>" class="form-control">
                    <label for="product_title">Product Name</label>
                  </div>
            


                  <!--
                  Note: if data-lang is changed, also the javascript 
                  file need to be loaded. You can include the language
                  file from gulp.config__vendors.js and add here!

                  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                  To upload the image, add your server-side script path:
                    data-ajax-url="upload.php" 
                    data-ajax-params="['action','upload']['param2','value2']"

                  The upload script should return a valid image full URL
                  like this: https://www.mydomain.com/upload/image.jpg
                  data-ajax-params are optional and used as identifiers by your backend.
                  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                  -->
                  <textarea name="product_description" class="summernote-editor w-100 h--250" 
                    data-placeholder="Product Description" 
                    data-min-height="250" 
                    data-max-height="2800" 
                    data-focus="false" 
                    data-lang="en-US" 

                    data-ajax-url="_ajax/demo.summernote.php" 
                    data-ajax-params="['action','editor:image:upload']" 

                    data-toolbar='[
                        ["style", ["style"]],
                        ["font", ["bold", "italic", "underline", "clear"]],
                        ["fontname", ["fontname"]],
                        ["color", ["color"]],
                        ["para", ["ul", "ol", "paragraph"]],
                        ["table", ["table"]],
                        ["view", ["codeview"]],
                        ["help", ["help"]]
                      ]'></textarea>
                  <small class="text-gray-400">* shift + enter = new line</small>



                  <!--
                    SEO
                  -->
                  <div class="mt-5">

                    <h6 class="font-weight-light">
                      Search Engine Optimization (Optional)
                    </h6>

                    <!--
                      SEO : Meta Title
                    -->
                    <div class="form-label-group mb-3">
                      <input placeholder="SEO : Meta Title" id="product_meta_title" name="product_slug" type="text" value="" class="form-control">
                      <label for="product_meta_title"><span class="text-danger">SEO</span> : Meta Title</label>
                    </div>

                    <!--
                      SEO : Meta Description
                    -->
                    <div class="form-label-group">
                      <input placeholder="SEO : Meta Description" id="product_meta_description" name="product_meta_description" type="text" value="" class="form-control">
                      <label for="product_meta_description"><span class="text-danger">Short</span> : Meta Description</label>
                    </div>
                    <small class="d-block text-gray-500">* highly recommended if product has no description</small>

                  </div>

                </div>


                <div class="col-12 col-lg-12 col-xl-4 mb-5">

                  <!--
                    PRODUCT IMAGES
                  -->
                    <!-- data-file-ajax-upload-enable="true"
                    data-file-ajax-upload-url="<?php echo base_url();?>admin/products/upload_product_image"
                    data-file-ajax-upload-params="['action','upload']['param2','value2']"
 -->
                  <div class="clearfix bg-light p-2 mb-2 rounded">

                    <label class="btn btn-warning cursor-pointer position-relative">

                      <input  name="product_image" 
                          
                          type="file" 

                          data-file-ext="jpg,jpeg,png" 
                          data-file-max-size-kb-per-file="3072" 
                          data-file-max-size-kb-total="30720" 
                          data-file-max-total-files="1" 
                          
                          
                          data-file-ext-err-msg="Allowed:" 
                          data-file-exist-err-msg="File already exists:" 
                          data-file-size-err-item-msg="File too large!" 
                          data-file-size-err-total-msg="Total allowed size exceeded!" 
                          data-file-size-err-max-msg="Maximum allowed files:" 
                          data-file-toast-position="top-center" 
                          data-file-preview-container=".js-file-preview-container" 
                          data-file-preview-img-height="100" 
                          data-file-preview-show-info="true" 
                          data-file-btn-clear="a.js-file-btn-clear" 
                          data-file-preview-img-cover="true" 
                          data-file-preview-class="shadow-md my-2 mr-3 rounded float-start" 
                          class="custom-file-input absolute-full">

                        <span class="group-icon">
                          <i class="fi fi-arrow-upload"></i>
                          <i class="fi fi-circle-spin fi-spin"></i>
                        </span>

                        <span>Upload Product Image (jpg, jpeg, png)</span>

                    </label>

                    <!-- remove button -->
                    <a href="#" title="Clear Files" data-toggle="tooltip" class="js-file-btn-clear hide btn btn-secondary mb-2">
                      <i class="fi fi-close m-0"></i>
                    </a>

                    <!-- info -->
                    <small class="d-block text-muted">
                      Upload 1 image per product (jpg, jpeg, png).
                    </small>

                    <!--
                        
                      Container : files are pushed here!
                      .hide-empty = container hidden if empty

                    -->
                    <div class="js-file-preview-container d-inline-block position-relative clearfix hide-empty"><!-- container --></div>

                  </div>


                  <div class="clearfix bg-light p-2 mb-2 rounded">
                    <div class="form-label-group">
                      <select required name="category_id[]" multiple class="form-control bs-select hide" title="Select product category(s)" data-header="Select one or more" data-live-search="true" data-actions-box="true">
                             <?php 
                        foreach($product_category as $product_categories){
                          ?>
                          <option value="<?php echo $product_categories['product_category_id'];?>" data-icon="fi fi-user-male float-start"><?php echo $product_categories['category_name'];?></option>
                          <?php
                        }
                        ?>
                      </select>
                                <label for="product_brand_id">Product Category(s)</label>
                  </div>
                      <hr>
                   
                      

                
                    <!--
                      BRAND
                    -->
                    <div class="form-label-group">
                      <select id="product_brand_id" name="product_brand_id" class="form-control bs-select" data-live-search="true" title="Nothing Selected">
                       <?php 
                       foreach ($product_brand as $product_brands) {
                         ?>
                        <option value="<?php echo $product_brands['brand_id'];?>"><?php echo $product_brands['brand_name'];?></option>
                        <?php 
                      }
                      ?>
                      </select>
                      <label for="product_brand_id">Brand</label>
                      <small class="alert text-danger">Brand not listed? Send mail to admin@sogofex.com</small>
                    </div>

                  </div>
                  <div class="clearfix bg-light p-2 mb-2 rounded">
                    
                    <!--
                      PRODUCT PRICE
                    -->
                    <div class="form-label-group">
                      <input placeholder="Quantity" id="product_vat" name="product_price" type="number" value="1" class="form-control js-form-advanced-limit" min="1" max="">
                      <label for="product_vat" class="w-100">
                        Price 
                        <span class="float-end text-gray-500 fs--13 mt--2">
                          0
                        </span>
                      </label>
                    </div>
                    </div>
                  <div class="clearfix bg-light p-2 mb-2 rounded">
                    <div class="form-label-group mb-3">
                      <select id="pricing_type" name="pricing_type" class="form-control bs-select" data-live-search="false" title="Nothing Selected">
                        <option value="non-negotiable" selected="">Non Negotiable</option>
                        <option value="negotiable" >Negotiable</option>
                      </select>
                      <label for="pricing_type">Pricing Type</label>
                    </div>
                 <!--       Feature this product
                    -->
                    <?php if($_SESSION['seller_account']['plan']=='platinum'){?>
                    <label class="form-checkbox form-checkbox-primary d-block mt-3 mb-0">
                      <input type="checkbox" name="feature_product" value="1">
                      <i></i> <span>Promote this product</span>
                    </label>
                  <?php }
                  ?>
                  </div>



                  
                  <div class="clearfix bg-light p-2 mb-2 rounded">

                    <!--
                      PRODUCT VAT
                    -->
                    <div class="form-label-group">
                      <input placeholder="Quantity" id="product_vat" name="qty" type="number" value="1" class="form-control js-form-advanced-limit" min="1" max="1000">
                      <label for="product_vat" class="w-100">
                        Quantity 
                        <span class="float-end text-gray-500 fs--13 mt--2">
                          0
                        </span>
                      </label>
                    </div>


                   

                  </div>


               

                  <div class="clearfix bg-light p-2 rounded">

                    <div class="row gutters-sm">

                      <div class="col-12 col-lg-6">

                        <!--
                          PRODUCT TYPE
                        -->
                        <div class="form-label-group mb-3">
                           <input placeholder="Quantity" id="product_vat" name="weight_size" type="number" value="1" class="form-control js-form-advanced-limit" min="0" max="100">
                      <label for="product_vat" class="w-100">
                        Weight/Size
                        <span class="float-end text-gray-500 fs--13 mt--2">
                          0
                        </span>
                      </label>
                        </div>

                      </div>

                      <div class="col-12 col-lg-6">

                        <!--
                          INVENTORY METRIC
                        -->
                        <div class="form-label-group mb-3">
                          <select id="product_inventory_metric" name="unit_measure" class="form-control bs-select" data-live-search="false" title="Nothing Selected">
                            <option value="" selected="">Measurement</option>
                            <option value="g">Gram</option>
                            <option value="kg">Kilogram</option>
                            <option value="oz">Carat</option>
                            <option value="lb">Cubic Meter</option>
                            <option value="kilowatt">Kilowatt</option>
                            <option data-divider="true" disabled="">-</option>
                            <option value="litre">Litre</option>
                            <option value="meter">Meter</option>
                            <option value="piece">Number/Piece</option>
                            <option value="pair">Pair</option>
                            <option value="cm">centimeter</option>
                            <option value="sqm">Squre Meter</option>
                            <option value="packet">Packet</option>
                            <option value="carton">Carton</option>
                          </select>
                          <label for="product_inventory_metric">Measurement</label>
                        </div>

                      </div>

                    </div>


                    <!--
                      PRODUCT STATUS
                    --><div class="form-label-group mb-3">
                      <select id="product_type" name="product_type" class="form-control bs-select" data-live-search="false" title="Nothing Selected">
                         <option value="product" selected="">Product</option>
                        <option value="service">Service</option>
                      </select>
                      <label for="product_status">Product Type</label>
                    </div>
                    <div class="form-label-group">
                      <select id="product_status" name="product_status" class="form-control bs-select" data-live-search="false" title="Nothing Selected">
                        <option value="active" selected="">Active</option>
                        <option value="inactive">Inactive</option>
                        <option value="unavailable">Unavailable</option>
                      </select>
                      <label for="product_type">Product Status</label>
                    </div>

                  </div>

                </div>

              </div>

            </section>







            <!-- 
              SUBMIT BUTTON 
            -->
            <?php 
              if ($seller_detail['max_qty'] ==0) {
              ?>
            <button type="submit" class="btn btn-primary">
              <i class="fi fi-check"></i>
              Add Product
            </button>
            <?php
          }
          else{
            ?>
              <p class="text-danger">You have reached maximum number of products for your package</p>
            <?php 
          }
          ?>
          </form>


          </div>
