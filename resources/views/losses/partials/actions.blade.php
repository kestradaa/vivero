
<ul class="list-inline">
    @can('losses.show')
    <li class="list-inline-item">
        <a href="{{ route('losses.show', $id) }}"
        title="Ver" class="btn btn-sm btn-outline-secondary">
            <span class="ti-eye"></span>
        </a>
    </li>
    @endcan
    
    @can('losses.edit')
    <li class="list-inline-item">
        <a href="{{ route('losses.edit', $id) }}" 
        title="{{ trans('app.edit_title') }}" data-toggle="tooltip"
        class="btn btn-outline-primary btn-sm">
            <span class="ti-pencil"></span>
        </a>
    </li>
    @endcan
    
    @can('losses.destroy')
    <li class="list-inline-item">
        {!! Form::open([
            'class'=>'delete',
            'route'  => ['losses.destroy', $id], 
            'method' => 'DELETE',
            ]) 
        !!}

            <button class="btn btn-outline-danger btn-sm" title="{{ trans('app.delete_title') }}">
                <i class="ti-trash"></i>
            </button>
            
        {!! Form::close() !!}
    </li>
    @endcan
</ul>