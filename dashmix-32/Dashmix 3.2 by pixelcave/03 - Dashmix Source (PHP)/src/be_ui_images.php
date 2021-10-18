<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Images Overlay</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Elements</li>
                    <li class="breadcrumb-item active" aria-current="page">Images Overlay</li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Image Default -->
    <h2 class="content-heading">Image Default</h2>
    <div class="row items-push">
        <div class="col-md-4 animated fadeIn">
            <div class="options-container">
                <?php $dm->get_photo(1, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-black-75">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-2">Main Title</h3>
                        <h4 class="h6 text-white-75 mb-3">More Information</h4>
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                            <i class="fa fa-pencil-alt mr-1"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-danger" href="javascript:void(0)">
                            <i class="fa fa-times mr-1"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container">
                <?php $dm->get_photo(1, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-white-90">
                    <div class="options-overlay-content">
                        <h3 class="h4 mb-2">Main Title</h3>
                        <h4 class="h6 text-gray-dark mb-3">More Information</h4>
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                            <i class="fa fa-pencil-alt mr-1"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-danger" href="javascript:void(0)">
                            <i class="fa fa-times mr-1"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container">
                <?php $dm->get_photo(1, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-primary-dark-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-2">Main Title</h3>
                        <h4 class="h6 text-white-75 mb-3">More Information</h4>
                        <a class="btn btn-sm btn-success" href="javascript:void(0)">
                            <i class="fa fa-thumbs-up mr-1"></i> Like
                        </a>
                        <a class="btn btn-sm btn-info" href="javascript:void(0)">
                            <i class="fa fa-save mr-1"></i> Save
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Image Default -->

    <!-- Image Zoom In -->
    <h2 class="content-heading">Image Zoom In <small><code class="text-lowercase">.fx-item-zoom-in</code></small></h2>
    <div class="row items-push">
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in">
                <?php $dm->get_photo(2, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-black-75">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-2">Main Title</h3>
                        <h4 class="h6 text-white-75 mb-3">More Information</h4>
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                            <i class="fa fa-pencil-alt mr-1"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-danger" href="javascript:void(0)">
                            <i class="fa fa-times mr-1"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in">
                <?php $dm->get_photo(2, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-white-90">
                    <div class="options-overlay-content">
                        <h3 class="h4 mb-2">Main Title</h3>
                        <h4 class="h6 text-gray-dark mb-3">More Information</h4>
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                            <i class="fa fa-pencil-alt mr-1"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-danger" href="javascript:void(0)">
                            <i class="fa fa-times mr-1"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in">
                <?php $dm->get_photo(2, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-primary-dark-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-2">Main Title</h3>
                        <h4 class="h6 text-white-75 mb-3">More Information</h4>
                        <a class="btn btn-sm btn-success" href="javascript:void(0)">
                            <i class="fa fa-thumbs-up mr-1"></i> Like
                        </a>
                        <a class="btn btn-sm btn-info" href="javascript:void(0)">
                            <i class="fa fa-save mr-1"></i> Save
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Image Zoom In -->

    <!-- Image Rotate Right -->
    <h2 class="content-heading">Image Rotate Right <small><code class="text-lowercase">.fx-item-rotate-r</code></small></h2>
    <div class="row items-push">
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-rotate-r">
                <?php $dm->get_photo(3, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-black-75">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-2">Main Title</h3>
                        <h4 class="h6 text-white-75 mb-3">More Information</h4>
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                            <i class="fa fa-pencil-alt mr-1"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-danger" href="javascript:void(0)">
                            <i class="fa fa-times mr-1"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-rotate-r">
                <?php $dm->get_photo(3, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-white-90">
                    <div class="options-overlay-content">
                        <h3 class="h4 mb-2">Main Title</h3>
                        <h4 class="h6 text-gray-dark mb-3">More Information</h4>
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                            <i class="fa fa-pencil-alt mr-1"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-danger" href="javascript:void(0)">
                            <i class="fa fa-times mr-1"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-rotate-r">
                <?php $dm->get_photo(3, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-primary-dark-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-2">Main Title</h3>
                        <h4 class="h6 text-white-75 mb-3">More Information</h4>
                        <a class="btn btn-sm btn-success" href="javascript:void(0)">
                            <i class="fa fa-thumbs-up mr-1"></i> Like
                        </a>
                        <a class="btn btn-sm btn-info" href="javascript:void(0)">
                            <i class="fa fa-save mr-1"></i> Save
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Image Rotate Right -->

    <!-- Image Rotate Left -->
    <h2 class="content-heading">Image Rotate Left <small><code class="text-lowercase">.fx-item-rotate-l</code></small></h2>
    <div class="row items-push">
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-rotate-l">
                <?php $dm->get_photo(4, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-black-75">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-2">Main Title</h3>
                        <h4 class="h6 text-white-75 mb-3">More Information</h4>
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                            <i class="fa fa-pencil-alt mr-1"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-danger" href="javascript:void(0)">
                            <i class="fa fa-times mr-1"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-rotate-l">
                <?php $dm->get_photo(4, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-white-90">
                    <div class="options-overlay-content">
                        <h3 class="h4 mb-2">Main Title</h3>
                        <h4 class="h6 text-gray-dark mb-3">More Information</h4>
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                            <i class="fa fa-pencil-alt mr-1"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-danger" href="javascript:void(0)">
                            <i class="fa fa-times mr-1"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-rotate-l">
                <?php $dm->get_photo(4, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-primary-dark-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-2">Main Title</h3>
                        <h4 class="h6 text-white-75 mb-3">More Information</h4>
                        <a class="btn btn-sm btn-success" href="javascript:void(0)">
                            <i class="fa fa-thumbs-up mr-1"></i> Like
                        </a>
                        <a class="btn btn-sm btn-info" href="javascript:void(0)">
                            <i class="fa fa-save mr-1"></i> Save
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Image Rotate Left -->

    <!-- Options Slide Left -->
    <h2 class="content-heading">Overlay Slide Left <small><code class="text-lowercase">.fx-overlay-slide-left</code></small></h2>
    <div class="row items-push">
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-slide-left">
                <?php $dm->get_photo(12, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-black-75">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-2">Main Title</h3>
                        <h4 class="h6 text-white-75 mb-3">More Information</h4>
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                            <i class="fa fa-pencil-alt mr-1"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-danger" href="javascript:void(0)">
                            <i class="fa fa-times mr-1"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-slide-left">
                <?php $dm->get_photo(12, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-white-90">
                    <div class="options-overlay-content">
                        <h3 class="h4 mb-2">Main Title</h3>
                        <h4 class="h6 text-gray-dark mb-3">More Information</h4>
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                            <i class="fa fa-pencil-alt mr-1"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-danger" href="javascript:void(0)">
                            <i class="fa fa-times mr-1"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-slide-left">
                <?php $dm->get_photo(12, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-primary-dark-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-2">Main Title</h3>
                        <h4 class="h6 text-white-75 mb-3">More Information</h4>
                        <a class="btn btn-sm btn-success" href="javascript:void(0)">
                            <i class="fa fa-thumbs-up mr-1"></i> Like
                        </a>
                        <a class="btn btn-sm btn-info" href="javascript:void(0)">
                            <i class="fa fa-save mr-1"></i> Save
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Options Slide Left -->

    <!-- Options Slide Right -->
    <h2 class="content-heading">Overlay Slide Right <small><code class="text-lowercase">.fx-overlay-slide-right</code></small></h2>
    <div class="row items-push">
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-slide-right">
                <?php $dm->get_photo(16, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-black-75">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-2">Main Title</h3>
                        <h4 class="h6 text-white-75 mb-3">More Information</h4>
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                            <i class="fa fa-pencil-alt mr-1"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-danger" href="javascript:void(0)">
                            <i class="fa fa-times mr-1"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-slide-right">
                <?php $dm->get_photo(16, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-white-90">
                    <div class="options-overlay-content">
                        <h3 class="h4 mb-2">Main Title</h3>
                        <h4 class="h6 text-gray-dark mb-3">More Information</h4>
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                            <i class="fa fa-pencil-alt mr-1"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-danger" href="javascript:void(0)">
                            <i class="fa fa-times mr-1"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-slide-right">
                <?php $dm->get_photo(16, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-primary-dark-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-2">Main Title</h3>
                        <h4 class="h6 text-white-75 mb-3">More Information</h4>
                        <a class="btn btn-sm btn-success" href="javascript:void(0)">
                            <i class="fa fa-thumbs-up mr-1"></i> Like
                        </a>
                        <a class="btn btn-sm btn-info" href="javascript:void(0)">
                            <i class="fa fa-save mr-1"></i> Save
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Options Slide Right -->

    <!-- Options Slide Down -->
    <h2 class="content-heading">Overlay Slide Down <small><code class="text-lowercase">.fx-overlay-slide-down</code></small></h2>
    <div class="row items-push">
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                <?php $dm->get_photo(7, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-black-75">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-2">Main Title</h3>
                        <h4 class="h6 text-white-75 mb-3">More Information</h4>
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                            <i class="fa fa-pencil-alt mr-1"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-danger" href="javascript:void(0)">
                            <i class="fa fa-times mr-1"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                <?php $dm->get_photo(7, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-white-90">
                    <div class="options-overlay-content">
                        <h3 class="h4 mb-2">Main Title</h3>
                        <h4 class="h6 text-gray-dark mb-3">More Information</h4>
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                            <i class="fa fa-pencil-alt mr-1"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-danger" href="javascript:void(0)">
                            <i class="fa fa-times mr-1"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                <?php $dm->get_photo(7, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-primary-dark-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-2">Main Title</h3>
                        <h4 class="h6 text-white-75 mb-3">More Information</h4>
                        <a class="btn btn-sm btn-success" href="javascript:void(0)">
                            <i class="fa fa-thumbs-up mr-1"></i> Like
                        </a>
                        <a class="btn btn-sm btn-info" href="javascript:void(0)">
                            <i class="fa fa-save mr-1"></i> Save
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Options Slide Down -->

    <!-- Options Slide Top -->
    <h2 class="content-heading">Overlay Slide Top <small><code class="text-lowercase">.fx-overlay-slide-top</code></small></h2>
    <div class="row items-push">
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-slide-top">
                <?php $dm->get_photo(8, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-black-75">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-2">Main Title</h3>
                        <h4 class="h6 text-white-75 mb-3">More Information</h4>
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                            <i class="fa fa-pencil-alt mr-1"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-danger" href="javascript:void(0)">
                            <i class="fa fa-times mr-1"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-slide-top">
                <?php $dm->get_photo(8, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-white-90">
                    <div class="options-overlay-content">
                        <h3 class="h4 mb-2">Main Title</h3>
                        <h4 class="h6 text-gray-dark mb-3">More Information</h4>
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                            <i class="fa fa-pencil-alt mr-1"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-danger" href="javascript:void(0)">
                            <i class="fa fa-times mr-1"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-slide-top">
                <?php $dm->get_photo(8, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-primary-dark-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-2">Main Title</h3>
                        <h4 class="h6 text-white-75 mb-3">More Information</h4>
                        <a class="btn btn-sm btn-success" href="javascript:void(0)">
                            <i class="fa fa-thumbs-up mr-1"></i> Like
                        </a>
                        <a class="btn btn-sm btn-info" href="javascript:void(0)">
                            <i class="fa fa-save mr-1"></i> Save
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Options Slide Top -->

    <!-- Options Zoom In -->
    <h2 class="content-heading">Overlay Zoom In <small><code class="text-lowercase">.fx-overlay-zoom-in</code></small></h2>
    <div class="row items-push">
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-zoom-in">
                <?php $dm->get_photo(21, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-black-75">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-2">Main Title</h3>
                        <h4 class="h6 text-white-75 mb-3">More Information</h4>
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                            <i class="fa fa-pencil-alt mr-1"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-danger" href="javascript:void(0)">
                            <i class="fa fa-times mr-1"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-zoom-in">
                <?php $dm->get_photo(21, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-white-90">
                    <div class="options-overlay-content">
                        <h3 class="h4 mb-2">Main Title</h3>
                        <h4 class="h6 text-gray-dark mb-3">More Information</h4>
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                            <i class="fa fa-pencil-alt mr-1"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-danger" href="javascript:void(0)">
                            <i class="fa fa-times mr-1"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-zoom-in">
                <?php $dm->get_photo(21, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-primary-dark-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-2">Main Title</h3>
                        <h4 class="h6 text-white-75 mb-3">More Information</h4>
                        <a class="btn btn-sm btn-success" href="javascript:void(0)">
                            <i class="fa fa-thumbs-up mr-1"></i> Like
                        </a>
                        <a class="btn btn-sm btn-info" href="javascript:void(0)">
                            <i class="fa fa-save mr-1"></i> Save
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Options Zoom In -->

    <!-- Options Zoom Out -->
    <h2 class="content-heading">Overlay Zoom Out <small><code class="text-lowercase">.fx-overlay-zoom-out</code></small></h2>
    <div class="row items-push">
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-zoom-out">
                <?php $dm->get_photo(10, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-black-75">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-2">Main Title</h3>
                        <h4 class="h6 text-white-75 mb-3">More Information</h4>
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                            <i class="fa fa-pencil-alt mr-1"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-danger" href="javascript:void(0)">
                            <i class="fa fa-times mr-1"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-zoom-out">
                <?php $dm->get_photo(10, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-white-90">
                    <div class="options-overlay-content">
                        <h3 class="h4 mb-2">Main Title</h3>
                        <h4 class="h6 text-gray-dark mb-3">More Information</h4>
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                            <i class="fa fa-pencil-alt mr-1"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-danger" href="javascript:void(0)">
                            <i class="fa fa-times mr-1"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-zoom-out">
                <?php $dm->get_photo(10, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-primary-dark-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-2">Main Title</h3>
                        <h4 class="h6 text-white-75 mb-3">More Information</h4>
                        <a class="btn btn-sm btn-success" href="javascript:void(0)">
                            <i class="fa fa-thumbs-up mr-1"></i> Like
                        </a>
                        <a class="btn btn-sm btn-info" href="javascript:void(0)">
                            <i class="fa fa-save mr-1"></i> Save
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Options Zoom Out -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
