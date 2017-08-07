@extends('layout')

@section('title')
    Create Employee
@endsection

@section('content-header')
    <!-- bootstrap datepicker -->
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css">--}}
@endsection

@section('content')
    <div class="row col-md-12">
        {!! Form::open(array('url' => array('employees/store'), 'class' => 'form-horizontal')) !!}
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="panel-title">
                    <div class="caption">
                        <i class="fa fa-calendar"></i>  Data Personal
                    </div>
                </h3>
            </div>
            <div class="box-body">
                <div class="col-md-6">
                    <div class="box box-primary box-solid">
                        <div class="box-header with-border">
                            <h3 class="panel-title">
                                <div class="caption">
                                    <i class="fa fa-calendar"></i>  Personal Details
                                </div>
                            </h3>
                        </div>
                        <div class="box-body">
                            <div class="col-md-12">
                                <div class="form-group {{$errors->has('name')?'has-error':''}}">
                                    {!! Form::label('name','Nama Lengkap * :', ['class' => 'col-sm-5 control-label']) !!}
                                    <div class="col-sm-7">
                                        {!! Form::text('name',null, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap']) !!}
                                        {!! $errors->first('name','<span class="help-block">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="form-group {{$errors->has('tempat_lahir')?'has-error':''}}">
                                    {!! Form::label('tempat_lahir','Tempat Lahir :', ['class' => 'col-sm-5 control-label']) !!}
                                    <div class="col-sm-7">
                                        {!! Form::text('tempat_lahir',null, ['class' => 'form-control', 'placeholder' => 'Tempat Lahir']) !!}
                                        {!! $errors->first('tempat_lahir','<span class="help-block">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('tanggal_lahir','Tanggal Lahir :', ['class' => 'col-sm-5 control-label']) !!}

                                    <div class="col-sm-7 ">
                                        <div class="input-group date" id="datePicker">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" name="tanggal_lahir">
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    {!! Form::label('gender_id','Jenis Kelamin :',['class' => 'col-sm-5 control-label']) !!}
                                    <div class="col-sm-7">
                                        {!! Form::select('gender_id', $genders, null, ['class' => 'form-control', 'placeholder' => 'Jenis Kelamin']) !!}
                                    </div>
                                </div>
                                <div class="form-group {{$errors->has('no_ktp')?'has-error':''}}">
                                    {!! Form::label('no_ktp','No KTP :', ['class' => 'col-sm-5 control-label']) !!}
                                    <div class="col-sm-7">
                                        {!! Form::text('no_ktp',null, ['class' => 'form-control', 'placeholder' => 'Nomor KTP']) !!}
                                        {!! $errors->first('no_ktp','<span class="help-block">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('religion_id','Agama :',['class' => 'col-sm-5 control-label']) !!}
                                    <div class="col-sm-7">
                                        {!! Form::select('religion_id', $religions, null, ['class' => 'form-control', 'placeholder' => 'Agama']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-success box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">
                                <div class="caption">
                                    <i class="fa fa-calendar"></i>  Company Details
                                </div>
                            </h3>
                        </div>
                        <div class="box-body">
                            <div class="col-md-12">
                                <div class="form-group {{$errors->has('noreg')?'has-error':''}}">
                                    {!! Form::label('noreg','Noreg * :', ['class' => 'col-sm-5 control-label']) !!}
                                    <div class="col-sm-7">
                                        {!! Form::text('noreg',null, ['class' => 'form-control', 'placeholder' => 'Noreg']) !!}
                                        {!! $errors->first('noreg','<span class="help-block">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('department_id','Department :',['class' => 'col-sm-5 control-label']) !!}
                                    <div class="col-sm-7">
                                        {!! Form::select('company_id', $departments, null, ['class' => 'form-control', 'placeholder' => 'Department']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('date_joining','Tanggal Masuk :', ['class' => 'col-sm-5 control-label']) !!}

                                    <div class="col-sm-7 ">
                                        <div class="input-group date" id="datePicker">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" name="date_joining">
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-warning box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">
                                <div class="caption">
                                    <i class="fa fa-calendar"></i>  Bank Details
                                </div>
                            </h3>
                        </div>
                        <div class="box-body">
                            <div class="col-md-12">
                                <div class="form-group {{$errors->has('name')?'has-error':''}}">
                                    {!! Form::label('name','Name * :', ['class' => 'col-sm-3 control-label']) !!}
                                    <div class="col-sm-9">
                                        {!! Form::text('name',null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                                        {!! $errors->first('name','<span class="help-block">:message</span>') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <div>
                    {!! Form::submit('Save',['class' => 'btn btn-primary form-control']) !!}
                </div>
            </div>
        </div>


        {!! Form::close() !!}
    </div>
@endsection

@push('css-head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" />
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datePicker')
                .datepicker({
                    format: 'mm/dd/yyyy'
                })
                .on('changeDate', function(e) {
                });
        });
    </script>
@endpush
