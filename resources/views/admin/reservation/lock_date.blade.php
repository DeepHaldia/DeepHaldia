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


                <div class="container-fluid text-center mx-auto pt-5" style="margin:7rem 0rem 2rem 0rem;">
                    <h2>Locked Dates Manager</h2>
                    <div class="pt-4">
                        <a class="btn btn-primary" href="{{ url('admin/reservation_add_lock_date') }}">Add Locked Date</a>
                    </div>
                    <div class="datetime-picker">
                        
                        <div class="card-body">
                        <div class="table-responsive mx-auto">
                            <form action="{{ url('admin/reservation_lock_date_all_delete') }}" method="POST">
                                @csrf
                            <table class="table mx-auto">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Locked Dates</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($lock_date as $item)
                                    <tr>
                                        <td><input name="id_delete[]" id="id" type="checkbox" value="{{ $item->id }}"></td>
                                        <td>
                                            <span>
                                                {{ $item->from_date }} - {{ $item->to_date }}
                                            </span>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-animated scale-left d-flex">                                            
                                                <a class="text-gray font-size-18"onclick="return confirm('Are you sure?')" href="{{ url('admin/reservation_lockdate_delete', $item->id)}}">
                                                    <button class="dropdown-item" type="button">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>   
                                    @empty
                                        
                                    @endforelse
                                                                       

                                </tbody>
                            </table>
                        </div>
                        <div class="form-group text-left">
                            <button class="btn btn-primary">Delete Selected</button>
                        </div>
                    </form>
                    </div><!---------------cardbody-->
                        <nav class="pagination text-right float-right">
                            <ul class="pagination">
                              <li class="page-item pl-2">
                                <span class="page-link">Previous</span>
                              </li>
                              <li class="page-item active"><a class="page-link" href="#">1</a></li>
                              <li class="page-item">
                                <span class="page-link">
                                  2
                                  <span class="sr-only">(current)</span>
                                </span>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                              </li>
                            </ul>
                          </nav>
                          <!-----------end of pagination-->
                    </div>

                    <script>
                        $(function () {
                            $(".datepicker").datetimepicker({
                                timeFormat: 'hh:mm tt'
                            });
                        });
                    </script>       

                </div><!------------end of container-->             
                <!---------end of modal-->      
              
            <!-- Content Wrapper END -->
            @endsection