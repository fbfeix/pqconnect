<!DOCTYPE html>
<html>
  <?php
get_header();
?>  
</head>
  <body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Site or application content here -->

    <header>
      <div class="flex">
        <div class="left-sided">
          <h1><a href="<?php echo home_url(); ?>">Passives Internet Einkommen</a></h1>
        </div>

        <div class="right-sided">
          <nav>
            <ul class="site-list">
            <?php wp_list_pages(array( 'title_li' => null )); ?>
              </ul>
            <!--<a href="#">Gib dein Feedback</a>-->
          </nav>
        </div>
      </div>
    </header>

    <article>
            
<?php

if(is_home())
{    
    if(have_posts()) : while( have_posts()) : the_post();   
?>

                    <section class="home-item">
                      <h3>
                         <a href="<?php the_permalink() ?>" style="color: #000;"><?php the_title(); ?></a>
                      </h3>
                        
                    </section>
                    
<?php
    endwhile; endif;
} // end of if(is_home())




if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                    <div class="entry"><?php the_content(); ?></div>
                    
                    <br/><br/>
                    
                    </div>
                    <?php endwhile; endif; 

?>
    </article>

    <!-- Site or application content here : end -->
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <script>window.jQuery || document.write('<script src="lib/jquery/jquery-2.1.3.min.js"><\/script>')</script>
    <script src="js/app.js"></script>
  </body>
</html>
