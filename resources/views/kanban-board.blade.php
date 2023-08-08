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
                        <li class="breadcrumb-item active">Kanban</li>
                    </ol>
                </div>
                <h4 class="page-title">Kanban Board</h4>
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
                    <div class="kanban-board">
                        <div class="kanban-col">
                            <div class="kanban-main-card">
                                <div class="kanban-box-title">
                                    <h4 class="header-title mb-3">New Projects</h4>
                                    <div class="dropdown kanban-main-dropdown">
                                        <a class="dropdown-toggle arrow-none" id="drop1" data-bs-toggle="dropdown"
                                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="las la-ellipsis-v font-24 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop1">
                                            <a class="dropdown-item" href="#">Create Project</a>
                                            <a class="dropdown-item" href="#">Open Project</a>
                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                        </div>
                                    </div>
                                </div>

                                <div id="project-list-left" class="pb-1">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="dropdown d-inline-block float-end">
                                                <a class="dropdown-toggle mr-n2 mt-n2" id="drop2"
                                                    data-bs-toggle="dropdown" href="#" role="button"
                                                    aria-haspopup="false" aria-expanded="false">
                                                    <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <!--end dropdown-->
                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-warning"></i>
                                            <h5 class="my-1">Furnishing Of modern <br>LHB coaches</h5>
                                            <p class="text-muted mb-2">MCF</p>
                                            <div class="row justify-content-center">
                                                <div class="col-6 align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-item d-inline-block mr-2">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                <span class="text-muted font-weight-bold">3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 align-self-center">
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-1.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-9.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end card-->

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="dropdown d-inline-block float-end">
                                                <a class="dropdown-toggle mr-n2 mt-n2" id="drop3"
                                                    data-bs-toggle="dropdown" href="#" role="button"
                                                    aria-haspopup="false" aria-expanded="false">
                                                    <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop3">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <!--end dropdown-->
                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-success"></i>
                                            <h5 class="my-1">Inspection carriage <br> coaches 56 sets</h5>
                                            <p class="text-muted mb-2">RCF</p>
                                            <div class="row justify-content-center">
                                                <div class="col-6 align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-item d-inline-block mr-2">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                <span class="text-muted font-weight-bold">3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 align-self-center">
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-2.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end card-->

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="dropdown d-inline-block float-end">
                                                <a class="dropdown-toggle mr-n2 mt-n2" id="drop4"
                                                    data-bs-toggle="dropdown" href="#" role="button"
                                                    aria-haspopup="false" aria-expanded="false">
                                                    <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop4">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <!--end dropdown-->
                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-danger"></i>
                                            <h5 class="my-1">Furnishing of Vande Bharat <br> 35 coaches</h5>
                                            <p class="text-muted mb-2">ICF  </p>
                                            <div class="row justify-content-center">
                                                <div class="col-6 align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-item d-inline-block mr-2">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                <span class="text-muted font-weight-bold">3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 align-self-center">
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-3.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-1.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end card-->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="dropdown d-inline-block float-end">
                                                <a class="dropdown-toggle mr-n2 mt-n2" id="drop5"
                                                    data-bs-toggle="dropdown" href="#" role="button"
                                                    aria-haspopup="false" aria-expanded="false">
                                                    <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop5">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <!--end dropdown-->
                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-purple"></i>
                                            <h5 class="my-1">Refurbishment Of coaches<br> 46 sets</h5>
                                            <p class="text-muted mb-2">WCR </p>
                                            <div class="row justify-content-center">
                                                <div class="col-6 align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-item d-inline-block mr-2">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                <span class="text-muted font-weight-bold">3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 align-self-center">
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-4.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end card-->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="dropdown d-inline-block float-end">
                                                <a class="dropdown-toggle mr-n2 mt-n2" id="drop6"
                                                    data-bs-toggle="dropdown" href="#" role="button"
                                                    aria-haspopup="false" aria-expanded="false">
                                                    <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop6">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <!--end dropdown-->
                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-success"></i>
                                            <h5 class="my-1">Inspection carriage <br>coaches 46 sets</h5>
                                            <p class="text-muted mb-2">RCF</p>
                                            <div class="row justify-content-center">
                                                <div class="col-6 align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-item d-inline-block mr-2">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                <span class="text-muted font-weight-bold">3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 align-self-center">
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-8.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-2.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end card-->
                                </div>
                                <!--end project-list-left-->
                                <button type="button" class="btn w-100 btn-soft-primary btn-sm">Add Task</button>
                            </div>
                            <!--end /div-->
                        </div>
                        <!--end kanban-col-->
                        <div class="kanban-col">
                            <div class="kanban-main-card">
                                <div class="kanban-box-title">
                                    <h4 class="header-title mb-3">To Do</h4>
                                    <div class="dropdown kanban-main-dropdown">
                                        <a class="dropdown-toggle arrow-none" id="drop1" data-bs-toggle="dropdown"
                                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="las la-ellipsis-v font-24 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop1">
                                            <a class="dropdown-item" href="#">Create Project</a>
                                            <a class="dropdown-item" href="#">Open Project</a>
                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                        </div>
                                    </div>
                                </div>

                                <div id="project-list-center-left" class="pb-1">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="dropdown d-inline-block float-end">
                                                <a class="dropdown-toggle mr-n2 mt-n2" id="drop2"
                                                    data-bs-toggle="dropdown" href="#" role="button"
                                                    aria-haspopup="false" aria-expanded="false">
                                                    <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <!--end dropdown-->
                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-warning"></i>
                                            <h5 class="my-1">Refurbishment of <br>LWACCN coaches</h5>
                                            <p class="text-muted mb-2">RCF</p>
                                            <div class="row justify-content-center">
                                                <div class="col-6 align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-item d-inline-block mr-2">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                <span class="text-muted font-weight-bold">3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 align-self-center">
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-1.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-9.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end card-->

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="dropdown d-inline-block float-end">
                                                <a class="dropdown-toggle mr-n2 mt-n2" id="drop3"
                                                    data-bs-toggle="dropdown" href="#" role="button"
                                                    aria-haspopup="false" aria-expanded="false">
                                                    <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop3">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <!--end dropdown-->
                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-success"></i>
                                            <h5 class="my-1"> refurbishment of IR <br> coaches 
                                            </h5>
                                            <p class="text-muted mb-2">ICF</p>
                                            <div class="row justify-content-center">
                                                <div class="col-6 align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-item d-inline-block mr-2">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                <span class="text-muted font-weight-bold">3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 align-self-center">
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-2.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end card-->

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="dropdown d-inline-block float-end">
                                                <a class="dropdown-toggle mr-n2 mt-n2" id="drop4"
                                                    data-bs-toggle="dropdown" href="#" role="button"
                                                    aria-haspopup="false" aria-expanded="false">
                                                    <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop4">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <!--end dropdown-->
                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-danger"></i>
                                            <h5 class="my-1">Furnishing of Self-Propelled <br>Inspection Cars 
                                                (SPIC)<br> coaches
                                            </h5>
                                            <p class="text-muted mb-2">RCF</p>
                                            <div class="row justify-content-center">
                                                <div class="col-6 align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-item d-inline-block mr-2">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                <span class="text-muted font-weight-bold">3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 align-self-center">
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-3.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-1.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end card-->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="dropdown d-inline-block float-end">
                                                <a class="dropdown-toggle mr-n2 mt-n2" id="drop5"
                                                    data-bs-toggle="dropdown" href="#" role="button"
                                                    aria-haspopup="false" aria-expanded="false">
                                                    <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop5">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <!--end dropdown-->
                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-purple"></i>
                                            <h5 class="my-1">Furnishing of Inspection  <br> carriage coaches
                                            </h5>
                                            <p class="text-muted mb-2">RCF</p>
                                            <div class="row justify-content-center">
                                                <div class="col-6 align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-item d-inline-block mr-2">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                <span class="text-muted font-weight-bold">3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 align-self-center">
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-4.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end card-->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="dropdown d-inline-block float-end">
                                                <a class="dropdown-toggle mr-n2 mt-n2" id="drop6"
                                                    data-bs-toggle="dropdown" href="#" role="button"
                                                    aria-haspopup="false" aria-expanded="false">
                                                    <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop6">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <!--end dropdown-->
                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-success"></i>
                                            <h5 class="my-1">Upgradation Toilet <br>420 Coaches</h5>
                                            <p class="text-muted mb-2">NER</p>
                                            <div class="row justify-content-center">
                                                <div class="col-6 align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-item d-inline-block mr-2">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                <span class="text-muted font-weight-bold">3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 align-self-center">
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-8.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-2.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end card-->
                                </div>
                                <!--end project-list-left-->
                                <button type="button" class="btn w-100 btn-soft-primary btn-sm">Add Task</button>
                            </div>
                            <!--end /div-->
                        </div>
                        <!--end kanban-col-->

                        <div class="kanban-col">
                            <div class="kanban-main-card">
                                <div class="kanban-box-title">
                                    <h4 class="header-title mb-3">In Progress</h4>
                                    <div class="dropdown kanban-main-dropdown">
                                        <a class="dropdown-toggle arrow-none" id="drop1" data-bs-toggle="dropdown"
                                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="las la-ellipsis-v font-24 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop1">
                                            <a class="dropdown-item" href="#">Create Project</a>
                                            <a class="dropdown-item" href="#">Open Project</a>
                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="project-list-center" class="pb-1">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="dropdown d-inline-block float-end">
                                                <a class="dropdown-toggle mr-n2 mt-n2" id="drop08"
                                                    data-bs-toggle="dropdown" href="#" role="button"
                                                    aria-haspopup="false" aria-expanded="false">
                                                    <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop08">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <!--end dropdown-->
                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-warning"></i>
                                            <h5 class="my-1">Vande Bharat</h5>
                                            <p class="text-muted mb-2">ICF</p>
                                            <div class="row justify-content-center">
                                                <div class="col-6 align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-item d-inline-block mr-2">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                <span class="text-muted font-weight-bold">3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 align-self-center">
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-1.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-9.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end card-->

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="dropdown d-inline-block float-end">
                                                <a class="dropdown-toggle mr-n2 mt-n2" id="drop9"
                                                    data-bs-toggle="dropdown" href="#" role="button"
                                                    aria-haspopup="false" aria-expanded="false">
                                                    <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop9">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <!--end dropdown-->
                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-success"></i>
                                            <h5 class="my-1">Deendayalu LHB-GS <br> 233 coach</h5>
                                            <p class="text-muted mb-2">MCF </p>
                                            <div class="row justify-content-center">
                                                <div class="col-6 align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-item d-inline-block mr-2">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                <span class="text-muted font-weight-bold">3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 align-self-center">
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-2.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end card-->

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="dropdown d-inline-block float-end">
                                                <a class="dropdown-toggle mr-n2 mt-n2" id="drop10"
                                                    data-bs-toggle="dropdown" href="#" role="button"
                                                    aria-haspopup="false" aria-expanded="false">
                                                    <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop10">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <!--end dropdown-->
                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-danger"></i>
                                            <h5 class="my-1">LWSCN EOG LHP Type <br>
                                                (Non-AC Sleeper Coach) <br>45 coach
                                            </h5>
                                            <p class="text-muted mb-2">RCF</p>
                                            <div class="row justify-content-center">
                                                <div class="col-6 align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-item d-inline-block mr-2">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                <span class="text-muted font-weight-bold">3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 align-self-center">
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-3.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-1.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end card-->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="dropdown d-inline-block float-end">
                                                <a class="dropdown-toggle mr-n2 mt-n2" id="drop11"
                                                    data-bs-toggle="dropdown" href="#" role="button"
                                                    aria-haspopup="false" aria-expanded="false">
                                                    <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop11">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <!--end dropdown-->
                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-purple"></i>
                                            <h5 class="my-1">Mechanical Furnishing Work <br>in 8-Wheeler DETC<br> (Under
                                                Slung Type)
                                            </h5>
                                            <p class="text-muted mb-2">NR</p>
                                            <div class="row justify-content-center">
                                                <div class="col-6 align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-item d-inline-block mr-2">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                <span class="text-muted font-weight-bold">3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 align-self-center">
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-4.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end card-->
                                </div>
                                <!--end project-list-left-->
                                <button type="button" class="btn w-100  btn-soft-primary btn-sm">Add Task</button>
                            </div>
                            <!--end /div-->
                        </div>
                        <!--end kanban-col-->

                        <div class="kanban-col">
                            <div class="kanban-main-card">
                                <div class="kanban-box-title">
                                    <h4 class="header-title mb-3">RITES Inspection</h4>
                                    <div class="dropdown kanban-main-dropdown">
                                        <a class="dropdown-toggle arrow-none" id="drop1" data-bs-toggle="dropdown"
                                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="las la-ellipsis-v font-24 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop1">
                                            <a class="dropdown-item" href="#">Create Project</a>
                                            <a class="dropdown-item" href="#">Open Project</a>
                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                        </div>
                                    </div>
                                </div>

                                <div id="project-list-center-right" class="pb-1">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="dropdown d-inline-block float-end">
                                                <a class="dropdown-toggle mr-n2 mt-n2" id="drop13"
                                                    data-bs-toggle="dropdown" href="#" role="button"
                                                    aria-haspopup="false" aria-expanded="false">
                                                    <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop13">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <!--end dropdown-->
                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-warning"></i>
                                            <h5 class="my-1">Braille Signages </h5>
                                            <p class="text-muted mb-2">1000 Sets</p>
                                            <div class="row justify-content-center">
                                                <div class="col-6 align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-item d-inline-block mr-2">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                <span class="text-muted font-weight-bold">3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 align-self-center">
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-5.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end card-->

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="dropdown d-inline-block float-end">
                                                <a class="dropdown-toggle mr-n2 mt-n2" id="drop14"
                                                    data-bs-toggle="dropdown" href="#" role="button"
                                                    aria-haspopup="false" aria-expanded="false">
                                                    <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop14">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <!--end dropdown-->
                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-purple"></i>
                                            <h5 class="my-1">Seat and Berth <br> 46 sets</h5>
                                            <p class="text-muted mb-2">46 sets</p>
                                            <div class="row justify-content-center">
                                                <div class="col-6 align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-item d-inline-block mr-2">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                <span class="text-muted font-weight-bold">3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 align-self-center">
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-6.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-9.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end card-->

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="dropdown d-inline-block float-end">
                                                <a class="dropdown-toggle mr-n2 mt-n2" id="drop15"
                                                    data-bs-toggle="dropdown" href="#" role="button"
                                                    aria-haspopup="false" aria-expanded="false">
                                                    <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop15">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <!--end dropdown-->
                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-danger"></i>
                                            <h5 class="my-1">Modular Deluxe Toilet</h5>
                                            <p class="text-muted mb-2">40 sets</p>
                                            <div class="row justify-content-center">
                                                <div class="col-6 align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-item d-inline-block mr-2">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                <span class="text-muted font-weight-bold">3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 align-self-center">
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-7.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end card-->
                                </div>
                                <!--end project-list-right-->
                                <button type="button" class="btn w-100  btn-soft-primary btn-sm">Add Task</button>
                            </div>
                            <!--end /div-->
                        </div>
                        <!--end kanban-col-->

                        <div class="kanban-col">
                            <div class="kanban-main-card">
                                <div class="kanban-box-title">
                                    <h4 class="header-title mb-3">Done</h4>
                                    <div class="dropdown kanban-main-dropdown">
                                        <a class="dropdown-toggle arrow-none" id="drop1" data-bs-toggle="dropdown"
                                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="las la-ellipsis-v font-24 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop1">
                                            <a class="dropdown-item" href="#">Create Project</a>
                                            <a class="dropdown-item" href="#">Open Project</a>
                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                        </div>
                                    </div>
                                </div>

                                <div id="project-list-right" class="pb-1">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="dropdown d-inline-block float-end">
                                                <a class="dropdown-toggle mr-n2 mt-n2" id="drop17"
                                                    data-bs-toggle="dropdown" href="#" role="button"
                                                    aria-haspopup="false" aria-expanded="false">
                                                    <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop17">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <!--end dropdown-->
                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-warning"></i>
                                            <h5 class="my-1">LWSCN EOG LHP Type <br>
                                                (Non-AC Sleeper Coach)
                                            </h5>
                                            <p class="text-muted mb-2">45 Coach</p>
                                            <div class="row justify-content-center">
                                                <div class="col-6 align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-item d-inline-block mr-2">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                <span class="text-muted font-weight-bold">3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 align-self-center">
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-5.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end card-->

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="dropdown d-inline-block float-end">
                                                <a class="dropdown-toggle mr-n2 mt-n2" id="drop18"
                                                    data-bs-toggle="dropdown" href="#" role="button"
                                                    aria-haspopup="false" aria-expanded="false">
                                                    <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop18">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <!--end dropdown-->
                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-purple"></i>
                                            <h5 class="my-1">Supply of Furnishing Material <br>and Complete Furnishing of <br>TRC Coaches</h5>
                                            <p class="text-muted mb-2">04 Coaches</p>
                                            <div class="row justify-content-center">
                                                <div class="col-6 align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-item d-inline-block mr-2">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                <span class="text-muted font-weight-bold">3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 align-self-center">
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-6.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-9.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end card-->

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="dropdown d-inline-block float-end">
                                                <a class="dropdown-toggle mr-n2 mt-n2" id="drop19"
                                                    data-bs-toggle="dropdown" href="#" role="button"
                                                    aria-haspopup="false" aria-expanded="false">
                                                    <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop19">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <!--end dropdown-->
                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-danger"></i>
                                            <h5 class="my-1">Electrical Furnishing<br> Work in 8-Wheeler DETC<br> (Under Slung Type)
</h5>
                                            <p class="text-muted mb-2">19 Coaches</p>
                                            <div class="row justify-content-center">
                                                <div class="col-6 align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-item d-inline-block mr-2">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                <span class="text-muted font-weight-bold">3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 align-self-center">
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-7.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end card-->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="dropdown d-inline-block float-end">
                                                <a class="dropdown-toggle mr-n2 mt-n2" id="drop20"
                                                    data-bs-toggle="dropdown" href="#" role="button"
                                                    aria-haspopup="false" aria-expanded="false">
                                                    <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop20">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <!--end dropdown-->
                                            <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-success"></i>
                                            <h5 class="my-1">LHB Type Power Car <br>(LWLRRM
               Break Luggage <br>cum Generator) 
</h5>
                                            <p class="text-muted mb-2">24 Coach</p>
                                            <div class="row justify-content-center">
                                                <div class="col-6 align-self-center">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-item d-inline-block mr-2">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                <span class="text-muted font-weight-bold">0/5</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-item d-inline-block">
                                                            <a class="" href="#">
                                                                <i class="mdi mdi-comment-outline text-muted"></i>
                                                                <span class="text-muted font-weight-bold">3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 align-self-center">
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-8.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="float-end" href="#">
                                                        <img src="assets/images/users/user-2.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end card-->
                                </div>
                                <!--end project-list-right-->
                                <button type="button" class="btn w-100  btn-soft-primary btn-sm">Add Task</button>
                            </div>
                            <!--end /div-->
                        </div>
                        <!--end kanban-col-->
                    </div>
                    <!--end kanban-board-->
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