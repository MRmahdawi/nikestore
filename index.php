<?php get_header();?>

<!-- header section ends -->

<!-- home section starts  -->
   
<!-- home section ends -->

<!-- service section starts  -->

<section class="service">

    <div class="box-container">

        <div class="box">
            <i class="fas fa-shipping-fast"></i>
            <h3>تحویل سریع</h3>
        </div>

        <div class="box">
            <i class="fas fa-undo"></i>
            <h3>10 روز تعویض</h3>
        </div>

        <div class="box">
            <i class="fas fa-headset"></i>
            <h3>پشتیبانی 24 * 7</h3>
        </div>

    </div>

</section>

<!-- service section ends -->

<!-- products section starts  -->

<section class="products" id="products">

    <h1 class="heading"> آخرین <span>محصولات</span> </h1>

    <div class="box-container">


    <?php
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 9,
                    );
                    $my_query = new WP_Query($args);
                    while ($my_query->have_posts()):
                        $my_query->the_post();
                        $do_not_duplicate = $post->ID; ?>



        <div class="box">
            <!-- <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div> -->
            <?php the_post_thumbnail( 'imageProd' ); ?>
            <div class="content">
                <h3><?php the_title();?></h3> 
                <div class="price"> <span><?php if ($price_html = $product->get_price_html()) : ?>
                                      <?php echo $price_html; ?>
                                    <?php endif; ?></span></div>
                <!-- <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div> -->
                <a href="<?php the_permalink(); ?>" class="btn"> مشاهده جزئیات محصول</a>
            </div>
        </div>
        <?php endwhile;
                    wp_reset_postdata(); ?>
        <!-- <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-2.png" alt="">
            <<div class="content">
                <h3>کفش های نایک</h3>
                <div class="price">$120.99 <span>$150.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">افزودن به سبد خرید</a>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-3.png" alt="">
            <div class="content">
                <h3>کفش های نایک</h3>
                <div class="price">$120.99 <span>$150.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">افزودن به سبد خرید</a>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-4.png" alt="">
            <div class="content">
                <h3>کفش های نایک</h3>
                <div class="price">$120.99 <span>$150.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">افزودن به سبد خرید</a>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-5.png" alt="">
            <div class="content">
                <h3>کفش های نایک</h3>
                <div class="price">$120.99 <span>$150.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">افزودن به سبد خرید</a>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-6.png" alt="">
            <div class="content">
                <h3>کفش های نایک</h3>
                <div class="price">$120.99 <span>$150.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">افزودن به سبد خرید</a>
            </div>
        </div> -->

    </div>

</section>

<!-- products section ends -->

<!-- featured section starts  -->

<section class="featured" id="featured">

    <h1 class="heading"> محصولات <span>پرفروش</span></h1>

<div>

</div>
<!-- <?php
                    //$args = array(
                    //    'post_type' => 'product',
                   //     'posts_per_page' => 9,
                  //  );
                  //  $my_query = new WP_Query($args);
                  //  while ($my_query->have_posts()):
                  //      $my_query->the_post();
                  //      $do_not_duplicate = $post->ID; ?> -->

<?php
 $arms = array(
'post_type' => 'product',
'posts_per_page' => '12',
'offset' => 0,
 'order' => 'DESC',
'post_status' => 'publish',
'meta_key' => 'total_sales',
'orderby' => 'meta_value_num',
 );
$the_query = new WP_Query( $arms ); ?>
<?php if ( $the_query->have_posts() ) : ?> 
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="row">
        <div class="image-container">
            <div class="small-image">
                <!-- <img src="" class="featured-image-1" alt=""> --> <?php do_action( 'woocommerce_product_thumbnails' ); ?>
                

            </div>
            <div class="big-image">
                <!-- <img src="" class="big-image-1" alt=""> --> <?php woocommerce_template_loop_product_thumbnail() ?>
            </div>
        </div>
        <div class="content">
            <h3><a  href="<?php the_permalink();?>"> <?php the_title();?></a> </h3>
            <div class="stars">
                <!-- <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i> -->
 </div>

            <p> <?php the_excerpt();?></p>
            <div class="price"><?php if ($price_html = $product->get_price_html()) : ?>
                                        <?php echo $price_html; ?>
                                    <?php endif; ?></div>
           
            <span class="btn"> <?php woocommerce_template_loop_add_to_cart(); ?></span>
        </div>
    </div>
    <?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
 <p><?php _e( 'محصولی یافت نشد' ); ?></p>
<?php endif; ?>

</section>

<!-- featured section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> بازخورد <span>مشتریان</span> </h1>

<!-- <div class="box-container"> -->
    <!-- <div class="box">  -->
        
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('comments-site')) : else : ?><?php endif; ?>

         
     
        <!-- </div> -->


    <!-- </div> -->

</section>

<!-- review section ends -->

<!-- newsletter section starts  -->

<section class="newsletter">

    <div class="content">
        <h3>خبرنامه ماهانه</h3>
        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
        <form action="">
            <input type="email" placeholder="ایمیل خود را وارد کنید" class="box">
            <input type="submit" value="عضویت" class="btn">
        </form>
    </div>

</section>

<!-- newsletter section ends -->

<!-- footer section  -->

<?php get_footer();?>