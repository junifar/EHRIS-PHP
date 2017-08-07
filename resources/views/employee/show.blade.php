@extends('layout')

@section('title')
    Create Employee
@endsection

@section('content-header')

@endsection

@section('content')
    <div class="row col-md-12">
        {!! Form::open(array('url' => array('employees/update'), 'class' => 'form-horizontal')) !!}
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
                                        {!! Form::text('name',$data->NAME, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap']) !!}
                                        {!! $errors->first('name','<span class="help-block">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="form-group {{$errors->has('tempat_lahir')?'has-error':''}}">
                                    {!! Form::label('tempat_lahir','Tempat Lahir :', ['class' => 'col-sm-5 control-label']) !!}
                                    <div class="col-sm-7">
                                        {!! Form::text('tempat_lahir',$data->TEMPAT_LAHIR, ['class' => 'form-control', 'placeholder' => 'Tempat Lahir']) !!}
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
                                            {!! Form::text('tanggal_lahir',$data->TANGGAL_LAHIR, ['class' => 'form-control pull-right']) !!}
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    {!! Form::label('gender_id','Jenis Kelamin :',['class' => 'col-sm-5 control-label']) !!}
                                    <div class="col-sm-7">
                                        {!! Form::select('gender_id', $genders, $data->GENDER_ID, ['class' => 'form-control', 'placeholder' => 'Jenis Kelamin']) !!}
                                    </div>
                                </div>
                                <div class="form-group {{$errors->has('phone')?'has-error':''}}">
                                    {!! Form::label('phone','No Telepon :', ['class' => 'col-sm-5 control-label']) !!}
                                    <div class="col-sm-7">
                                        {!! Form::text('phone', $data->PHONE, ['class' => 'form-control', 'placeholder' => 'No Telepon']) !!}
                                        {!! $errors->first('phone','<span class="help-block">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="form-group {{$errors->has('handphone')?'has-error':''}}">
                                    {!! Form::label('handphone','Handphone :', ['class' => 'col-sm-5 control-label']) !!}
                                    <div class="col-sm-7">
                                        {!! Form::text('handphone', $data->HANDPHONE, ['class' => 'form-control', 'placeholder' => 'Handphone']) !!}
                                        {!! $errors->first('handphone','<span class="help-block">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="form-group {{$errors->has('no_ktp')?'has-error':''}}">
                                    {!! Form::label('no_ktp','No KTP :', ['class' => 'col-sm-5 control-label']) !!}
                                    <div class="col-sm-7">
                                        {!! Form::text('no_ktp', $data->NO_KTP, ['class' => 'form-control', 'placeholder' => 'Nomor KTP']) !!}
                                        {!! $errors->first('no_ktp','<span class="help-block">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('status','Status :',['class' => 'col-sm-5 control-label']) !!}
                                    <div class="col-sm-7">
                                        {!! Form::select('status', $statuses, $data->STATUS_ID, ['class' => 'form-control', 'placeholder' => 'Status']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('religion_id','Agama :',['class' => 'col-sm-5 control-label']) !!}
                                    <div class="col-sm-7">
                                        {!! Form::select('religion_id', $religions, $data->RELIGION_ID, ['class' => 'form-control', 'placeholder' => 'Agama']) !!}
                                    </div>
                                </div>
                                <div class="form-group {{$errors->has('address')?'has-error':''}}">
                                    {!! Form::label('address','Alamat :', ['class' => 'col-sm-5 control-label']) !!}
                                    <div class="col-sm-7">
                                        {!! Form::text('address', $data->ALAMAT, ['class' => 'form-control', 'placeholder' => 'Alamat']) !!}
                                        {!! $errors->first('address','<span class="help-block">:message</span>') !!}
                                    </div>
                                </div>
                                <h4><strong>Account Login</strong></h4>
                                <div class="form-group {{$errors->has('password')?'has-error':''}}">
                                    {!! Form::label('password','Password :', ['class' => 'col-sm-5 control-label']) !!}
                                    <div class="col-sm-7">
                                        {!! Form::password('password', $data->PASSWORD, ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                                        {!! $errors->first('password','<span class="help-block">:message</span>') !!}
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
                                        {!! Form::text('noreg', $data->NOREG, ['class' => 'form-control', 'placeholder' => 'Noreg']) !!}
                                        {!! $errors->first('noreg','<span class="help-block">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('department_id','Department :',['class' => 'col-sm-5 control-label']) !!}
                                    <div class="col-sm-7">
                                        {!! Form::select('department_id', $departments, $data->DEPARTMENT_ID, ['class' => 'form-control', 'placeholder' => 'Department']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('job_id','Jabatan :',['class' => 'col-sm-5 control-label']) !!}
                                    <div class="col-sm-7">
                                        {!! Form::select('job_id', $job_titles, $data->JOB_ID, ['class' => 'form-control', 'placeholder' => 'Jabatan']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('manager_id','Manajer :',['class' => 'col-sm-5 control-label']) !!}
                                    <div class="col-sm-7">
                                        {!! Form::select('manager_id', $employees, $data->MANAGER_ID, ['class' => 'form-control  select2', 'placeholder' => 'Manajer']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('date_joining','Tanggal Masuk :', ['class' => 'col-sm-5 control-label']) !!}

                                    <div class="col-sm-7 ">
                                        <div class="input-group date" id="datePicker1">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            {!! Form::text('date_joining', $data->DATE_JOINING, ['class' => 'form-control pull-right']) !!}
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    {!! Form::label('employee_status_id','Status Karyawan :',['class' => 'col-sm-5 control-label']) !!}
                                    <div class="col-sm-7">
                                        {!! Form::select('employee_status_id', $employee_statuses, $data->EMPLOYEE_STATUS_ID, ['class' => 'form-control', 'placeholder' => 'Status Karyawan']) !!}
                                    </div>
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
                                <div class="form-group {{$errors->has('account_name')?'has-error':''}}">
                                    {!! Form::label('account_name','Nama Pemilik Akun * :', ['class' => 'col-sm-5 control-label']) !!}
                                    <div class="col-sm-7">
                                        {!! Form::text('account_name', $data->ACCOUNT_NAME, ['class' => 'form-control', 'placeholder' => 'Nama Pemilik Akun']) !!}
                                        {!! $errors->first('account_name','<span class="help-block">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('bank_id','Bank :',['class' => 'col-sm-5 control-label']) !!}
                                    <div class="col-sm-7">
                                        {!! Form::select('bank_id', $banks, $data->DATE_JOINING, ['class' => 'form-control', 'placeholder' => 'Bank']) !!}
                                    </div>
                                </div>
                                <div class="form-group {{$errors->has('account_number')?'has-error':''}}">
                                    {!! Form::label('account_number','Nomor Akun * :', ['class' => 'col-sm-5 control-label']) !!}
                                    <div class="col-sm-7">
                                        {!! Form::text('account_number',null, ['class' => 'form-control', 'placeholder' => 'Nomor Akun']) !!}
                                        {!! $errors->first('account_number','<span class="help-block">:message</span>') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="box box-warning box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">
                                <div class="caption">
                                    <i class="fa fa-calendar"></i>  Lainnya
                                </div>
                            </h3>
                        </div>
                        <div class="box-body">
                            <div class="col-md-12">
                                <div class="form-group {{$errors->has('remark')?'has-error':''}}">
                                    {!! Form::label('remark','Keterangan * :', ['class' => 'control-label']) !!}
                                    {!! Form::textarea('remark', $data->REMARK, ['class' => 'form-control', 'placeholder' => 'Keterangan']) !!}
                                    {!! $errors->first('remark','<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <div>
                    {!! Form::submit('Update',['class' => 'btn btn-primary form-control']) !!}
                </div>
            </div>
        </div>


        {!! Form::close() !!}
    </div>
@endsection

@push('css-head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" />
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('.select2').select2()

            $('#datePicker')
                .datepicker({
                    format: 'yyyy/mm/dd'
                })
                .on('changeDate', function(e) {
                });
            $('#datePicker1')
                .datepicker({
                    format: 'yyyy/mm/dd'
                })
                .on('changeDate', function(e) {
                });
        });
    </script>
@endpush
