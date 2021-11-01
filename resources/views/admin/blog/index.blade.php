@extends('layouts.layoutAdmin')
@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Manage All Posts</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item">Blog</li>
                        <li class="breadcrumb-item active" aria-current="page">Manage</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content content-full">
        <!-- Posts Statistics -->
        <div class="row text-center">
            <div class="col-6 col-xl-3">
                <!-- All Posts -->
                <a class="block block-rounded" href="be_pages_blog_post_manage.html">
                    <div class="block-content block-content-full">
                        <div class="py-md-3">
                            <div class="py-3 d-none d-md-block">
                                <i class="far fa-2x fa-file-alt opacity-50"></i>
                            </div>
                            <p class="font-size-h3 font-w700 mb-0">
                                150
                            </p>
                            <p class="text-muted mb-0">
                                All Posts
                            </p>
                        </div>
                    </div>
                </a>
                <!-- END All Posts -->
            </div>
            <div class="col-6 col-xl-3">
                <!-- Active Posts -->
                <a class="block block-rounded" href="be_pages_blog_post_manage.html">
                    <div class="block-content block-content-full">
                        <div class="py-md-3">
                            <div class="py-3 d-none d-md-block">
                                <i class="far fa-2x fa-eye opacity-50"></i>
                            </div>
                            <p class="font-size-h3 font-w700 mb-0">
                                140
                            </p>
                            <p class="text-muted mb-0">
                                Active
                            </p>
                        </div>
                    </div>
                </a>
                <!-- END Active Posts -->
            </div>
            <div class="col-6 col-xl-3">
                <!-- Draft Posts -->
                <a class="block block-rounded" href="be_pages_blog_post_manage.html">
                    <div class="block-content block-content-full">
                        <div class="py-md-3">
                            <div class="py-3 d-none d-md-block">
                                <i class="fa fa-2x fa-pencil-alt opacity-50"></i>
                            </div>
                            <p class="font-size-h3 font-w700 mb-0">
                                10
                            </p>
                            <p class="text-muted mb-0">
                                Drafts
                            </p>
                        </div>
                    </div>
                </a>
                <!-- END Draft Posts -->
            </div>
            <div class="col-6 col-xl-3">
                <!-- New Post -->
                <a class="block block-rounded" href="{{route('blog.create')}}">
                    <div class="block-content block-content-full">
                        <div class="py-md-3">
                            <div class="py-3 d-none d-md-block">
                                <i class="fa fa-2x fa-plus text-success-light"></i>
                            </div>
                            <p class="font-size-h3 font-w700 mb-0">
                                <i class="fa fa-plus text-success-light mr-1 d-md-none"></i> New Post
                            </p>
                        </div>
                    </div>
                </a>
                <!-- END New Post -->
            </div>
        </div>
        <!-- Post Statistics -->

        <!-- Posts -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Posts</h3>
            </div>
            <div class="block-content">
                <!-- Search Posts -->
                <form class="push" action="be_pages_blog_post_manage.html" method="POST">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Posts..">
                        <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-fw fa-search"></i>
                                        </span>
                        </div>
                    </div>
                </form>
                <!-- END Search Posts -->

                <!-- Posts Table -->
                <table class="table table-striped table-borderless table-vcenter">
                    <thead class="thead-light">
                    <tr>
                        <th style="width: 60px;">ID</th>
                        <th style="width: 33%;">Title</th>
                        <th class="d-none d-xl-table-cell">Created</th>
                        <th style="width: 100px;" class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lsBlog as $blog)
                    <tr>
                        <td>
                            {{$blog->id}}
                        </td>
                        <td>
                            <a href="be_pages_blog_story.html">
                                {{$blog->title}}
                            </a>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            {{$blog->created_at}}
                        </td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-light" href="{{route('blog.edit', $blog->id)}}">
                                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
                            </a>
                            <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- END Posts Table -->

                <!-- Pagination -->
                <div class="shop_pagination_area wow fadeInUp" data-wow-delay="1.1s">
                    {{$lsBlog->links("pagination::bootstrap-4")}}
                </div>
            </div>
        </div>
        <!-- END Posts -->
    </div>
    <!-- END Page Content -->
@endsection
