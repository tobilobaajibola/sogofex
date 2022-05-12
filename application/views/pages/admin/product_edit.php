
          <!-- PAGE TITLE -->
          <header>
            
            <div class="row g-1 align-items-center">
              <div class="col">

                <h1 class="h4">Product list</h1>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb small">
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
                    <li class="breadcrumb-item text-muted active" aria-current="page">Product list</li>
                  </ol>
                </nav>

              </div>

              <div class="col-auto">
                <a href="#!" role="button" class="btn btn-sm btn-primary d-inline-flex align-items-center">
                  <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                  </svg>
                  <span class="d-none d-sm-inline-block ps-2">Product</span>
                </a>
              </div>
            </div>

          </header>


          <div class="section p-0">


            <form novalidate class=" bs-validate"  onsubmit="form_submitter('#addproduct', '<?php echo base_url();?>admin/products/add_products' );return false" id="addproduct" data-error-scroll-up="true">

          <!-- <form novalidate class="bs-validate" method="post" action="<?php echo base_url();?>admin/products/add_products" enctype="multipart/form-data"> -->

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
                    <input required placeholder="Product Name" id="product_name" name="product_name" type="text" value=" <?php echo $product_detail['product_name'];?>" class="form-control">
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
                  <textarea name="product_description" class="summernote-editor w-100 h--350" 
                    data-placeholder="Product Description" 
                    data-min-height="350" 
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
                        ["insert", ["link", "picture", "hr"]],
                        ["view", ["codeview"]],
                        ["help", ["help"]]
                      ]'> <?php echo $product_detail['product_description'];?></textarea>
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
                      <label for="product_meta_description"><span class="text-danger">SEO</span> : Meta Description</label>
                    </div>
                    <small class="d-block text-gray-500">* highly recommended if product has no description</small>

                  </div>

                </div>


                <div class="col-12 col-lg-12 col-xl-4 mb-5">

                  <!--
                    PRODUCT IMAGES
                  -->
                  <div class="clearfix bg-light p-2 mb-2 rounded">

                    <label class="btn btn-warning cursor-pointer position-relative">

                      <input  name="product_image[]" 
                          multiple="" 
                          type="file" 

                          data-file-ext="jpg,jpeg,png" 
                          data-file-max-size-kb-per-file="3072" 
                          data-file-max-size-kb-total="30720" 
                          data-file-max-total-files="10" 
                          
                          data-file-ajax-upload-enable="true"
                          data-file-ajax-upload-url="<?php echo base_url();?>admin/products/upload_product_image"
                          data-file-ajax-upload-params="['action','upload']['param2','value2']"


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

                        <span>Upload Images</span>

                    </label>

                    <!-- remove button -->
                    <a href="#" title="Clear Files" data-toggle="tooltip" class="js-file-btn-clear hide btn btn-secondary mb-2">
                      <i class="fi fi-close m-0"></i>
                    </a>

                    <!-- info -->
                    <small class="d-block text-muted">
                      Upload up to 10 product images (jpg, jpeg, png).
                    </small>

                    <!--
                        
                      Container : files are pushed here!
                      .hide-empty = container hidden if empty

                    -->
                    <div class="js-file-preview-container d-inline-block position-relative clearfix hide-empty"><!-- container --></div>

                  </div>


                  <div class="clearfix bg-light p-2 mb-2 rounded">

                    <!--
                      CATEGORY
                    -->
                    <div class="form-label-group mb-3">
                      <select  name="category_id[]" class="form-control bs-select" data-live-search="true" title="Nothing Selected" multiple>

                        <!-- <option value="1" data-subtext="(inactive)" class="font-weight-medium">Category 1</option> -->
                        <?php 
                        foreach($product_category as $product_categories){
                          ?>
                        <option value="<?php echo $product_categories['product_category_id'];?>" class="font-weight-medium"><?php echo $product_categories['category_name'];?></option>
                        <?php
                      }
                      ?>
                      </select>
                      <label for="category_id">Category</label>
                    </div>
                   
                    <!--
                      BRAND
                    -->
                    <div class="form-label-group">
                      <select id="product_brand_id" name="product_brand_id" class="form-control bs-select" data-live-search="true" title="Nothing Selected">
                        <option value="1">Nike</option>
                        <option value="1">Adidas</option>
                        <option value="1">North Pole</option>
                      </select>
                      <label for="product_brand_id">Brand</label>
                    </div>

                  </div>


                  <div class="clearfix bg-light p-2 mb-2 rounded">

                    <!--
                      PRODUCT VAT
                    -->
                    <div class="form-label-group">
                      <input placeholder="Quantity" id="product_vat" name="qty" type="number" value="1" class="form-control js-form-advanced-limit" min="0" max="100">
                      <label for="product_vat" class="w-100">
                        Quantity 
                        <span class="float-end text-gray-500 fs--13 mt--2">
                          0
                        </span>
                      </label>
                    </div>


                    <!--
                      VAT INCLUDED
                    -->
                    <label class="form-checkbox form-checkbox-primary d-block mt-3 mb-0">
                      <input type="checkbox" name="product_vat_included" value="1">
                      <i></i> <span>VAT already included</span>
                    </label>

                  </div>


                  <div class="clearfix bg-light p-2 mb-2 rounded">


                    <!--
                      ALLOW PREORDERS
                    -->
                    <label class="form-checkbox form-checkbox-primary d-block mb-3">
                      <input type="checkbox" name="product_preorder_allow" value="1">
                      <i></i> <span>Allow Preorders (on 0 inventory)</span>
                    </label>

                    <!--
                      INVENTORY TRACK
                    -->
                    <label class="form-checkbox form-checkbox-primary d-block mb-3">
                      <input type="checkbox" name="product_inventory_track" value="1">
                      <i></i> <span>Inventory Tracking</span>
                    </label>



                  </div>


                  <div class="clearfix bg-light p-2 rounded">

                    <div class="row gutters-sm">

                      <div class="col-12 col-lg-6">

                        <!--
                          PRODUCT TYPE
                        -->
                        <div class="form-label-group mb-3">
                          <select id="product_type" name="product_type" class="form-control bs-select" data-live-search="false" title="Nothing Selected">
                            <option value="0" selected="">New</option>
                            <option value="1">Negotiable</option>
                            <option value="2">Service</option>
                            <option value="3">Product</option>
                          </select>
                          <label for="product_type">Product Type</label>
                        </div>

                      </div>

                      <div class="col-12 col-lg-6">

                        <!--
                          INVENTORY METRIC
                        -->
                        <div class="form-label-group mb-3">
                          <select id="product_inventory_metric" name="product_inventory_metric" class="form-control bs-select" data-live-search="false" title="Nothing Selected">
                            <option value="" selected="">Item</option>
                            <option value="g">g</option>
                            <option value="kg">kg</option>
                            <option value="oz">oz</option>
                            <option value="lb">lb</option>
                            <option value="t">t</option>
                            <option data-divider="true" disabled="">-</option>
                            <option value="m">m</option>
                            <option value="foot">foot</option>
                            <option value="yard">yard</option>
                            <option value="inch">inch</option>
                            <option value="cm">cm</option>
                            <option value="mm">mm</option>
                          </select>
                          <label for="product_inventory_metric">Inventory Metric</label>
                        </div>

                      </div>

                    </div>


                    <!--
                      PRODUCT STATUS
                    -->
                    <div class="form-label-group">
                      <select id="product_status" name="product_status" class="form-control bs-select" data-live-search="false" title="Nothing Selected">
                        <option value="1" selected="">Active</option>
                        <option value="0">Inactive</option>
                        <option value="2">Unavailable</option>
                      </select>
                      <label for="product_status">Product Status</label>
                    </div>

                  </div>

                </div>

              </div>

            </section>







            <!-- 
              SUBMIT BUTTON 
            -->
            <button type="submit" class="btn btn-primary">
              <i class="fi fi-check"></i>
              Save Changes
            </button>

          </form>


          </div>
