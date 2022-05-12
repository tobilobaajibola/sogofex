
          <!-- PAGE TITLE -->
 

          <div class="section p-0">
            <div class="card-header p-4">

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
                <a href="<?php echo base_url();?>admin/product_add" role="button" class="btn btn-sm btn-primary d-inline-flex align-items-center">
                  <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                  </svg>
                  <span class="d-none d-sm-inline-block ps-2">Add Product</span>
                </a>
              </div>
            </div>

            </div>

            <div class="card-body pt-1">
              
              <!-- item list -->
              <div class="table-responsive-md">

                <table class="table table-align-middle" role="grid" aria-describedby="mobile-page-info">
                  <thead>
                    <tr>
                      <th scope="col" style="width:46px">
                        <div class="form-check"><!-- check all -->
                          <input data-checkall-container="#checkall-list" class="form-check-input" type="checkbox" value="1">
                        </div>
                      </th>
                      <th scope="col" class="small text-muted" style="width:70px"><!-- image --></th>
                      <th scope="col" class="small text-muted">PRODUCT</th>
                      <th scope="col" class="small text-muted">BRAND</th>
                      <th scope="col" class="small text-muted text-center" style="width:150px">
                        <a href="#!" class="d-flex link-muted" title="order by inventory" aria-label="order by inventory">
                          <span class="d-flex flex-column lh-1">
                            <svg class="lh-1 text-primary" width="13px" height="13px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                            </svg>

                            <svg class="lh-1 mt-n1 text-muted" width="13px" height="13px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                          </span>
                          <span class="ms-2">QUANTITY</span>
                        </a>
                      </th>
                      <th scope="col" class="small text-muted" style="width:150px">
                        <a href="#!" class="d-flex link-muted" title="order by price" aria-label="order by price">
                          <span class="d-flex flex-column lh-1">
                            <svg class="lh-1 text-primary" width="13px" height="13px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                            </svg>

                            <svg class="lh-1 mt-n1 text-muted" width="13px" height="13px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                          </span>
                          <span class="ms-2">PRICE</span>
                        </a>
                      </th>
                      <th scope="col" class="small text-muted" style="width:60px"><!-- options --></th>
                    </tr>
                  </thead>
                  <tbody id="checkall-list">
                    <?php  
                    $count = 0;
                    foreach ($list_seller_product as $list_products) {
                      $count = ++$count;
                     ?>                 
                    <!-- item -->
                    <tr>
                      <th scope="row"><!-- check -->
                        <?php echo $count;?>
                      </th>
                      <td><!-- image -->
                        <img class="border border-light p-1" width="50" src="<?php echo base_url();?>assets/images/product/<?php echo $list_products['product_image'];?>" alt="...">
                      </td>
                      <td class="position-relative"><!-- product -->
                        <a href="<?php echo base_url().'admin/product_detail/'.$list_products['product_slug_url'];?>" class="d-block link-normal fw-medium stretched-link"><?php echo $list_products['product_name'];?></a>
                        <span class="badge bg-success">active</span>
                        <span class="badge fw-normal">
                          <!-- <span class="text-muted">SKU-0019</span> -->
                        </span>
                      </td>
                      <td class="text-center"><?php echo $list_products['brand_name'];?></td>
                      <td class="text-center"><!-- inventory -->
                        <?php echo $list_products['qty'];?>
                      </td>
                      <td><!-- price -->
                        <span class="d-block text-success">N<?php echo $list_products['product_price'];?></span>
                      </td>
                      <td class="dropstart"><!-- options -->
                        <a class="btn btn-sm btn-light btn-icon btn-ghost text-muted rounded-circle dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,0">
                          <span class="group-icon">
                            <svg height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                          </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-clean">
                          <li>
                            <a class="dropdown-item" href="#">
                              <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                              </svg>
                              <span>Preview</span>
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">
                              <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 20h9"></path>
                                <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                              </svg>
                              <span>Edit</span>
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">
                              <svg class="text-danger" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                <line x1="14" y1="11" x2="14" y2="17"></line>
                              </svg>
                              <span class="w-100">Delete</span>
                            </a>
                          </li>
                        </ul>
                      </td>
                    </tr>
                    <!-- end item -->
                    <?php
                  }
                  ?>
                  </tbody>
                </table>

              </div>

              <!-- pagination, selected items -->
              <div class="row">
                <div class="col py-3 text-center text-md-start">
                 

                </div>

                <div class="col-md-auto py-3">

                  <!-- pagination -->
                  <nav class="w-100 text-center" aria-label="Pagination">
               
                    <!-- pagination : desktop -->
                    <nav class="text-center float-md-end mt-3 mt-md-0 d-none d-md-flex" aria-label="Pagination">
                      <ul class="nav nav-sm nav-invert">
                         <?php
                        echo $this->pagination->create_links();
                        ?>
                        
                      </ul>
                    </nav>

                    <!-- pagination : mobile -->
                    <ul class="list-inline mb-0 d-md-none">
                      <li class="list-inline-item">
                        <a href="#!" class="btn btn-sm rounded-circle link-normal disabled" tabindex="0">
                          <svg width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                          </svg>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#!" class="btn btn-sm rounded-circle link-normal" tabindex="0">
                          <svg width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                          </svg>
                        </a>
                      </li>
                    </ul>
                    <div class="text-muted small d-md-none" id="mobile-page-info" role="status" aria-live="polite">
                      Showing results 1 to 30 of 180
                    </div>

                  </nav>

                </div>
              </div>

            </div>
          </div>
