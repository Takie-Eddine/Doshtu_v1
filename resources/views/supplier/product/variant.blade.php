@extends('supplier_layout.supplier')

@section('title', 'Security')

@section('style')


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
                                <li class="breadcrumb-item"><a href="#">Products</a>
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
                    <ul class="nav nav-pills mb-2">
                        <!-- account -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('supplier.product.create')}}">
                                <i data-feather="user" class="font-medium-3 me-50"></i>
                                <span class="fw-bold">Product</span>
                            </a>
                        </li>
                        <!-- security -->
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('supplier.product.variant')}}">
                                <i data-feather="lock" class="font-medium-3 me-50"></i>
                                <span class="fw-bold">Options</span>
                            </a>
                        </li>
                        <!-- billing and plans -->

                    </ul>

                    <!-- security -->

                    <div class="card">
                        @include('supplier.alerts.errors')
                        @include('supplier.alerts.success')
                        <div class="card-header border-bottom">
                            <h4 class="card-title">Product Options</h4>
                        </div>
                        <div class="card-body pt-1">
                            <!-- form -->


                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>

@endsection



@section('scripts')

<script src="{{asset('app-assets/js/scripts/forms/form-repeater.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
@endsection
