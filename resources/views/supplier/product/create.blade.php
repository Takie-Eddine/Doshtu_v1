@extends('supplier_layout.supplier')

@section('title', 'Security')

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">

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
                        <h2 class="content-header-title float-start mb-0">Product</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('supplier.supplier')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('supplier.product.index')}}">Products</a>
                                </li>
                                <li class="breadcrumb-item active">Add
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
            <div class="row">
                <div class="col-12">
                    {{-- <ul class="nav nav-pills mb-2">
                        <!-- account -->
                        <li class="nav-item">
                            <a class="nav-link active"  href="{{route('supplier.product.create')}}">
                                <i data-feather="user" class="font-medium-3 me-50"></i>
                                <span class="fw-bold">Product</span>
                            </a>
                        </li>
                        <!-- security -->
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('supplier.product.variant')}}">
                                <i data-feather="lock" class="font-medium-3 me-50"></i>
                                <span class="fw-bold">Options</span>
                            </a>
                        </li>
                        <!-- billing and plans -->

                    </ul> --}}

                    <!-- security -->

                    <div class="card">
                        @include('supplier.alerts.errors')
                        @include('supplier.alerts.success')
                        <div class="card-header border-bottom">
                            <h4 class="card-title">Product Details</h4>
                        </div>
                        <div class="card-body pt-1">
                            <!-- form -->
                            {{-- <form class="validate-form" action="{{ route('supplier.product.store') }}" method="POST" enctype="multipart/form-data" name="registration">
                                @csrf





                            </form> --}}

                            <section class="form-control-repeater">
                                <div class="row">
                                    <!-- Invoice repeater -->
                                    <div class="col-12">
                                        <div class="card">

                                            <div class="card-body">
                                                <form action="{{route('supplier.product.store')}}" method="POST" enctype="multipart/form-data" class="invoice-repeater">

                                                    @csrf

                                                    <div class="row">
                                                        <div class="mb-1 col-md-6">
                                                            <label class="form-label" for="name">Product Name</label>
                                                            <input type="text" id="name" name="name" value="{{old('name')}}"
                                                                class="form-control" placeholder="product name" required  />
                                                            @error('name')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>


                                                    </div>
                                                    <div class="row">
                                                        <div >
                                                            <label  for="description">Description</label>
                                                            <textarea class="form-control " id="description"  rows="5"  name="description" value="">{!!old('description')!!}</textarea>
                                                            @error('description')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="mb-1 col-md-6">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="categories">Category</label>
                                                                <select name="categories[]" class="select2 form-select" multiple="multiple" id="default-select-multi">
                                                                    @if ($categories && $categories->count() > 0)
                                                                        @foreach ($categories as $category)
                                                                            <option value="{{ $category->id }}">{{ $category->name }}
                                                                            </option>
                                                                        @endforeach
                                                                    @endif
                                                                </select>
                                                            </div>


                                                            @error('categories.0')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="mb-1 col-md-6">
                                                            <div class="mb-1">
                                                                <label class="form-label" for="tags">Tags</label>
                                                                <select name="tags[]" class="select2 form-select opts" multiple="multiple" id="default-select-multi1">
                                                                    @if ($tags && $tags->count() > 0)
                                                                        @foreach ($tags as $tag)
                                                                            <option value="{{ $tag->id }}">{{ $tag->name }}
                                                                            </option>
                                                                        @endforeach
                                                                    @endif
                                                                </select>
                                                            </div>


                                                            @error('tags.0')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <div class="card-body">
                                                                <div class="demo-inline-spacing">
                                                                    <div class="form-check form-switch">
                                                                        <label class="form-label" for="is_active">Active</label>
                                                                        <input type="checkbox" value="1" name="is_active"
                                                                                id="customSwitch2" class="form-check-input"
                                                                                data-color="success" checked />
                                                                            @error('is_active')
                                                                                <span class="text-danger"> {{ $message }}</span>
                                                                            @enderror
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                            <div class="col-sm-3">
                                                                <div class="card-body">
                                                                    <div class="demo-inline-spacing">
                                                                        <div class="form-check form-switch">
                                                                            <label class="form-label" for="in_stock">In Stock</label>
                                                                            <input type="checkbox" value="1" name="in_stock"
                                                                                id="customSwitch2" class="form-check-input"
                                                                                data-color="success" checked />
                                                                            @error('in_stock')
                                                                                <span class="text-danger"> {{ $message }}</span>
                                                                            @enderror
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>


                                                    <div data-repeater-list="invoice">
                                                        <div data-repeater-item>
                                                            <div class="row d-flex align-items-end">
                                                                @foreach ($attributes as $attribute)

                                                                    <div class="col-md-2 col-12">
                                                                        <div class="mb-1">
                                                                            <label class="form-label" for="itemname">{{$attribute->name}}</label>
                                                                            <select name="options" class="basicSelect" id="basicSelect"  multiple="multiple">
                                                                                    @foreach ($options as $option)
                                                                                        @if ($option->attribute_id == $attribute->id)
                                                                                            <option value="{{$option->id}}">{{$option->name}}</option>
                                                                                        @endif
                                                                                    @endforeach

                                                                            </select>
                                                                            {{-- <input type="text" class="form-control" id="itemname" aria-describedby="itemname" placeholder="Vuexy Admin Template" name="item" /> --}}
                                                                        </div>
                                                                    </div>
                                                                @endforeach



                                                                <div class="col-md-2 col-12">
                                                                    <div class="mb-1">
                                                                        <label class="form-label" for="itemcost">price</label>
                                                                        <input type="number" class="form-control" id="itemcost" aria-describedby="itemcost" placeholder="32"  name="price"/>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-2 col-12">
                                                                    <div class="mb-1">
                                                                        <label class="form-label" for="itemquantity">Quantity</label>
                                                                        <input type="number" class="form-control" id="itemquantity" aria-describedby="itemquantity" placeholder="1" name="qty"/>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-2 col-12">
                                                                    <div class="mb-1">
                                                                        <label class="form-label" for="staticprice">Sku</label>
                                                                        <input type="text"  class="form-control" id="staticprice"  name="sku" />
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-2 col-12">
                                                                    <div class="mb-1">
                                                                        <label class="form-label" for="staticprice">Image</label>
                                                                        <input type="file"  class="form-control" id="staticprice"  name="photo" />
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-2 col-12 mb-50">
                                                                    <div class="mb-1">
                                                                        <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">
                                                                            <i data-feather="x" class="me-25"></i>
                                                                            <span>Delete</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <button class="btn btn-icon btn-primary" type="button" data-repeater-create>
                                                                <i data-feather="plus" class="me-25"></i>
                                                                <span>Add New</span>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <br>
                                                    <br>

                                                    <div class="row">
                                                        <div class="col-12">
                                                            <button class="btn btn-icon btn-primary" type="submit" >
                                                                <i data-feather="plus" class="me-25"></i>
                                                                <span>save</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Invoice repeater -->
                                </div>
                            </section>

                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>

@endsection



@section('scripts')

<script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/forms/form-select2.js') }}"></script>
<script src="{{asset('app-assets/js/scripts/forms/form-repeater.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
<script>
    $(".opts").select2({
    tags: true,
    tokenSeparators: [',', ' ']
})
</script>
@endsection
