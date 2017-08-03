@extends('layout')

@section('title')
    List Company
@endsection

@section('content-header')

@endsection

@section('content')
    <div class="row col-md-12">
        <table class="table table-bordered" id="companies-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
            </thead>
        </table>
    </div>
@endsection

@push('css-head')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.jqueryui.min.css">
@endpush

@push('scripts')
    <script>
        $(function() {
            $('#companies-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '/companies/data',
{{--                ajax: '{!! route('companies.data'); !!}',--}}
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' }
                ]
            });
        });
    </script>
@endpush
