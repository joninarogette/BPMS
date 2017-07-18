@extends('layouts.admin')

@section('page_title')

Registration

@endsection

@section('content')

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

			<tr>
				<td class="submit-button-right" colspan="2"><input class="submit-text" type="submit" value="SUBMIT" /></td>
			</tr>
		</table>
	</form>

@stop
