@extends('admin.master')

@section('css')
    @include('admin.partials.datatables')
@endsection

@section('page-header')
    Personal <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')

    <div class="mB-20">
        @can('employees.create')
        <a href="{{ route('employees.create') }}" class="btn btn-info">
            {{ trans('app.add_button') }}
        </a>
        @endcan
    </div>

    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>DPI</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Puesto</th>
                    <th>Acciones</th>

                </tr>
            </thead>
            
            <tfoot>
                <tr>
                    <th>DPI</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Puesto</th>
                    <th>Acciones</th>
                </tr>
            </tfoot>
        
        </table>
    </div>

@endsection

@section('js')
    <script>
        $('#dataTable').DataTable({
            ajax: '/api/employees',
            columns: [
                {data: 'dpi'},
                {data: 'name'},
                {data: 'last_name'},
                {data: 'rol'},
                {data: 'actions'}
            ]
        });
    </script>
@endsection