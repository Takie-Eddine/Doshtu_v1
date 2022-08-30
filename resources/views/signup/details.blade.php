<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Register Multi Steps Page - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="{{ asset('/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/app-assets/vendors/css/forms/wizard/bs-stepper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/vendors/css/forms/select/select2.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/' . getFolder() . '/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/' . getFolder() . '/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/' . getFolder() . '/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/' . getFolder() . '/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/' . getFolder() . '/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/app-assets/' . getFolder() . '/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/app-assets/' . getFolder() . '/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/app-assets/' . getFolder() . '/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/app-assets/' . getFolder() . '/plugins/forms/form-wizard.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/app-assets/' . getFolder() . '/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/app-assets/' . getFolder() . '/pages/authentication.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static   menu-collapsed"
    data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-cover">
                    <div class="auth-inner row m-0">
                        <!-- Brand logo-->
                        <a class="brand-logo" href="">
                            <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" height="28">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%"
                                        y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%"
                                        x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                    fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path"
                                                d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                                style="fill: currentColor"></path>
                                            <path id="Path1"
                                                d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                                fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                            </polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                            </polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)"
                                                opacity="0.099999994"
                                                points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288">
                                            </polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <h2 class="brand-text text-primary ms-1">Dushtu</h2>
                        </a>
                        <!-- /Brand logo-->

                        <!-- Left Text-->
                        <div class="col-lg-3 d-none d-lg-flex align-items-center p-0">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center">
                                <img class="img-fluid w-100"
                                    src="{{ asset('/app-assets/images/illustration/create-account.svg') }}"
                                    alt="multi-steps" />
                            </div>
                        </div>
                        <!-- /Left Text-->

                        <!-- Register-->
                        @include('signup.alerts.success')
                        @include('signup.alerts.errors')

                        <div class="col-lg-9 d-flex align-items-center auth-bg px-2 px-sm-3 px-lg-5 pt-3">


                            <div class="width-700 mx-auto">
                                <div class="bs-stepper register-multi-steps-wizard shadow-none">
                                    <form action="{{ route('storeclient') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="password" value="{{$client->password}}">
                                        <div class="bs-stepper-header px-0" role="tablist">
                                            <div class="step" data-target="#account-details" role="tab"
                                                id="account-details-trigger">
                                                <button type="button" class="step-trigger">
                                                    <span class="bs-stepper-box">
                                                        <i data-feather="home" class="font-medium-3"></i>
                                                    </span>
                                                    <span class="bs-stepper-label">
                                                        <span class="bs-stepper-title">Store</span>
                                                        <span class="bs-stepper-subtitle">Enter Information</span>
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="line">
                                                <i data-feather="chevron-right" class="font-medium-2"></i>
                                            </div>
                                            <div class="step" data-target="#personal-info" role="tab"
                                                id="personal-info-trigger">
                                                <button type="button" class="step-trigger">
                                                    <span class="bs-stepper-box">
                                                        <i data-feather="user" class="font-medium-3"></i>
                                                    </span>
                                                    <span class="bs-stepper-label">
                                                        <span class="bs-stepper-title">Personal</span>
                                                        <span class="bs-stepper-subtitle">Enter Information</span>
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="line">
                                                <i data-feather="chevron-right" class="font-medium-2"></i>
                                            </div>
                                            <div class="step" data-target="#billing" role="tab"
                                                id="billing-trigger">
                                                <button type="button" class="step-trigger">
                                                    <span class="bs-stepper-box">
                                                        <i data-feather="credit-card" class="font-medium-3"></i>
                                                    </span>
                                                    <span class="bs-stepper-label">
                                                        <span class="bs-stepper-title">Billing</span>
                                                        <span class="bs-stepper-subtitle">Payment details</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="bs-stepper-content px-0 mt-4">
                                            <div id="account-details" class="content" role="tabpanel"
                                                aria-labelledby="account-details-trigger">
                                                <div class="content-header mb-2">
                                                    <h2 class="fw-bolder mb-75">Store Information</h2>
                                                    <span>Enter your store information details</span>
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-12 mb-1">
                                                        <label class="form-label" for="store_name">Store
                                                            Logo</label>
                                                        <input type="file" name="image" id="image"
                                                            class="form-control"  />
                                                    </div>
                                                    <div class="col-md-12 mb-1">
                                                        <label class="form-label" for="store_name">Store
                                                            Name</label>
                                                        <input type="text" name="store_name" id="store_name"
                                                            class="form-control" placeholder="johndoe store" />
                                                    </div>

                                                </div>
                                                <div class="row">

                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label" for="store_email">Store
                                                            Email</label>
                                                        <input type="email" name="store_email" id="store_email"
                                                            class="form-control" placeholder="john.doe@email.com"
                                                            aria-label="john.doe" />
                                                    </div>

                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label" for="store_mobile">Store
                                                            mobile</label>
                                                        <input type="text" name="store_mobile" id="store_mobile"
                                                            class="form-control" placeholder="+905365016532" />
                                                    </div>


                                                </div>

                                                <div class="row">

                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label" for="store_email"> Country </label>
                                                        <input type="text" name="country" id="country"
                                                            class="form-control" placeholder="Turkey"
                                                            aria-label="john.doe" />
                                                    </div>

                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label" for="store_mobile">State</label>
                                                        <input type="text" name="state" id="state"
                                                            class="form-control" placeholder="Istanbul" />
                                                    </div>
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label" for="store_mobile">City</label>
                                                        <input type="text" name="city" id="city"
                                                            class="form-control" placeholder="Istanbul" />
                                                    </div>
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label" for="store_mobile">Pincode</label>
                                                        <input type="number" name="pincode" id="pincode"
                                                            class="form-control" placeholder="202356" />
                                                    </div>
                                                    <div class="col-md-12 mb-1">
                                                        <label class="form-label" for="store_mobile">Address</label>
                                                        <input type="text" name="address" id="address"
                                                            class="form-control" placeholder="22 jump st" />
                                                    </div>


                                                </div>


                                                <div class="d-flex justify-content-between mt-2">
                                                    <button class="btn btn-outline-secondary btn-prev"
                                                        disabled>
                                                        <i data-feather="chevron-left"
                                                            class="align-middle me-sm-25 me-0"></i>
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                    <button class="btn btn-primary btn-next">
                                                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                                                        <i data-feather="chevron-right"
                                                            class="align-middle ms-sm-25 ms-0"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div id="personal-info" class="content" role="tabpanel"
                                                aria-labelledby="personal-info-trigger">
                                                <div class="content-header mb-2">
                                                    <h2 class="fw-bolder mb-75">Personal Information</h2>
                                                    <span>Enter your Information</span>
                                                </div>

                                                <div class="row">
                                                    <div class="mb-1 col-md-6">
                                                        <label class="form-label" for="first_name">First
                                                            Name</label>
                                                        <input type="text" name="first_name" id="first_name"
                                                            class="form-control" placeholder="John" />
                                                    </div>
                                                    <div class="mb-1 col-md-6">
                                                        <label class="form-label" for="last_name">Last
                                                            Name</label>
                                                        <input type="text" name="last_name" id="last_name"
                                                            class="form-control" placeholder="Doe" />
                                                    </div>
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label" for="mobile">Mobile
                                                            number</label>
                                                        <input type="text" name="mobile" id="mobile" class="form-control mobile-number-mask" placeholder="(472) 765-3654" />
                                                    </div>
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label" for="email">Email</label>
                                                        <input type="email" name="email"
                                                            value="{{ $client->email }}" id="email"
                                                            class="form-control email-mask" placeholder="Code" />
                                                    </div>

                                                    <div class="col-6 mb-1">
                                                        <label class="form-label" for="username">Username</label>
                                                        <input type="text" name="username"
                                                            value="{{ $client->username }}" id="username"
                                                            class="form-control" placeholder="username" />
                                                    </div>
                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label" for="store_name">Client Image</label>
                                                        <input type="file" name="photo" id="photo"
                                                            class="form-control"  />
                                                    </div>

                                                </div>


                                                <div class="d-flex justify-content-between mt-2">
                                                    <button class="btn btn-primary btn-prev">
                                                        <i data-feather="chevron-left"
                                                            class="align-middle me-sm-25 me-0"></i>
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                    <button class="btn btn-primary btn-next">
                                                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                                                        <i data-feather="chevron-right"
                                                            class="align-middle ms-sm-25 ms-0"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div id="billing" class="content" role="tabpanel"
                                                aria-labelledby="billing-trigger">
                                                <div class="content-header mb-2">
                                                    <h2 class="fw-bolder mb-75">Select Plan</h2>
                                                    <span>Select plan as per your retirement</span>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mt-1">
                                                            <input type="radio" name="plan" value="1"  class="switchery" data-color="success" />
                                                            <label class="card-title ml-1">Annual</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group mt-1">
                                                            <input type="radio" name="plan" value="0"  class="switchery" data-color="success" />
                                                            <label class="card-title ml-1"> Monthly</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- select plan options -->


                                                    <div class="row hidden " id="cats_list" >
                                                        <div class="row custom-options-checkable gx-3 gy-2">

                                                            @foreach ($plansAnuuals as $plan)

                                                                <div class="col-md-3">
                                                                    <input class="custom-option-item-check" type="radio"
                                                                        name="planse" id="{{$plan -> id}}" value="{{$plan -> id}}"  />
                                                                    <label class="custom-option-item text-center p-1"
                                                                        for="{{$plan -> id}}">
                                                                        <span
                                                                            class="custom-option-item-title h3 fw-bolder">{{$plan -> name}}</span>
                                                                        <span class="d-block m-75"></span>
                                                                        <span class="plan-price">
                                                                            <sup class="font-medium-1 fw-bold text-primary">$</sup>
                                                                            <span
                                                                                class="pricing-value fw-bolder text-primary">{{$plan -> priceA}}</span>
                                                                            <sub
                                                                                class="pricing-duration text-body font-medium-1 fw-bold">/{{$plan -> type}}</sub>
                                                                        </span>
                                                                    </label>
                                                                </div>

                                                            @endforeach
                                                        </div>

                                                    </div>
                                                    <div class="row hidden " id="cats_liste" >
                                                        <div class="row custom-options-checkable gx-3 gy-2">
                                                            @foreach ($plansMonthlys as $plan)
                                                                <div class="col-md-3">
                                                                    <input class="custom-option-item-check" type="radio"
                                                                        name="planse" id="{{$plan -> id}}" value="{{$plan -> id}}"  />
                                                                    <label class="custom-option-item text-center p-1"
                                                                        for="{{$plan -> id}}">
                                                                        <span
                                                                            class="custom-option-item-title h3 fw-bolder">{{$plan -> name}}</span>
                                                                        <span class="d-block m-75">A simple start for
                                                                            everyone</span>
                                                                        <span class="plan-price">
                                                                            <sup class="font-medium-1 fw-bold text-primary">$</sup>
                                                                            <span
                                                                                class="pricing-value fw-bolder text-primary">{{$plan -> priceM}}</span>
                                                                            <sub
                                                                                class="pricing-duration text-body font-medium-1 fw-bold">/{{$plan -> type}}</sub>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>

                                                <!-- / select plan options -->

                                                <div class="content-header my-2 py-1">
                                                    <h2 class="fw-bolder mb-75">Payment Information</h2>
                                                    <span>Enter your card Information</span>
                                                </div>

                                                <div class="row gx-2">
                                                    <div class="col-12 mb-1">
                                                        <label class="form-label" for="addCardNumber">Card
                                                            Number</label>
                                                        <div class="input-group input-group-merge">
                                                            <input id="addCardNumber" name="addCard"
                                                                class="form-control credit-card-mask" type="text"
                                                                placeholder="1356 3215 6548 7898"
                                                                aria-describedby="addCard"
                                                                data-msg="Please enter your credit card number" />
                                                            <span class="input-group-text cursor-pointer p-25"
                                                                id="addCard">
                                                                <span class="card-type"></span>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 mb-1">
                                                        <label class="form-label" for="addCardName">Name On
                                                            Card</label>
                                                        <input type="text" id="addCardName" name="card_name" class="form-control"
                                                            placeholder="John Doe" />
                                                    </div>

                                                    <div class="col-6 col-md-3 mb-1">
                                                        <label class="form-label" for="addCardExpiryDate">Exp.
                                                            Date</label>
                                                        <input type="text" id="addCardExpiryDate" name="card_exp"
                                                            class="form-control expiry-date-mask"
                                                            placeholder="MM/YY" />
                                                    </div>

                                                    <div class="col-6 col-md-3 mb-1">
                                                        <label class="form-label" for="addCardCvv">CVV</label>
                                                        <input type="text" id="addCardCvv" name="cvv"
                                                            class="form-control cvv-code-mask" maxlength="3"
                                                            placeholder="654" />
                                                    </div>
                                                </div>


                                                <div class="d-flex justify-content-between mt-1">
                                                    <button class="btn btn-primary btn-prev">
                                                        <i data-feather="chevron-left"
                                                            class="align-middle me-sm-25 me-0"></i>
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                    <button type="submit" class="btn btn-success btn-submit">
                                                        <i data-feather="check"
                                                            class="align-middle me-sm-25 me-0"></i>
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none">Submit</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('/app-assets/vendors/js/forms/wizard/bs-stepper.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/forms/cleave/cleave.min.js') }}"></script>
    <script src="{{ asset('/app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('/app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('/app-assets/js/scripts/pages/auth-register.js') }}"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>

<script>
    $(function(){

        $("#image").fileinput({

            theme:'fas',
            maxFilesize: 5,
            maxFileCount: 1,
            allowedFileTypes:['image'],
            showCancel :true ,
            showRemove: false,
            showUpload: false,
            overwriteInitial:false,

        });


    });
</script>

<script>
    $('input:radio[name="plan"]').change(
        function(){
            if (this.checked && this.value == '0') {  // 1 if main cat - 2 if sub cat
                $('#cats_list').addClass('hidden');
                $('#cats_liste').removeClass('hidden');
            }else{
                $('#cats_list').removeClass('hidden');
                $('#cats_liste').addClass('hidden');
            }
        });
</script>
</body>
<!-- END: Body-->

</html>
