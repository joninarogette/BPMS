@extends('layouts.admin')

@section('page_title')

Registration

@endsection

@section('content')

<!--Logbook-->
<form class="" action="index.html" method="post">
	<!-- Basic Examples -->
						<div class="row clearfix">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="card">
												<div class="header">
														<h2>
																<strong>LOGBOOK</strong>
														</h2>
												</div>
     <div class="body">
         <div class="table-responsive">
             <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                 <thead>
                     <tr>
                         <th>Received Date</th>
                         <th>Delivered By</th>
                         <th>Received Documents</th>
                         <th>Received By</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td>18/07/2017</td>
                         <td>FedEx</td>
                         <td>Receipts, Expense</td>
                         <td>AMY</td>
                     </tr>
                     <tr>
                         <td>18/07/2017</td>
                         <td>FedEx</td>
                         <td>Receipts, Expense</td>
                         <td>AMY</td>
                     </tr>
                     <tr>
                        <td>18/07/2017</td>
                        <td>FedEx</td>
                        <td>Receipts, Expense</td>
                        <td>AMY</td>
                     </tr>
                 </tbody>
             </table>
         </div>
     </div>
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
