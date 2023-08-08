@include('layouts.header')

<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"></a>
                        </li>
                        <!--end nav-item-->
                        <li class="breadcrumb-item"><a href="#!">Projects /</a>
                        </li>
                        <!--end nav-item-->
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div>
                <h4 class="page-title">Register Now</h4>
            </div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div id="flasMesage">
                            <h5 class="text-success">@if(Session::has('saveProject')){{ Session::get('saveProject') }}
                                @endif</h5>
                        </div>
                        <div class="col-lg-12">
                            <form method="POST" action="{{url('/storeupdate')}}" enctype="multipart/form-data">
                                <div class="form-group">
                                <input type="hidden" name="fromId"  value=" {{ (isset($data)) ? $data->id : old('id') }}">
                                    <label for="projectName" class="form-label"> Name :</label>
                                    <input type="text" name="name" class="form-control" id="projectName"
                                        aria-describedby="emailHelp" value=" {{ (isset($data)) ? $data->name : old('name') }}">
                                    <p class="small text-danger resethtml">@error('name'){{ $message }}@enderror</p>
                                </div>
                                <!--end form-group-->
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-3 col-6 mb-2 mb-lg-0">
                                            <label class="form-label mt-2" for="pro-start-date">Location :</label>
                                            <input type="text" name="location" class="form-control" id="pro-start-date"
                                                value=" {{ (isset($data)) ? $data->location : old('location') }}">
                                            <p class="small text-danger resethtml">
                                                @error('location'){{ $message }}@enderror</p>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3 col-6 mb-2 mb-lg-0">
                                            <label class="form-label mt-2" for="pro-end-date">Country :</label>
                                            <input type="text" name="country" class="form-control" id="pro-end-date"
                                                value=" {{ (isset($data)) ? $data->country : old('country') }}">
                                            <p class="small text-danger resethtml">
                                                @error('country'){{ $message }}@enderror</p>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3 col-6">
                                            <label class="form-label mt-2" for="pro-rate">Rate :</label>
                                            <input type="text" name="rate" class="form-control" id="pro-rate"
                                                value=" {{ (isset($data)) ? $data->rate : old('rate') }}">
                                            <p class="small text-danger resethtml">@error('rate'){{ $message }}@enderror
                                            </p>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3 col-6">
                                            <label class="form-label mt-2" for="pro-rate">Price :</label>
                                            <input type="text" name="price" class="form-control" id="pro-rate"
                                                value=" {{ (isset($data)) ? $data->price : old('price') }}">
                                            <p class="small text-danger resethtml">
                                                @error('price'){{ $message }}@enderror</p>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end form-group-->
                                <div class="col-lg-3 col-6">
                                    <label class="form-label mt-2" for="pro-rate">Email :</label>
                                    <input type="text" name="email" class="form-control" id="pro-rate"
                                        value=" {{ (isset($data)) ? $data->email : old('email') }}">
                                    <p class="small text-danger resethtml">@error('email'){{ $message }}@enderror</p>
                                </div>
                                <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end form-group-->
                    <div class="form-group mb-3">
                        <label class="form-label mt-2" for="pro-message">Message :</label>
                        <textarea name="message" class="form-control" rows="5" id="pro-message"
                       >   {{ (isset($data)) ? $data->message : old('message') }}</textarea>
                        <p class="small text-danger resethtml">@error('message'){{ $message }}@enderror</p>
                    </div>
                    <!--end form-group-->

                    <button type="submit" name="submit" class="btn btn-de-primary btn-sm">Register</button>

                    </form>
                    <!--end form-->
                </div>

            </div>
            <!--end row-->
        </div>
        <!--end card-body-->
    </div>
    <!--end card-->
</div>
<!--end col-->
</div>
<!--end row-->

</div>

@include('layouts.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- it is used to disapper the successful meassage from the login/register/form page  -->
<script>
$(document).ready(function() {
    window.setTimeout(function() {
        $('#flasMesage').hide();
    }, 2000);
});
</script>