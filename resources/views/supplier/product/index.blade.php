@extends('supplier_layout.supplier')

@section('title','Products')

@section('style')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/'.getFolder().'/tables/datatable/dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/'.getFolder().'/tables/datatable/responsive.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/'.getFolder().'/tables/datatable/buttons.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/'.getFolder().'/tables/datatable/rowGroup.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/'.getFolder().'/pickers/flatpickr/flatpickr.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/'.getFolder().'/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/'.getFolder().'/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/'.getFolder().'/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/'.getFolder().'/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/'.getFolder().'/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/'.getFolder().'/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/'.getFolder().'/themes/semi-dark-layout.css')}}">


    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/'.getFolder().'/core/menu/menu-types/vertical-menu.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}"> --}}

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
                                <li class="breadcrumb-item active"><a >Products</a>
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


            <section id="multilingual-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            @include('supplier.alerts.errors')
                            @include('supplier.alerts.success')
                            <div class="card-datatable">

                                <table class="dt-multilingual table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Product Number</th>
                                            <th>Sku</th>
                                            <th>Category</th>
                                            <th>Order</th>
                                            <th>viewd</th>
                                            <th>Status</th>
                                            <th>Approved</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($products && count($products)>0)
                                            @foreach ($products as $product)
                                                <tr>
                                                    <th>{{$product->id}}</th>
                                                    <th>{{$product->name}}</th>
                                                    <th>{{$product->id}}</th>
                                                    <th>{{$product->sku}}</th>
                                                    <th>{{$product-> categories[0]->name ?? '--' }}</th>
                                                    <th></th>
                                                    <th>{{$product->viewed}}</th>
                                                    <th>{{$product->getActive()}}</th>
                                                    <th>{{$product->getApprove()}}</th>
                                                    <th>
                                                        <div class="btn-group" role="group"
                                                                    aria-label="Basic example">
                                                                    <a href="{{route('supplier.product.edit',$product -> id)}}"
                                                                    class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">edit</a>


                                                                    <a href="{{route('supplier.product.view',$product -> id)}}"
                                                                    class="btn btn-outline-info btn-min-width box-shadow-3 mr-1 mb-1">view</a>


                                                                    <a href="{{route('supplier.product.delete',$product -> id)}}"
                                                                        class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">delete</a>

                                                        </div>
                                                    </th>
                                                </tr>
                                            @endforeach
                                        @endif

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Multilingual -->

        </div>
    </div>
</div>
@endsection


@section('scripts')
    {{-- <script src="{{asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/jszip.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{asset('app-assets/js/scripts/tables/table-datatables-basic.js')}}"></script> --}}
@endsection
