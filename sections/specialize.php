<section class="bhv-service bg-gradient3 pad-tb deep-dark">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="common-heading">
              <span>Service</span>
              <h2 class="mb30">Specializing In</h2>
            </div>
          </div>
        </div>
        <div class="row upset link-hover shape-num justify-content-center">
          <!-- <div
            class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeIn"
            data-wow-delay=".2s"
          >
            <div
              class="s-block"
              data-tilt
              data-tilt-max="5"
              data-tilt-speed="1000"
            >
              <div class="s-card-icon">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/images/icons/branding.svg"
                  alt="service"
                  class="img-fluid"
                />
              </div>
              <h4>Logo & Branding Service</h4>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
              </p>
              <a href="javascript:void(0)"
                >Learn More <i class="fas fa-chevron-right fa-icon"></i
              ></a>
            </div>
          </div> -->
          <!-- <div
            class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeIn"
            data-wow-delay=".5s"
          >
            <div
              class="s-block"
              data-tilt
              data-tilt-max="5"
              data-tilt-speed="1000"
            >
              <div class="s-card-icon">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/images/icons/development.svg"
                  alt="service"
                  class="img-fluid"
                />
              </div>
              <h4>Website Design & Development</h4>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
              </p>
              <a href="javascript:void(0)"
                >Learn More <i class="fas fa-chevron-right fa-icon"></i
              ></a>
            </div>
          </div> -->
        <?php 
         $ourclient = new WP_Query(array(
         'post_type' =>'specialize',
         'posts_per_page' =>'3'
        ));
     ?>
     <?php rewind_posts(); ?>
     <?php if(have_posts()) : while($ourclient->have_posts()) : $ourclient->the_post(); ?>
            <?php $post_thumbnail_id = get_post_thumbnail_id(); $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id ); ?>
          <div
            class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeIn"
            data-wow-delay=".8s"
           >
            <div
              class="s-block"
              data-tilt
              data-tilt-max="5"
              data-tilt-speed="1000"
            >
              <div class="s-card-icon">
                <img
                  src="<?php echo $post_thumbnail_url; ?>"
                  alt="service"
                  class="img-fluid"
                />
              </div>
              <h4><?php echo wp_trim_words( get_the_title(), 8, '...' );?></h4>
              <p>
              <?php echo wp_trim_words( get_the_content(), 49, '...' );?>
              </p>
              <a href="<?php echo get_permalink();  ?>"
                >Learn More <i class="fas fa-chevron-right fa-icon"></i
              ></a>
            </div>
          </div>
          <?php endwhile; endif; ?>








        </div>
        <div class="-cta-btn mt70">
          <div
            class="free-cta-title v-center wow zoomInDown"
            data-wow-delay="1.1s"
          >
            <p>Let's Start A <span>New Project Together</span></p>
            <a href="#" class="btn-main bg-btn2 lnk"
              >Get A Quote <i class="fas fa-chevron-right fa-icon"></i
              ><span class="circle"></span
            ></a>
          </div>
        </div>
      </div>
    </section>