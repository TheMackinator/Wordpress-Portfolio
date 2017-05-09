<?php
    $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
    ?>
    <!-- Page Content -->
    <div class="container">

        <hr class="featurette-divider">

        <!-- First Featurette -->
        <div class="featurette" id="about">
             <?php the_post_thumbnail( 'full', ['class' => 'featurette-image img-circle img-responsive pull-right'] ); ?>
            <img class="featurette-image img-circle img-responsive pull-right" src="<?php echo $image[0] ?>">
            <h2 class="featurette-heading"><?php the_title(); ?>
                <span class="text-muted"></span>
            </h2>
            <p class="lead"> <?php echo $post->post_content; ?></p>
        </div>

        <!-- Second Featurette
        <div class="featurette" id="services">
            <img class="featurette-image img-circle img-responsive pull-left" src="http://placehold.it/500x500">
            <h2 class="featurette-heading">The Second Heading
                <span class="text-muted">Is Pretty Cool Too.</span>
            </h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>

        <hr class="featurette-divider">

        <!-- Third Featurette
        <div class="featurette" id="contact">
            <img class="featurette-image img-circle img-responsive pull-right" src="http://placehold.it/500x500">
            <h2 class="featurette-heading">The Third Heading
                <span class="text-muted">Will Seal the Deal.</span>
            </h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>

        <hr class="featurette-divider"> -->



    </div>