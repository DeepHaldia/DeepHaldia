<!-- Header END -->
<!-- Side Nav START -->
@extends('layouts.admin_layout.main')
@section('title', 'Driver List')

@section('content')
<!-- Header END -->

@include('admin.sidebar')
<!-- Side Nav END -->            
            
            
<!-- Page Container START -->
            <div class="page-container">

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <h2 class="text-center mx-auto">DRIVER MANAGER</h2>
                    <div class="page-header no-gutters" style="margin-top:3rem;">
                        <div class="row mb-30">
                            <div class="col-lg-6"></div>
                            <div class="col-lg-6 text-center">
                                <a class="btn btn-primary mb-3" href="{{url('admin/user_driver_list_add')}}">
                                    <i class="anticon anticon-plus"></i>
                                    <span class="m-l-5">Add New Driver</span>
                                </a>
                            
                                <a href="salary-report.html" class="btn btn-primary mb-3">
                                    <i class="anticon anticon-book m-r-5"></i>
                                    <span>Get Salary Report</span>
                                </a>
                                <!------------------------------Start of Modal-->
                                <!-- Large modal -->


                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">SALARY REPORT</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="alert alert-success mt-4">


                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1" class="d-table">Driver's Name</label>

                                                            <select class="form-control" name="drivers_id">
                                                                <option selected="selected" value=""> None</option>
                                                                <option value="114">Abdel Aziz Tarhani</option>114
                                                                <option value="100">ABDERAHMAN MAKBOUL</option>100
                                                                <option value="128">Alberto Irausquin</option>128
                                                                <option value="75">Alfredo Cipriano Barros</option>75
                                                                <option value="130">Andy Negede</option>130
                                                                <option value="116">Arsenio Perez-Corujo</option>116
                                                                <option value="131">Claudio DeSilva</option>131
                                                                <option value="113">Eyob Hailab</option>113
                                                                <option value="132">First Choice </option>132
                                                                <option value="53">Glenn Rezende </option>53
                                                                <option value="127">Kamel Chetouane</option>127
                                                                <option value="137">Mebratu Dawit Abraha</option>137
                                                                <option value="129">Peter Piantinis</option>129
                                                                <option value="122">Rash Test IWS</option>122
                                                                <option value="118">Sahid  Alpizar</option>118
                                                                <option value="134">Simret  Tegegne</option>134
                                                                <option value="136">Tesfu Bokre</option>136
                                                                <option value="133">Willie Miller III</option>133
                                                                <option value="135">Yohannes   Yohannes</option>135
                                                            </select>

                                                        </div><!-------------------------------dflex--------------->
                                                        <div class="form-group mt-5">
                                                            <label for="exampleFormControlInput1" class="d-table">From</label>
                                                            <div class="d-flex">
                                                                <input class="form-control col-md-6" type="date">
                                                                <small class="alertText">select date</small>
                                                            </div><!-------------------------------dflex--------------->
                                                        </div>
                                                        <div class="form-group mt-5">
                                                            <label for="exampleFormControlInput1" class="d-table">To</label>
                                                            <div class="d-flex">
                                                                <input class="form-control col-md-6" type="date">
                                                                <small class="alertText">select date</small>
                                                            </div><!-------------------------------dflex--------------->
                                                        </div>

                                                        <a href="salary-report.html" target="_blank" type="submit" class="btn btn-primary mb-2">Get Salary Report</a>

                                                    </div>
                                                </form><!--------------------end of form-->
                                                
                                            </div>
                                            <div class="modal-footer">

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!------------------------------end of Modal-->
                            </div>

                        </div>
                        <!--------end row--------->


                    </div>
                    <div class="container-fluid" style="margin-top:3rem;">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Add a New Driver</h5>
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        <i class="anticon anticon-close"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="new-project-name">First Name</label>
                                                            <input type="text" class="form-control" name="firstname" id="name" placeholder="Please input project name" required="">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="new-project-name">Last Name</label>
                                                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Please input project name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="new-project-name">Mobile</label>
                                                            <input type="number" class="form-control" id="new-project-name" placeholder="Mobile">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="new-project-name">Email</label>
                                                            <input type="email" class="form-control" name="email" id="email" placeholder="email" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="new-project-name">Cell Phone</label>
                                                            <input type="number" class="form-control" id="new-project-name" placeholder="Cell Phone">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="new-project-name">Cellphone Provider</label>
                                                            <select name="cellphoneprovider">
                                                                <option value="Metro PCS">Metro PCS</option>
                                                                <option value="Verizon">Verizon</option>
                                                                <option value="Tmobile">Tmobile</option>
                                                                <option value="Sprint">Sprint</option>
                                                                <option value="ATT">AT&amp;T </option>
                                                                <option value="Boost Mobile">Boost Mobile</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="new-project-name">Telephone</label>
                                                            <input type="number" class="form-control" id="new-project-name" placeholder="Phone">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="new-project-name">Address</label>
                                                            <input type="text" class="form-control" name="inputMaxLength" id="new-project-name" placeholder="Please input project name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="new-project-name">Apt. Number</label>
                                                            <input type="number" class="form-control" id="new-project-name" placeholder="Phone">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="new-project-name">City</label>
                                                            <input type="text" class="form-control" id="new-project-name" placeholder="city">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="new-project-name">State</label>
                                                            <select name="state">
                                                                <option value="" selected="selected">Select State</option>
                                                                <option value="AK">AK</option>
                                                                <option value="AL">AL</option>
                                                                <option value="AR">AR</option>

                                                                <option value="AZ">AZ</option>
                                                                <option value="CA">CA</option>
                                                                <option value="CO">CO</option>
                                                                <option value="CT">CT</option>
                                                                <option value="DC">DC</option>
                                                                <option value="DE">DE</option>

                                                                <option value="FL">FL</option>
                                                                <option value="GA">GA</option>
                                                                <option value="HI">HI</option>
                                                                <option value="IA">IA</option>
                                                                <option value="ID">ID</option>
                                                                <option value="IL">IL</option>

                                                                <option value="IN">IN</option>
                                                                <option value="KS">KS</option>
                                                                <option value="KY">KY</option>
                                                                <option value="LA">LA</option>
                                                                <option value="MA">MA</option>
                                                                <option value="MD">MD</option>

                                                                <option value="ME">ME</option>
                                                                <option value="MI">MI</option>
                                                                <option value="MN">MN</option>
                                                                <option value="MO">MO</option>
                                                                <option value="MS">MS</option>
                                                                <option value="MT">MT</option>

                                                                <option value="NC">NC</option>
                                                                <option value="ND">ND</option>
                                                                <option value="NE">NE</option>
                                                                <option value="NH">NH</option>
                                                                <option value="NJ">NJ</option>
                                                                <option value="NM">NM</option>

                                                                <option value="NV">NV</option>
                                                                <option value="NY">NY</option>
                                                                <option value="OH">OH</option>
                                                                <option value="OK">OK</option>
                                                                <option value="OR">OR</option>
                                                                <option value="PA">PA</option>

                                                                <option value="RI">RI</option>
                                                                <option value="SC">SC</option>
                                                                <option value="SD">SD</option>
                                                                <option value="TN">TN</option>
                                                                <option value="TX">TX</option>
                                                                <option value="UT">UT</option>

                                                                <option value="VA">VA</option>
                                                                <option value="VT">VT</option>
                                                                <option value="WA">WA</option>
                                                                <option value="WI">WI</option>
                                                                <option value="WV">WV</option>
                                                                <option value="WY">WY</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="new-project-name">Zip</label>
                                                            <input type="number" class="form-control" placeholder="zip">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="new-project-name">Social Security Number:</label>
                                                            <input type="number" class="form-control" placeholder="Social Security Number:">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="new-project-name">Per Transfer Wage:</label>
                                                            <input type="number" class="form-control" placeholder="Per Transfer Wage">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="new-project-name">Daily Wage:</label>
                                                            <input type="number" class="form-control" name="password" placeholder="Daily Wage">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="new-project-name">Employment Date:</label>
                                                            <input type="datetime" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="new-project-name">Employment Status:</label>
                                                            <select name="status">
                                                                <option value="3">Active</option>
                                                                <option value="2">Leave of Abscence</option>
                                                                <option value="1">Terminated</option>
                                                            </select>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary text-center">Add a New Driver</button>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ url('admin/user_driver_list_all_delete') }}" method="POST">
                                        @csrf
                                    <table class="table mx-auto">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Employement Status</th>
                                                <th>Date Employed</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($user_driver_list as $item)
                                            <tr>
                                                <td><input name="id_delete[]" id="id" type="checkbox" value="{{ $item->id }}"></td>
                                                <td>
                                                    <div class="media align-items-center">
                                                       
                                                        <div class="m-l-10">
                                                        {{ $item->name }}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <span>
                                                       {{ $item->employment_status }}
                                                    </span>
                                                </td>

                                                <td>
                                                    <div class="align-items-center">
                                                        {{ $item->employment_date }}
                                                    </div>
                                                </td>

                                                <td class="text-right">
                                                    <div class="dropdown dropdown-animated scale-left d-flex">
                                                        <a class="text-gray font-size-18" href="{{ url('admin/user_driver_list_edit',$item->id) }}">
                                                            <button class="dropdown-item" type="button">
                                                                <i class="fas fa-edit"></i>

                                                            </button>
                                                        </a>
                                                        <a class="text-gray font-size-18" onclick="return confirm('Are you sure?')" href="{{ url('admin/user_driver_list_delete',$item->id) }}">
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
                                <div class="form-group">
                                    <button class="btn btn-primary">Delete Selected</button>
                                </div>
                            </form>
                            </div>
                        </div>
                                              <!--------------start of pagination-->
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
  </div>

<!---------------end of pagination-->
                    </div>
                    <div class="modal fade" id="create-new-project" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add a New Driver</h5>
                                    <button type="button" class="close" data-dismiss="modal">
                                        <i class="anticon anticon-close"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="new-project-name">First Name</label>
                                            <input type="text" class="form-control" name="firstname" id="name" placeholder="Please input project name" required="">

                                        </div>
                                        <div class="form-group">
                                            <label for="new-project-name">Last Name</label>
                                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Please input project name">
                                        </div>
                                        <div class="form-group">
                                            <label for="new-project-name">Mobile</label>
                                            <input type="number" class="form-control" id="new-project-name" name="mobile" placeholder="Mobile">
                                        </div>
                                        <div class="form-group">
                                            <label for="new-project-name">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="email" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="new-project-name">Cell Phone</label>
                                            <input type="number" class="form-control" id="new-project-name" placeholder="Cell Phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="new-project-name">Cellphone Provider</label>
                                            <select name="cellphoneprovider">
                                                <option value="Metro PCS">Metro PCS</option>
                                                <option value="Verizon">Verizon</option>
                                                <option value="Tmobile">Tmobile</option>
                                                <option value="Sprint">Sprint</option>
                                                <option value="ATT">AT&amp;T </option>
                                                <option value="Boost Mobile">Boost Mobile</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="new-project-name">Telephone</label>
                                            <input type="number" class="form-control" id="new-project-name" placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="new-project-name">Address</label>
                                            <input type="text" class="form-control" name="inputMaxLength" id="new-project-name" placeholder="Please input project name">
                                        </div>
                                        <div class="form-group">
                                            <label for="new-project-name">Apt. Number</label>
                                            <input type="number" class="form-control" id="new-project-name" placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="new-project-name">City</label>
                                            <input type="text" class="form-control" id="new-project-name" placeholder="city">
                                        </div>
                                        <div class="form-group">
                                            <label for="new-project-name">State</label>
                                            <select name="state">
                                                <option value="" selected="selected">Select State</option>
                                                <option value="AK">AK</option>
                                                <option value="AL">AL</option>
                                                <option value="AR">AR</option>

                                                <option value="AZ">AZ</option>
                                                <option value="CA">CA</option>
                                                <option value="CO">CO</option>
                                                <option value="CT">CT</option>
                                                <option value="DC">DC</option>
                                                <option value="DE">DE</option>

                                                <option value="FL">FL</option>
                                                <option value="GA">GA</option>
                                                <option value="HI">HI</option>
                                                <option value="IA">IA</option>
                                                <option value="ID">ID</option>
                                                <option value="IL">IL</option>

                                                <option value="IN">IN</option>
                                                <option value="KS">KS</option>
                                                <option value="KY">KY</option>
                                                <option value="LA">LA</option>
                                                <option value="MA">MA</option>
                                                <option value="MD">MD</option>

                                                <option value="ME">ME</option>
                                                <option value="MI">MI</option>
                                                <option value="MN">MN</option>
                                                <option value="MO">MO</option>
                                                <option value="MS">MS</option>
                                                <option value="MT">MT</option>

                                                <option value="NC">NC</option>
                                                <option value="ND">ND</option>
                                                <option value="NE">NE</option>
                                                <option value="NH">NH</option>
                                                <option value="NJ">NJ</option>
                                                <option value="NM">NM</option>

                                                <option value="NV">NV</option>
                                                <option value="NY">NY</option>
                                                <option value="OH">OH</option>
                                                <option value="OK">OK</option>
                                                <option value="OR">OR</option>
                                                <option value="PA">PA</option>

                                                <option value="RI">RI</option>
                                                <option value="SC">SC</option>
                                                <option value="SD">SD</option>
                                                <option value="TN">TN</option>
                                                <option value="TX">TX</option>
                                                <option value="UT">UT</option>

                                                <option value="VA">VA</option>
                                                <option value="VT">VT</option>
                                                <option value="WA">WA</option>
                                                <option value="WI">WI</option>
                                                <option value="WV">WV</option>
                                                <option value="WY">WY</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="new-project-name">Zip</label>
                                            <input type="number" class="form-control" placeholder="zip">
                                        </div>

                                        <div class="form-group">
                                            <label for="new-project-name">Social Security Number:</label>
                                            <input type="number" class="form-control" placeholder="Social Security Number:">
                                        </div>
                                        <div class="form-group">
                                            <label for="new-project-name">Per Transfer Wage:</label>
                                            <input type="number" class="form-control" placeholder="Per Transfer Wage">
                                        </div>

                                        <div class="form-group">
                                            <label for="new-project-name">Daily Wage:</label>
                                            <input type="number" class="form-control" name="password" placeholder="Daily Wage">
                                        </div>
                                        <div class="form-group">
                                            <label for="new-project-name">Employment Date:</label>
                                            <input type="datetime" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="new-project-name">Employment Status:</label>
                                            <select name="status">
                                                <option value="3">Active</option>
                                                <option value="2">Leave of Abscence</option>
                                                <option value="1">Terminated</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary text-center">Add a New Driver</button>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!---------end of modal-->
              
                <!-- Content Wrapper END -->
                @endsection