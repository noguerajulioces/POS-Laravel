@extends('layouts.app')

@section('title', 'Informe de devolución de compras')

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active">Informe de devolución de compras</li>
    </ol>
@endsection

@section('content')
    <div class="container-fluid">
        <livewire:reports.purchases-return-report :suppliers="\Modules\People\Entities\Supplier::all()"/>
    </div>
@endsection
