@extends('supplier_layout.supplier')


@section('title','Company')


@section('style')
 <meta name="csrf-token" content="{{ csrf_token() }}" />


    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/wizard/bs-stepper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/select/select2.min.css')}}">


    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/form-wizard.css')}}">

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
                        <h2 class="content-header-title float-start mb-0">Company Details</h2>

                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">


            @include('supplier.auth.alerts.success')
            @include('supplier.auth.alerts.errors')



            <section class="modern-vertical-wizard">
                <form id="companyform" method="POST" action="{{ route('company.post.add') }}" >
                @csrf
                <div class="bs-stepper vertical wizard-modern modern-vertical-wizard-example">
                    <div class="bs-stepper-header">

                        <div class="step" data-target="#account-details-vertical-modern" role="tab"
                             id="account-details-vertical-modern-trigger">
                            <button type="button" class="step-trigger">
                                        <span class="bs-stepper-box">
                                            <i data-feather="file-text" class="font-medium-3"></i>
                                        </span>
                                <span class="bs-stepper-label">
                                            <span class="bs-stepper-title">Company Details</span>
                                            <span class="bs-stepper-subtitle">Setup Company Details</span>
                                        </span>
                            </button>
                        </div>

                        <div class="step" data-target="#address-step-vertical-modern" role="tab"
                             id="address-step-vertical-modern-trigger">
                            <button type="button" class="step-trigger" >
                                        <span class="bs-stepper-box">
                                            <i data-feather="map-pin" class="font-medium-3"></i>
                                        </span>
                                <span class="bs-stepper-label">
                                            <span class="bs-stepper-title">Address</span>
                                            <span class="bs-stepper-subtitle">Company Address</span>
                                        </span>
                            </button>
                        </div>
                        <div class="step" data-target="#social-links-vertical-modern" role="tab"
                             id="social-links-vertical-modern-trigger">
                            <button type="button" class="step-trigger">
                                        <span class="bs-stepper-box">
                                            <i data-feather="link" class="font-medium-3"></i>
                                        </span>
                                <span class="bs-stepper-label">
                                            <span class="bs-stepper-title">Social Links</span>
                                            <span class="bs-stepper-subtitle">Add Social Links</span>
                                        </span>
                            </button>
                        </div>
                    </div>
                    <div class="bs-stepper-content">

                        <div id="account-details-vertical-modern" class="content" role="tabpanel"
                             aria-labelledby="account-details-vertical-modern-trigger">
                            <div class="content-header">
                                <h5 class="mb-0">Company Details</h5>
                                <small class="text-muted">Enter Your Company Details.</small>
                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-modern-username">Company Name</label>
                                    <input type="text" id="vertical-modern-text company_name" class="form-control" name="company_name"
                                              value="{{$data->company_name}}"/>
                                    @error('company_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    <input type="number" hidden  name="id"
                                           value="{{$data->id}}"  />
                                </div>
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-modern-username">Company Description</label>
                                    <input   id="exampleFormControlTextarea1" rows="3" class="form-control" name="company_description"
                                            value="{{$data->company_description}}" />
                                    @error('company_description')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-modern-email">Company Email</label>
                                    <input type="email" id="vertical-modern-email" class="form-control" name="company_email"  value="{{$data->company_email}}"
                                            aria-label="john.doe"/>
                                    @error('company_email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-1 form-password-toggle col-md-6">
                                    <label class="form-label" for="vertical-modern-password">Company Phone</label>
                                    <input type="tel"  class="form-control" name="company_phone"  value="{{$data->company_phone}}"
                                           />
                                    @error('company_phone')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-1 form-password-toggle col-md-6">
                                    <label class="form-label" for="vertical-modern-password">Company Logo</label>
                                    <input type="text"  class="form-control" name="company_logo"   value="{{$data->company_logo}}"
                                          />
                                    @error('company_logo')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-secondary btn-prev" disabled type="button">
                                    <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-next" type="button" id="nextone" >
                                    <span class="align-middle d-sm-inline-block d-none" >Next</span>
                                    <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                </button>
                            </div>
                        </div>

                        <div id="address-step-vertical-modern" class="content" role="tabpanel"
                             aria-labelledby="address-step-vertical-modern-trigger">
                            <div class="content-header">
                                <h5 class="mb-0">Address</h5>
                                <small>Enter Your Address.</small>
                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-4">
                                    <label class="form-label" for="vertical-modern-landmark">Country</label>


                                    <select id="countrySelect" name="company_country" class="form-control"  >
                                            <option value="{{$data->company_country}}" selected>
                                                {{$data->company_country}}
                                            </option>
                                        @foreach ($countries as $country)

                                            <option value="{{$country}}">
                                                {{ $country  }}
                                            </option>
                                        @endforeach

                                    </select>
                                    @error('company_country')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-1 col-md-4">
                                    <label class="form-label" for="vertical-modern-landmark">State</label>

                                    <select id="states" name="company_state" class="form-control"  >
                                        <optgroup>
                                            <option value="{{$data->company_state}}" selected>
                                                {{$data->company_state}}
                                            </option>
                                        </optgroup>


                                    </select>
                                    @error('company_state')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-1 col-md-4">
                                    <label class="form-label" for="city4">City</label>
                                    <input type="text" id="city4" class="form-control"  name="company_city"  value="{{$data->company_city}}"/>
                                    @error('company_city')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-9">
                                    <label class="form-label" for="vertical-modern-address">Address</label>


                                    <input type="text" id="vertical-modern-address" class="form-control" name="company_address"  value="{{$data->company_address}}"
                                          />
                                    @error('company_address')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-1 col-md-3">
                                    <label class="form-label" for="pincode4">Pincode</label>
                                    <input type="text" id="pincode4" class="form-control"  name="company_postalcode"  value="{{$data->company_postalcode}}"/>
                                    @error('company_postalcode')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">


                            </div>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-primary btn-prev" type="button" id="btnprev2">
                                    <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-next" type="button" id="nexttwo">
                                    <span class="align-middle d-sm-inline-block d-none" >Next</span>
                                    <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                </button>
                            </div>
                        </div>
                        <div id="social-links-vertical-modern" class="content" role="tabpanel"
                             aria-labelledby="social-links-vertical-modern-trigger">
                            <div class="content-header">
                                <h5 class="mb-0">Social Links</h5>
                                <small>Enter Your Social Links.</small>
                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-modern-twitter">Website</label>
                                    <input type="text" id="vertical-modern-twitter" class="form-control" name="company_website" value="{{$data->company_website}}"
                                           />
                                    @error('company_website')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-modern-twitter">Twitter</label>
                                    <input type="text" id="vertical-modern-twitter" class="form-control" name="company_twitter"  value="{{$data->company_twitter}}"
                                          />
                                    @error('company_twitter')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-modern-facebook">Facebook</label>
                                    <input type="text" id="vertical-modern-facebook" class="form-control" name="company_facebook" value="{{$data->company_facebook}}"
                                          />
                                    @error('company_facebook')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-modern-linkedin">Linkedin</label>
                                    <input type="text" id="vertical-modern-linkedin" class="form-control" name="company_linkedin" value="{{$data->company_linkedin}}"
                                           />
                                    @error('company_linkedin')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-modern-google">Instagram</label>
                                    <input type="text" id="vertical-modern-google" class="form-control" name="company_instagram" value="{{$data->company_instagram}}"
                                          />
                                    @error('company_instagram')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-modern-linkedin">Youtube</label>
                                    <input type="text" id="vertical-modern-linkedin" class="form-control" name="company_youtube" value="{{$data->company_youtube}}"
                                           />
                                    @error('company_youtube')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-modern-google">whatsapp</label>
                                    <input type="text" id="vertical-modern-google" class="form-control" name="company_whatsapp" value="{{$data->company_whatsapp}}"
                                           />
                                    @error('company_whatsapp')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-1 col-md-6">
                                    <label class="form-label" for="vertical-modern-linkedin">Telegram</label>
                                    <input type="text" id="vertical-modern-linkedin" class="form-control" name="company_telegram" value="{{$data->company_telegram}}"
                                           />
                                    @error('company_telegram')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-primary btn-prev" type="button" id="btnprev3">
                                    <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button type="submit"  class="btn btn-success btn-submit" id="submitb">Submit</button>
                            </div>
                        </div>

                    </div>
                </div>
                </form>
            </section>




        </div>
    </div>
</div>
@endsection
<!-- END: Content-->




@section('scripts')

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/ui/jquery.sticky.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/forms/wizard/bs-stepper.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<!-- END: Page Vendor JS-->


<!-- BEGIN: Page JS-->
<script src="{{asset('app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/forms/form-wizard.js')}}"></script>



<!-- END: Page JS-->

<script>

    $(document).ready(function () {

        {{--$("#submitb").click(function (e) {--}}

        {{--    var url = "{{ route('company.post.add')  }}";--}}

        {{--    e.preventDefault();--}}
        {{--    $.ajax({--}}
        {{--        headers: {--}}
        {{--            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
        {{--        },--}}
        {{--        type: "POST",--}}
        {{--        url: url,--}}
        {{--        data: $("#companyform").serialize(),--}}

        {{--        success: function (data) {--}}
        {{--            $("#btnprev2").click();--}}

        {{--        },--}}
        {{--        error: function (error) {--}}
        {{--            const error_attr = error.responseJSON.errors--}}
        {{--            $("#btnprev2").click();--}}

        {{--            console.log(error_attr)--}}
        {{--            // $("#type-error").attr('value',error_attr.company_description);--}}
        {{--            // $("#type-error").attr('value',error_attr.company_name);--}}
        {{--            // $("#type-error").attr('value',error_attr.company_email);--}}
        {{--            // $("#type-error").attr('value',error_attr.company_phone);--}}
        {{--            // $("#type-error").attr('value',error_attr.company_country);--}}
        {{--            // $("#type-error").attr('value',error_attr.company_state);--}}
        {{--            // $("#type-error").attr('value',error_attr.company_city);--}}
        {{--            // $("#type-error").attr('value',error_attr.company_address);--}}
        {{--            // $("#type-error").attr('value',error_attr.company_postalcode);--}}
        {{--            // $("#type-error").attr('value',error_attr.company_website);--}}
        {{--            // $("#type-error").attr('value',error_attr.company_facebook);--}}
        {{--            // $("#type-error").attr('value',error_attr.company_instagram);--}}
        {{--            // $("#type-error").attr('value',error_attr.company_twitter);--}}
        {{--            // $("#type-error").attr('value',error_attr.company_whatsapp);--}}
        {{--            // $("#type-error").attr('value',error_attr.company_telegram);--}}
        {{--            // $("#type-error").attr('value',error_attr.company_youtube);--}}
        {{--        }--}}


        {{--    });--}}
        {{--});--}}
        // $('input[name="company_name"]').change( function () {
        //     if (!$('input[name="company_name"]').val()){
        //         $("#nextone").attr("disabled", true);
        //         $('input[name="company_name"]').addClass("error").removeClass("success")
        //     }
        //     else {
        //         $('input[name="company_name"]').addClass("success").removeClass("error")
        //         $("#nextone").attr("disabled", false);
        //     }
        // } )
        //
        // $('input[name="company_description"]').change( function () {
        //     if (!$('input[name="company_description"]').val()){
        //         $("#nextone").attr("disabled", true);
        //         $('input[name="company_description"]').addClass("error").removeClass("success")
        //     }
        //     else {
        //         $('input[name="company_description"]').addClass("success").removeClass("error")
        //         $("#nextone").attr("disabled", false);
        //     }
        // } )
        //
        //
        // $('input[name="company_email"]').change( function () {
        //     if (!$('input[name="company_email"]').val()){
        //         $("#nextone").attr("disabled", true);
        //         $('input[name="company_email"]').addClass("error").removeClass("success")
        //     }
        //     else {
        //         $('input[name="company_email"]').addClass("success").removeClass("error")
        //         $("#nextone").attr("disabled", false);
        //     }
        // } )
        // $('input[name="company_phone"]').change( function () {
        //     if (!$('input[name="company_phone"]').val()){
        //         $("#nextone").attr("disabled", true);
        //         $('input[name="company_phone"]').addClass("error").removeClass("success")
        //     }else {
        //         $('input[name="company_phone"]').addClass("success").removeClass("error")
        //         $("#nextone").attr("disabled", false);
        //     }
        // } )

        $("#nextone").click(function(){
            const  company_name = $('input[name="company_name"]').val();
            const  company_description = $('input[name="company_description"]').val();
            const  company_email = $('input[name="company_email"]').val();
            const  company_phone = $('input[name="company_phone"]').val();
            if(!(company_email && company_description && company_name && company_phone)){
                if(!company_name){
                    $('input[name="company_name"]').addClass("error")
                    $('input[name="company_name"]').removeClass("info")
                }else {
                    $('input[name="company_name"]').addClass("info")
                    $('input[name="company_name"]').removeClass("error")
                }
                if(!company_phone){
                    $('input[name="company_phone"]').addClass("error").removeClass("success")
                }
                else {
                    $('input[name="company_phone"]').addClass("success").removeClass("error")
                }
                if(!company_description){
                    $('input[name="company_description"]').addClass("error").removeClass("success")
                }
                else {
                    $('input[name="company_description"]').addClass("success").removeClass("error")
                }
                if(!company_email){
                    $('input[name="company_email"]').addClass("error").removeClass("success")
                }else {
                    $('input[name="company_email"]').addClass("success").removeClass("error")
                }
               // $("#nextone").attr("disabled",true)
                $("#btnprev2").click()
            }

        });

        $("#nexttwo").click(function(){

            const  company_country = $('select[name="company_country"] option:selected').val();
            const  company_state = $('select[name="company_state"] option:selected').val();
            const  company_city = $('input[name="company_city"]').val();
            const  company_address = $('input[name="company_address"]').val();
            const  company_postalcode = $('input[name="company_postalcode"]').val();

            if(!(company_country && company_state && company_city && company_address && company_postalcode)){
                if(!company_country){
                    $('select[name="company_country"]').addClass("error")
                    $('select[name="company_country"]').removeClass("info")
                }else {
                    $('select[name="company_country"]').addClass("info")
                    $('select[name="company_country"]').removeClass("error")
                }
                if(!company_state){
                    $('select[name="company_state"]').addClass("error").removeClass("success")
                }
                else {
                    $('select[name="company_state"]').addClass("success").removeClass("error")
                }
                if(!company_city){
                    $('input[name="company_city"]').addClass("error").removeClass("success")
                }
                else {
                    $('input[name="company_city"]').addClass("success").removeClass("error")
                }
                if(!company_address){
                    $('input[name="company_address"]').addClass("error").removeClass("success")
                }else {
                    $('input[name="company_address"]').addClass("success").removeClass("error")
                }
                if(!company_postalcode){
                    $('input[name="company_postalcode"]').addClass("error").removeClass("success")
                }else {
                    $('input[name="company_postalcode"]').addClass("success").removeClass("error")
                }
                // $("#nextone").attr("disabled",true)
                $("#btnprev3").click()

            }

        });
        $("#btnprev3").click(function (){
            $("#nextone").click();
        });

        $("#countrySelect").on('change',function (e) {
            var url = "{{ route('country.states')  }}";
            e.preventDefault();

            $('#states').find('option').remove();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "GET",
                url: url,
                data: {'country': $("#countrySelect").val()},

                success: function (data) {
                    for (let i = 0; i < data.length; i++) {
                        $('#states').append($("<option></option>").attr("value",data[i]).text(data[i]));
                    }

                }
                ,
                error: function (data) {

                }
            })
        });




    });


</script>
@endsection
