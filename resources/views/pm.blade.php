@extends('layouts.admin')

@section('content')

<form class="" action="index.html" method="post">
	<!-- Basic Examples -->
						<div class="row clearfix">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="card">
												<div class="header">
														<h2>
																SELECT CLIENT
														</h2>
												</div>
												<div class="body">
														<div class="table-responsive">
																<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
																		<thead>
																				<tr>
																						<th>ID</th>
																						<th>Client Name</th>
																						<th>Date Requested</th>
																						<th>Action</th>
																				</tr>
																		</thead>
																		<tbody>
																				<tr>
																						<td>CLIENT0001</td>
																						<td>SM Supermalls</td>
																						<td>12/12/12</td>
																						<td><input name="group1" type="radio" id="radio_49" class="radio-col-green" /><label for="radio_49">SELECT</label></td>
																				</tr>
																				<tr>
																						<td>CLIENT0002</td>
																						<td>China Bank</td>
																						<td>12/12/12</td>
																						<td><input name="group1" type="radio" id="radio_41" class="radio-col-green" /><label for="radio_41">SELECT</label></td>
																				</tr>
																				<tr>
																						<td>CLIENT0003</td>
																						<td>Microsoft</td>
																						<td>12/12/12</td>
																						<td><input name="group1" type="radio" id="radio_42" class="radio-col-green" /><label for="radio_42">SELECT</label></td>
																				</tr>
																				<tr>
																						<td>CLIENT0004</td>
																						<td>Trinoma</td>
																						<td>12/12/12</td>
																						<td><input name="group1" type="radio" id="radio_43" class="radio-col-green" /><label for="radio_43">SELECT</label></td>
																				</tr>
																				<tr>
																						<td>CLIENT0005</td>
																						<td>AYALA Malls</td>
																						<td>12/12/12</td>
																						<td><input name="group1" type="radio" id="radio_44" class="radio-col-green" /><label for="radio_44">SELECT</label></td>
																				</tr>
																				<tr>
																						<td>CLIENT0005</td>
																						<td>AYALA Malls</td>
																						<td>12/12/12</td>
																						<td><input name="group1" type="radio" id="radio_44" class="radio-col-green" /><label for="radio_44">SELECT</label></td>
																				</tr>
																				<tr>
																						<td>CLIENT0005</td>
																						<td>AYALA Malls</td>
																						<td>12/12/12</td>
																						<td><input name="group1" type="radio" id="radio_44" class="radio-col-green" /><label for="radio_44">SELECT</label></td>
																				</tr>
																				<tr>
																						<td>CLIENT0005</td>
																						<td>AYALA Malls</td>
																						<td>12/12/12</td>
																						<td><input name="group1" type="radio" id="radio_44" class="radio-col-green" /><label for="radio_44">SELECT</label></td>
																				</tr>
																		</tbody>
																</table>
														</div>
												</div>
												<div class="header">
														<h2>
																SELECT ACCOUNTING TEAM
														</h2>
												</div>
												<div class="body">
														<div class="table-responsive">
																<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
																		<thead>
																				<tr>
																						<th>Team ID</th>
																						<th>Leader</th>
																						<th>Status</th>
																						<th>Action</th>
																				</tr>
																		</thead>
																		<tbody>
																				<tr>
																						<td>Team0001</td>
																						<td>Jonina Fontanilla</td>
																						<td><h5><span class="label label-primary">Available</span></h5></td>
																						<td><input name="group2" type="radio" id="radio_1" class="radio-col-green" /><label for="radio_1">SELECT</label></td>
																				</tr>
																				<tr>
																						<td>Team0002</td>
																						<td>Shaira Dela Cruz</td>
																						<td><h5><span class="label label-danger">Working</span></h5></td>
																						<td><input name="group2" type="radio" id="radio_2" class="radio-col-green" /><label for="radio_2">SELECT</label></td>
																				</tr>
																				<tr>
																						<td>Team0003</td>
																						<td>Mark Zuckerberg</td>
																						<td><h5><span class="label label-danger">Working</span></h5></td>
																						<td><input name="group2" type="radio" id="radio_3" class="radio-col-green" /><label for="radio_3">SELECT</label></td>
																				</tr>
																				<tr>
																						<td>Team0004</td>
																						<td>Bill Gates</td>
																						<td><h5><span class="label label-primary">Available</span></h5></td>
																						<td><input name="group2" type="radio" id="radio_4" class="radio-col-green" /><label for="radio_4">SELECT</label></td>
																				</tr>
																				<tr>
																						<td>Team0005</td>
																						<td>Henry Sy</td>
																						<td><h5><span class="label label-primary">Available</span></h5></td>
																						<td><input name="group2" type="radio" id="radio_5" class="radio-col-green" /><label for="radio_5">SELECT</label></td>
																				</tr>

																		</tbody>
																</table>
														</div>
												</div>
												<div class="header">
													<h2>
															SELECT SCHEDULE
													</h2>
												</div>
												<div class="body">
													<div class="row">
												    <div class="col-sm-4" ></div>
												    <div class="col-sm-4" >
															<div class="form-group">
	                                        <div class="form-line">
	                                            <input type="text" class="datepicker form-control" placeholder="Please choose a date...">
	                                        </div>
	                            </div>
												    </div>
												    <div class="col-sm-4" ></div>
												  </div>
													<div class="row">
												    <div class="col-sm-4" ></div>
												    <div class="col-sm-4" ><input type="submit" name="submit" value="SUBMIT" class="btn btn-success col-sm-12 m-t-15 waves-effect"></div>
												    <div class="col-sm-4" ></div>
												  </div>
												</div>
										</div>
								</div>
						</div>
						<!-- #END# Basic Examples -->
</form>



@stop

@section('scripts')
	 <script src="{{asset('plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
	 <script src="{{asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
	 <script src="{{asset('plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
	 <script src="{{asset('plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
	 <script src="{{asset('plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
	 <script src="{{asset('plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
	 <script src="{{asset('plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
	 <script src="{{asset('plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
	 <script src="{{asset('plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>
	 <script src="{{asset('js/pages/forms/basic-form-elements.js')}}"></script>

    <!-- Autosize Plugin Js -->
    <script src="{{asset('plugins/autosize/autosize.js')}}"></script>

    <!-- Moment Plugin Js -->
    <script src="{{asset('plugins/momentjs/moment.js')}}"></script>
	 <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{asset('plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
@stop
