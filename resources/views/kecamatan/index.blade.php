@extends('layout')

@section('title')
    List Kecamatan
@endsection

@section('content-header')

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Kecamatan</h3>
                    <div class="box-tools pull-right">
                        <div class="has-feedback">
                            <input type="text" class="form-control input-sm" placeholder="Search Keyword">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-3">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" placeholder="Search keyword">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-flat">Search</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mailbox-controls">
                                <!-- /.btn-group -->
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                                <a href="kecamatan/create" class="btn btn-default btn-sm"><i class="fa fa-plus-square"></i></a>
                                <div class="pull-right">
                                    1-50/200
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                                    </div>
                                    <!-- /.btn-group -->
                                </div>
                                <!-- /.pull-right -->
                            </div>
                            <div class="table-responsive mailbox-messages">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Kecamatan</th>
                                        <th>Camat</th>
                                        <th>Wakil Camat</th>
                                        <th style="width: 70px">Action</th>
                                    </tr>
                                    <tr>
                                        <td>1.</td>
                                        <td>Bekasi Utara</td>
                                        <td>Suci</td>
                                        <td>Putri</td>
                                        <td><a href="#" class="btn btn-primary">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Bekasi Utara</td>
                                        <td>Suci</td>
                                        <td>Putri</td>
                                        <td><a href="#" class="btn btn-primary">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Bekasi Utara</td>
                                        <td>Suci</td>
                                        <td>Putri</td>
                                        <td><a href="#" class="btn btn-primary">Details</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
