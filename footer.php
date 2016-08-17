<footer class="footer">
<div class="container">

<section  id="widget">
       <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : endif; ?>

<dic class="container pull-right">
  <div class="btn-group btn-group-sm pull-right" role="group" ><a href="#top" class="back-to-top">   <span class="glyphicon glyphicon-eject
" aria-hidden="true"></span>
 </a>
</div>

</div>
</section>
</div>
</footer>

<div class="container-fluid row footer2">
<div class="container">

           <h4  class=""> &Copy <?php echo date('Y'); ?><?php bloginfo('name');?></h4>


</div>

</div>




<?php wp_footer();?>

<script src="<?php bloginfo('template_url')?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_url')?>/js/bootstrap.min.js"></script>
</body>
</html>
