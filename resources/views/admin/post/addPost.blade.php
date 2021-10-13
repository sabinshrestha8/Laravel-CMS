@extends('admin.layout')

@section('content')

<div class="row">
	{!! Form::open(['route' =>['post-store', $post->id], 'enctype'=>'multipart/form-data']) !!}
        @if ($errors->any())
        <div class="alert alert-success">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach   
        </div>
        @endif

        @if(session()->has('message'))
            <div class="alert alert-dismissable" styele="color:red;">
                {{session('message')}}
            </div>
        @endif

        <div class="x_panel">
            <div class="x_title">
                <h2 class="sub_title">Page Content</h2>
                <ul class="nav navbar-right panel_toolbox"> 
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li><a class="close-link"><i class="fa fa-chevron-close"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="form-group has-feedback" style="position: relative;">
                    <label for="name" class="hws_form_label">Page :</label>
                    {{Form::select('page_title', ['home' => 'Home', 'company' => 'Company', 'services' => 'Services', 'contact'  => 'Contact'], '',['class' => 'form-control'])}}
                </div>
                <div class="form-group has-feedback" style="position: relative;">
                    <label for="name" class="hws_form_label">Section Title :</label>
                    {{Form::text('section_title', '', ['class' => 'form-control', 'placeholder'=>'Section Title'])}}
                </div>
                <div class="form-group has-feedback" style="position: relative;">
                    <label for="name" class="hws_form_label">Post Title :</label>
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                </div>
                <div class="form-group has-feedback" style="position: relative;">
                    <label for="name" class="hws_form_label">Post Title :</label>
                    {{Form::textarea('description', '', ['class' => 'form-control', 'id' => 'editor'])}}
                </div>
                 <div class="form-group has-feedback" style="position: relative;">
                    <label for="name" class="hws_form_label">Post Title :</label>
                    
                    {!! Form::file('image', ['class' => 'form-control', 'id' => 'file']) !!}
                </div>
                {{Form::submit('Save', ['class' => 'btn btn-primary'])}}
            </div>
        </div>

    {!! Form::close() !!}

</div> 

@endsection

@push('footer-script')
<script>
    $(function(){
        if($("#editor").length){
            CKEDITOR.replace('editor',{});
        }
        $('.editor').each(function(){
            CKEDITOR.replace($(this).attr('id') );
        });
    });
</script>
@endpush