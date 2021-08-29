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

                    <div class="page-header no-gutters" style="margin-top:3rem;">
                        <div class="row mb-30 text-right">



                            <div class="col-lg-7 col-md-7"></div>

                            <div class="col-lg-3 text-right">
                                <!----<button class="btn btn-primary" data-toggle="modal" data-target="#create-new-project">
                                    <i class="anticon anticon-plus"></i>
                                    <span class="m-l-5">Add a New Log</span>
                                </button>--->
                            </div>
                            <div class="col-lg-2 text-right">
                                <!----<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
                                    <i class="anticon anticon-book m-r-5"></i>
                                    <span>Get Report</span>
                                </button>--->
                                <!------------------------------Start of Modal-->
                                <!-- Large modal -->


                              
                                </div>

                            </div>
                            <!--------end row--------->


                        </div>
                        <div class="container-fluid" style="margin-top:3rem;">

                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mx-auto" style="width: 40%;">
                                            <tbody>
                                                <tr>
                                                    <th>&nbsp;</th>
                                                    <th bgcolor="#999999">2021</th>
                                                    <th bgcolor="#999999">2020</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        June
                                                    </td>
                                                    <td></td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        July
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        August
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr bgcolor="#cccccc">
                                                    <td>Total Transfers</td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr bgcolor="#cccccc">
                                                    <td>YTD Transfers</td>
                                                    <td></td>
                                                    <td>36</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!----------------end of table responsive-->
                                        <p></p>
                                        <p></p>
                                      <h1 class="mx-auto text-center">Annual Transfer Summary</h1>  
                                       <p></p>
                                       <p></p>
                                       <p></p>
                                    <div class="w-100">
                                        <div class="table-responsive">
                                        <table class="table mt-5">
                                            <tbody>
                                                <tr>
                                                    <th>Year</th>
                                                    <th>Jan</th>
                                                    <th>Feb</th>
                                                    <th>Mar</th>
                                                    <th>Apr</th>
                                                    <th>May</th>
                                                    <th>Jun</th>
                                                    <th>Jul</th>
                                                    <th>Aug</th>
                                                    <th>Sep</th>
                                                    <th>Oct</th>
                                                    <th>Nov</th>
                                                    <th>Dec</th>
                                                    <th>Runs</th>
                                                    <th>Total</th>
                                                    <th>Cash</th>
                                                    <th>CC</th>
                                                </tr>
                                                <tr>
                                                    <td>2009</td>
                                                    <td>2</td>
                                                    <td>4</td>
                                                    <td>18</td>
                                                    <td>96</td>
                                                    <td>119</td>
                                                    <td>134</td>
                                                    <td>128</td>
                                                    <td>142</td>
                                                    <td>65</td>
                                                    <td>164</td>
                                                    <td>130</td>
                                                    <td>124</td>
                                                    <td>1126</td>
                                                    <td>$119,936.00</td>
                                                    <td>$20,768.00</td>
                                                    <td>$99,168.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2010</td>
                                                    <td>89</td>
                                                    <td>109</td>
                                                    <td>173</td>
                                                    <td>181</td>
                                                    <td>143</td>
                                                    <td>146</td>
                                                    <td>134</td>
                                                    <td>127</td>
                                                    <td>125</td>
                                                    <td>164</td>
                                                    <td>142</td>
                                                    <td>151</td>
                                                    <td>1684</td>
                                                    <td>$189,739.00</td>
                                                    <td>$20,212.00</td>
                                                    <td>$169,527.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2011</td>
                                                    <td>141</td>
                                                    <td>175</td>
                                                    <td>174</td>
                                                    <td>233</td>
                                                    <td>198</td>
                                                    <td>163</td>
                                                    <td>165</td>
                                                    <td>121</td>
                                                    <td>125</td>
                                                    <td>211</td>
                                                    <td>153</td>
                                                    <td>180</td>
                                                    <td>2039</td>
                                                    <td>$234,923.00</td>
                                                    <td>$22,965.00</td>
                                                    <td>$211,958.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2012</td>
                                                    <td>186</td>
                                                    <td>184</td>
                                                    <td>205</td>
                                                    <td>222</td>
                                                    <td>188</td>
                                                    <td>206</td>
                                                    <td>189</td>
                                                    <td>125</td>
                                                    <td>144</td>
                                                    <td>171</td>
                                                    <td>172</td>
                                                    <td>186</td>
                                                    <td>2178</td>
                                                    <td>$261,019.00</td>
                                                    <td>$25,473.00</td>
                                                    <td>$235,546.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2013</td>
                                                    <td>194</td>
                                                    <td>160</td>
                                                    <td>236</td>
                                                    <td>189</td>
                                                    <td>186</td>
                                                    <td>206</td>
                                                    <td>150</td>
                                                    <td>169</td>
                                                    <td>157</td>
                                                    <td>232</td>
                                                    <td>213</td>
                                                    <td>201</td>
                                                    <td>2293</td>
                                                    <td>$277,157.00</td>
                                                    <td>$22,849.00</td>
                                                    <td>$254,308.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2014</td>
                                                    <td>195</td>
                                                    <td>231</td>
                                                    <td>258</td>
                                                    <td>261</td>
                                                    <td>239</td>
                                                    <td>231</td>
                                                    <td>184</td>
                                                    <td>181</td>
                                                    <td>180</td>
                                                    <td>271</td>
                                                    <td>233</td>
                                                    <td>215</td>
                                                    <td>2679</td>
                                                    <td>$319,267.00</td>
                                                    <td>$26,925.00</td>
                                                    <td>$292,342.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2015</td>
                                                    <td>233</td>
                                                    <td>228</td>
                                                    <td>225</td>
                                                    <td>231</td>
                                                    <td>220</td>
                                                    <td>213</td>
                                                    <td>189</td>
                                                    <td>195</td>
                                                    <td>164</td>
                                                    <td>259</td>
                                                    <td>235</td>
                                                    <td>178</td>
                                                    <td>2570</td>
                                                    <td>$292,737.00</td>
                                                    <td>$25,055.00</td>
                                                    <td>$267,682.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2016</td>
                                                    <td>203</td>
                                                    <td>227</td>
                                                    <td>227</td>
                                                    <td>215</td>
                                                    <td>119</td>
                                                    <td>259</td>
                                                    <td>209</td>
                                                    <td>225</td>
                                                    <td>204</td>
                                                    <td>274</td>
                                                    <td>297</td>
                                                    <td>206</td>
                                                    <td>2665</td>
                                                    <td>$309,133.00</td>
                                                    <td>$23,910.00</td>
                                                    <td>$285,223.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2017</td>
                                                    <td>241</td>
                                                    <td>262</td>
                                                    <td>224</td>
                                                    <td>265</td>
                                                    <td>238</td>
                                                    <td>197</td>
                                                    <td>181</td>
                                                    <td>206</td>
                                                    <td>155</td>
                                                    <td>259</td>
                                                    <td>226</td>
                                                    <td>168</td>
                                                    <td>2622</td>
                                                    <td>$311,600.00</td>
                                                    <td>$24,644.00</td>
                                                    <td>$286,956.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2018</td>
                                                    <td>231</td>
                                                    <td>167</td>
                                                    <td>218</td>
                                                    <td>222</td>
                                                    <td>170</td>
                                                    <td>163</td>
                                                    <td>150</td>
                                                    <td>147</td>
                                                    <td>158</td>
                                                    <td>211</td>
                                                    <td>222</td>
                                                    <td>171</td>
                                                    <td>2230</td>
                                                    <td>$271,345.00</td>
                                                    <td>$20,659.00</td>
                                                    <td>$250,686.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2019</td>
                                                    <td>177</td>
                                                    <td>163</td>
                                                    <td>194</td>
                                                    <td>163</td>
                                                    <td>182</td>
                                                    <td>182</td>
                                                    <td>162</td>
                                                    <td>141</td>
                                                    <td>155</td>
                                                    <td>124</td>
                                                    <td>63</td>
                                                    <td>36</td>
                                                    <td>1742</td>
                                                    <td>$222,211.00</td>
                                                    <td>$22,216.00</td>
                                                    <td>$199,995.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2020</td>
                                                    <td>16</td>
                                                    <td>9</td>
                                                    <td>6</td>
                                                    <td>3</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>36</td>
                                                    <td>$5,114.00</td>
                                                    <td>$784.00</td>
                                                    <td>$4,330.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2027</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>$65.00</td>
                                                    <td>$0.00</td>
                                                    <td>$65.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="create-new-project">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add a New Log</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>

                                            <div class="alert alert-success mt-4">

                                                <form class="form-inline">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1" class="d-table">Expense Type</label>

                                                        <select class="form-control m-1" name="type">
                                                            <option value="" selected="selected">Please Select</option>
                                                            <option value="1">Utilities</option>
                                                            <option value="2">Rent</option>
                                                            <option value="3">Auto Repair</option>
                                                            <option value="4">Office Equipment Supplies</option>
                                                            <option value="5">Licenses &amp; Taxes</option>
                                                            <option value="6">Gas</option>
                                                            <option value="7">Salary</option>
                                                            <option value="8">Miscellaneous</option>
                                                        </select>

                                                    </div><!-------------------------------dflex--------------->

                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1" class="d-table">Date of Expense</label>
                                                        <div class="d-flex">
                                                            <input class="form-control col-md-6" type="date" />
                                                            <small class="alertText">select date</small>
                                                        </div><!-------------------------------dflex--------------->
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1" class="d-table">Amount of Expense</label>
                                                        <input class="form-control col-md-6" type="text" />

                                                    </div><!-------------------------------dflex--------------->
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1" class="d-table">Driver Name</label>
                                                        <select class="form-control m-1" name="drivers_id">
                                                            <option value="">None</option>
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
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1" class="d-table">Comment</label>
                                                        <textarea rows="4" cols="50">
                                                </textarea>

                                                    </div><!-------------------------------dflex--------------->
                                                    <a href="invoice.html" target="_blank" type="submit" class="btn btn-primary mb-2">Add New Log</a>

                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---------end of modal-->
                
                <!-- Content Wrapper END -->

                @endsection