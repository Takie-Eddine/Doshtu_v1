@extends('client_layout.client')

@section('title', 'Edit')


@section('style')




    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/select/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/editors/quill/katex.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/editors/quill/monokai-sublime.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/editors/quill/quill.snow.css')}}">


    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/form-quill-editor.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/page-blog.css')}}">




@endsection


@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Product Edit</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('client.client')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('client.product.index')}}">Products</a>
                                </li>

                                <li class="breadcrumb-item active">Edit
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">

            </div>
        </div>
        <div class="content-body">
            <!-- Blog Edit -->
            <div class="blog-edit-wrapper">
                @include('supplier.alerts.errors')
                @include('supplier.alerts.success')
                <form action="{{route('client.product.push')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-7">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">

                                        <div class="author-info">
                                            <h4 class="mb-25">Content</h4>

                                        </div>
                                    </div>
                                    <!-- Form -->

                                            <div class="col-md-12 col-12">
                                                <div class="mb-2">
                                                    <label class="form-label" for="blog-edit-title">Title</label>
                                                    <input type="text" id="blog-edit-title" class="form-control" value="{{$product->name}}" name="name" />
                                                </div>
                                                @error('name')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <div class="mb-2">
                                                    <label class="form-label">Description</label>
                                                    <div id="blog-editor-wrapper">
                                                        <div id="blog-editor-container">
                                                            <div class="editor">
                                                                <textarea name="description" aria-valuetext="{{($product->description)}}">{{($product->description)}}</textarea>
                                                            </div>
                                                        </div>
                                                        @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <div class="col-md-12 col-12">
                                                    <div class="mb-2">
                                                        <label class="form-label" for="blog-edit-category">Tags</label>
                                                        @if ($product-> tags && count($product-> tags)>0)

                                                            <select id="blog-edit-category" class="select2 form-select" name="tags[]" multiple>
                                                                @foreach ($product-> tags as $tag)
                                                                <option value="{{$tag->id}}" selected>{{$tag->name}}</option>
                                                                @endforeach
                                                            </select>

                                                        @endif
                                                        @error('name')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                @enderror

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    <!--/ Form -->
                                </div>
                            </div>


                        <div class="col-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 mb-2">
                                            <div class="border rounded p-2">
                                                <h4 class="mb-1">Images</h4>
                                                <div class="d-flex flex-column flex-md-row">
                                                    <div class="featured-info">
                                                        <div class="row">
                                                            @if ($product->images && count($product->images)>0)
                                                                @foreach ($product-> images as $image)
                                                                    <div class="item thumb-container col-md-3 col-xs-12 pt-30">

                                                                        <img class="img-fluid thumb js-thumb  selected" src="{{$image->photo}}" alt="" >
                                                                    </div>
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border rounded p-2">
                                                <h4 class="mb-1">Details</h4>
                                                <div class="d-flex flex-column flex-md-row">
                                                    <div class="row">
                                                        <div class="mb-1 col-md-6">
                                                            <label class="form-label" for="price">Price</label>
                                                            <input type="text" id="price" name="price" value="${{$product->price}}"
                                                                class="form-control"  />
                                                            @error('price')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-1 col-md-6">
                                                            <label class="form-label" for="global_price">Compare at price</label>
                                                            <input type="text" id="global_price" name="global_price" value="${{$product->global_price}}"
                                                                class="form-control"  />
                                                            @error('global_price')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <label for="">profit margin:</label>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div>
                                                    <a href="{{route('client.product.editvariants',$product->id)}}" class="btn btn-light btn-wishlist">
                                                        <i data-feather="edit"></i>
                                                        <span>Edit Variants</span>
                                                    </a>
                                                    <a href="{{route('client.product.importlist')}}" class="btn btn-light btn-wishlist">
                                                        <i data-feather='truck'></i>
                                                        <span>Shipping Options</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                        <button type="submit" class="btn btn-primary me-1">Push to store</button>
                        <button type="reset" onclick="history.back()" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



@section('scripts')

<script src="{{asset('app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/editors/quill/katex.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/editors/quill/highlight.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/editors/quill/quill.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/pages/page-blog-edit.js')}}"></script>

@endsection

