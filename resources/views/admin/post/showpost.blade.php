@extends('admin.layout')

@section('content')

<h1>Student Details</h1>
<div class="navbar-right">
    <a href="{{route('post-add')}}" class="btn btn-primary">Add New</a>
</div>

<table class="table table-bordered">
    <thead>
        <th>Page</th>
        <th>Section</th>
        <th>Post</th>
        <th>Image</th>
        <th>Action</th>

        @foreach($posts as $post)
        <tr>
            <td> {{$post->page_title}} </td>
            <td> {{$post->section_title}} </td>
            <td> {{$post->title}} </td>
            <td> <img src="/uploads/{{$post->image}}" style="height: 50px; width: 50px;"> </td>
            <td>
                <a href="{{route('post-edit}}/{{$post->id}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                <a href="" class="btn btn-primary btn-xs"><i class="fa fa-trash"></i></a>

            </td>
        </tr>
        @endforeach

    </thead>
    <tbody>
        <!-- links method creates the pagination automatically -->
        <h2> {{$posts->links()}} </h2>
    </tbody>
</table>

@endsection

@push('footer-Script')

@endpush