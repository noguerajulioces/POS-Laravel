<?php

namespace Modules\Quotation\DataTables;

use Modules\Quotation\Entities\Quotation;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class QuotationsDataTable extends DataTable
{

    public function dataTable($query) {
        return datatables()
            ->eloquent($query)
            ->addColumn('total_amount', function ($data) {
                return format_currency($data->total_amount);
            })
            ->addColumn('status', function ($data) {
                return view('quotation::partials.status', compact('data'));
            })
            ->addColumn('action', function ($data) {
                return view('quotation::partials.actions', compact('data'));
            });
    }

    public function query(Quotation $model) {
        return $model->newQuery();
    }

    public function html() {
        return $this->builder()
            ->setTableId('sales-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom("<'row'<'col-md-3'l><'col-md-5 mb-2'B><'col-md-4'f>> .
                                'tr' .
                                <'row'<'col-md-5'i><'col-md-7 mt-2'p>>")
            ->orderBy(6)
            ->buttons(
                Button::make('excel')
                    ->text('<i class="bi bi-file-earmark-excel-fill"></i> Excel'),
                Button::make('print')
                    ->text('<i class="bi bi-printer-fill"></i> Imprimir'),
                Button::make('reset')
                    ->text('<i class="bi bi-x-circle"></i> Resetear'),
                Button::make('reload')
                    ->text('<i class="bi bi-arrow-repeat"></i> Refrescar')
            );
    }

    protected function getColumns() {
        return [
            Column::make('date')
                ->title('Fecha')
                ->className('text-center align-middle'),

            Column::make('reference')
                ->title('Referencia')
                ->className('text-center align-middle'),

            Column::make('customer_name')
                ->title('Cliente')
                ->className('text-center align-middle'),

            Column::computed('status')
                ->title('Estado')
                ->className('text-center align-middle'),

            Column::computed('total_amount')
                ->title('Monto Total')
                ->className('text-center align-middle'),

            Column::computed('action')
                ->title('Acciones')
                ->exportable(false)
                ->printable(false)
                ->className('text-center align-middle'),

            Column::make('created_at')
                ->visible(false)
        ];
    }

    protected function filename(): string {
        return 'Quotations_' . date('YmdHis');
    }
}
