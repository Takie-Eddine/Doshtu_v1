@extends('supplier_layout.supplier')

@section('title', 'Account')

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
                        <h2 class="content-header-title float-start mb-0">Account</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('supplier.supplier')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#"> Settings </a>
                                </li>
                                <li class="breadcrumb-item active"> Account
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
                            <a class="nav-link active" href="#">
                                <i data-feather="user" class="font-medium-3 me-50"></i>
                                <span class="fw-bold">Account</span>
                            </a>
                        </li>
                        <!-- security -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('supplier.settings.account.security')}}">
                                <i data-feather="lock" class="font-medium-3 me-50"></i>
                                <span class="fw-bold">Security</span>
                            </a>
                        </li>
                        <!-- billing and plans -->

                        <!-- notification -->

                        <!-- connection -->

                    </ul>

                    <!-- profile -->
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">Profile Details</h4>
                        </div>
                        @include('supplier.alerts.errors')
                        @include('supplier.alerts.success')
                        <div class="card-body py-2 my-25">
                            <!-- header section -->
                            <div class="d-flex">
                                <a  class="me-25">
                                    <img src="{{asset('assets/images/suppliers/' .$supplier->image)}}" id="account-upload-img" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100" />
                                </a>

                                <!-- upload and reset button -->
                                <form class="form" action="{{route('supplier.setting.profile.update',$supplier->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$supplier->id}}">
                                    <input type="hidden" name="role_id" value="{{$supplier->role_id}}">
                                    <div class="d-flex align-items-end mt-75 ms-1">
                                    <div>
                                        <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                        <input type="file" name="image" id="account-upload" hidden  />


                                        @error('photo')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!--/ upload and reset button -->
                            </div>
                            <!--/ header section -->

                            <!-- form -->


                                <div class="row">
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountFirstName">First Name</label>
                                        <input type="text" class="form-control" id="accountFirstName" name="first_name" placeholder="John" value="{{$supplier->first_name}}" data-msg="Please enter first name" />
                                        @error('first_name')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountLastName">Last Name</label>
                                        <input type="text" class="form-control" id="accountLastName" name="last_name" placeholder="Doe" value="{{$supplier->last_name}}" data-msg="Please enter last name" />
                                        @error('last_name')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountEmail">Email</label>
                                        <input type="email" class="form-control" id="accountEmail" name="email" placeholder="Email" value="{{$supplier->email}}" />
                                        @error('email')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountPhoneNumber">Phone Number</label>
                                        <input type="text" class="form-control account-number-mask" id="accountPhoneNumber" name="mobile" placeholder="Phone Number" value="{{$supplier->mobile}}" />
                                        @error('mobile')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mt-1 me-1">Save changes</button>

                                    </div>
                                </div>
                            </form>
                            <!--/ form -->
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </div>
</div>




@endsection




@section('scripts')


@endsection
