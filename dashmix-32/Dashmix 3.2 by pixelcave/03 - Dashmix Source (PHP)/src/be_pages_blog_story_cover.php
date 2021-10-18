<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Page specific configuration
$dm->l_header_style = 'dark-glass';
?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $dm->get_css('js/plugins/magnific-popup/magnific-popup.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $dm->assets_folder; ?>/media/photos/photo19@2x.jpg');">
    <div class="hero bg-black-50">
        <div class="hero-inner">
            <div class="content content-full text-center">
                <h1 class="display-4 font-w700 text-white mb-3 invisible" data-toggle="appear">
                    Exploring the mysterious mountains
                </h1>
                <h2 class="h3 font-w400 text-white-75 mb-5 invisible" data-toggle="appear" data-timeout="400">An adventure of a lifetime.</h2>
                <p class="invisible" data-toggle="appear" data-timeout="400">
                    <a class="badge badge-pill badge-dark font-size-base px-3 py-2 mr-2 m-1" href="javascript:void(0)">
                        <i class="fa fa-user-circle mr-1"></i> by John Doe
                    </a>
                    <span class="badge badge-pill badge-dark font-size-base px-3 py-2 m-1">
                        <i class="fa fa-clock mr-1"></i> 15 min read
                    </span>
                </p>
                <div class="invisible" data-toggle="appear" data-class="animated fadeInDown" data-timeout="500">
                    <a class="btn btn-hero-primary" data-toggle="scroll-to" data-speed="750" href="#example-blog-post">
                        <i class="fa fa-fw fa-arrow-down mr-1"></i> Read on..
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div id="example-blog-post" class="content content-full">
    <div class="row justify-content-center">
        <div class="col-sm-8 py-5">
            <!-- Story -->
            <!-- Magnific Popup (.js-gallery class is initialized in Helpers.magnific()) -->
            <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
            <article class="js-gallery story">
                <?php $dm->get_text('small'); ?>
                <?php $dm->get_text('medium'); ?>
                <div class="row gutters-tiny items-push push img-fluid-100">
                    <div class="col-12 animated fadeIn">
                        <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="<?php echo $dm->assets_folder; ?>/media/photos/photo20@2x.jpg">
                            <?php $dm->get_photo(20, true, 'img-fluid'); ?>
                        </a>
                    </div>
                    <div class="col-6 animated fadeIn">
                        <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="<?php echo $dm->assets_folder; ?>/media/photos/photo16@2x.jpg">
                            <?php $dm->get_photo(16, false, 'img-fluid'); ?>
                        </a>
                    </div>
                    <div class="col-6 animated fadeIn">
                        <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="<?php echo $dm->assets_folder; ?>/media/photos/photo17@2x.jpg">
                            <?php $dm->get_photo(17, false, 'img-fluid'); ?>
                        </a>
                    </div>
                </div>
                <?php $dm->get_text('medium', 2); ?>

                <h3>Hiking</h3>
                <?php $dm->get_text('small', 2); ?>

                <h3>Exploring</h3>
                <?php $dm->get_text('medium'); ?>
                <div class="row gutters-tiny items-push push img-fluid-100">
                    <div class="col-6 animated fadeIn">
                        <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="<?php echo $dm->assets_folder; ?>/media/photos/photo20@2x.jpg">
                            <?php $dm->get_photo(20, false, 'img-fluid'); ?>
                        </a>
                    </div>
                    <div class="col-6 animated fadeIn">
                        <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="<?php echo $dm->assets_folder; ?>/media/photos/photo7@2x.jpg">
                            <?php $dm->get_photo(7, false, 'img-fluid'); ?>
                        </a>
                    </div>
                </div>
                <?php $dm->get_text('medium'); ?>

                <h3>Inspiration</h3>
                <?php $dm->get_text('medium', 2); ?>
            </article>
            <!-- END Story -->

            <!-- Actions -->
            <div class="mt-5 d-flex justify-content-between push">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-light" data-toggle="tooltip" title="Like Story">
                        <i class="fa fa-thumbs-up text-primary"></i>
                    </button>
                    <button type="button" class="btn btn-light" data-toggle="tooltip" title="Recommend">
                        <i class="fa fa-heart text-danger"></i>
                    </button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-light dropdown-toggle" id="dropdown-blog-story" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-share-alt mr-1"></i> Share
                    </button>
                    <div class="dropdown-menu dropdown-menu-right font-size-sm" aria-labelledby="dropdown-blog-story">
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="fab fa-fw fa-facebook mr-1"></i> Facebook
                        </a>
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="fab fa-fw fa-twitter mr-1"></i> Twitter
                        </a>
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="fab fa-fw fa-linkedin mr-1"></i> LinkedIn
                        </a>
                    </div>
                </div>
            </div>
            <!-- END Actions -->

            <!-- Comments -->
            <div class="px-4 pt-4 rounded bg-white">
                <p class="font-size-sm">
                    <i class="fa fa-thumbs-up text-info"></i>
                    <i class="fa fa-heart text-danger"></i>
                    <a class="font-w600" href="javascript:void(0)"><?php echo $dm->get_name('male'); ?></a>,
                    <a class="font-w600" href="javascript:void(0)"><?php echo $dm->get_name('female'); ?></a>,
                    <a class="font-w600" href="javascript:void(0)">and 56 others</a>
                </p>
                <form action="be_pages_blog_story_cover.php" method="POST" onsubmit="return false;">
                    <input type="text" class="form-control form-control-alt" placeholder="Write a comment..">
                </form>
                <div class="pt-3 font-size-sm">
                    <div class="media">
                        <a class="img-link mr-2" href="javascript:void(0)">
                            <?php $dm->get_avatar(0, 'female', 32, true); ?>
                        </a>
                        <div class="media-body">
                            <p class="mb-1">
                                <a class="font-w600" href="javascript:void(0)"><?php echo $dm->get_name('female'); ?></a>
                                Vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.
                            </p>
                            <p>
                                <a class="mr-1" href="javascript:void(0)">Like</a>
                                <a href="javascript:void(0)">Comment</a>
                            </p>
                            <div class="media">
                                <a class="img-link mr-2" href="javascript:void(0)">
                                    <?php $dm->get_avatar(0, 'male', 32, true); ?>
                                </a>
                                <div class="media-body">
                                    <p class="mb-1">
                                        <a class="font-w600" href="javascript:void(0)"><?php echo $dm->get_name('male'); ?></a>
                                        Odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </p>
                                    <p>
                                        <a class="mr-1" href="javascript:void(0)">Like</a>
                                        <a href="javascript:void(0)">Comment</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media">
                        <a class="img-link mr-2" href="javascript:void(0)">
                            <?php $dm->get_avatar(0, 'male', 32, true); ?>
                        </a>
                        <div class="media-body">
                            <p class="mb-1">
                                <a class="font-w600" href="javascript:void(0)"><?php echo $dm->get_name('male'); ?></a>
                                Leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices.
                            </p>
                            <p>
                                <a class="mr-1" href="javascript:void(0)">Like</a>
                                <a href="javascript:void(0)">Comment</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Comments -->
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $dm->get_js('js/plugins/magnific-popup/jquery.magnific-popup.min.js'); ?>

<!-- Page JS Helpers (Magnific Popup Plugin) -->
<script>jQuery(function(){ Dashmix.helpers('magnific-popup'); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
