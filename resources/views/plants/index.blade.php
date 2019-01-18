@extends('admin.master')

@section('css')
    @include('admin.partials.datatables')
@endsection

@section('page-header')
    Plantas <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')

    <div class="mB-20">
        @can('plants.create')
        <a href="{{ route('plants.create') }}" class="btn btn-info">
            {{ trans('app.add_button') }}
        </a>
        @endcan
    </div>

    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Cantidad Inicial</th>
                    <th>Cantidad Actual</th>
                    <th>Cantidad Salida</th>
                    <th>Cantidad Perdida</th>
                    <th>Meta del Año</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            
            <tfoot>
                <tr>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Cantidad Inicial</th>
                    <th>Cantidad Actual</th>
                    <th>Cantidad Salida</th>
                    <th>Cantidad Perdida</th>
                    <th>Meta del Año</th>
                    <th>Acciones</th>
                </tr>
            </tfoot>
        
        </table>
    </div>

@endsection

@section('js')
    <script>
        $('#dataTable').DataTable({
            ajax: '/api/plants',
            columns: [
                {data: 'name'},
                {data: 'status'},
                {data: 'initial_quantity'},
                {data: 'actual_quantity'},
                {data: 'exit_quantity'},
                {data: 'loss_quantity'},
                {data: 'goal'},
                {data: 'actions'}
            ]
        });
    </script>
@endsection