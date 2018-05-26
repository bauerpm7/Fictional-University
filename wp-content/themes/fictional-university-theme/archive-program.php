<?php 
  get_header();
  pageBanner(array(
    'title' => 'All Programs',
    'subtitle' => 'There is somthing for everyone! Take a look around.'
  ));
  ?>
  <div class="container container--narrow page-section">
    <ul>
    <?php 
      while(have_posts()){
        the_post();?>
        <li>
          <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
          <p><?php the_excerpt(); ?></p>
        </li>
      <?php
      }

      echo paginate_links();
     ?>
    </ul>
  </div>  

<?php
  get_footer();
 ?>