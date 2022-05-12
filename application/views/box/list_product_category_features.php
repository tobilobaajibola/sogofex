 <?php 
                           foreach ($list_feature as $list_features) {
                           ?>
                           <div class="d-flex mb-3">

                              <div class="badge <?php if($list_features['feature_count']<1){ echo 'badge-danger';} else{ echo 'badge-success';}?> badge-soft badge-ico-sm rounded-circle float-start">
                                 <i class="fi <?php if($list_features['feature_count']<1){ echo 'fi-close';}else{ echo 'fi-check';}?>"></i>
                              </div>

                              <p class="text-dark font-weight-light mb-0 pl--12 pr--12">
                                 <?php echo $list_features['features'];?>
                              </p>

                           </div>
                           <?php    
                           }
                           ?>