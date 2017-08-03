@extends('layout')

@section('title')
    Create Company
@endsection

@section('content-header')

@endsection

@section('content')
    <div class="row col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Create Company</h3>
            </div>
            <div class="panel-body">
                <div class="col-md-6">
                    {!! Form::open(array('url' => array('companies/store'))) !!}
                    <div class="form-group {{$errors->has('name')?'has-error':''}}">
                        {!! Form::label('name','Name :') !!}
                        {!! Form::text('name',null, ['class' => 'form-control', 'placeholder' => 'Company Name']) !!}
                        {!! $errors->first('name','<span class="help-block">:message</span>') !!}
                    </div>
                    <div>
                        <br/>
                        {!! Form::submit('Save',['class' => 'btn btn-primary form-control']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css-head')

@endpush

@push('scripts')

@endpush
