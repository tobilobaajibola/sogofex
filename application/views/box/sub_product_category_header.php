<?php
foreach ($product_sub_category as $product_sub_categories) {
  ?>
   <li class="dropdown-item">
      <a class="dropdown-link" href="<?php echo base_url().'product/'.$product_sub_categories['slug_url'];?>">
        <span class="fw-medium"><?php echo $product_sub_categories['category_name'];?></span>
      </a>
    </li>
<?php
}
?>