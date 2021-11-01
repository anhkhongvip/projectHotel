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
        @if(session("msg"))
            <div class="alert alert-success">
                {{session("msg")}}
            </div>
        @endif
        <div class="block-header block-header-default">
            <h3 class="block-title">Info</h3>
        </div>
        <div class="block-content">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <form action="{{route('rooms.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="dm-ecom-product-name">Name</label>
                            <input type="text" class="form-control" id="dm-ecom-product-name" name="room-name">
                        </div>
                        <div class="form-group">
                            <!-- CKEditor (js-ckeditor-inline + js-ckeditor ids are initialized in Helpers.ckeditor()) -->
                            <!-- For more info and examples you can check out http://ckeditor.com -->
                            <label>Description</label>
                            <textarea id="js-ckeditor" name="room-description"></textarea>
                        </div>

                        <div class="form-group">
                            <!-- Select2 (.js-select2 class is initialized in Helpers.select2()) -->
                            <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                            <label for="dm-ecom-product-category">Room's Type</label>
                            <select class="js-select2 form-control" id="dm-ecom-product-category" name="room_type" style="width: 100%;" data-placeholder="Choose one..">
                                <option value=""></option>
                                @foreach($roomtype as $type)
                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="dm-ecom-image">Image</label>
                                <input type="file" class="form-control" id="dm-ecom-image" name="images[]" multiple>
                            </div>
                        </div>

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
