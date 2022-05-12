<div class="blog-list">
                  
                 <?php
     $output = '';
      $outputdata = '';  
      $outputtail ='';

      $output = '            
                   ';
                  if(!empty($searchdetail ))  
 { 
    
     
      foreach ($searchdetail as $searchdetails)    
       {   
         

          $geo_address = str_replace(' ', '+', $searchdetails->address);
           $outputdata .= ' 
            <div class="news-block-three col-md-3 col-sm-6 col-xs-12 text-center">
                  <div class="blog-grid-item style-2">
                    <div class="post-thumbnail">
                      <a href="blog-detail.html"> 
                        <img src="'.base_url().'assets/images/location.jpeg" alt="" /> 
                      </a>
                    </div>
                    <div class="post-content">
                      
                      <a href="blog-detail.html">
                        <p class="entry-titl"><strong>'.$searchdetails->store_name.'</strong></p>
                      </a>
                      <div class="entry-meta">
                        <span class="posted-on">
                          <i class="ion-calendar"></i> 
                          <span>'.$searchdetails->branch_name.'</span>
                        </span>
                       
                      </div>
                      <div class="entry-content" style="height:100px"> 
                       '.$searchdetails->address.'
                      </div>
                      <div class="row">
                        <div class="entry-more col-md-12">
                          <a class="organik-btn small" href=" http://maps.google.com/?q='.$geo_address.'" target="_blank" >View Map</a>
                        </div>
                        <div class="entry-share text-center col-md-12">
                         
                          <span> <a target="_blank" href="#"><i class="fa fa-facebook"></i></a> </span> 
                          <span> <a target="_blank" href="#"><i class="fa fa-twitter"></i></a> </span> 
                          <span> <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a> </span>
                        </div>
                      </div>
                    </div>
                  </div>  
                </div>
           ';
        //  echo $outputdata; 
                
          }  
       echo $output; 
         echo $outputdata; 
         echo $outputtail; 
 }  
 
 else  
 {  
      echo 'No store for the area you have searched for';  
 } 
         $outputtail .= ' 
        ';
         ?>