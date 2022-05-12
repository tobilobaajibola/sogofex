
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


            <!-- <form novalidate class=" bs-validate"  onsubmit="form_submitter('#addproduct', '<?php echo base_url();?>admin/products/add_products' );return false" id="addproduct" data-error-scroll-up="true"> -->

          <form novalidate class="bs-validate" method="post" action="<?php echo base_url();?>admin/products/add_products" enctype="multipart/form-data">

            <!--
              
              PRODUCT DETAIL

            -->
            <section>

              <div class="row gutters-sm">

                <div class="col-12 col-lg-12 col-xl-8 mb-5">

                
<input type="text" class="form-control iqs-input" data-container=".iqs-container" name="quick-filter" value="" placeholder="quick filter">

<div class="iqs-container p--15 border rounded mt-3">

  <div class="iqs-item">

    <label class="form-checkbox form-checkbox-primary">
      <input type="checkbox" name="checkbox_p">
      <i></i> Nike <span class="text-muted fs--12">(11)</span>
    </label>

  </div>

  <div class="iqs-item">

    <label class="form-checkbox form-checkbox-primary">
      <input type="checkbox" name="checkbox_p">
      <i></i> Adidas <span class="text-muted fs--12">(45)</span>
    </label>

  </div>

  <div class="iqs-item">

    <label class="form-checkbox form-checkbox-primary">
      <input type="checkbox" name="checkbox_p">
      <i></i> Sony <span class="text-muted fs--12">(45)</span>
    </label>

  </div>

  <!-- ... more items -->

</div>
                      


                </div>


                <div class="col-12 col-lg-12 col-xl-4 mb-5">

             




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
