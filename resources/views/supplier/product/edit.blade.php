@extends('supplier_layout.supplier')

@section('title', 'Edit Product')




@section('style')

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/wizard/bs-stepper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/' . getFolder() . '/plugins/forms/form-wizard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">

    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-file-uploader.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/file-uploaders/dropzone.min.css') }}">
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
                            <h2 class="content-header-title float-start mb-0">Products</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('supplier.supplier') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('supplier.product.index') }}">Products</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a >Edit </a>
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
            <div class="content-body">
                @include('supplier.alerts.errors')
                @include('supplier.alerts.success')

                <!-- Modern Horizontal Wizard -->





                <form action="{{ route('supplier.product.update',$product->id) }}" method="POST" enctype="multipart/form-data" name="registration">
                    @csrf

                    <input name="id" value="{{$product -> id}}" type="hidden">


                    <section class="modern-horizontal-wizard">
                        <div class="bs-stepper wizard-modern modern-wizard-example">
                            <div class="bs-stepper-header">
                                <div class="step" data-target="#account-details-modern" role="tab"
                                    id="account-details-modern-trigger">
                                    <button type="button" class="step-trigger">


                                    </button>
                                </div>



                                <div class="step" data-target="#address-step-modern" role="tab"
                                    id="address-step-modern-trigger">
                                    <button type="button" class="step-trigger">

                                    </button>
                                </div>

                                <div class="step" data-target="#social-links-modern" role="tab"
                                    id="social-links-modern-trigger">
                                    <button type="button" class="step-trigger">

                                    </button>
                                </div>
                            </div>
                            <div class="bs-stepper-content">
                                <div id="account-details-modern" class="content" role="tabpanel"
                                    aria-labelledby="account-details-modern-trigger">
                                    <div class="content-header">
                                        <h5 class="mb-0">Product Details</h5>
                                        <small class="text-muted">Enter Your Product Details.</small>
                                    </div>
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="name">Product Name</label>
                                            <input type="text" id="name" name="name" value="{{$product->name}}"
                                                class="form-control" placeholder="product name" required  />
                                            @error('name')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-1 form-password-toggle col-md-6">
                                            <label class="form-label" for="sku">Sku</label>
                                            <input class="form-control" id="sku" rows="1" placeholder="sku"
                                                name="sku" value="{{$product->sku}}" />
                                            @error('sku')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="mb-1 form-password-toggle col-md-6">
                                            <label class="form-label" for="slug">Slug</label>
                                            <input type="text" id="slug" name="slug" value="{{$product->slug}}"
                                                class="form-control" placeholder="exemple-exemple-exemple" />
                                            @error('slug')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-1 form-password-toggle col-md-6">
                                            <label class="form-label" for="qty">Qty</label>
                                            <input type="text" id="qty" name="qty" value="{{$product->qty}}"
                                                class="form-control" placeholder="15" />
                                            @error('qty')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">

                                        {{-- <div class="mb-1 form-password-toggle col-md-12">

                                            <label class="form-label" for="description">Description</label>
                                            <textarea class="form-control" id="description1" rows="5" placeholder="description" name="description" value="">{{$product->description}}</textarea>
                                            @error('description')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div> --}}
                                        <label class="form-label">Description</label>
                                        <div id="editorcontents" name="editorcontents">
                                            <div id="blog-editor-container">
                                                <div class="">
                                                    <textarea name="description" id="description" class="form-control" >{!!($product->description)!!}</textarea>
                                                </div>
                                            </div>
                                            @error('description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button type="button" class="btn btn-outline-secondary btn-prev" disabled>
                                            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button type="button" class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none">Next</span>
                                            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                        </button>
                                    </div>
                                </div>

                                <div id="address-step-modern" class="content" role="tabpanel"
                                    aria-labelledby="address-step-modern-trigger">
                                    <div class="content-header">
                                        <h5 class="mb-0">Product Details</h5>
                                        <small>Enter Your Product Details..</small>
                                    </div>
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="categories">Category</label>
                                                <select name="categories[]" class="select2 form-select" multiple="multiple" id="default-select-multi">
                                                    @if ($categories && $categories->count() > 0 && $product-> categories && count($product-> categories)>0)
                                                        {{-- @foreach ($product-> categories as $category)
                                                            <option value="{{$category->id}}"  selected >{{$category->name}}</option>
                                                        @endforeach --}}
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}" {{in_array($category->id,$product->categories->pluck('id')->toArray())? 'selected' : null }}>{{ $category->name }}
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
                                                <select name="tags[]" class="select2 form-select" multiple="multiple"
                                                    id="default-select-multi1">
                                                    @if ($tags && $tags->count() > 0 && $product-> tags && count($product-> tags)>0)
                                                        {{-- @foreach ($product-> tags as $tag)
                                                        <option value="{{$tag->id}}" selected >{{$tag->name}}</option>
                                                        @endforeach --}}
                                                        @foreach ($tags as $tag)
                                                            <option value="{{ $tag->id }} "  {{in_array($tag->id,$product->tags->pluck('id')->toArray())? 'selected' : null }}>{{ $tag->name }}
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
                                        <div class="mb-1 col-md-6">
                                            <label class="form-label" for="price">Price</label>
                                            <input type="text" id="price" name="price" value="{{$product->price}}"
                                                class="form-control" placeholder="20.00" />
                                            @error('price')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                        {{-- <div class="mb-1 col-md-6">
                                            <label class="form-label" for="selling_price">Selling Price</label>
                                            <input type="text" id="selling_price" name="selling_price"
                                                value="{{old('selling_price')}}"class="form-control" placeholder="20.00" />
                                            @error('selling_price')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div> --}}



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

                                    <div class="d-flex justify-content-between">
                                        <button type="button" class="btn btn-primary btn-prev">
                                            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button type="button" class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none">Next</span>
                                            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                        </button>
                                    </div>
                                </div>
                                <div id="social-links-modern" class="content" role="tabpanel" aria-labelledby="social-links-modern-trigger">




                                        <div class="row">
                                            @foreach ($attributes as $attribute)
                                                <div class="mb-1 col-md-3">
                                                    <label class="form-label" for="attribute">Attribute</label>
                                                    <input type="text" id="attribute" name="attribute[]" value="{{$attribute->name}}"class="form-control" placeholder="attribute"  />
                                                    <label class="form-label" for="options"></label>
                                                    <select name="options[]" class="select2 form-select" multiple="multiple" id="default-select-multi.{{$attribute->id}}.23">
                                                        @if ($options && $options->count() > 0 && $product-> options && $product-> options->count()>0 )
                                                            @foreach ($product-> options as $option)
                                                                @if (($attribute->id == $option->attribute_id))
                                                                    <option value="{{$option->id}}" selected >{{$option->name}}</option>
                                                                @endif
                                                            @endforeach
                                                            @foreach ($options as $option)
                                                                @if ($attribute->id == $option->attribute_id)
                                                                    <option value="{{ $option->id }}">{{ $option->name }} </option>
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    @error('options.0')
                                                        <span class="text-danger"> {{ $message }}</span>
                                                    @enderror
                                                    @error('attribute.0')
                                                    <span class="text-danger"> {{ $message }}</span>
                                                    @enderror
                                                </div>
                                            @endforeach
                                        </div>

                                        <div class="mb-1 col-md-12">
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

                                                                                        <a href="{{route('supplier.product.edit.deleteimage',$image->id)}}">
                                                                                            <i data-feather='delete'></i>
                                                                                            <img class="img-fluid thumb js-thumb  selected" src="{{$image->photo}}" alt="" >
                                                                                        </a>
                                                                                    </div>
                                                                                @endforeach
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mb-1 col-md-12">
                                                                <label class="form-label" for="photo">Images</label>
                                                                <input type="file" id="photo" name="photo[]"  class="form-control" placeholder="upload file" multiple="multiple" />
                                                                @error('photo')
                                                                    <span class="text-danger"> {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    <div class="d-flex justify-content-between">
                                        <button type="button" class="btn btn-primary btn-prev">
                                            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button type="submit" class="btn btn-success btn-submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                </form>

                <!-- /Modern Horizontal Wizard -->



            </div>
        </div>
    </div>

@endsection


@section('scripts')






    <script src="{{ asset('app-assets/vendors/js/forms/wizard/bs-stepper.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/forms/form-wizard.js') }}"></script>

    <script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/forms/form-select2.js') }}"></script>

    <script src="{{ asset('app-assets/vendors/js/file-uploaders/dropzone.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/forms/form-file-uploader.js') }}"></script>

    <script src="{{ asset('app-assets/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/forms/form-repeater.js') }}"></script>
    <script src="{{asset('app-assets/js/scripts/pages/page-blog-edit.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/editors/quill/katex.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/editors/quill/highlight.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/editors/quill/quill.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/pages/page-blog-edit.js')}}"></script>


<script>
        $(function(){

            $("#image").fileinput({

                theme:'fas',
                maxFilesize: 5,
                maxFileCount: 10,
                allowedFileTypes:['image'],
                showCancel :true ,
                showRemove: false,
                showUpload: false,
                overwriteInitial:false,

            });


        });
</script>





@endsection
