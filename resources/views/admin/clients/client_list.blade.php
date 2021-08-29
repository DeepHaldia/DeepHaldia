<!-- Header END -->
<!-- Side Nav START -->
@extends('layouts.admin_layout.main')
@section('title', 'Dashboard')

@section('content')
<!-- Header END -->

@include('admin.sidebar')


<!-- Side Nav END -->
<!-- Page Container START -->
<div class="page-container">

    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header no-gutters">
            <div class="row align-items-md-center">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="input-affix mb-3">
                                <i class="prefix-icon anticon anticon-search opacity-04"></i>
                                <input type="text" class="form-control" placeholder="Search Client">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <select name="search_by" size="1" class="form-control mb-3">
                                <option value="name">Name</option>
                                <option value="city">City</option>
                                <option value="state">State</option>
                                <option value="zip">Zip Code</option>
                                <option value="country">Country</option>
                                <option value="telephone">Phone</option>
                                <option value="email">E-mail</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-md-right text-center mx-auto">

                        <a class="btn btn-primary" href="{{ url('admin/clients_add') }}">
                            <i class="anticon anticon-plus"></i>
                            <span class="m-l-5">New Client</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div id="card-view" class="d-none">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="media">

                                        <div class="m-l-10">
                                            <h5 class="m-b-0">Pamela Wanda</h5>
                                            <span class="text-muted font-size-13">
                                                101 Test Ave,
                                                , United States
                                            </span>
                                        </div>
                                    </div>
                                    <div class="dropdown dropdown-animated scale-left">
                                        <a class="text-gray font-size-18" href="javascript:void(0);"
                                            data-toggle="dropdown">
                                            <i class="anticon anticon-ellipsis"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-eye"></i>
                                                <span class="m-l-10">View</span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-edit"></i>
                                                <span class="m-l-10">Edit</span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-delete"></i>
                                                <span class="m-l-10">Delete</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <p class="m-t-25">European minnow priapumfish mosshead warbonnet shrimpfish.</p>
                                <div class="m-t-30">
                                    <div class="d-flex justify-content-between">
                                        <span class="font-weight-semibold">Progress</span>
                                        <span class="font-weight-semibold">100%</span>
                                    </div>
                                    <div class="progress progress-sm m-t-10">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                                <div class="m-t-20">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="badge badge-pill badge-cyan">Ready</span>
                                        </div>
                                        <div>
                                            <a class="m-r-5" href="javascript:void(0);" data-toggle="tooltip"
                                                title="Pamela Wanda">
                                                alex@gmail.com
                                            </a>
                                            <!---- <a class="m-r-5" href="javascript:void(0);" data-toggle="tooltip" title="Darryl Day">
                                                             <div class="avatar avatar-image avatar-sm">
                                                                 <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                                             </div>
                                                         </a>--->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--------------end of cardbody-->
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="media">
                                        <div class="avatar avatar-image rounded">
                                            <img src="assets/images/avatars/p3.jpg" alt="">
                                        </div>
                                        <div class="m-l-10">
                                            <h5 class="m-b-0">Ruth Mathe</h5>
                                            <span class="text-muted font-size-13">
                                                101 Test Ave,
                                                , United States
                                            </span>
                                        </div>
                                    </div>
                                    <div class="dropdown dropdown-animated scale-left">
                                        <a class="text-gray font-size-18" href="javascript:void(0);"
                                            data-toggle="dropdown">
                                            <i class="anticon anticon-ellipsis"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-eye"></i>
                                                <span class="m-l-10">View</span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-edit"></i>
                                                <span class="m-l-10">Edit</span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-delete"></i>
                                                <span class="m-l-10">Delete</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <p class="m-t-25">Efficiently unleash cross-media information without cross-media value.
                                </p>
                                <div class="m-t-30">
                                    <div class="d-flex justify-content-between">
                                        <span class="font-weight-semibold">Progress</span>
                                        <span class="font-weight-semibold">100%</span>
                                    </div>
                                    <div class="progress progress-sm m-t-10">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                                <div class="m-t-20">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="badge badge-pill badge-cyan">Ready</span>
                                        </div>
                                        <div>
                                            <a class="m-r-5" href="javascript:void(0);" data-toggle="tooltip"
                                                title="Virgil Gonzales">
                                                tester@test.com
                                            </a>
                                            <!-----<a class="m-r-5" href="javascript:void(0);" data-toggle="tooltip" title="Erin Gonzales">
                                                            <div class="avatar avatar-image avatar-sm">
                                                                <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                                            </div>
                                                        </a>
                                                        <a class="m-r-5" href="javascript:void(0);" data-toggle="tooltip" title="2 More">
                                                            <div class="avatar avatar-text avatar-sm">
                                                                <span class="text-dark">+2</span>
                                                            </div>
                                                        </a>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="media">
                                        <div class="avatar avatar-image rounded">
                                            <img src="assets/images/avatars/p5.jpg" alt="">
                                        </div>
                                        <div class="m-l-10">
                                            <h5 class="m-b-0">Kate Winlet</h5>
                                            <span class="text-muted font-size-13">
                                                101 Test Ave,
                                                , United States
                                            </span>
                                        </div>
                                    </div>
                                    <div class="dropdown dropdown-animated scale-left">
                                        <a class="text-gray font-size-18" href="javascript:void(0);"
                                            data-toggle="dropdown">
                                            <i class="anticon anticon-ellipsis"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-eye"></i>
                                                <span class="m-l-10">View</span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-edit"></i>
                                                <span class="m-l-10">Edit</span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-delete"></i>
                                                <span class="m-l-10">Delete</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <p class="m-t-25">Jelly-o sesame snaps halvah croissant oat cake cookie.</p>
                                <div class="m-t-30">
                                    <div class="d-flex justify-content-between">
                                        <span class="font-weight-semibold">Progress</span>
                                        <span class="font-weight-semibold">87%</span>
                                    </div>
                                    <div class="progress progress-sm m-t-10">
                                        <div class="progress-bar" role="progressbar" style="width: 87%"></div>
                                    </div>
                                </div>
                                <div class="m-t-20">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="badge badge-pill badge-blue">In Progress</span>
                                        </div>
                                        <div>
                                            <a class="m-r-5" href="javascript:void(0);" data-toggle="tooltip"
                                                title="Lilian Stone">
                                                <div class="avatar avatar-image avatar-sm">
                                                    <img src="assets/images/avatars/thumb-10.jpg" alt="">
                                                </div>
                                            </a>
                                            <a class="m-r-5" href="javascript:void(0);" data-toggle="tooltip"
                                                title="Victor Terry">
                                                <div class="avatar avatar-image avatar-sm">
                                                    <img src="assets/images/avatars/thumb-11.jpg" alt="">
                                                </div>
                                            </a>
                                            <a class="m-r-5" href="javascript:void(0);" data-toggle="tooltip"
                                                title="3 More">
                                                <div class="avatar avatar-text avatar-sm">
                                                    <span class="text-dark">+3</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="media">
                                        <div class="avatar avatar-image rounded">
                                            <img src="assets/images/avatars/p3.jpg" alt="">
                                        </div>
                                        <div class="m-l-10">
                                            <h5 class="m-b-0">Jack Mills</h5>
                                            <span class="text-muted font-size-13">
                                                101 Test Ave,
                                                , United States
                                            </span>
                                        </div>
                                    </div>
                                    <div class="dropdown dropdown-animated scale-left">
                                        <a class="text-gray font-size-18" href="javascript:void(0);"
                                            data-toggle="dropdown">
                                            <i class="anticon anticon-ellipsis"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-eye"></i>
                                                <span class="m-l-10">View</span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-edit"></i>
                                                <span class="m-l-10">Edit</span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-delete"></i>
                                                <span class="m-l-10">Delete</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <p class="m-t-25">Irish skinny, grinder affogato, dark, sweet carajillo flavour
                                    seasonal.</p>
                                <div class="m-t-30">
                                    <div class="d-flex justify-content-between">
                                        <span class="font-weight-semibold">Progress</span>
                                        <span class="font-weight-semibold">73%</span>
                                    </div>
                                    <div class="progress progress-sm m-t-10">
                                        <div class="progress-bar" role="progressbar" style="width: 73%"></div>
                                    </div>
                                </div>
                                <div class="m-t-20">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="badge badge-pill badge-blue">In Progress</span>
                                        </div>
                                        <div>
                                            <a class="m-r-5" href="javascript:void(0);" data-toggle="tooltip"
                                                title="Marshall Nichols">
                                                <div class="avatar avatar-image avatar-sm">
                                                    <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                                </div>
                                            </a>
                                            <a class="m-r-5" href="javascript:void(0);" data-toggle="tooltip"
                                                title="Pamela Wanda">
                                                <div class="avatar avatar-image avatar-sm">
                                                    tester@test.com
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="media">
                                        <div class="avatar avatar-image rounded">
                                            <img src="assets/images/avatars/p2.jpg" alt="">
                                        </div>
                                        <div class="m-l-10">
                                            <h5 class="m-b-0">Jack Mills</h5>
                                            <span class="text-muted font-size-13">
                                                101 Test Ave,
                                                , United States
                                            </span>
                                        </div>
                                    </div>
                                    <div class="dropdown dropdown-animated scale-left">
                                        <a class="text-gray font-size-18" href="javascript:void(0);"
                                            data-toggle="dropdown">
                                            <i class="anticon anticon-ellipsis"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-eye"></i>
                                                <span class="m-l-10">View</span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-edit"></i>
                                                <span class="m-l-10">Edit</span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-delete"></i>
                                                <span class="m-l-10">Delete</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <p class="m-t-25">Let us wax poetic about the beauty of the cheeseburger.</p>
                                <div class="m-t-30">
                                    <div class="d-flex justify-content-between">
                                        <span class="font-weight-semibold">Progress</span>
                                        <span class="font-weight-semibold">73%</span>
                                    </div>
                                    <div class="progress progress-sm m-t-10">
                                        <div class="progress-bar" role="progressbar" style="width: 73%"></div>
                                    </div>
                                </div>
                                <div class="m-t-20">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="badge badge-pill badge-blue">In Progress</span>
                                        </div>
                                        <div>
                                            <a class="m-r-5" href="javascript:void(0);" data-toggle="tooltip"
                                                title="Erin Gonzales">
                                                <div class="avatar avatar-image avatar-sm">
                                                    <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                                </div>
                                            </a>
                                            <a class="m-r-5" href="javascript:void(0);" data-toggle="tooltip"
                                                title="Lilian Stone">
                                                <div class="avatar avatar-image avatar-sm">
                                                    <img src="assets/images/avatars/thumb-10.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="media">
                                        <div class="avatar avatar-image rounded">
                                            <img src="assets/images/avatars/p3.jpg" alt="">
                                        </div>
                                        <div class="m-l-10">
                                            <h5 class="m-b-0">Carl Stud</h5>
                                            <span class="text-muted font-size-13">
                                                101 Test Ave,
                                                , United States
                                            </span>
                                        </div>
                                    </div>
                                    <div class="dropdown dropdown-animated scale-left">
                                        <a class="text-gray font-size-18" href="javascript:void(0);"
                                            data-toggle="dropdown">
                                            <i class="anticon anticon-ellipsis"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-eye"></i>
                                                <span class="m-l-10">View</span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-edit"></i>
                                                <span class="m-l-10">Edit</span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-delete"></i>
                                                <span class="m-l-10">Delete</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <p class="m-t-25">Here's the story of a man named Brady who was busy with three boys</p>
                                <div class="m-t-30">
                                    <div class="d-flex justify-content-between">
                                        <span class="font-weight-semibold">Progress</span>
                                        <span class="font-weight-semibold">62%</span>
                                    </div>
                                    <div class="progress progress-sm m-t-10">
                                        <div class="progress-bar" role="progressbar" style="width: 62%"></div>
                                    </div>
                                </div>
                                <div class="m-t-20">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="badge badge-pill badge-blue">In Progress</span>
                                        </div>
                                        <div>
                                            <a class="m-r-5" href="javascript:void(0);" data-toggle="tooltip"
                                                title="Virgil Gonzales">
                                                <div class="avatar avatar-image avatar-sm">
                                                    <img src="assets/images/avatars/thumb-4.jpg" alt="">
                                                </div>
                                            </a>
                                            <a class="m-r-5" href="javascript:void(0);" data-toggle="tooltip"
                                                title="Darryl Day">
                                                <div class="avatar avatar-image avatar-sm">
                                                    <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                                </div>
                                            </a>
                                            <a class="m-r-5" href="javascript:void(0);" data-toggle="tooltip"
                                                title="2 More">
                                                <div class="avatar avatar-text avatar-sm">
                                                    <span class="text-dark">+2</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="media">
                                        <div class="avatar avatar-image rounded">
                                            <img src="assets/images/avatars/p1.jpg" alt="">
                                        </div>
                                        <div class="m-l-10">
                                            <h5 class="m-b-0">Austin Max</h5>
                                            <span class="text-muted font-size-13">
                                                101 Test Ave,
                                                , United States
                                            </span>
                                        </div>
                                    </div>
                                    <div class="dropdown dropdown-animated scale-left">
                                        <a class="text-gray font-size-18" href="javascript:void(0);"
                                            data-toggle="dropdown">
                                            <i class="anticon anticon-ellipsis"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-eye"></i>
                                                <span class="m-l-10">View</span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-edit"></i>
                                                <span class="m-l-10">Edit</span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-delete"></i>
                                                <span class="m-l-10">Delete</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <p class="m-t-25">Caerphilly swiss fromage frais. Brie cheese and wine fromage.</p>
                                <div class="m-t-30">
                                    <div class="d-flex justify-content-between">
                                        <span class="font-weight-semibold">Progress</span>
                                        <span class="font-weight-semibold">62%</span>
                                    </div>
                                    <div class="progress progress-sm m-t-10">
                                        <div class="progress-bar" role="progressbar" style="width: 62%"></div>
                                    </div>
                                </div>
                                <div class="m-t-20">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="badge badge-pill badge-blue">In Progress</span>
                                        </div>
                                        <div>
                                            <a class="m-r-5" href="javascript:void(0);" data-toggle="tooltip"
                                                title="Lilian Stone">
                                                <div class="avatar avatar-image avatar-sm">
                                                    <img src="assets/images/avatars/thumb-8.jpg" alt="">
                                                </div>
                                            </a>
                                            <a class="m-r-5" href="javascript:void(0);" data-toggle="tooltip"
                                                title="Victor Terry">
                                                <div class="avatar avatar-image avatar-sm">
                                                    <img src="assets/images/avatars/thumb-9.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="media">
                                        <div class="avatar avatar-image rounded">
                                            <img src="assets/images/avatars/p5.jpg" alt="">
                                        </div>
                                        <div class="m-l-10">
                                            <h5 class="m-b-0">Moody Agency</h5>
                                            <span class="text-muted font-size-13">
                                                101 Test Ave,
                                                , United States
                                            </span>
                                        </div>
                                    </div>
                                    <div class="dropdown dropdown-animated scale-left">
                                        <a class="text-gray font-size-18" href="javascript:void(0);"
                                            data-toggle="dropdown">
                                            <i class="anticon anticon-ellipsis"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-eye"></i>
                                                <span class="m-l-10">View</span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-edit"></i>
                                                <span class="m-l-10">Edit</span>
                                            </button>
                                            <button class="dropdown-item" type="button">
                                                <i class="anticon anticon-delete"></i>
                                                <span class="m-l-10">Delete</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <p class="m-t-25">Do you see any Teletubbies in here? The path of the righteous.</p>
                                <div class="m-t-30">
                                    <div class="d-flex justify-content-between">
                                        <span class="font-weight-semibold">Behind</span>
                                        <span class="font-weight-semibold">28%</span>
                                    </div>
                                    <div class="progress progress-sm m-t-10">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 28%"></div>
                                    </div>
                                </div>
                                <div class="m-t-20">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="badge badge-pill badge-red">In Progress</span>
                                        </div>
                                        <div>
                                            <a class="m-r-5" href="javascript:void(0);" data-toggle="tooltip"
                                                title="Lilian Stone">
                                                <div class="avatar avatar-image avatar-sm">
                                                    <img src="assets/images/avatars/thumb-8.jpg" alt="">
                                                </div>
                                            </a>
                                            <a class="m-r-5" href="javascript:void(0);" data-toggle="tooltip"
                                                title="Darryl Day">
                                                <div class="avatar avatar-image avatar-sm">
                                                    <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                                </div>
                                            </a>
                                            <a class="m-r-5" href="javascript:void(0);" data-toggle="tooltip"
                                                title="3 More">
                                                <div class="avatar avatar-text avatar-sm">
                                                    <span class="text-dark">+3</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" id="list-view">

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">

                                </div>
                            </div>
                            <form action="{{ url('admin/clients_all_delete') }}" method="POST">
                                @csrf
                            <table class="table mx-auto">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Reservation</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($Clients_data as $item)
                                    <tr>
                                        <td><input name="id_delete[]" id="id" type="checkbox" value="{{ $item->id }}"></td>
                                        <td>
                                            <div class="media align-items-center">

                                                <div class="m-l-10">
                                                    <span> {{ $item->last_name }} {{ $item->first_name }} </span>
                                                </div>
                                            </div>
                                        </td>
                            
                                        <td>
                                            <span>
                                                {{ $item->address }}
                                            </span>
                                        </td>

                                        <td>
                                            <div class="align-items-center">
                                                {{ $item->email }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="align-items-center d-flex">
                                                <a href="app-client-view.html" class="text-gray font-size-18">
                                                    <button class="dropdown-item" type="button">
                                                        <i class="fas fa-eye"></i>

                                                    </button>
                                                </a>
                                                <a>(7)</a>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-animated scale-left d-flex">

                                                <a class="text-gray font-size-18" href="{{ url('admin/clients_edit', $item->id) }}">
                                                    <button class="dropdown-item" type="button">
                                                        <i class="fas fa-edit"></i>

                                                    </button>
                                                </a>
                                                <a class="text-gray font-size-18" onclick="return confirm('Are you sure?')" href="{{ url('admin/client_delete', $item->id) }}">
                                                    <button class="dropdown-item" type="button">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </a>

                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td>
                                                <div class="align-items-center">
                                                    There is no data..
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                   
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group text-left">
                            <button class="btn btn-primary">Delete Selected</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <!----------end of listview-->
            <!---------------start of pagination-->
            <nav class="pagination text-right float-right">
                <ul class="pagination">
                  {{ $Clients_data->links() }}
                </ul>
            </nav>
            <!------------------end of pagination------->
        </div>
     
    </div>

    <!-- Content Wrapper END -->
    <!-- Footer START -->
@endsection
