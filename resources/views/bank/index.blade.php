@extends('layout')

@section('title')
    List Bank
@endsection

@section('content-header')

@endsection

@section('content')
    <div class="row col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Banks</h3>
            </div>
            <div class="panel-body">
                {!! $dataTable->table() !!}
            </div>
        </div>
    </div>
@endsection

@push('css-head')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css">
@endpush

@push('scripts')
    <script>
        {{--$(function() {--}}
            {{--$('#banks-table').DataTable({--}}
                {{--dom: 'Bfrtip',--}}
                {{--buttons: [--}}
                    {{--{--}}
                        {{--text: 'Insert',--}}
                        {{--action: function ( e, dt, node, config ) {--}}
                            {{--window.location = "{!! route('banks.create'); !!}";--}}
                        {{--}--}}
                    {{--}--}}
                {{--],--}}
                {{--processing: true,--}}
                {{--serverSide: true,--}}
                {{--ajax: '{!! route('banks.data'); !!}',--}}
                {{--columns: [--}}
                    {{--{ data: 'ID', name: 'id' },--}}
                    {{--{ data: 'NAME', name: 'name' },--}}
                    {{--{ data: 'CREATED_AT', name: 'created_at' }--}}
                {{--]--}}
            {{--});--}}
        {{--});--}}
    </script>

    <script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
    <script src="/vendor/datatables/buttons.server-side.js"></script>
    {!! $dataTable->scripts() !!}
@endpush
