@extends('admin.layout')

@section('content')

<div class="row">
    {!! Form::open(['route' =>'page-create','enctype'=>'multipart/form-data']) !!}
        @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach   
        </div>
        @endif
    <div class="x_panel">
            <div class="x_title">
                <h2 class="sub_title">Page Content</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="form-group has-feedback" style="position: relative;">
                    <label for="name" class="hws_form_label">Title :</label>
                    {!! Form::text('title','our_company',['class'=>'form-control','required'=>'required','readonly'=>'readonly']) !!}
                    <span class="hws_error text-right text-danger">
                        {{ $errors->first('title') }}
                    </span>
                </div>
                <div class="form-group has-feedback" style="position: relative;">
                    <label for="image" class="hws_form_label">Banner Image :</label>
                    {!! Form::hidden('image[]','banner_image') !!}
                    {!! Form::file('banner_image',['class'=>'form-control','id'=>'file']) !!}
                </div>
                @foreach($page as $value)
                    @if($value->section_title=='banner_image')
                        <img src="{{ asset('/uploads') }}/{{$value->data}}" style="height: 200px;width: 200px;">
                    @endif
                @endforeach
                <div class="form-group has-feedback" style="position: relative;">
                    <label class="hws_form_label">Second section :</label><br>
                    <label class="hws_form_label">Title :</label>
                    {!! Form::hidden('txt_name[]','second_title') !!}
                    @if($total_row)
                        @foreach($page as $value)
                            @if($value->section_title=='second_title')
                                {!! Form::text('second_title',$value->data,['class'=>'form-control']) !!}
                            @endif
                        @endforeach
                    @else
                        {!! Form::text('second_title','',['class'=>'form-control']) !!}
                    @endif
                </div>
                <div class="form-group has-feedback" style="position: relative;">
                    <label class="hws_form_label">Third section :</label><br>
                    <label class="hws_form_label">Title :</label>
                    {!! Form::hidden('txt_name[]','third_title') !!}
                    @if($total_row)
                    @foreach($page as $value)
                        @if($value->section_title=='third_title')
                            {!! Form::text('third_title',$value->data,['class'=>'form-control']) !!}
                        @endif
                    @endforeach
                    @else
                        {!! Form::text('third_title','',['class'=>'form-control']) !!}
                    @endif
                </div>
                <div class="form-group has-feedback" style="position: relative;">
                    <label class="hws_form_label">Forth section :</label><br>
                    <label class="hws_form_label">Title :</label>
                    {!! Form::hidden('txt_name[]','forth_title') !!}
                    @if($total_row)
                    @foreach($page as $value)
                        @if($value->section_title=='forth_title')
                            {!! Form::text('forth_title',$value->data,['class'=>'form-control']) !!}
                        @endif
                    @endforeach
                    @else
                        {!! Form::text('forth_title','',['class'=>'form-control']) !!}
                    @endif
                </div>

                {{Form::submit('Save', ['class'=>'btn btn-primary'])}}
            </div>
    </div>
    	{!! Form::close() !!}
</div>

@endsection

@push('footer-script')

@endpush