@extends('admin.layout')

@section('content')

<h1>Student Details</h1>
@if (session()->has('message'))
<div class="alert alert-dismissible" style="color:red;">
    {{ session('message') }}
</div>
@endif

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
                <a href="{{route('post-edit')}}/{{$post->id}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                <a class="btn btn-primary btn-xs deletepost" image="{{$post->image}}" post-id="{{$post->id}}"><i class="fa fa-trash"></i></a>
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

@push('footer-script')
<script>
    $(document).ready(function(){
         $(document).on("click",".deletepost",function(){
            var id     = $(this).attr('post-id');
            var image = $(this).attr('image');
            if (confirm('Are you sure want to delete this Post with all data..?')) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                    },
                    url: `{{ route('post-delete') }}`,
                    data: {"id":id,"image":image},
                    type: "post",
                    success: function(data){
                        if(data==true){
                            alert("Post deleted successfully..!!");
                        }else{
                            alert(data);
                        }
                        window.location.reload();
                    }
                });
            }
        });
        
    });
</script>
@endpush