@extends('layouts.admin')

@section('page_title')

Registration

@endsection

@section('content')

<!--Logbook-->
    <h1>Logbook</h1>

     <div class="box box-primary with-border">
       <!-- form start -->
       <form role="form">
         <div class="box-body">

           		<table class="form">
           			<tr>
           				<th><label for="input-one"><strong>Received Date</strong></label></th>
           				<td><input class="date" name="DeliDate" type="date" size="30" /></td>
           			</tr>

           			<tr>
           				<th><label for="input-two"><strong>Delivered By</strong></label></th>
           				<td><input class="name" name="DeliName" type="text" size="30" /></td>
           			</tr>


           			<tr>
           				<th class="message-up"><label for="message"><strong>Received Documents</strong></label></th>
           				<td>
           				<textarea  name="DeliDocu" cols="30" rows="5"></textarea>
           				</td>
           			</tr>

           			<tr>
                   <th><label for="input-two"><strong>Received By</strong></label></th>
           				<td><input class="name" name="DeliReceivedBy" type="text" size="30" /></td>
           			</tr>

           		</table>
           	</form>
         </div>
         <!-- /.box-body -->

         <div class="box-footer">
           <button type="submit" class="btn btn-primary">Submit</button>
         </div>
       </form>
     </div>
     <!-- /.box -->

  		@include('includes.form_error')
@stop
