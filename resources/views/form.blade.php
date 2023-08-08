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
                <h4 class="page-title">Create Project</h4>
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

                    <div id="flasMesage"><h5 class="text-success">@if(Session::has('saveProject')){{ Session::get('saveProject') }} @endif</h5></div>
                    <div id="flasMesage"><h5 class="text-danger">@if(Session::has('notSave')){{ Session::get('notSave') }} @endif</h5></div>
      
                    
                        <div class="col-lg-12">
                            <form method="POST" action="{{url('/storeproject')}}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label for="projectName" class="form-label">Project Name :</label>
                                    <input type="text" name="project_name" class="form-control" id="projectName"
                                        aria-describedby="emailHelp" placeholder="Enter project name" value="{{ old('project_name') }}">
                                        <p class="small text-danger resethtml">@error('project_name'){{ $message }}@enderror</p>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-3 col-6 mb-2 mb-lg-0">
                                            <label class="form-label mt-2" for="pro-start-date">Project Start
                                                Date</label>
                                            <input type="date" name="start" class="form-control" id="pro-start-date"
                                                placeholder="Enter start date">
                                                <p class="small text-danger resethtml">@error('start'){{ $message }}@enderror</p>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3 col-6 mb-2 mb-lg-0">
                                            <label class="form-label mt-2" for="pro-end-date">Project End Date</label>
                                            <input type="date" name="end" class="form-control" id="pro-end-date"
                                                placeholder="Enter end date">
                                                <p class="small text-danger resethtml">@error('end'){{ $message }}@enderror</p>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3 col-6">
                                            <label class="form-label mt-2" for="pro-rate">Rate</label>
                                            <input type="text" class="form-control rate" name="rate" id="pro-rate"
                                                placeholder="Enter rate">
                                                <p class="small text-danger resethtml">@error('rate'){{ $message }}@enderror</p>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3 col-6">
                                            <label class="form-label mt-2" for="pro-end-date">Price Type</label>
                                            <select class="form-select" name="price" >
                                            <option value="" selected="" disabled="" hidden="">select</option>
                                                <option value="Hourly">Hourly</option>
                                                <option value="Daily">Daily</option>
                                                <option value="Fix">Fix</option>
                                            </select>
                                            <p class="small text-danger resethtml">@error('price'){{ $message }}@enderror</p>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6 mb-2 mb-lg-0">
                                            <label class="form-label mt-2" for="pro-end-date">Required</label>
                                            <select class="form-select required"name="require">
                                            <option value="" selected="" disabled="" hidden="">select</option>
                                                <option value="UI/UX Design">UI/UX Design</option>
                                                <option value="Payment System" >Payment System </option>
                                                <option value="Android 10">Android 10</option>
                                            </select>
                                            <p class="small text-danger resethtml">@error('require'){{ $message }}@enderror</p>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3 col-6">
                                            <label class="form-label mt-2" for="pro-end-date">Invoice Time</label>
                                            <select class="form-select  " name="invoice">
                                            <option value="" selected="" disabled="" hidden="">select</option>
                                                <option value="30 Day">30 Day</option>
                                                <option  value="3 Month">3 Month</option>
                                                <option value="1 Year">1 Year</option>
                                            </select>
                                            <p class="small text-danger resethtml">@error('invoice'){{ $message }}@enderror</p>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3 col-6">
                                            <label class="form-label mt-2" for="pro-end-date">Priority</label>
                                            <select class="form-select priority" name="priority">
                                            <option value="" selected="" disabled="" hidden="">select</option>
                                                <option value="Medium">Medium</option>
                                                <option value="Low">Low</option>
                                                <option value="high">High</option>
                                            </select>
                                            <p class="small text-danger resethtml">@error('priority'){{ $message }}@enderror</p>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end form-group-->
                                <div class="form-group mb-3">
                                    <label class="form-label mt-2 message" for="pro-message">Message</label>
                                    <textarea  name="message" class="form-control" rows="5" id="pro-message"
                                        placeholder="writing here.."></textarea>
                                        <p class="small text-danger resethtml">@error('message'){{ $message }}@enderror</p>
                                </div>
                                <!--end form-group-->

                                <button type="submit" name="submit" class="btn btn-de-primary btn-sm">Create project</button>
                              
                            </form>
                            <!--end form-->
                        </div>
                        <!--end col-->
                        
                        <!--end col-->
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

@include('layouts.footer')
<script>
    $(document).ready(function() {
        window.setTimeout(function() {
            $('#flasMesage').hide();
        }, 5000);
    });
</script>

