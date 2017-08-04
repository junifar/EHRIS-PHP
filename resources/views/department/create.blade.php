@extends('layout')

@section('title')
    Create Department
@endsection

@section('content-header')

@endsection

@section('content')
    <div class="row col-md-12">
        {!! Form::open(array('url' => array('departments/store'), 'class' => 'form-horizontal')) !!}
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Create Department</h3>
            </div>
            <div class="panel-body">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('type','Type :',['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                        {!! Form::select('company_id', $companies, null, ['class' => 'form-control', 'placeholder' => 'Company']) !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group {{$errors->has('name')?'has-error':''}}">
                        {!! Form::label('name','Name :', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('name',null, ['class' => 'form-control', 'placeholder' => 'Department Name']) !!}
                            {!! $errors->first('name','<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div>
                    {!! Form::submit('Save',['class' => 'btn btn-primary form-control']) !!}
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection

@push('css-head')

@endpush

@push('scripts')

@endpush
