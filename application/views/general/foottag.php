  <script src="<?php echo base_url();?>assets/js/core.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/custom.js"></script>
 <script type="text/javascript">
      $(document).ready(function($){

        $('[data-load-box]').each(function(){
           
           var load_box = $(this).data('load-box');
           // var limit = $(this).data('top-tour-in-each-category-limit');
           var $this = $(this);

           $.ajax({
             url: '<?php echo base_url()?>boxes/' + load_box,
             type:'get',
             success:function(dt){
               $this.html(dt);
             }

           });

        });


  })

    </script>

    <script type="text/javascript">

  function call_ajax_boxes($el,url,$wait_text){
                
                $el.html($wait_text);
                 $.ajax({
                   type: "get",
                   url: "<?php echo base_url(); ?>"+ url,
                   // url: ab_url+ url,
         
                   success: function(data){
                      $el.html(data);             
                   }
         
                 });  
             }

// call_ajax_boxes($('#listapplications'),'boxes/listapplications/10','Loading testimonials ...');

function call_ajax_boxes_data()
{
     $('[data-load-general-data]').each(function(){
           var load_general_data_url = $(this).data('load-general-data');
           var $this = $(this);
           $.ajax({
              url: load_general_data_url,
             type:'get',
             success:function(dt){
               $this.html(dt);
             }
           });
        });
}
call_ajax_boxes_data();
</script>
