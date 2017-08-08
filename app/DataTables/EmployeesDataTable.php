<?php

namespace App\DataTables;

use App\Employee;
use Yajra\Datatables\Services\DataTable;

class EmployeesDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @return \Yajra\Datatables\Engines\BaseEngine
     */
    public function dataTable()
    {
        $data = $this->query();
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', function($data){
                return '<a href="/adm/employees/show/'.$data->id.'" class="btn btn-xs btn-primary">Show</a>';
            });
    }

    /**
     * Get the query object to be processed by dataTables.
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder|\Illuminate\Support\Collection
     */
    public function query()
    {
        $query = Employee::leftjoin('departments', 'employees.department_id', '=', 'departments.id')
            ->leftJoin('employee_statuses', 'employees.employee_status_id', '=', 'employee_statuses.id')
            ->select([
                    'employees.id',
                    'employees.noreg',
                    'employees.name',
                    'departments.name as department_name',
                    'employee_statuses.name as status'
                ]);
        return $this->applyScopes($query);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->minifiedAjax('')
//                    ->addAction(['width' => '80px'])
                    ->parameters([
                        'dom'     => 'Bfrtip',
                        'order'   => [[0, 'desc']],
                        'buttons' => [
                            'create',
                            'export',
                            'print',
//                            'reset',
//                            'reload',
                        ],
                    ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
//            'id',
            'noreg',
            'name',
            'department_name',
            'status',
//            'created_at',
//            'updated_at'
            'action' => ['orderable' => false, 'searchable' => false]
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'employeesdatatable_' . time();
    }
}
