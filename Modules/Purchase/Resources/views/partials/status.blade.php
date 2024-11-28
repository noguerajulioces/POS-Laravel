@if ($data->status == 'Pending')
    <span class="badge badge-info">
        Pendiente
    </span>
@elseif ($data->status == 'Ordered')
    <span class="badge badge-primary">
        Ordenado
    </span>
@else
    <span class="badge badge-success">
        Completado
    </span>
@endif
