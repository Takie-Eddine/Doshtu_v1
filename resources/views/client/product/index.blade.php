@extends('client_layout.client')

@section('title','Shop')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/wizard/bs-stepper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/' . getFolder() . '/plugins/forms/form-wizard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/' . getFolder() . '/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/'.getFolder().'/plugins/extensions/ext-component-sliders.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/'.getFolder().'/pages/app-ecommerce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/'.getFolder().'/plugins/extensions/ext-component-toastr.css')}}">

@endsection

@section('content')

<div class="app-content content ecommerce-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Products</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('client.client')}}">Home</a>
                                </li>

                                </li>
                                <li class="breadcrumb-item active">Products
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">

                </div>
            </div>
        </div>
        <div class="content-detached ">
            <div class="content-body">
                <!-- E-commerce Content Section Starts -->
                <section id="ecommerce-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="ecommerce-header-items">
                                <div class="result-toggler">
                                    <button class="navbar-toggler shop-sidebar-toggler" type="button" data-bs-toggle="collapse">
                                        <span class="navbar-toggler-icon d-block d-lg-none"><i data-feather="menu"></i></span>
                                    </button>

                                </div>
                                <div class="view-options d-flex">


                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @include('client.alerts.errors')
                @include('client.alerts.success')
                <!-- E-commerce Content Section Starts -->

                <!-- background Overlay when sidebar is shown  starts-->
                <div class="body-content-overlay"></div>
                <!-- background Overlay when sidebar is shown  ends-->

                <!-- E-commerce Search Bar Starts -->
                <section id="ecommerce-searchbar" class="ecommerce-searchbar">
                    <div class="row mt-1">
                        <div class="mb-1 col-md-2">
                            <div class="btn-group">
                                <button type="button" class="btn btn-flat-secondary"> categories</button>
                                <button type="button" class="btn btn-flat-secondary btn-lg dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    @if ($categories && $categories->count() > 0)
                                        @foreach ($categories as $category)
                                            <a class="dropdown-item" href="{{route('client.product.index.getbycategory',$category->id)}}">{{$category->name}}</a>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            @error('price')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-1 col-md-2">
                            <div class="btn-group">
                                <button type="button" class="btn btn-flat-secondary">Price</button>
                                <button type="button" class="btn btn-flat-secondary btn-lg dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href=""><=100</a>
                                    <a class="dropdown-item" href=""><=500</a>
                                    <a class="dropdown-item" href=""><=1000</a>
                                    <a class="dropdown-item" href=""><=1500</a>
                                    <a class="dropdown-item" href="">>=1500</a>
                                </div>
                            </div>
                            @error('categories')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-1 col-md-2">
                            <div class="btn-group">
                                <button type="button" class="btn btn-flat-secondary">Rating</button>
                                <button type="button" class="btn btn-flat-secondary btn-lg dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">

                                    <a class="dropdown-item" href="{{route('client.product.index.getbyrate',1)}}">1</a>
                                    <a class="dropdown-item" href="{{route('client.product.index.getbyrate',2)}}">2</a>
                                    <a class="dropdown-item" href="{{route('client.product.index.getbyrate',3)}}">3</a>
                                    <a class="dropdown-item" href="{{route('client.product.index.getbyrate',4)}}">4</a>
                                    <a class="dropdown-item" href="{{route('client.product.index.getbyrate',5)}}">5</a>

                                </div>
                            </div>
                            @error('rating')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-1 col-md-6">
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control search-product" id="shop-search" placeholder="Search Product" aria-label="Search..." aria-describedby="shop-search" />
                                <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- E-commerce Search Bar Ends -->

                <!-- E-commerce Products Starts -->
                <section id="ecommerce-products" class="grid-view">
                    @foreach ($products as $product)
                    <div class="card ecommerce-card">
                        <div class="item-img text-center">
                            <a href="{{route('client.product.details',$product -> slug)}}"  class="thumbnail product-thumbnail two-image">
                                <img class="img-fluid image-cover"
                                src="{{$product -> images[0] -> photo ?? ''}}"
                                alt=""
                                data-full-size-image-url="{{$product -> images[0] -> photo ?? ''}}"
                                width="600" height="600">

                            </a>
                        </div>
                        <div class="card-body">
                            <div class="item-wrapper">
                                <div class="item-rating">
                                    <ul class="unstyled-list list-inline">
                                        @if ($product->reviews_avg_rating != '')
                                            @for ($i = 0; $i < 5; $i++)
                                                <li class="ratings-list-item"><i data-feather="star" class="{{ round($product->reviews_avg_rating) <= $i ? 'unfilled-star' : 'filled-star' }} "></i></li>
                                            @endfor
                                        @else
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        @endif

                                    </ul>
                                </div>
                                <div>
                                    <h6 class="item-price">${{$product->price}}</h6>
                                </div>
                            </div>
                            <h6 class="item-name">
                                <a class="text-body" href="{{route('client.product.details',$product -> slug)}}">{{$product->name}}</a>
                                <span class="card-text item-company">By <a href="#" class="company-name">{{$product->title}}</a></span>
                            </h6>
                            <p class="card-text item-description"> {{$product->description}} </p>
                        </div>
                        <div class="item-options text-center">
                            <div class="item-wrapper">
                                <div class="item-cost">
                                    <h4 class="item-price">${{$product->price}} </h4>
                                </div>
                            </div>
                            <a href="{{route('client.product.addimportlist',$product-> id)}}" class="btn btn-light btn-wishlist">
                                <i data-feather="heart"></i>
                                <span>Import list</span>
                            </a>
                            <a href="{{route('client.product.details',$product -> slug)}}" class="btn btn-primary btn-cart">
                                <i data-feather="shopping-cart"></i>
                                <span class="add-to-cart">Add to store</span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    </section>
                <!-- E-commerce Products Ends -->

                <!-- E-commerce Pagination Starts -->

                <!-- E-commerce Pagination Ends -->

            </div>
        </div>

    </div>
</div>

@endsection
@section('scripts')

<script src="{{ asset('app-assets/vendors/js/forms/wizard/bs-stepper.min.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/forms/form-wizard.js') }}"></script>

<script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/forms/form-select2.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/wNumb.min.js')}}"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/nouislider.min.js')}}"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js')}}"></script>





@endsection

