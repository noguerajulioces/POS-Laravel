@if ($data->status == 'Pending')
    <span class="badge badge-info">
        Pendiente
    </span>
@elseif ($data->status == 'Shipped')
    <span class="badge badge-primary">
        Enviado
    </span>
@else
    <span class="badge badge-success">
        Completado
    </span>
@endif
