@extends('layout')

@section('title')
    List Religion
@endsection

@section('content-header')

@endsection

@section('content')
    <div class="row col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Religions</h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered" id="religions-table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Created At</th>
                    </tr>
                    </thead>
                </table>
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
        $(function() {
            $('#religions-table').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    {
                        text: 'Insert',
                        action: function ( e, dt, node, config ) {
                            window.location = "{!! route('religions.create'); !!}";
                        }
                    }
                ],
                processing: true,
                serverSide: true,
                ajax: '{!! route('religions.data'); !!}',
                columns: [
                    { data: 'ID', name: 'id' },
                    { data: 'NAME', name: 'name' },
                    { data: 'CREATED_AT', name: 'created_at' }
                ]
            });
        });
    </script>

    <script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
@endpush
