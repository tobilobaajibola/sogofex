<?php
foreach ($product_sub_category as $product_sub_categories) {
	?>
  <li class="nav-item <?php if($product_category_id==$product_sub_categories['product_category_id']){echo 'active';}?>"><a class="nav-link" href="<?php echo base_url().'product/'.$product_sub_categories['slug_url'];?>"><?php echo $product_sub_categories['category_name'];?></a></li>
	
  <?php
}
?>