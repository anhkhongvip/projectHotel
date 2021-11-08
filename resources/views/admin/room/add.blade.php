@extends('layouts.layoutAdmin')
@section('content')

    <!-- Page Content -->
    <div class="content">
        <!-- Quick Overview + Actions -->
        <div class="row row-deck">
            <div class="col-6 col-lg-4">
                <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_orders.html">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 mb-1">250</div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            Pending
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-4">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 mb-1">29</div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            Available
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_product_edit.html">
                    <div class="block-content py-5">
                        <div class="font-size-h3 text-danger mb-1">
                            <i class="fa fa-times"></i>
                        </div>
                        <p class="font-w600 font-size-sm text-danger text-uppercase mb-0">
                            Remove Product
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Quick Overview + Actions -->

        <!-- Info -->
        <div class="block block-rounded">
{{--            @if(session("msg"))--}}
{{--                <div class="alert alert-success">--}}
{{--                    {{session("msg")}}--}}
{{--                </div>--}}
{{--            @endif--}}
            <div class="block-header block-header-default">
                <h3 class="block-title">Info</h3>
            </div>
            <div class="block-content">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <form action="{{route('roomtype.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="dm-ecom-product-name">Name</label>
                                <input type="text" class="form-control" id="dm-ecom-product-name" name="room_type_name">
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="dm-ecom-product-price">Room Type Price($)</label>
                                    <input type="text" class="form-control" id="dm-ecom-product-price" name="room_type_price">
                                </div>
                            </div>

{{--                            <div class="form-group">--}}
{{--                                <label for="dm-post-add-excerpt">Excerpt</label>--}}
{{--                                <textarea class="form-control" id="dm-post-add-excerpt" name="room_type_excerpt" rows="3" placeholder="Enter an excerpt.."></textarea>--}}
{{--                                <div class="form-text text-muted font-size-sm font-italic">Visible on blog post list as a small description of the post.</div>--}}
{{--                            </div>--}}

                            <div class="form-group">
                                <!-- CKEditor (js-ckeditor-inline + js-ckeditor ids are initialized in Helpers.ckeditor()) -->
                                <!-- For more info and examples you can check out http://ckeditor.com -->
                                <label>Description</label>
                                <textarea id="js-ckeditor" name="room_type_description"></textarea>
                            </div>

{{--                            <div class="form-group">--}}
{{--                                <label for="dm-ecom-product-name">Room Size</label>--}}
{{--                                <input type="text" class="form-control" id="room_type_size" name="room_type_size">--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label for="dm-ecom-product-name">Occupancy</label>--}}
{{--                                <input type="text" class="form-control" id="room_type_occupancy" name="room_type_occupancy">--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label for="dm-ecom-product-name">Bed Size</label>--}}
{{--                                <input type="text" class="form-control" id="room_type_bed_size" name="room_type_bed_size">--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label for="dm-ecom-product-name">Swimming Pool</label>--}}
{{--                                <select class="js-select2 form-control" id="dm-ecom-product-category" name="swimming_pool" style="width: 100%;" data-placeholder="Choose one..">--}}
{{--                                <option value="Yes">Yes</option>--}}
{{--                                <option value="No">No</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}

                            <div class="form-group row">
                                <div class="col-xl-6">
                                    <label>Featured Image</label>
                                    <div class="custom-file">
                                        <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                        <input type="file" class="custom-file-input" id="dm-post-add-image" name="image" data-toggle="custom-file-input">
                                        <label class="custom-file-label" for="dm-post-add-image">Choose an image</label>
                                    </div>
                                </div>
                            </div>

{{--                            <div class="form-group row">--}}
{{--                                <div class="col-xl-6">--}}
{{--                                    <label>Detail Image</label>--}}
{{--                                    <div class="custom-file">--}}
{{--                                        <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->--}}
{{--                                        <input type="file" class="custom-file-input" id="dm-post-add-image" name="detail_image[]" data-toggle="custom-file-input" multiple>--}}
{{--                                        <label class="custom-file-label" for="dm-post-add-image">Choose an image</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <div class="form-group">
                                <button type="submit" class="btn btn-alt-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Info -->

    </div>
    <!-- END Page Content -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

@endsection
