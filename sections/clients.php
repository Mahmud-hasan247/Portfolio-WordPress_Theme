<section class="clients-section pad-tb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="common-heading">
              <span>Happy customers</span>
              <h2>Some of My Clients</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="opl">
              <ul>
              <?php 
         $ourclient = new WP_Query(array(
         'post_type' =>'clients',
         'posts_per_page' =>'5'
        ));
     ?>
     <?php rewind_posts(); ?>
     <?php if(have_posts()) : while($ourclient->have_posts()) : $ourclient->the_post(); ?>
            <?php $post_thumbnail_id = get_post_thumbnail_id(); $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id ); ?>
                <li class="wow fadeIn" data-wow-delay=".2s">
                  <div class="clients-logo">
                    <img
                      src="<?php echo $post_thumbnail_url; ?>"
                      alt="text"
                      class="img-fluid"
                    />
                  </div>
                </li>
                <?php endwhile; endif; ?>
                <!-- <li class="wow fadeIn" data-wow-delay=".4s">
                  <div class="clients-logo">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/images/client/clients-2.png"
                      alt="text"
                      class="img-fluid"
                    />
                  </div>
                </li>
                <li class="wow fadeIn" data-wow-delay=".6s">
                  <div class="clients-logo">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/images/client/clients-3.png"
                      alt="text"
                      class="img-fluid"
                    />
                  </div>
                </li>
                <li class="wow fadeIn" data-wow-delay=".8s">
                  <div class="clients-logo">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/images/client/clients-4.png"
                      alt="text"
                      class="img-fluid"
                    />
                  </div>
                </li>
                <li class="wow fadeIn" data-wow-delay="1s">
                  <div class="clients-logo">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/images/client/clients-5.png"
                      alt="text"
                      class="img-fluid"
                    />
                  </div>
                </li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>