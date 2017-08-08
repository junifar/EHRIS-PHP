@extends('layout')

@section('title')
    List Attendance
@endsection

@section('content-header')

@endsection

@section('content')
    <div class="row col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Companies</h3>
            </div>
            <div class="panel-body">
{{--                {!! $dataTable->table() !!}--}}
                <div class="row">
                {!! Form::open(array('url' => array('adm/attendances'), 'method' => 'get')) !!}
                    <div class=" col-md-5 form-group">
                        {!! Form::label('company_id','Company :',['class' => 'col-sm-5 control-label']) !!}
                        <div class="col-sm-7">
                            {!! Form::select('company_id', $companies, null, ['class' => 'form-control', 'placeholder' => 'Company']) !!}
                        </div>
                    </div>
                    <div class="col-md-3 form-group">
                        <div id="datePicker" class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd" data-date-viewmode="years">
                            <input type="text" class="form-control" name="date" placeholder="select date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 form-group">
                    {!! Form::submit('Submit',['class' => 'btn btn-primary form-group']) !!}
                    </div>
                {!! Form::close() !!}
                </div>
                <div class="row">
                    <div class="panel panel-success">
                        <div class="panel-body">
                            <table class="table table-condensed table-bordered">
                                <thead>
                                <tr>
                                    <th>Noreg</th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                    <th>Detail</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>11075</td>
                                    <td>Junifar Hidayat</td>
                                    <td>
                                        <input name="attend" type="checkbox" checked data-toggle="toggle" data-on="Hadir" data-off="Alpha" data-onstyle="success"
                                               data-offstyle="danger">
                                    </td>
                                    <td>
                                        {!! Form::select('permit_type_id', $permit_types, null, ['class' => 'form-control', 'placeholder' => 'Keterangan Alpha']) !!}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css-head')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#datePicker')
                .datepicker({
                    format: 'yyyy-mm-dd'
                })
                .on('changeDate', function(e) {
                });
        });
    </script>
@endpush
