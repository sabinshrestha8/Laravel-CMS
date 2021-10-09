@extends('admin.layout')

@section('content')
<div class="row">
    {!! Form::open(['route' => 'page-create', 'enctype' => 'multipart/form-data']) !!}
    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <li> {{$error}} </li>
        @endforeach
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
                <label for="name" class="hws_form_label">Title :</label>
                {!! Form::text('title', 'home', ['class' => 'form-control', 'required'
                => 'required', 'readonly' => 'readonly']) !!}
                <span class="hws_error text-right text-danger">
                    {{ $errors->first('title') }}
                </span>
            </div>
            <div class="form-group has-feedback" style="position: relative;">
                <label for="image" class="hws_form_label">Banner Image :</label>
                {!! Form::hidden('image[]', 'banner_image') !!}
                {!! Form::file('banner_image', ['class' => 'form-control', 'id' => 'file']) !!}
            </div>
            @foreach($page as $value)
                @if($value->section_title == 'banner_image')
                    <img src="{{asset('/uploads')}}/{{$value->data}}" style="height: 200px; width: 200px;">
                @endif
            @endforeach
            <div class="form-group has-feedback" style="position: relative;">
                <label class="hws_form_label">Second section :</label><br>
                <label class="hws_form_label">Title :</label>
                {!! Form::hidden('txt_name[]', 'second_title') !!}
                @foreach($page as $value)
                    @if($value->section_title == 'second_title')
                        {!! Form::text('second_title', $value->data, ['class' => 'form-control', 'required' => 'required']) !!}
                    @endif
                @endforeach
                <label class="hws_form_label">Image :</label>
                {!! Form::file('second_image', ['class' => 'form-control', 'id' => 'file']) !!}
                <label class="hws_form_label">Content :</label>
                {!! Form::hidden('txt_name[]', 'second_text') !!}
                @foreach($page as $value)
                    @if($value->section_title == 'second_text')
                        {!! Form::textarea('second_text', $value->data, ['class' => 'editor', 'id' => 'editor1']) !!}
                    @endif
                @endforeach
            </div>
            <div class="form-group has-feedback" style="position: relative;">
                <label class="hws_form_label">Third section :</label><br>
                <label class="hws_form_label">Icon :</label>
                {!! Form::hidden('txt_name[]', 'third_icon') !!}
                {!! Form::text('third_icon', '', ['class' => 'form-control']) !!}
                <label class="hws_form_label">Title :</label>
                {!! Form::hidden('txt_name[]', 'third_title') !!}
                @foreach($page as $value)
                    @if($value->section_title == 'third_title')
                        {!! Form::text('third_title', $value->data, ['class' => 'form-control']) !!}
                    @endif
                @endforeach
                <label class="hws_form_label">Content :</label>
                {!! Form::hidden('txt_name[]', 'third_text') !!}
                @foreach($page as $value)
                    @if($value->section_title == 'third_text')
                        {!! Form::textarea('third_text', $value->data, ['class' => 'editor', 'id' => 'editor2']) !!}
                    @endif
                @endforeach
            </div>
            <div class="form-group has-feedback" style="position: relative;">
                <label class="hws_form_label">Fourth section :</label><br>
                <label class="hws_form_label">Title :</label><br>
                {!! Form::hidden('txt_name[]', 'forth_icon') !!}
                @foreach($page as $value)
                    @if($value->section_title == 'forth_icon')
                        {!! Form::text('forth_icon', $value->data, ['class' => 'form-control']) !!}
                    @endif
                @endforeach
                <label class="hws_form_label">Image :</label>
                {!! Form::hidden('txt_name[]', 'forth_image') !!}
                {!! Form::text('forth_image', '', ['class' => 'form-control']) !!}
                <label class="hws_form_label">Image title :</label>
                {!! Form::hidden('txt_name[]', 'forth_text') !!}
                @foreach($page as $value)
                    @if($value->section_title == 'forth_text')
                        {!! Form::text('forth_text', $value->data, ['class' => 'form-control']) !!}
                    @endif
                @endforeach
            </div>
            {{Form::submit('save', ['class' => 'btn btn-primary'])}}
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection

@push('footer-script')

@endpush