@extends('admin.layout')
@section('content')

<h1>Contacts Detail</h1>
<table class="table table-bordered">
	<thead>
		<th>Name</th>
		<th>Email</th>
		<th>Message</th>
        <th>Create Date</th>
	</thead>
	<tbody>
		
			@foreach($contacts as $contact)
			<tr>
			<td>{{$contact->name}}</td>
			<td>{{$contact->email}}</td>
			<td>{{$contact->message}}</td>
            <td>{{$contact->created_at}}</td>
			</tr>
			@endforeach
			
	</tbody>
</table>
<h2>{{ $contacts->links() }}</h2>
@endsection