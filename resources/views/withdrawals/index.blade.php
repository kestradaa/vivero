@extends('admin.master')

@section('css')
    @include('admin.partials.datatables')
@endsection

@section('page-header')
    Retiro <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')

    <div class="mB-20">
        @can('withdrawals.create')
        <a href="{{ route('withdrawals.create') }}" class="btn btn-info">
            {{ trans('app.add_button') }}
        </a>
        @endcan
    </div>

    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No. Vale</th>
                    <th>Fecha</th>
                    <th>Persona</th>
                    <th>descripción</th>
                    <th>Placa Vehiculo</th>
                    <th>Foto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            
            <tfoot>
                <tr>
                    <th>No. Vale</th>
                    <th>Fecha</th>
                    <th>Persona</th>
                    <th>descripción</th>
                    <th>Placa Vehiculo</th>
                    <th>Foto</th>
                    <th>Acciones</th>
                </tr>
            </tfoot>
        
        </table>
    </div>

@endsection

@section('js')
    <script>
        $('#dataTable').DataTable({
            ajax: '/api/withdrawals',
            columns: [
                {data: 'receipt'},
                {data: 'withdrawal_date'},
                {data: 'withdrawal_person'},
                {data: 'description'},
                {data: 'lisence_plate'},
                {data: 'file'},
                {data: 'actions'},
            ]
        });
    </script>
@endsection