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

                                      
                    <div class="paddingnote">
                        <div class="card text-center shadow p-3 mb-5 bg-white rounded">

                            <div class="card-body">
                                <h2>DRIVER'S SALARY REPORT</h2>
                                <form class=" ">
                                    <div class="mt-3">
                                        <label for="exampleFormControlInput1" class="d-table"><b>Driver's Name</b></label>
                                        <div class="row">
                                            <select class="form-control col-md-5" name="drivers_id"> 
                                                <option selected="selected" value=""> None</option>
                                                <option value="">None</option>
                                                <option value="114" class="form-control">Abdel Aziz Tarhani</option>114<option value="100">ABDERAHMAN MAKBOUL</option>100<option value="128">Alberto Irausquin</option>128<option value="75">Alfredo Cipriano Barros</option>75<option value="130">Andy Negede</option>130<option value="116">Arsenio Perez-Corujo</option>116<option value="131">Claudio DeSilva</option>131<option value="113">Eyob Hailab</option>113<option value="132">First Choice </option>132<option value="53">Glenn Rezende </option>53<option value="127">Kamel Chetouane</option>127<option value="137">Mebratu Dawit Abraha</option>137<option value="129">Peter Piantinis</option>129<option value="122">Rash Test IWS</option>122<option value="118">Sahid  Alpizar</option>118<option value="134">Simret  Tegegne</option>134<option value="136">Tesfu Bokre</option>136<option value="133">Willie Miller III</option>133<option value="135">Yohannes   Yohannes</option>135                    </select>
                                        </div><!-------------------------------dflex--------------->
                         
                                        </div>
                                <div class="row mt-4 text-left">
                                    <div class="form-group col-md-5 col-sm-12">
                                        <label for="inputState"><b>From</b></label>
                                        <input type="date" class="form-control" placeholder=" ">
                                        <label class="form-check-label color-red" for="inlineFormCheck">
                                            Select date
                                        </label>
                                    </div>
    
                                    <div class="form-group col-md-5 col-sm-12">
                                        <label for="inputState"><b>To</b></label>
                                        <input type="date" class="form-control" placeholder=" ">
                                        <label class="form-check-label color-red" for="inlineFormCheck">
                                            Select date
                                        </label>
                                    </div>
                                    <div class="form-group col-md-2 col-sm-12 mx-auto text-center mt-4">
                                    <a type="submit" class="btn btn-primary mb-2 mt-1" data-toggle="collapse" href="#collapseReport" role="button" aria-expanded="false" aria-controls="collapseReport">Get Report</a>
                                    </div>
                                </div>
    
                                </form>
                                <div class="collapse" id="collapseReport">
                                    <div class="mt-4">
                              
                                    <div class="table-responsive">
                                        <table class="table mx-auto">
                                            <thead>
                                                <tr>

                                                    <th>DATE</th>
                                                    <th>NUMBER OF TRANSFER</th>
                                                    <th>WAGE TYPE</th>
                                                    <th>TOTAL AMOUNT</th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>23/12/2021</td>
                                                    <td>12</td>
                                                    <td>Credit Card Approved</td>
                                                    <td>50.00</td>
                                                </tr>
                                                <tr>
                                                    <td>23/12/2021</td>
                                                    <td>12</td>
                                                    <td>Credit Card Approved</td>
                                                    <td>50.00</td>
                                                </tr>


                                            </tbody>
                                        </table>
                                        
                                        
                                    </div>
                                    <div class="row text-center mx-auto mt-4"><button class="btn btn-primary  text-center mx-auto">Print Salary Report</button></div>
                                    <nav class="pagination text-right float-right mt-3">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--------------start of report-->
                        


                    <form>
                       
                           
                        
                        </div><!-----------end of containerfluid-->
                                       </div>
                    <!-- Content Wrapper END -->

                    @endsection