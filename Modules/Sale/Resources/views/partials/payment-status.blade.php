@if ($data->payment_status == 'Partial')
    <span class="badge badge-warning">
        Parcial
    </span>
@elseif ($data->payment_status == 'Paid')
    <span class="badge badge-success">
        Pagado
    </span>
@else
    <span class="badge badge-danger">
        No pagado
    </span>
@endif
