
<div class="rpv-profiles-container">

    <?php 
        $args = array(
            'post_type' => 'profiles',
            'posts_per_page' => 1,
            // 'order' => 'Asc',
            // 'orderby' => 'date',
        );
        
        $query = new WP_Query($args);
        while( $query->have_posts() ) {
            $query->the_post();
            ?> 
                <div class="rpv-single-profile">
                    <div class="rpv-image-area">
                        <div class="rvp-logo">
                            <img src="https://corporate-africa.com/wp-content/uploads/2023/08/abulink.png" alt="">
                        </div>
                        <div class="rpv-profile-pic">
                            <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg" alt="">
                        </div>
                    </div>
                    <div class="rpv-content-area">
                        <?php echo get_post_meta( get_the_ID(), 'rpv_user_id', true );?>
                    </div>
                    <div class="rpv-profile-desc">
                        
                    </div>
                    <div class="rpv-start-chat">
                        <a href="https://corporate-africa.com/send-message/"> <?php _e( 'Start chat', 'restric-p-v' ) ?> </a>
                    </div>
                </div>
            <?php 
        }
    ?>

    <!-- <div class="rpv-single-profile">
        <div class="rpv-image-area">
            <div class="rvp-logo">
                <img src="https://corporate-africa.com/wp-content/uploads/2023/08/abulink.png" alt="">
            </div>
            <div class="rpv-profile-pic">
                <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg" alt="">
            </div>
        </div>
        <div class="rpv-content-area">

        </div>
        <div class="rpv-profile-desc">
            
        </div>
        <div class="rpv-start-chat">
        <a href="https://corporate-africa.com/send-message/"> <?php _e( 'Start chat', 'restric-p-v' ) ?> </a>
        </div>
    </div> -->
</div>