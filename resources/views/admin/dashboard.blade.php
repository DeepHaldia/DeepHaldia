<!-- Header END -->
<!-- Side Nav START -->
@extends('layouts.admin_layout.main')
@section('title', 'Dashboard')

@section('content')
    

<!-----------------collapse-->
@include('admin.sidebar')
<!-- Side Nav END -->

<!-- Side Nav END -->
<!-- Page Container START -->
<div class="page-container">

    <!-- Content Wrapper START -->
    <div class="main-content">

        <div class="card text-center shadow p-3 mb-5 bg-white rounded">

            <div class="card-body">
                <h2>Search</h2>
                <form class="form-inline">
                    <div class="form-group col-md-5">
                        <label for="inputState"><b>From</b></label>
                        <input type="date" class="form-control" placeholder=" ">
                        <label class="form-check-label color-red" for="inlineFormCheck">
                            Select date
                        </label>
                    </div>

                    <div class="form-group col-md-5">
                        <label for="inputState"><b>To</b></label>
                        <input type="date" class="form-control" placeholder=" ">
                        <label class="form-check-label color-red" for="inlineFormCheck">
                            Select date
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary text-center mx-auto">Search</button>
                    <div class="w-100">

                        <div class="table-responsive-sm" id="no-more-tables">
                            <table class="table mt-5 w-100 mx-auto">

                                <tbody>
                                    <tr class="col-md-12">
                                        <td class="col-md-4 col-sm-12">
                                            <div class="squareblue"></div>
                                        </td>
                                        <td class="col-md-4 col-sm-12">
                                            <div class="squarered"></div>
                                        </td>
                                        <td class="col-md-4 col-sm-12">
                                            <div class="squareorange"></div>
                                        </td>



                                    </tr>
                                    <tr class="col-md-12">
                                        <td class="col-md-4 col-sm-12">
                                            <strong>FIRST TRANSFER</strong>
                                        </td>
                                        <td class="col-md-4 col-sm-12">
                                            <strong>LAST TRANSFER</strong>
                                        </td>
                                        <td class="col-md-4 col-sm-12">
                                            <strong>TRANSFERS WITH &gt; 2 LEGS</strong>
                                        </td>



                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>


                </form>

            </div>
        </div>
        <!--------------------------end of card-->
        <div class="card text-center shadow p-3 mb-5 bg-white rounded">

            <div class="card-body">
                <h1>TODAYS SCHEDULE</h1>
                <form class="form-inline">
                    <div class="form-group col-md-6">
                        <label for="inputState"><b>Search By:</b></label>
                        <select name="search_by" size="1" class="form-control">
                            <option value="name">Name</option>
                            <option value="id">Reservation ID</option>
                            <option value="email">E-mail</option>
                            <option value="phone_number">Phone Number</option>
                            <option value="cellphone">Mobile Phone</option>
                            <option value="payment_status">Payment Status</option>
                            <option value="approval_code">Gateway Response</option>
                        </select>

                        <label class="form-check-label color-red" for="inlineFormCheck">
                            Select option
                        </label>
                    </div>

                    <div class="form-group col-md-3">
                        <input type="text" class="form-control" placeholder="search ">
                    </div>
                    <button type="button" class="btn btn-primary text-center mx-auto" data-toggle="modal"
                        data-target=".bd-example-modal-lg">
                        <i class="anticon anticon-plus"></i>
                        Add New Reservation
                    </button>


                </form>
                <!-----------------add new reservation pop up---------------->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add a New Reservation</h5>
                                <button type="button" class="close" data-dismiss="modal">
                                    <i class="anticon anticon-close"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                                Transportation Information
                                            </a>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                            <div class=" ">
                                                <form>
                                                    <div class="form-group d-flex mt-3">
                                                        <div class="form-group col-md-6">
                                                            <label for="new-project-name">Client</label>
                                                            <select class="form-control custom-select"
                                                                id="inlineFormCustomSelectPref">
                                                                <option selected>Alex Dam</option>
                                                                <option value="1">Marie clove</option>
                                                                <option value="2">Mark Benzer</option>
                                                                <option value="3">Carl</option>
                                                            </select>

                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="new-project-name">Vehicle</label>
                                                            <select class="form-control custom-select"
                                                                id="inlineFormCustomSelectPref">
                                                                <option selected>Town Car</option>
                                                                <option value="1">Luxury Van</option>
                                                                <option value="2">Limousin</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group d-flex">
                                                        <div class="form-group col-md-4">
                                                            <label for="new-project-name">Passenger</label>
                                                            <select class="form-control custom-select"
                                                                id="inlineFormCustomSelectPref">
                                                                <option selected>1</option>
                                                                <option value="1">2</option>
                                                                <option value="2">3</option>
                                                                <option value="3">4</option>
                                                                <option value="1">5</option>
                                                                <option value="2">6</option>
                                                                <option selected>7</option>
                                                                <option value="1">8</option>
                                                                <option value="2">9</option>
                                                                <option value="3">10</option>
                                                                <option value="1">11</option>
                                                                <option value="2">12</option>
                                                                <option value="1">13</option>
                                                                <option value="2">14</option>
                                                                <option value="1">15</option>
                                                                <option value="2">16</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="new-project-name">Car Seat</label>
                                                            <select class="form-control custom-select"
                                                                id="inlineFormCustomSelectPref">
                                                                <option selected>Yes</option>
                                                                <option value="1">No</option>

                                                            </select>
                                                        </div>


                                                        <div class="form-group col-md-4">
                                                            <label for="new-project-name">Booster Seat</label>
                                                            <select class="form-control custom-select"
                                                                id="inlineFormCustomSelectPref">
                                                                <option selected>Yes</option>
                                                                <option value="1">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="new-project-name">Trip Type</label>
                                                        <select name="trip_type" class="form-control" id="getFname"
                                                            size="1" onchange="admSelectCheck(this);">
                                                            <option value="" selected="selected"> -- Select One --
                                                            </option>
                                                            <optgroup label="Orlando Area">
                                                                <option id="admOption" value="0">Orlando Area - One Way
                                                                </option>
                                                                <option id="admOption" value="0">Orlando Area - Round
                                                                    Trip</option>
                                                            </optgroup>
                                                            <optgroup label="Cruise Transfer">
                                                                <option id="admOption" value="0">
                                                                    Disney/Universal&gt;Cruise&gt;MCO - Round trip
                                                                </option>
                                                                <option id="admOption" value="0">MCO to Cruise
                                                                    Terminal/Port Area Resorts - One Way</option>
                                                                <option id="admOption" value="0">MCO to Cruise
                                                                    Terminal/Port Area Resorts - Round Trip</option>
                                                                <option id="admOption" value="0">Disney/Universal to
                                                                    Cruise Terminal/Port Area - One Way</option>
                                                                <option id="admOption" value="0">Disney/Universal to
                                                                    Cruise Terminal/Port Area - Round Trip</option>
                                                                <option id="wayOption" value="7">MCO&gt;Disney or
                                                                    Universal&gt;Cruise terminal&gt;MCO (3 leg)</option>
                                                                <option id="wayOption" value="7">MCO&gt;Cruise
                                                                    Terminals&gt;Disney or Universal&gt;MCO (3 leg)
                                                                </option>
                                                                <option id="admOption" value="0">Sanford to Cruise
                                                                    Terminal/Port Area Resorts - One Way</option>
                                                                <option id="wayOption" value="7">Sanford to Cruise
                                                                    Terminal/Port Area Resorts - Round Trip</option>
                                                                <option id="wayOption" value="7">Sanford&gt;Cruise
                                                                    Terminals&gt;Disney or Universal&gt;Sanford</option>
                                                            </optgroup>
                                                            <optgroup label="Attraction Transfer">
                                                                <option id="wayOption" value="7">Disney Resort to
                                                                    Universal/Sea World - One Way</option>
                                                                <option id="wayOption" value="7">Disney Resort to
                                                                    Universal/Sea World - Round Trip</option>
                                                                <option id="wayOption" value="7">Disney Resort to
                                                                    SeaWorld Theme Park - One Way</option>
                                                                <option id="wayOption" value="7">Disney Resort to
                                                                    SeaWorld Theme Park - Round Trip</option>
                                                                <option id="wayOption" value="7">Disney Resort to
                                                                    Universal Theme Park - One Way</option>
                                                                <option id="wayOption" value="7">Disney Resort to
                                                                    Universal Theme Park - Round Trip</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                    <a class="card-link" data-toggle="collapse" href="#collapseTwo"
                                                        aria-expanded="true">
                                                        Continue ->
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                                Passenger Information
                                            </a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                            <div class=" ">
                                                <div class="form-group d-flex mt-3">
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleFormControlTextarea1">First Name</label>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleFormControlTextarea1">Last Name</label>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="form-group d-flex">
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleFormControlTextarea1">Street Address</label>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleFormControlTextarea1">Address Line2</label>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="form-group d-flex">
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleFormControlTextarea1">City</label>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleFormControlTextarea1">State</label>
                                                        <select name="state" id="state" class="form-control">
                                                            <option value="Outside USA">Outside USA</option>
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
                                                </div>
                                                <div class="form-group d-flex">
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleFormControlTextarea1">Zip Code</label>
                                                        <input type="number" class="form-control" />
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="new-project-name">Country</label>
                                                        <select name="country" id="country" class="form-control">
                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="American Samoa">American Samoa</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Anguilla">Anguilla</option>
                                                            <option value="Antarctica">Antarctica</option>
                                                            <option value="Antigua and Barbuda">Antigua and Barbuda
                                                            </option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                            <option value="Azores">Azores</option>
                                                            <option value="Bahamas">Bahamas</option>
                                                            <option value="Bahrain">Bahrain</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="Barbados">Barbados</option>
                                                            <option value="Belarus">Belarus</option>
                                                            <option value="Belgium">Belgium</option>
                                                            <option value="Belize">Belize</option>
                                                            <option value="Benin">Benin</option>
                                                            <option value="Bermuda">Bermuda</option>
                                                            <option value="Bhutan">Bhutan</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                            <option value="Bosnia Herzegowina">Bosnia Herzegowina
                                                            </option>
                                                            <option value="Bosnia-Herzegovina">Bosnia-Herzegovina
                                                            </option>
                                                            <option value="Botswana">Botswana</option>
                                                            <option value="Bouvet Island">Bouvet Island</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="British Indian O. Terr">British Indian O.
                                                                Terr</option>
                                                            <option value="British Virgin Isl">British Virgin Isl
                                                            </option>
                                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                            <option value="Bulgaria">Bulgaria</option>
                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                            <option value="Burundi">Burundi</option>
                                                            <option value="Cambodia">Cambodia</option>
                                                            <option value="Cameroon">Cameroon</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Cape Verde">Cape Verde</option>
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                            <option value="Central African Rep">Central African Rep
                                                            </option>
                                                            <option value="Chad">Chad</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Christmas Island">Christmas Island</option>
                                                            <option value="Cocos (Keeling) Isl">Cocos (Keeling) Isl
                                                            </option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Comoros">Comoros</option>
                                                            <option value="Congo">Congo</option>
                                                            <option value="Congo, The Dem Rep">Congo, The Dem Rep
                                                            </option>
                                                            <option value="Cook Islands">Cook Islands</option>
                                                            <option value="Corsica">Corsica</option>
                                                            <option value="Costa Rica">Costa Rica</option>
                                                            <option value="Cote d` Ivoire">Cote d` Ivoire</option>
                                                            <option value="Croatia">Croatia</option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Cyprus">Cyprus</option>
                                                            <option value="Czech Republic">Czech Republic</option>
                                                            <option value="Denmark">Denmark</option>
                                                            <option value="Djibouti">Djibouti</option>
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican Republic
                                                            </option>
                                                            <option value="East Timor">East Timor</option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="Egypt">Egypt</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                            <option value="Eritrea">Eritrea</option>
                                                            <option value="Estonia">Estonia</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Falkland Islands">Falkland Islands</option>
                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                            <option value="Fiji">Fiji</option>
                                                            <option value="Finland">Finland</option>
                                                            <option value="France (Incl Monaco)">France (Incl Monaco)
                                                            </option>
                                                            <option value="France, Metropolitan">France, Metropolitan
                                                            </option>
                                                            <option value="French Guiana">French Guiana</option>
                                                            <option value="French Polynesia">French Polynesia</option>
                                                            <option value="French Polynesia">French Polynesia</option>
                                                            <option value="French S. Territories">French S. Territories
                                                            </option>
                                                            <option value="Gabon">Gabon</option>
                                                            <option value="Gambia">Gambia</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Ghana">Ghana</option>
                                                            <option value="Gibraltar">Gibraltar</option>
                                                            <option value="Greece">Greece</option>
                                                            <option value="Greenland">Greenland</option>
                                                            <option value="Grenada">Grenada</option>
                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                            <option value="Guam">Guam</option>
                                                            <option value="Guatemala">Guatemala</option>
                                                            <option value="Guinea">Guinea</option>
                                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                            <option value="Guyana">Guyana</option>
                                                            <option value="Haiti">Haiti</option>
                                                            <option value="Heard And Mc Donald Isl">Heard And Mc Donald
                                                                Isl</option>
                                                            <option value="Holy See (Vatican City)">Holy See (Vatican
                                                                City)</option>
                                                            <option value="Honduras">Honduras</option>
                                                            <option value="Hong Kong">Hong Kong</option>
                                                            <option value="Hungary">Hungary</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="India">India</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="Iran">Iran</option>
                                                            <option value="Iraq">Iraq</option>
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="Ireland (Eire)">Ireland (Eire)</option>
                                                            <option value="Israel">Israel</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Jamaica">Jamaica</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="Jordan">Jordan</option>
                                                            <option value="Kazakhstan">Kazakhstan</option>
                                                            <option value="Kenya">Kenya</option>
                                                            <option value="Kiribati">Kiribati</option>
                                                            <option value="Korea, Democratic Rep">Korea, Democratic Rep
                                                            </option>
                                                            <option value="Kuwait">Kuwait</option>
                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                            <option value="Laos">Laos</option>
                                                            <option value="Latvia">Latvia</option>
                                                            <option value="Lebanon">Lebanon</option>
                                                            <option value="Lesotho">Lesotho</option>
                                                            <option value="Liberia">Liberia</option>
                                                            <option value="Libya">Libya</option>
                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                            <option value="Lithuania">Lithuania</option>
                                                            <option value="Luxembourg">Luxembourg</option>
                                                            <option value="Macao">Macao</option>
                                                            <option value="Macedonia">Macedonia</option>
                                                            <option value="Madagascar">Madagascar</option>
                                                            <option value="Madeira Islands">Madeira Islands</option>
                                                            <option value="Malawi">Malawi</option>
                                                            <option value="Malaysia">Malaysia</option>
                                                            <option value="Maldives">Maldives</option>
                                                            <option value="Mali">Mali</option>
                                                            <option value="Malta">Malta</option>
                                                            <option value="Marshall Islands">Marshall Islands</option>
                                                            <option value="Martinique">Martinique</option>
                                                            <option value="Mauritania">Mauritania</option>
                                                            <option value="Mauritius">Mauritius</option>
                                                            <option value="Mayotte">Mayotte</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Micronesia">Micronesia</option>
                                                            <option value="Moldova, Republic Of">Moldova, Republic Of
                                                            </option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Mongolia">Mongolia</option>
                                                            <option value="Montserrat">Montserrat</option>
                                                            <option value="Morocco">Morocco</option>
                                                            <option value="Mozambique">Mozambique</option>
                                                            <option value="Myanmar (Burma)">Myanmar (Burma)</option>
                                                            <option value="Namibia">Namibia</option>
                                                            <option value="Nauru">Nauru</option>
                                                            <option value="Nepal">Nepal</option>
                                                            <option value="Netherlands">Netherlands</option>
                                                            <option value="Netherlands Antilles">Netherlands Antilles
                                                            </option>
                                                            <option value="New Caledonia">New Caledonia</option>
                                                            <option value="New Zealand">New Zealand</option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Niger">Niger</option>
                                                            <option value="Nigeria">Nigeria</option>
                                                            <option value="Niue">Niue</option>
                                                            <option value="Norfolk Island">Norfolk Island</option>
                                                            <option value="Northern Mariana Isl">Northern Mariana Isl
                                                            </option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Oman">Oman</option>
                                                            <option value="Pakistan">Pakistan</option>
                                                            <option value="Palau">Palau</option>
                                                            <option value="Palestinian Territory">Palestinian Territory
                                                            </option>
                                                            <option value="Panama">Panama</option>
                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Philippines">Philippines</option>
                                                            <option value="Pitcairn">Pitcairn</option>
                                                            <option value="Poland">Poland</option>
                                                            <option value="Portugal">Portugal</option>
                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                            <option value="Qatar">Qatar</option>
                                                            <option value="Reunion">Reunion</option>
                                                            <option value="Romania">Romania</option>
                                                            <option value="Russian Federation">Russian Federation
                                                            </option>
                                                            <option value="Rwanda">Rwanda</option>
                                                            <option value="Saint Kitts And Nevis">Saint Kitts And Nevis
                                                            </option>
                                                            <option value="San Marino">San Marino</option>
                                                            <option value="Sao Tome and Principe">Sao Tome and Principe
                                                            </option>
                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                            <option value="Senegal">Senegal</option>
                                                            <option value="Serbia-Montenegro">Serbia-Montenegro</option>
                                                            <option value="Seychelles">Seychelles</option>
                                                            <option value="Sierra Leone">Sierra Leone</option>
                                                            <option value="Singapore">Singapore</option>
                                                            <option value="Slovak Republic">Slovak Republic</option>
                                                            <option value="Slovenia">Slovenia</option>
                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                            <option value="Somalia">Somalia</option>
                                                            <option value="South Africa">South Africa</option>
                                                            <option value="South Georgia">South Georgia</option>
                                                            <option value="South Korea">South Korea</option>
                                                            <option value="Spain">Spain</option>
                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                            <option value="St. Christopher, Nevis">St. Christopher,
                                                                Nevis</option>
                                                            <option value="St. Helena">St. Helena</option>
                                                            <option value="St. Lucia">St. Lucia</option>
                                                            <option value="St. Pierre and Miquelon">St. Pierre and
                                                                Miquelon</option>
                                                            <option value="St. Vincent and Gren">St. Vincent and Gren
                                                            </option>
                                                            <option value="Sudan">Sudan</option>
                                                            <option value="Suriname">Suriname</option>
                                                            <option value="Svalbard And Jan M Isl">Svalbard And Jan M
                                                                Isl</option>
                                                            <option value="Swaziland">Swaziland</option>
                                                            <option value="Sweden">Sweden</option>
                                                            <option value="Switzerland">Switzerland</option>
                                                            <option value="Syrian Arab Rep">Syrian Arab Rep</option>
                                                            <option value="Taiwan">Taiwan</option>
                                                            <option value="Tajikistan">Tajikistan</option>
                                                            <option value="Tanzania">Tanzania</option>
                                                            <option value="Thailand">Thailand</option>
                                                            <option value="Togo">Togo</option>
                                                            <option value="Tokelau">Tokelau</option>
                                                            <option value="Tonga">Tonga</option>
                                                            <option value="Trinidad and Tobago">Trinidad and Tobago
                                                            </option>
                                                            <option value="Tristan da Cunha">Tristan da Cunha</option>
                                                            <option value="Tunisia">Tunisia</option>
                                                            <option value="Turkey">Turkey</option>
                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                            <option value="Turks and Caicos Isl">Turks and Caicos Isl
                                                            </option>
                                                            <option value="Tuvalu">Tuvalu</option>
                                                            <option value="Uganda">Uganda</option>
                                                            <option value="Ukraine">Ukraine</option>
                                                            <option value="United Arab Emirates">United Arab Emirates
                                                            </option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="Great Britain">Great Britain</option>
                                                            <option value="United States" selected="selected">United
                                                                States</option>
                                                            <option value="U.S. Minor Outlying Isl">U.S. Minor Outlying
                                                                Isl</option>
                                                            <option value="Uruguay">Uruguay</option>
                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                            <option value="Vanuatu">Vanuatu</option>
                                                            <option value="Vatican City">Vatican City</option>
                                                            <option value="Venezuela">Venezuela</option>
                                                            <option value="Vietnam">Vietnam</option>
                                                            <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)
                                                            </option>
                                                            <option value="Wallis and Furuna Isl">Wallis and Furuna Isl
                                                            </option>
                                                            <option value="Western Sahara">Western Sahara</option>
                                                            <option value="Western Samoa">Western Samoa</option>
                                                            <option value="Yemen">Yemen</option>
                                                            <option value="Yugoslavia">Yugoslavia</option>
                                                            <option value="Zaire">Zaire</option>
                                                            <option value="Zambia">Zambia</option>
                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group d-flex">
                                                    <div class="form-group col-md-6">
                                                        <label for="new-project-name">Telephone</label>
                                                        <input type="phone" class="form-control" id="new-project-name"
                                                            placeholder="Phone">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="new-project-name">Alternate Phone Number</label>
                                                        <input type="phone" class="form-control" id="new-project-name"
                                                            placeholder="Alternate Phone">
                                                    </div>
                                                </div>
                                                <div class="form-group d-flex">
                                                    <div class="form-group col-md-6">
                                                        <label for="new-project-name">Mobile</label>
                                                        <input type="number" class="form-control" id="new-project-name"
                                                            placeholder="Mobile">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="new-project-name">Email</label>
                                                        <input type="email" class="form-control" name="email" id="email"
                                                            placeholder="email" required>
                                                    </div>
                                                </div>
                                                <div class="form-group d-flex">
                                                    <div class="form-group col-md-6">
                                                        <label for="new-project-name">Password</label>
                                                        <input type="password" class="form-control" name="password"
                                                            id="password" placeholder="Password" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="new-project-name">Confirm Password</label>
                                                        <input type="password" class="form-control"
                                                            id="new-project-name" placeholder="Confirm Password"
                                                            required>
                                                    </div>
                                                </div>

                                                <a class="card-link collapsed" data-toggle="collapse"
                                                    href="#collapseThree" aria-expanded="false">
                                                    Continue ->

                                                </a>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a class="collapsed card-link" data-toggle="collapse"
                                                    href="#collapseThree">
                                                    Billing Information

                                                </a>
                                            </div>
                                            <div id="collapseThree" class="collapse" data-parent="#accordion">

                                                <div class="form-group mt-3 text-center mx-auto">
                                                    <input value="1" id="billing-checkbox"
                                                        onclick="auto_address_update(document.create_new)"
                                                        type="checkbox">
                                                    Billing Address is the same as Passenger Address.
                                                </div>
                                                <div class="form-group d-flex">
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleFormControlTextarea1">First Name</label>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleFormControlTextarea1">Last Name</label>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="form-group d-flex">
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleFormControlTextarea1">Street Address</label>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleFormControlTextarea1">Address Line2</label>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="form-group d-flex">
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleFormControlTextarea1">City</label>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleFormControlTextarea1">State</label>
                                                        <select name="state" id="state" class="form-control">
                                                            <option value="Outside USA">Outside USA</option>
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
                                                </div>
                                                <div class="form-group d-flex">
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleFormControlTextarea1">Zip Code</label>
                                                        <input type="number" class="form-control" />
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="new-project-name">Country</label>
                                                        <select name="country" id="country" class="custom-select">
                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="American Samoa">American Samoa</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Anguilla">Anguilla</option>
                                                            <option value="Antarctica">Antarctica</option>
                                                            <option value="Antigua and Barbuda">Antigua and Barbuda
                                                            </option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                            <option value="Azores">Azores</option>
                                                            <option value="Bahamas">Bahamas</option>
                                                            <option value="Bahrain">Bahrain</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="Barbados">Barbados</option>
                                                            <option value="Belarus">Belarus</option>
                                                            <option value="Belgium">Belgium</option>
                                                            <option value="Belize">Belize</option>
                                                            <option value="Benin">Benin</option>
                                                            <option value="Bermuda">Bermuda</option>
                                                            <option value="Bhutan">Bhutan</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                            <option value="Bosnia Herzegowina">Bosnia Herzegowina
                                                            </option>
                                                            <option value="Bosnia-Herzegovina">Bosnia-Herzegovina
                                                            </option>
                                                            <option value="Botswana">Botswana</option>
                                                            <option value="Bouvet Island">Bouvet Island</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="British Indian O. Terr">British Indian O.
                                                                Terr</option>
                                                            <option value="British Virgin Isl">British Virgin Isl
                                                            </option>
                                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                            <option value="Bulgaria">Bulgaria</option>
                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                            <option value="Burundi">Burundi</option>
                                                            <option value="Cambodia">Cambodia</option>
                                                            <option value="Cameroon">Cameroon</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Cape Verde">Cape Verde</option>
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                            <option value="Central African Rep">Central African Rep
                                                            </option>
                                                            <option value="Chad">Chad</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Christmas Island">Christmas Island</option>
                                                            <option value="Cocos (Keeling) Isl">Cocos (Keeling) Isl
                                                            </option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Comoros">Comoros</option>
                                                            <option value="Congo">Congo</option>
                                                            <option value="Congo, The Dem Rep">Congo, The Dem Rep
                                                            </option>
                                                            <option value="Cook Islands">Cook Islands</option>
                                                            <option value="Corsica">Corsica</option>
                                                            <option value="Costa Rica">Costa Rica</option>
                                                            <option value="Cote d` Ivoire">Cote d` Ivoire</option>
                                                            <option value="Croatia">Croatia</option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Cyprus">Cyprus</option>
                                                            <option value="Czech Republic">Czech Republic</option>
                                                            <option value="Denmark">Denmark</option>
                                                            <option value="Djibouti">Djibouti</option>
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican Republic
                                                            </option>
                                                            <option value="East Timor">East Timor</option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="Egypt">Egypt</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                            <option value="Eritrea">Eritrea</option>
                                                            <option value="Estonia">Estonia</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Falkland Islands">Falkland Islands</option>
                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                            <option value="Fiji">Fiji</option>
                                                            <option value="Finland">Finland</option>
                                                            <option value="France (Incl Monaco)">France (Incl Monaco)
                                                            </option>
                                                            <option value="France, Metropolitan">France, Metropolitan
                                                            </option>
                                                            <option value="French Guiana">French Guiana</option>
                                                            <option value="French Polynesia">French Polynesia</option>
                                                            <option value="French Polynesia">French Polynesia</option>
                                                            <option value="French S. Territories">French S. Territories
                                                            </option>
                                                            <option value="Gabon">Gabon</option>
                                                            <option value="Gambia">Gambia</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Ghana">Ghana</option>
                                                            <option value="Gibraltar">Gibraltar</option>
                                                            <option value="Greece">Greece</option>
                                                            <option value="Greenland">Greenland</option>
                                                            <option value="Grenada">Grenada</option>
                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                            <option value="Guam">Guam</option>
                                                            <option value="Guatemala">Guatemala</option>
                                                            <option value="Guinea">Guinea</option>
                                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                            <option value="Guyana">Guyana</option>
                                                            <option value="Haiti">Haiti</option>
                                                            <option value="Heard And Mc Donald Isl">Heard And Mc Donald
                                                                Isl</option>
                                                            <option value="Holy See (Vatican City)">Holy See (Vatican
                                                                City)</option>
                                                            <option value="Honduras">Honduras</option>
                                                            <option value="Hong Kong">Hong Kong</option>
                                                            <option value="Hungary">Hungary</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="India">India</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="Iran">Iran</option>
                                                            <option value="Iraq">Iraq</option>
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="Ireland (Eire)">Ireland (Eire)</option>
                                                            <option value="Israel">Israel</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Jamaica">Jamaica</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="Jordan">Jordan</option>
                                                            <option value="Kazakhstan">Kazakhstan</option>
                                                            <option value="Kenya">Kenya</option>
                                                            <option value="Kiribati">Kiribati</option>
                                                            <option value="Korea, Democratic Rep">Korea, Democratic Rep
                                                            </option>
                                                            <option value="Kuwait">Kuwait</option>
                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                            <option value="Laos">Laos</option>
                                                            <option value="Latvia">Latvia</option>
                                                            <option value="Lebanon">Lebanon</option>
                                                            <option value="Lesotho">Lesotho</option>
                                                            <option value="Liberia">Liberia</option>
                                                            <option value="Libya">Libya</option>
                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                            <option value="Lithuania">Lithuania</option>
                                                            <option value="Luxembourg">Luxembourg</option>
                                                            <option value="Macao">Macao</option>
                                                            <option value="Macedonia">Macedonia</option>
                                                            <option value="Madagascar">Madagascar</option>
                                                            <option value="Madeira Islands">Madeira Islands</option>
                                                            <option value="Malawi">Malawi</option>
                                                            <option value="Malaysia">Malaysia</option>
                                                            <option value="Maldives">Maldives</option>
                                                            <option value="Mali">Mali</option>
                                                            <option value="Malta">Malta</option>
                                                            <option value="Marshall Islands">Marshall Islands</option>
                                                            <option value="Martinique">Martinique</option>
                                                            <option value="Mauritania">Mauritania</option>
                                                            <option value="Mauritius">Mauritius</option>
                                                            <option value="Mayotte">Mayotte</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Micronesia">Micronesia</option>
                                                            <option value="Moldova, Republic Of">Moldova, Republic Of
                                                            </option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Mongolia">Mongolia</option>
                                                            <option value="Montserrat">Montserrat</option>
                                                            <option value="Morocco">Morocco</option>
                                                            <option value="Mozambique">Mozambique</option>
                                                            <option value="Myanmar (Burma)">Myanmar (Burma)</option>
                                                            <option value="Namibia">Namibia</option>
                                                            <option value="Nauru">Nauru</option>
                                                            <option value="Nepal">Nepal</option>
                                                            <option value="Netherlands">Netherlands</option>
                                                            <option value="Netherlands Antilles">Netherlands Antilles
                                                            </option>
                                                            <option value="New Caledonia">New Caledonia</option>
                                                            <option value="New Zealand">New Zealand</option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Niger">Niger</option>
                                                            <option value="Nigeria">Nigeria</option>
                                                            <option value="Niue">Niue</option>
                                                            <option value="Norfolk Island">Norfolk Island</option>
                                                            <option value="Northern Mariana Isl">Northern Mariana Isl
                                                            </option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Oman">Oman</option>
                                                            <option value="Pakistan">Pakistan</option>
                                                            <option value="Palau">Palau</option>
                                                            <option value="Palestinian Territory">Palestinian Territory
                                                            </option>
                                                            <option value="Panama">Panama</option>
                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Philippines">Philippines</option>
                                                            <option value="Pitcairn">Pitcairn</option>
                                                            <option value="Poland">Poland</option>
                                                            <option value="Portugal">Portugal</option>
                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                            <option value="Qatar">Qatar</option>
                                                            <option value="Reunion">Reunion</option>
                                                            <option value="Romania">Romania</option>
                                                            <option value="Russian Federation">Russian Federation
                                                            </option>
                                                            <option value="Rwanda">Rwanda</option>
                                                            <option value="Saint Kitts And Nevis">Saint Kitts And Nevis
                                                            </option>
                                                            <option value="San Marino">San Marino</option>
                                                            <option value="Sao Tome and Principe">Sao Tome and Principe
                                                            </option>
                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                            <option value="Senegal">Senegal</option>
                                                            <option value="Serbia-Montenegro">Serbia-Montenegro</option>
                                                            <option value="Seychelles">Seychelles</option>
                                                            <option value="Sierra Leone">Sierra Leone</option>
                                                            <option value="Singapore">Singapore</option>
                                                            <option value="Slovak Republic">Slovak Republic</option>
                                                            <option value="Slovenia">Slovenia</option>
                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                            <option value="Somalia">Somalia</option>
                                                            <option value="South Africa">South Africa</option>
                                                            <option value="South Georgia">South Georgia</option>
                                                            <option value="South Korea">South Korea</option>
                                                            <option value="Spain">Spain</option>
                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                            <option value="St. Christopher, Nevis">St. Christopher,
                                                                Nevis</option>
                                                            <option value="St. Helena">St. Helena</option>
                                                            <option value="St. Lucia">St. Lucia</option>
                                                            <option value="St. Pierre and Miquelon">St. Pierre and
                                                                Miquelon</option>
                                                            <option value="St. Vincent and Gren">St. Vincent and Gren
                                                            </option>
                                                            <option value="Sudan">Sudan</option>
                                                            <option value="Suriname">Suriname</option>
                                                            <option value="Svalbard And Jan M Isl">Svalbard And Jan M
                                                                Isl</option>
                                                            <option value="Swaziland">Swaziland</option>
                                                            <option value="Sweden">Sweden</option>
                                                            <option value="Switzerland">Switzerland</option>
                                                            <option value="Syrian Arab Rep">Syrian Arab Rep</option>
                                                            <option value="Taiwan">Taiwan</option>
                                                            <option value="Tajikistan">Tajikistan</option>
                                                            <option value="Tanzania">Tanzania</option>
                                                            <option value="Thailand">Thailand</option>
                                                            <option value="Togo">Togo</option>
                                                            <option value="Tokelau">Tokelau</option>
                                                            <option value="Tonga">Tonga</option>
                                                            <option value="Trinidad and Tobago">Trinidad and Tobago
                                                            </option>
                                                            <option value="Tristan da Cunha">Tristan da Cunha</option>
                                                            <option value="Tunisia">Tunisia</option>
                                                            <option value="Turkey">Turkey</option>
                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                            <option value="Turks and Caicos Isl">Turks and Caicos Isl
                                                            </option>
                                                            <option value="Tuvalu">Tuvalu</option>
                                                            <option value="Uganda">Uganda</option>
                                                            <option value="Ukraine">Ukraine</option>
                                                            <option value="United Arab Emirates">United Arab Emirates
                                                            </option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="Great Britain">Great Britain</option>
                                                            <option value="United States" selected="selected">United
                                                                States</option>
                                                            <option value="U.S. Minor Outlying Isl">U.S. Minor Outlying
                                                                Isl</option>
                                                            <option value="Uruguay">Uruguay</option>
                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                            <option value="Vanuatu">Vanuatu</option>
                                                            <option value="Vatican City">Vatican City</option>
                                                            <option value="Venezuela">Venezuela</option>
                                                            <option value="Vietnam">Vietnam</option>
                                                            <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)
                                                            </option>
                                                            <option value="Wallis and Furuna Isl">Wallis and Furuna Isl
                                                            </option>
                                                            <option value="Western Sahara">Western Sahara</option>
                                                            <option value="Western Samoa">Western Samoa</option>
                                                            <option value="Yemen">Yemen</option>
                                                            <option value="Yugoslavia">Yugoslavia</option>
                                                            <option value="Zaire">Zaire</option>
                                                            <option value="Zambia">Zambia</option>
                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <a class="collapsed card-link" data-toggle="collapse"
                                                    href="#collapseFour">
                                                    Continue ->
                                                </a>

                                            </div>
                                            <!------collapse-->
                                        </div>
                                        <!------card-->
                                        <div class="card">
                                            <div class="card-header">
                                                <a class="collapsed card-link" data-toggle="collapse"
                                                    href="#collapseFour">
                                                    Passenger Information
                                                </a>
                                            </div>
                                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                                                <div class=" ">
                                                    <div class="d-flex mt-3">
                                                        <div class="form-group col-md-4">
                                                            <label for="staticEmail2" class="pt-2">Total Amount</label>
                                                            <span class="alertRed">$</span> <input type="text" readonly
                                                                class="form-control-plaintext">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="inputPassword2" class="sr-only"></label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <button type="submit"
                                                                class="btn btn-primary">Calculate</button>
                                                        </div>
                                                    </div>
                                                    <div class="form-group d-flex">
                                                        <div class="form-group col-md-6">
                                                            <label for="exampleFormControlTextarea1">Payment
                                                                Method</label>
                                                            <select class="form-control" id="card_type" name="card_type"
                                                                size="1">
                                                                <option value="**" selected="selected">- Select Card
                                                                    Type -</option>
                                                                <option value="Visa">Visa</option>
                                                                <option value="MasterCard">MasterCard</option>
                                                                <option value="Discover">Discover</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="exampleFormControlTextarea1">Credit Card
                                                                Number</label>
                                                            <input type="number" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="exampleFormControlTextarea1">Credit Card
                                                            Number</label>
                                                        <input type="number" class="form-control" />
                                                    </div>
                                                    <div class="form-group mt-3 text-center mx-auto">
                                                        <input value="1" id="billing-checkbox"
                                                            onclick="auto_address_update(document.create_new)"
                                                            type="checkbox">
                                                        Please do not charge my credit card. I will be paying cash or
                                                        traveler check upon arrival I understand I am submitting my
                                                        credit card info only to guarantee my reservation. I also read
                                                        and understand Sunstate Transportation cancellation policy.
                                                    </div>
                                                </div>
                                                <a class="collapsed card-link" data-toggle="collapse"
                                                    href="#collapseFive">
                                                    Continue ->
                                                </a>
                                            </div>
                                            <!-------collapse-->
                                        </div>
                                        <!------card-->
                                        <div class="card">
                                            <div class="card-header">
                                                <a class="collapsed card-link" data-toggle="collapse"
                                                    href="#collapseFive">
                                                    Passenger Information
                                                </a>
                                            </div>
                                            <div id="collapseFive" class="collapse" data-parent="#accordion">
                                                <div class=" ">
                                                    <div class="d-flex mt-3">
                                                        <div class="form-group col-md-6">
                                                            <label for="staticEmail2">Reservation Status</label>
                                                            <select name="status" size="1" class="form-control">
                                                                <option value="1">Processing</option>
                                                                <option value="2">Confirmed</option>
                                                                <option value="3">Departed</option>
                                                                <option value="4">Arrived</option>
                                                                <option value="5">Awaiting Arrival</option>
                                                                <option value="6">Awaiting Departure</option>
                                                                <option value="7">Credit card verification error
                                                                </option>
                                                                <option value="11">Cancelled</option>
                                                                <option value="13"></option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="inputPassword2" class=" ">Payment Status</label>
                                                            <select name="status" size="1" class="form-control">
                                                                <option value="1">Processing</option>
                                                                <option value="2">Confirmed</option>
                                                                <option value="3">Departed</option>
                                                                <option value="4">Arrived</option>
                                                                <option value="5">Awaiting Arrival</option>
                                                                <option value="6">Awaiting Departure</option>
                                                                <option value="7">Credit card verification error
                                                                </option>
                                                                <option value="11">Cancelled</option>
                                                                <option value="13"></option>
                                                            </select>
                                                        </div>

                                                    </div>

                                                    <div class="form-group col-md-12">
                                                        <label for="exampleFormControlTextarea1">Approval Code</label>
                                                        <textarea class="form-control">

                                                            </textarea>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="exampleFormControlTextarea1">Customer
                                                            Comments</label>
                                                        <textarea class="form-control">

                                                            </textarea>
                                                    </div>

                                                    <div class="form-group col-md-12">
                                                        <label for="exampleFormControlTextarea1">Admin Comments</label>
                                                        <textarea class="form-control">

                                                            </textarea>
                                                    </div>
                                                    <div class="form-group mt-3 text-center mx-auto">
                                                        <button class="btn btn-primary">Book Now</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-------collapse-->
                                        </div>
                                        <!------card-->
                                    </div>
                                    <!---------modalbody-->
                                </div>
                                <!---------end of modal-->
                                <!-----------------end of new reservation pop up-->
                            </div>
                            <!-- Content Wrapper END -->
                            <!-- Footer START -->
                            <footer class="footer">
                                <div class="footer-content">
                                    <p class="m-b-0">Copyright © 2019 Theme_Nate. All rights reserved.</p>
                                    <span>
                                        <a href="" class="text-gray m-r-15">Term &amp; Conditions</a>
                                        <a href="" class="text-gray">Privacy &amp; Policy</a>
                                    </span>
                                </div>
                            </footer>
                            <!-- Footer END -->

                        </div>


                        <!-- Page Container END -->
                        <!-- Search Start-->
                        <div class="modal modal-left fade search" id="search-drawer">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header justify-content-between align-items-center">
                                        <h5 class="modal-title">Search</h5>
                                        <button type="button" class="close" data-dismiss="modal">
                                            <i class="anticon anticon-close"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body scrollable ps-container ps-theme-default"
                                        data-ps-id="0b2fb6f6-a047-8943-3d5e-d9dbfd0a281e">
                                        <div class="input-affix">
                                            <i class="prefix-icon anticon anticon-search"></i>
                                            <input type="text" class="form-control" placeholder="Search">
                                        </div>
                                        <div class="m-t-30">
                                            <h5 class="m-b-20">Files</h5>
                                            <div class="d-flex m-b-30">
                                                <div class="avatar avatar-cyan avatar-icon">
                                                    <i class="anticon anticon-file-excel"></i>
                                                </div>
                                                <div class="m-l-15">
                                                    <a href="javascript:void(0);"
                                                        class="text-dark m-b-0 font-weight-semibold">Quater
                                                        Report.exl</a>
                                                    <p class="m-b-0 text-muted font-size-13">by Finance</p>
                                                </div>
                                            </div>
                                            <div class="d-flex m-b-30">
                                                <div class="avatar avatar-blue avatar-icon">
                                                    <i class="anticon anticon-file-word"></i>
                                                </div>
                                                <div class="m-l-15">
                                                    <a href="javascript:void(0);"
                                                        class="text-dark m-b-0 font-weight-semibold">Documentaion.docx</a>
                                                    <p class="m-b-0 text-muted font-size-13">by Developers</p>
                                                </div>
                                            </div>
                                            <div class="d-flex m-b-30">
                                                <div class="avatar avatar-purple avatar-icon">
                                                    <i class="anticon anticon-file-text"></i>
                                                </div>
                                                <div class="m-l-15">
                                                    <a href="javascript:void(0);"
                                                        class="text-dark m-b-0 font-weight-semibold">Recipe.txt</a>
                                                    <p class="m-b-0 text-muted font-size-13">by The Chef</p>
                                                </div>
                                            </div>
                                            <div class="d-flex m-b-30">
                                                <div class="avatar avatar-red avatar-icon">
                                                    <i class="anticon anticon-file-pdf"></i>
                                                </div>
                                                <div class="m-l-15">
                                                    <a href="javascript:void(0);"
                                                        class="text-dark m-b-0 font-weight-semibold">Project
                                                        Requirement.pdf</a>
                                                    <p class="m-b-0 text-muted font-size-13">by Project Manager</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-t-30">
                                            <h5 class="m-b-20">Members</h5>
                                            <div class="d-flex m-b-30">
                                                <div class="avatar avatar-image">
                                                    <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                                </div>
                                                <div class="m-l-15">
                                                    <a href="javascript:void(0);"
                                                        class="text-dark m-b-0 font-weight-semibold">Erin Gonzales</a>
                                                    <p class="m-b-0 text-muted font-size-13">UI/UX Designer</p>
                                                </div>
                                            </div>
                                            <div class="d-flex m-b-30">
                                                <div class="avatar avatar-image">
                                                    <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                                </div>
                                                <div class="m-l-15">
                                                    <a href="javascript:void(0);"
                                                        class="text-dark m-b-0 font-weight-semibold">Darryl Day</a>
                                                    <p class="m-b-0 text-muted font-size-13">Software Engineer</p>
                                                </div>
                                            </div>
                                            <div class="d-flex m-b-30">
                                                <div class="avatar avatar-image">
                                                    <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                                </div>
                                                <div class="m-l-15">
                                                    <a href="javascript:void(0);"
                                                        class="text-dark m-b-0 font-weight-semibold">Marshall
                                                        Nichols</a>
                                                    <p class="m-b-0 text-muted font-size-13">Data Analyst</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-t-30">
                                            <h5 class="m-b-20">News</h5>
                                            <div class="d-flex m-b-30">
                                                <div class="avatar avatar-image">
                                                    <img src="assets/images/others/img-1.jpg" alt="">
                                                </div>
                                                <div class="m-l-15">
                                                    <a href="javascript:void(0);"
                                                        class="text-dark m-b-0 font-weight-semibold">5 Best Handwriting
                                                        Fonts</a>
                                                    <p class="m-b-0 text-muted font-size-13">
                                                        <i class="anticon anticon-clock-circle"></i>
                                                        <span class="m-l-5">25 Nov 2018</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                            <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;">
                                            </div>
                                        </div>
                                        <div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;">
                                            <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Search End-->
                        <!-- Quick View START -->
                        <div class="modal modal-right fade quick-view" id="quick-view">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header justify-content-between align-items-center">
                                        <h5 class="modal-title">Theme Config</h5>
                                    </div>
                                    <div class="modal-body scrollable ps-container ps-theme-default"
                                        data-ps-id="9ac710a4-2984-ba58-2781-106eb27ab82c">
                                        <div class="m-b-30">
                                            <h5 class="m-b-0">Header Color</h5>
                                            <p>Config header background color</p>
                                            <div class="theme-configurator d-flex m-t-10">
                                                <div class="radio">
                                                    <input id="header-default" name="header-theme" type="radio"
                                                        checked="" value="default">
                                                    <label for="header-default"></label>
                                                </div>
                                                <div class="radio">
                                                    <input id="header-primary" name="header-theme" type="radio"
                                                        value="primary">
                                                    <label for="header-primary"></label>
                                                </div>
                                                <div class="radio">
                                                    <input id="header-success" name="header-theme" type="radio"
                                                        value="success">
                                                    <label for="header-success"></label>
                                                </div>
                                                <div class="radio">
                                                    <input id="header-secondary" name="header-theme" type="radio"
                                                        value="secondary">
                                                    <label for="header-secondary"></label>
                                                </div>
                                                <div class="radio">
                                                    <input id="header-danger" name="header-theme" type="radio"
                                                        value="danger">
                                                    <label for="header-danger"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div>
                                            <h5 class="m-b-0">Side Nav Dark</h5>
                                            <p>Change Side Nav to dark</p>
                                            <div class="switch d-inline">
                                                <input type="checkbox" name="side-nav-theme-toogle"
                                                    id="side-nav-theme-toogle">
                                                <label for="side-nav-theme-toogle"></label>
                                            </div>
                                        </div>
                                        <hr>
                                        <div>
                                            <h5 class="m-b-0">Folded Menu</h5>
                                            <p>Toggle Folded Menu</p>
                                            <div class="switch d-inline">
                                                <input type="checkbox" name="side-nav-fold-toogle"
                                                    id="side-nav-fold-toogle">
                                                <label for="side-nav-fold-toogle"></label>
                                            </div>
                                        </div>
                                        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                            <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;">
                                            </div>
                                        </div>
                                        <div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;">
                                            <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Quick View END -->
                    </div>
                </div>
                <!------------end of new reservation pop up------------------->
                <div class="w-100">
                    <div class="table-responsive">
                        <table class="table mt-5 mx-auto">
                            <thead class="">
                                <tr class="col-md-12" style="background-color: orange;">
                                    <th class="col-md-1 col-sm-12"></th>
                                    <th class="col-md-2 col-sm-12">Client, Depart</th>
                                    <th class="col-md-2 col-sm-12">Time, Airline/Flight#</th>
                                    <th class="col-md-3 col-sm-12">Passenger, Vehicle, Destination</th>
                                    <th class="col-md-2 col-sm-12">Car seat, Booster, Stop</th>
                                    <th class="col-md-2 col-sm-12">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="col-md-12">
                                    <td class="col-md-1 col-sm-12">
                                        <div class="alertRed">
                                            Details<br />50788
                                        </div>
                                    </td>
                                    <td class="col-md-2 col-sm-12">
                                        <div class="alertRed">
                                            Peterson, James<br />
                                            Orlando Area - Round Trip
                                        </div>
                                    </td>
                                    <td class="col-md-2 col-sm-12">
                                        <div class="alertRed">
                                            9.46 AM, American Airlines/2075
                                        </div>
                                    </td>
                                    <td class="col-md-3 col-sm-12">
                                        <div class="alertRed">
                                            6, Luxury Van, From: Shades of Green To: Orlando Airport
                                        </div>
                                    </td>
                                    <td class="col-md-2 col-sm-12">
                                        <div class="alertRed">
                                            CS: Yes, BS: Yes
                                        </div>
                                    </td>
                                    <td class="col-md-2 col-sm-12">
                                        <div class="alertRed">
                                            Return
                                        </div>
                                    </td>

                                </tr>
                                <tr class="col-md-12 text-center">
                                    <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                        <div>
                                            <b>Arrived:</b>07/08/2021 10:56 AM
                                        </div>
                                    </td>
                                    <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                        <div>
                                            We have 3 children with us. One is 2 year old, the other are 5 and 6. Do
                                            they all need car seats.<br />
                                            <b>Cellphone:</b>9728343414
                                        </div>
                                    </td>
                                    <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                        <div>
                                            Credit Card <span class="alertGreen"><b>Approved</b></span>
                                        </div>
                                    </td>


                                </tr>

                                <tr class="col-md-12">
                                    <td class="col-md-1 col-sm-12">
                                        <div class="alertRed">
                                            Details<br />50788
                                        </div>
                                    </td>
                                    <td class="col-md-2 col-sm-12">
                                        <div class="alertRed">
                                            Peterson, James<br />
                                            Orlando Area - Round Trip
                                        </div>
                                    </td>
                                    <td class="col-md-2 col-sm-12">
                                        <div class="alertRed">
                                            9.46 AM, American Airlines/2075
                                        </div>
                                    </td>
                                    <td class="col-md-3 col-sm-12">
                                        <div class="alertRed">
                                            6, Luxury Van, From: Shades of Green To: Orlando Airport
                                        </div>
                                    </td>
                                    <td class="col-md-2 col-sm-12">
                                        <div class="alertRed">
                                            CS: Yes, BS: Yes
                                        </div>
                                    </td>
                                    <td class="col-md-2 col-sm-12">
                                        <div class="alertRed">
                                            Return
                                        </div>
                                    </td>

                                </tr>
                                <tr class="col-md-12 text-center">
                                    <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                        <div>
                                            <b>Arrived:</b>07/08/2021 10:56 AM
                                        </div>
                                    </td>
                                    <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                        <div>
                                            We have 3 children with us. One is 2 year old, the other are 5 and 6. Do
                                            they all need car seats.<br />
                                            <b>Cellphone:</b>9728343414
                                        </div>
                                    </td>
                                    <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                        <div>
                                            Credit Card <span class="alertGreen"><b>Approved</b></span>
                                        </div>
                                    </td>


                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!----------------w-100-->


            </div>
        </div>
        <!---------------------end of card-->

        <div class="card text-center shadow p-3 mb-5 bg-white rounded">

            <div class="card-body">
                <h1>TODAYS ARRIVAL</h1>
                <form class="form-inline">
                    <div class="form-group col-md-6">
                        <label for="inputState"><b>Search By:</b></label>
                        <select name="search_by" size="1" class="form-control">
                            <option value="name">Name</option>
                            <option value="id">Reservation ID</option>
                            <option value="email">E-mail</option>
                            <option value="phone_number">Phone Number</option>
                            <option value="cellphone">Mobile Phone</option>
                            <option value="payment_status">Payment Status</option>
                            <option value="approval_code">Gateway Response</option>
                        </select>

                        <label class="form-check-label color-red" for="inlineFormCheck">
                            Select option
                        </label>
                    </div>

                    <div class="form-group col-md-3">
                        <input type="text" class="form-control" placeholder="search ">
                    </div>
                    <button type="button" class="btn btn-primary text-center mx-auto" data-toggle="modal"
                        data-target=".bd-example-modal-lg">
                        <i class="anticon anticon-plus"></i>
                        Add New Reservation
                    </button>



                </form>
                <div class="w-100">
                    <div class="table-responsive">
                        <table class="table mt-5 mx-auto">
                            <thead>
                                <tr class="col-md-12" style="background-color: orange;">
                                    <th class="col-md-1 col-sm-12"></th>
                                    <th class="col-md-2 col-sm-12">Client, Depart</th>
                                    <th class="col-md-2 col-sm-12">Time, Airline/Flight#</th>
                                    <th class="col-md-3 col-sm-12">Passenger, Vehicle, Destination</th>
                                    <th class="col-md-2 col-sm-12">Car seat, Booster, Stop</th>
                                    <th class="col-md-2 col-sm-12">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="col-md-12">
                                    <td class="col-md-1 col-sm-12">
                                        <div class="alertRed">
                                            Details<br />50788
                                        </div>
                                    </td>
                                    <td class="col-md-2 col-sm-12">
                                        <div class="alertRed">
                                            Peterson, James<br />
                                            Orlando Area - Round Trip
                                        </div>
                                    </td>
                                    <td class="col-md-2 col-sm-12">
                                        <div class="alertRed">
                                            9.46 AM, American Airlines/2075
                                        </div>
                                    </td>
                                    <td class="col-md-3 col-sm-12">
                                        <div class="alertRed">
                                            6, Luxury Van, From: Shades of Green To: Orlando Airport
                                        </div>
                                    </td>
                                    <td class="col-md-2 col-sm-12">
                                        <div class="alertRed">
                                            CS: Yes, BS: Yes
                                        </div>
                                    </td>
                                    <td class="col-md-2 col-sm-12">
                                        <div class="alertRed">
                                            Return
                                        </div>
                                    </td>

                                </tr>
                                <tr class="col-md-12 text-center">
                                    <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                        <div>
                                            <b>Arrived:</b>07/08/2021 10:56 AM
                                        </div>
                                    </td>
                                    <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                        <div>
                                            We have 3 children with us. One is 2 year old, the other are 5 and 6. Do
                                            they all need car seats.<br />
                                            <b>Cellphone:</b>9728343414
                                        </div>
                                    </td>
                                    <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                        <div>
                                            Credit Card <span class="alertGreen"><b>Approved</b></span>
                                        </div>
                                    </td>


                                </tr>

                                <tr class="col-md-12">
                                    <td class="col-md-1 col-sm-12">
                                        <div class="alertRed">
                                            Details<br />50788
                                        </div>
                                    </td>
                                    <td class="col-md-2 col-sm-12">
                                        <div class="alertRed">
                                            Peterson, James<br />
                                            Orlando Area - Round Trip
                                        </div>
                                    </td>
                                    <td class="col-md-2 col-sm-12">
                                        <div class="alertRed">
                                            9.46 AM, American Airlines/2075
                                        </div>
                                    </td>
                                    <td class="col-md-3 col-sm-12">
                                        <div class="alertRed">
                                            6, Luxury Van, From: Shades of Green To: Orlando Airport
                                        </div>
                                    </td>
                                    <td class="col-md-2 col-sm-12">
                                        <div class="alertRed">
                                            CS: Yes, BS: Yes
                                        </div>
                                    </td>
                                    <td class="col-md-2 col-sm-12">
                                        <div class="alertRed">
                                            Return
                                        </div>
                                    </td>

                                </tr>
                                <tr class="col-md-12 text-center">
                                    <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                        <div>
                                            <b>Arrived:</b>07/08/2021 10:56 AM
                                        </div>
                                    </td>
                                    <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                        <div>
                                            We have 3 children with us. One is 2 year old, the other are 5 and 6. Do
                                            they all need car seats.<br />
                                            <b>Cellphone:</b>9728343414
                                        </div>
                                    </td>
                                    <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                        <div>
                                            Credit Card <span class="alertGreen"><b>Approved</b></span>
                                        </div>
                                    </td>


                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!----------------w-100-->
            </div>
        </div>
        <!---------------------end of card-->
        <div class="card text-center shadow p-3 mb-5 bg-white rounded">

            <div class="card-body">
                <h1>TODAYS DEPARTURES</h1>
                <form class="form-inline">
                    <div class="form-group col-md-6">
                        <label for="inputState"><b>Search By:</b></label>
                        <select name="search_by" size="1" class="form-control">
                            <option value="name">Name</option>
                            <option value="id">Reservation ID</option>
                            <option value="email">E-mail</option>
                            <option value="phone_number">Phone Number</option>
                            <option value="cellphone">Mobile Phone</option>
                            <option value="payment_status">Payment Status</option>
                            <option value="approval_code">Gateway Response</option>
                        </select>

                        <label class="form-check-label color-red" for="inlineFormCheck">
                            Select option
                        </label>
                    </div>

                    <div class="form-group col-md-3">
                        <input type="text" class="form-control" placeholder="search ">
                    </div>
                    <button type="button" class="btn btn-primary text-center mx-auto" data-toggle="modal"
                        data-target=".bd-example-modal-lg">
                        <i class="anticon anticon-plus"></i>
                        Add New Reservation
                    </button>



                </form>
                <div class="w-100">
                    <div class="table-responsive">
                        <table class="table mt-5 mx-auto">
                            <thead>
                                <tr class="col-md-12" style="background-color: orange;">
                                    <th class="col-md-1 col-sm-12"></th>
                                    <th class="col-md-2 col-sm-12">Client, Depart</th>
                                    <th class="col-md-2 col-sm-12">Time, Airline/Flight#</th>
                                    <th class="col-md-3 col-sm-12">Passenger, Vehicle, Destination</th>
                                    <th class="col-md-2 col-sm-12">Car seat, Booster, Stop</th>
                                    <th class="col-md-2 col-sm-12">Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="col-md-12">
                                    <td class="col-md-1 col-sm-12">
                                        <div class="alertRed">
                                            Details<br />50788
                                        </div>
                                    </td>
                                    <td class="col-md-2 col-sm-12">
                                        <div class="alertRed">
                                            Peterson, James<br />
                                            Orlando Area - Round Trip
                                        </div>
                                    </td>
                                    <td class="col-md-2 col-sm-12">
                                        <div class="alertRed">
                                            9.46 AM, American Airlines/2075
                                        </div>
                                    </td>
                                    <td class="col-md-3 col-sm-12">
                                        <div class="alertRed">
                                            6, Luxury Van, From: Shades of Green To: Orlando Airport
                                        </div>
                                    </td>
                                    <td class="col-md-2 col-sm-12">
                                        <div class="alertRed">
                                            CS: Yes, BS: Yes
                                        </div>
                                    </td>
                                    <td class="col-md-2 col-sm-12">
                                        <div class="alertRed">
                                            Return
                                        </div>
                                    </td>

                                </tr>
                                <tr class="col-md-12 text-center">
                                    <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                        <div>
                                            <b>Arrived:</b>07/08/2021 10:56 AM
                                        </div>
                                    </td>
                                    <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                        <div>
                                            We have 3 children with us. One is 2 year old, the other are 5 and 6. Do
                                            they all need car seats.<br />
                                            <b>Cellphone:</b>9728343414
                                        </div>
                                    </td>
                                    <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                        <div>
                                            Credit Card <span class="alertGreen"><b>Approved</b></span>
                                        </div>
                                    </td>


                                </tr>

                                <tr class="col-md-12">
                                    <td class="col-md-1 col-sm-12">
                                        <div class="alertRed">
                                            Details<br />50788
                                        </div>
                                    </td>
                                    <td class="col-md-2 col-sm-12">
                                        <div class="alertRed">
                                            Peterson, James<br />
                                            Orlando Area - Round Trip
                                        </div>
                                    </td>
                                    <td class="col-md-2 col-sm-12">
                                        <div class="alertRed">
                                            9.46 AM, American Airlines/2075
                                        </div>
                                    </td>
                                    <td class="col-md-3 col-sm-12">
                                        <div class="alertRed">
                                            6, Luxury Van, From: Shades of Green To: Orlando Airport
                                        </div>
                                    </td>
                                    <td class="col-md-2 col-sm-12">
                                        <div class="alertRed">
                                            CS: Yes, BS: Yes
                                        </div>
                                    </td>
                                    <td class="col-md-2 col-sm-12">
                                        <div class="alertRed">
                                            Return
                                        </div>
                                    </td>

                                </tr>
                                <tr class="col-md-12 text-center">
                                    <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                        <div>
                                            <b>Arrived:</b>07/08/2021 10:56 AM
                                        </div>
                                    </td>
                                    <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                        <div>
                                            We have 3 children with us. One is 2 year old, the other are 5 and 6. Do
                                            they all need car seats.<br />
                                            <b>Cellphone:</b>9728343414
                                        </div>
                                    </td>
                                    <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                        <div>
                                            Credit Card <span class="alertGreen"><b>Approved</b></span>
                                        </div>
                                    </td>


                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!----------------w-100-->
            </div>
        </div>
        <!---------------------end of card-->
        <div class="card text-center shadow p-3 mb-5 bg-white rounded">

            <div class="card-body">
                <h1>TODAYS SCHEDULE</h1>
                <form class="form-inline">
                    <div class="form-group col-md-6">
                        <label for="inputState"><b>Search By:</b></label>
                        <select name="search_by" size="1" class="form-control">
                            <option value="name">Name</option>
                            <option value="id">Reservation ID</option>
                            <option value="email">E-mail</option>
                            <option value="phone_number">Phone Number</option>
                            <option value="cellphone">Mobile Phone</option>
                            <option value="payment_status">Payment Status</option>
                            <option value="approval_code">Gateway Response</option>
                        </select>

                        <label class="form-check-label color-red" for="inlineFormCheck">
                            Select option
                        </label>
                    </div>

                    <div class="form-group col-md-3">
                        <input type="text" class="form-control" placeholder="search ">
                    </div>
                    <button type="button" class="btn btn-primary text-center mx-auto" data-toggle="modal"
                        data-target=".bd-example-modal-lg">
                        <i class="anticon anticon-plus"></i>
                        Add New Reservation
                    </button>
                    <div class="w-100">
                        <div class="table-responsive">
                            <table class="table mt-5 mx-auto">
                                <thead>
                                    <tr class="col-md-12" style="background-color: orange;">
                                        <th class="col-md-1 col-sm-12"></th>
                                        <th class="col-md-2 col-sm-12">Client, Depart</th>
                                        <th class="col-md-2 col-sm-12">Time, Airline/Flight#</th>
                                        <th class="col-md-3 col-sm-12">Passenger, Vehicle, Destination</th>
                                        <th class="col-md-2 col-sm-12">Car seat, Booster, Stop</th>
                                        <th class="col-md-2 col-sm-12">Amount</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="col-md-12">
                                        <td class="col-md-1 col-sm-12">
                                            <div class="alertBlue">
                                                Details<br />50788
                                            </div>
                                        </td>
                                        <td class="col-md-2 col-sm-12">
                                            <div class="alertBlue">
                                                Peterson, James<br />
                                                Orlando Area - Round Trip
                                            </div>
                                        </td>
                                        <td class="col-md-2 col-sm-12">
                                            <div class="alertBlue">
                                                9.46 AM, American Airlines/2075
                                            </div>
                                        </td>
                                        <td class="col-md-3 col-sm-12">
                                            <div class="alertBlue">
                                                6, Luxury Van, From: Shades of Green To: Orlando Airport
                                            </div>
                                        </td>
                                        <td class="col-md-2 col-sm-12">
                                            <div class="alertBlue">
                                                CS: Yes, BS: Yes
                                            </div>
                                        </td>
                                        <td class="col-md-2 col-sm-12">
                                            <div class="alertBlue">
                                                Return
                                            </div>
                                        </td>

                                    </tr>
                                    <tr class="col-md-12 text-center">
                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                            <div>
                                                <b>Arrived:</b>07/08/2021 10:56 AM
                                            </div>
                                        </td>
                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                            <div>
                                                We have 3 children with us. One is 2 year old, the other are 5 and 6. Do
                                                they all need car seats.<br />
                                                <b>Cellphone:</b>9728343414
                                            </div>
                                        </td>
                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                            <div>
                                                Credit Card <span class="alertGreen"><b>Approved</b></span>
                                            </div>
                                        </td>


                                    </tr>

                                    <tr class="col-md-12">
                                        <td class="col-md-1 col-sm-12">
                                            <div class="alertBlue">
                                                Details<br />50788
                                            </div>
                                        </td>
                                        <td class="col-md-2 col-sm-12">
                                            <div class="alertBlue">
                                                Peterson, James<br />
                                                Orlando Area - Round Trip
                                            </div>
                                        </td>
                                        <td class="col-md-2 col-sm-12">
                                            <div class="alertBlue">
                                                9.46 AM, American Airlines/2075
                                            </div>
                                        </td>
                                        <td class="col-md-3 col-sm-12">
                                            <div class="alertBlue">
                                                6, Luxury Van, From: Shades of Green To: Orlando Airport
                                            </div>
                                        </td>
                                        <td class="col-md-2 col-sm-12">
                                            <div class="alertBlue">
                                                CS: Yes, BS: Yes
                                            </div>
                                        </td>
                                        <td class="col-md-2 col-sm-12">
                                            <div class="alertBlue">
                                                Return
                                            </div>
                                        </td>

                                    </tr>
                                    <tr class="col-md-12 text-center">
                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                            <div>
                                                <b>Arrived:</b>07/08/2021 10:56 AM
                                            </div>
                                        </td>
                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                            <div>
                                                We have 3 children with us. One is 2 year old, the other are 5 and 6. Do
                                                they all need car seats.<br />
                                                <b>Cellphone:</b>9728343414
                                            </div>
                                        </td>
                                        <td class="col-md-4 col-sm-12" colspan="2">
                                            <div class="text-left">
                                                Credit Card <span class="alertGreen"><br /><b>Approved</b></span>
                                            </div>
                                            <div class="text-right">
                                                Run Credit Card
                                            </div>
                                        </td>


                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!----------------w-100-->


                </form>

            </div>
        </div>
        <!---------------------end of card-->

        <div class="accordion" id="accordion2">
            <div class="accordion-group">
                <div class="accordion-heading orangebg text-center mx-auto">
                    <a class="accordion-toggle text-center" data-toggle="collapse" data-parent="#accordion2"
                        href="#collapseOne">
                        UPCOMING TRANSFERS
                        <i class="far fa-plus-square"></i>
                    </a>

                </div>
                <div id="collapseOne" class="accordion-body collapse">
                    <div class="accordion-inner">
                        <div class="card text-center shadow p-3 mb-5 bg-white rounded">

                            <div class="card-body">
                                <h1>TODAYS SCHEDULE</h1>
                                <form class="form-inline">
                                    <div class="form-group col-md-6">
                                        <label for="inputState"><b>Search By:</b></label>
                                        <select name="search_by" size="1" class="form-control">
                                            <option value="name">Name</option>
                                            <option value="id">Reservation ID</option>
                                            <option value="email">E-mail</option>
                                            <option value="phone_number">Phone Number</option>
                                            <option value="cellphone">Mobile Phone</option>
                                            <option value="payment_status">Payment Status</option>
                                            <option value="approval_code">Gateway Response</option>
                                        </select>

                                        <label class="form-check-label color-red" for="inlineFormCheck">
                                            Select option
                                        </label>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" placeholder="search ">
                                    </div>
                                    <button type="button" class="btn btn-primary text-center mx-auto"
                                        data-toggle="modal" data-target=".bd-example-modal-lg">
                                        <i class="anticon anticon-plus"></i>
                                        Add New Reservation
                                    </button>
                                    <div class="w-100">
                                        <div class="table-responsive">
                                            <table class="table mt-5 mx-auto">
                                                <thead>
                                                    <tr class="col-md-12" style="background-color: orange;">
                                                        <th class="col-md-1 col-sm-12"></th>
                                                        <th class="col-md-2 col-sm-12">Client, Depart</th>
                                                        <th class="col-md-2 col-sm-12">Time, Airline/Flight#</th>
                                                        <th class="col-md-3 col-sm-12">Passenger, Vehicle, Destination
                                                        </th>
                                                        <th class="col-md-2 col-sm-12">Car seat, Booster, Stop</th>
                                                        <th class="col-md-2 col-sm-12">Amount</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="col-md-12">
                                                        <td class="col-md-1 col-sm-12">
                                                            <div class="alertRed">
                                                                Details<br />50788
                                                            </div>
                                                        </td>
                                                        <td class="col-md-2 col-sm-12">
                                                            <div class="alertRed">
                                                                Peterson, James<br />
                                                                Orlando Area - Round Trip
                                                            </div>
                                                        </td>
                                                        <td class="col-md-2 col-sm-12">
                                                            <div class="alertRed">
                                                                9.46 AM, American Airlines/2075
                                                            </div>
                                                        </td>
                                                        <td class="col-md-3 col-sm-12">
                                                            <div class="alertRed">
                                                                6, Luxury Van, From: Shades of Green To: Orlando Airport
                                                            </div>
                                                        </td>
                                                        <td class="col-md-2 col-sm-12">
                                                            <div class="alertRed">
                                                                CS: Yes, BS: Yes
                                                            </div>
                                                        </td>
                                                        <td class="col-md-2 col-sm-12">
                                                            <div class="alertRed">
                                                                Return
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr class="col-md-12 text-center">
                                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                            <div>
                                                                <b>Arrived:</b>07/08/2021 10:56 AM
                                                            </div>
                                                        </td>
                                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                            <div>
                                                                We have 3 children with us. One is 2 year old, the other
                                                                are 5 and 6. Do they all need car seats.<br />
                                                                <b>Cellphone:</b>9728343414
                                                            </div>
                                                        </td>
                                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                            <div>
                                                                Credit Card <span
                                                                    class="alertGreen"><b>Approved</b></span>
                                                            </div>
                                                        </td>


                                                    </tr>
                                                    <tr class="col-md-12">
                                                        <td class="col-md-1 col-sm-12">
                                                            <div class="alertBlue">
                                                                Details<br />50788
                                                            </div>
                                                        </td>
                                                        <td class="col-md-2 col-sm-12">
                                                            <div class="alertBlue">
                                                                Peterson, James<br />
                                                                Orlando Area - Round Trip
                                                            </div>
                                                        </td>
                                                        <td class="col-md-2 col-sm-12">
                                                            <div class="alertBlue">
                                                                9.46 AM, American Airlines/2075
                                                            </div>
                                                        </td>
                                                        <td class="col-md-3 col-sm-12">
                                                            <div class="alertBlue">
                                                                6, Luxury Van, From: Shades of Green To: Orlando Airport
                                                            </div>
                                                        </td>
                                                        <td class="col-md-2 col-sm-12">
                                                            <div class="alertBlue">
                                                                CS: Yes, BS: Yes
                                                            </div>
                                                        </td>
                                                        <td class="col-md-2 col-sm-12">
                                                            <div class="alertBlue">
                                                                Return
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr class="col-md-12 text-center">
                                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                            <div>
                                                                <b>Arrived:</b>07/08/2021 10:56 AM
                                                            </div>
                                                        </td>
                                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                            <div>
                                                                We have 3 children with us. One is 2 year old, the other
                                                                are 5 and 6. Do they all need car seats.<br />
                                                                <b>Cellphone:</b>9728343414
                                                            </div>
                                                        </td>
                                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                            <div>
                                                                Credit Card <span
                                                                    class="alertGreen"><b>Approved</b></span>
                                                            </div>
                                                        </td>


                                                    </tr>

                                                    <tr class="col-md-12">
                                                        <td class="col-md-1 col-sm-12">
                                                            <div class="alertBlue">
                                                                Details<br />50788
                                                            </div>
                                                        </td>
                                                        <td class="col-md-2 col-sm-12">
                                                            <div class="alertBlue">
                                                                Peterson, James<br />
                                                                Orlando Area - Round Trip
                                                            </div>
                                                        </td>
                                                        <td class="col-md-2 col-sm-12">
                                                            <div class="alertBlue">
                                                                9.46 AM, American Airlines/2075
                                                            </div>
                                                        </td>
                                                        <td class="col-md-3 col-sm-12">
                                                            <div class="alertBlue">
                                                                6, Luxury Van, From: Shades of Green To: Orlando Airport
                                                            </div>
                                                        </td>
                                                        <td class="col-md-2 col-sm-12">
                                                            <div class="alertBlue">
                                                                CS: Yes, BS: Yes
                                                            </div>
                                                        </td>
                                                        <td class="col-md-2 col-sm-12">
                                                            <div class="alertBlue">
                                                                Return
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr class="col-md-12 text-center">
                                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                            <div>
                                                                <b>Arrived:</b>07/08/2021 10:56 AM
                                                            </div>
                                                        </td>
                                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                            <div>
                                                                We have 3 children with us. One is 2 year old, the other
                                                                are 5 and 6. Do they all need car seats.<br />
                                                                <b>Cellphone:</b>9728343414
                                                            </div>
                                                        </td>
                                                        <td class="col-md-4 col-sm-12" colspan="2">
                                                            <div class="text-left">
                                                                Credit Card <span
                                                                    class="alertGreen"><br /><b>Approved</b></span>
                                                            </div>
                                                            <div class="text-right">
                                                                Run Credit Card
                                                            </div>
                                                        </td>


                                                    </tr>
                                                    <tr class="col-md-12">
                                                        <td class="col-md-1 col-sm-12">
                                                            <div class="alertRed">
                                                                Details<br />50788
                                                            </div>
                                                        </td>
                                                        <td class="col-md-2 col-sm-12">
                                                            <div class="alertRed">
                                                                Peterson, James<br />
                                                                Orlando Area - Round Trip
                                                            </div>
                                                        </td>
                                                        <td class="col-md-2 col-sm-12">
                                                            <div class="alertRed">
                                                                9.46 AM, American Airlines/2075
                                                            </div>
                                                        </td>
                                                        <td class="col-md-3 col-sm-12">
                                                            <div class="alertRed">
                                                                6, Luxury Van, From: Shades of Green To: Orlando Airport
                                                            </div>
                                                        </td>
                                                        <td class="col-md-2 col-sm-12">
                                                            <div class="alertRed">
                                                                CS: Yes, BS: Yes
                                                            </div>
                                                        </td>
                                                        <td class="col-md-2 col-sm-12">
                                                            <div class="alertRed">
                                                                Return
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr class="col-md-12 text-center">
                                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                            <div>
                                                                <b>Arrived:</b>07/08/2021 10:56 AM
                                                            </div>
                                                        </td>
                                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                            <div>
                                                                We have 3 children with us. One is 2 year old, the other
                                                                are 5 and 6. Do they all need car seats.<br />
                                                                <b>Cellphone:</b>9728343414
                                                            </div>
                                                        </td>
                                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                            <div>
                                                                Credit Card <span
                                                                    class="alertGreen"><b>Approved</b></span>
                                                            </div>
                                                        </td>


                                                    </tr>
                                                    <tr class="col-md-12">
                                                        <td class="col-md-1 col-sm-12">
                                                            <div class="alertBlue">
                                                                Details<br />50788
                                                            </div>
                                                        </td>
                                                        <td class="col-md-2 col-sm-12">
                                                            <div class="alertBlue">
                                                                Peterson, James<br />
                                                                Orlando Area - Round Trip
                                                            </div>
                                                        </td>
                                                        <td class="col-md-2 col-sm-12">
                                                            <div class="alertBlue">
                                                                9.46 AM, American Airlines/2075
                                                            </div>
                                                        </td>
                                                        <td class="col-md-3 col-sm-12">
                                                            <div class="alertBlue">
                                                                6, Luxury Van, From: Shades of Green To: Orlando Airport
                                                            </div>
                                                        </td>
                                                        <td class="col-md-2 col-sm-12">
                                                            <div class="alertBlue">
                                                                CS: Yes, BS: Yes
                                                            </div>
                                                        </td>
                                                        <td class="col-md-2 col-sm-12">
                                                            <div class="alertBlue">
                                                                Return
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr class="col-md-12 text-center">
                                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                            <div>
                                                                <b>Arrived:</b>07/08/2021 10:56 AM
                                                            </div>
                                                        </td>
                                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                            <div>
                                                                We have 3 children with us. One is 2 year old, the other
                                                                are 5 and 6. Do they all need car seats.<br />
                                                                <b>Cellphone:</b>9728343414
                                                            </div>
                                                        </td>
                                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                            <div>
                                                                Credit Card <span
                                                                    class="alertGreen"><b>Approved</b></span>
                                                            </div>
                                                        </td>


                                                    </tr>

                                                    <tr class="col-md-12">
                                                        <td class="col-md-1 col-sm-12">
                                                            <div class="alertBlue">
                                                                Details<br />50788
                                                            </div>
                                                        </td>
                                                        <td class="col-md-2 col-sm-12">
                                                            <div class="alertBlue">
                                                                Peterson, James<br />
                                                                Orlando Area - Round Trip
                                                            </div>
                                                        </td>
                                                        <td class="col-md-2 col-sm-12">
                                                            <div class="alertBlue">
                                                                9.46 AM, American Airlines/2075
                                                            </div>
                                                        </td>
                                                        <td class="col-md-3 col-sm-12">
                                                            <div class="alertBlue">
                                                                6, Luxury Van, From: Shades of Green To: Orlando Airport
                                                            </div>
                                                        </td>
                                                        <td class="col-md-2 col-sm-12">
                                                            <div class="alertBlue">
                                                                CS: Yes, BS: Yes
                                                            </div>
                                                        </td>
                                                        <td class="col-md-2 col-sm-12">
                                                            <div class="alertBlue">
                                                                Return
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr class="col-md-12 text-center">
                                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                            <div>
                                                                <b>Arrived:</b>07/08/2021 10:56 AM
                                                            </div>
                                                        </td>
                                                        <td class="col-md-4 col-sm-12 text-center" colspan="2">
                                                            <div>
                                                                We have 3 children with us. One is 2 year old, the other
                                                                are 5 and 6. Do they all need car seats.<br />
                                                                <b>Cellphone:</b>9728343414
                                                            </div>
                                                        </td>
                                                        <td class="col-md-4 col-sm-12" colspan="2">
                                                            <div class="text-left">
                                                                Credit Card <span
                                                                    class="alertGreen"><br /><b>Approved</b></span>
                                                            </div>
                                                            <div class="text-right">
                                                                Run Credit Card
                                                            </div>
                                                        </td>


                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!----------------w-100-->
                                </form>

                            </div>
                        </div>
                        <!---------------------end of card-->
                    </div>
                </div>
            </div>

        </div>

        <!-- Footer START -->

@endsection