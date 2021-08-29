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
        <div id="accordion">
            <div class="card">
                <div class="card-header">
                    <a class="card-link collapsed">
                        Current User
                    </a>
                </div>
                <div class="continer">
                    <div class="pt-5 text-right mr-5">
                        <a href="{{ url('admin/userlist_add') }}" class="btn btn-primary">Add Users</a>
                    </div>
                </div>
                <div id="collapseOne" class="collapse show" data-parent="#accordion" style="">
                    <div class="card mb-0 pb-0">
                        <div class="card-body mb-0 pb-0">
                            <div class="table-responsive mb-0 pb-0">
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Zone</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form></form>

                                                            <div class="form-group">
                                                                <label for="new-project-name">Zone Name</label>
                                                                <input type="text" class="form-control" value="SeaWorld">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="new-project-name">Zone Description</label>
                                                                <input type="text" class="form-control" value="SeaWorld Theme Park">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary text-center">Update Zone</button>
                                                            </div>                                                        
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <form action="{{ url('admin/userlist_all_delete') }}" method="POST">
                                            @csrf
                                        <table class="table mb-0 pb-0 mx-auto">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ( $userlist as $item)
                                        <tr>
                                            <td><input name="id_delete[]" id="id" type="checkbox" value="{{ $item->id }}"></td>
                                            <td>
                                                <span>
                                                   {{ $item->name }}
                                                </span>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-animated scale-left d-flex">                                                  
                                                    <a class="text-gray font-size-18" onclick="return confirm('Are you sure?')" href="{{ url('admin/userlist_delete',$item->id) }}">
                                                        <button class="dropdown-item" type="button">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                            
                                        @endforelse
                                        
                                        <!-- Modal -->
                                        
                                        <!------------------modal-->
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group text-left">
                                <button class="btn btn-primary">Delete Selected</button>
                            </div>
                        </form>
                        </div>
                    </div><!-----------------end of card-->
                </div>
            </div>
            <!---------modalbody-->
        </div>

    </div>
    <!-- Content Wrapper END -->
    @endsection