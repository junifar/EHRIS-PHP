<?php

namespace App\Http\Controllers;

use App\Bank;
use App\DataTables\EmployeesDataTable;
use App\Department;
use App\Employee;
use App\EmployeeStatus;
use App\Gender;
use App\JobTitle;
use App\Religion;
use App\Status;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param EmployeesDataTable $dataTable
     * @return \Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function index(EmployeesDataTable $dataTable)
    {
        return $dataTable->render('employee.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::take(10000)->orderBy('name', 'ASC')->pluck('name', 'id');
        $genders = Gender::take(1000)->pluck('name', 'id');
        $religions = Religion::take(1000)->pluck('name', 'id');
        $banks = Bank::take(1000)->pluck('name','id');
        $job_titles = JobTitle::take(1000)->pluck('name','id');
        $employees = Employee::take(10000)->pluck('name', 'id');
        $statuses = Status::take(10000)->pluck('name', 'id');
        $employee_statuses = EmployeeStatus::take(10000)->pluck('name', 'id');
        return view('employee.create', compact('departments','genders', 'religions', 'banks',
            'job_titles', 'employees', 'statuses', 'employee_statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Employee();

        $imageName = $request->file('photo')->getClientOriginalName();
        $request->file('photo')->move(base_path().'/public/images/catalog/', $imageName);

        $data['file_name'] = '/images/catalog/'.$imageName;
        $data['name'] = $request['name'];
        $data['noreg'] = $request['noreg'];
        $data['no_ktp'] = $request['no_ktp'];
        $data['religion_id'] = $request['religion_id'];
        $data['phone'] = $request['phone'];
        $data['handphone'] = $request['handphone'];
        $data['tempat_lahir'] = $request['tempat_lahir'];
        $data['tanggal_lahir'] = $request['tanggal_lahir'];
        $data['gender_id'] = $request['gender_id'];
        $data['status_id'] = $request['status'];
        $data['employee_status_id'] = $request['employee_status_id'];
        $data['remark'] = $request['remark'];
        $data['department_id'] = $request['department_id'];
        $data['job_id'] = $request['job_id'];
        $data['date_joining'] = $request['date_joining'];
        $data['address'] = $request['address'];
        $data['manager_id'] = $request['manager_id'];
        $data->save();
        return redirect('employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Employee::find($id);
        $departments = Department::take(10000)->orderBy('name', 'ASC')->pluck('name', 'id');
        $genders = Gender::take(1000)->pluck('name', 'id');
        $religions = Religion::take(1000)->pluck('name', 'id');
        $banks = Bank::take(1000)->pluck('name','id');
        $job_titles = JobTitle::take(1000)->pluck('name','id');
        $employees = Employee::take(10000)->pluck('name', 'id');
        $statuses = Status::take(10000)->pluck('name', 'id');
        $employee_statuses = EmployeeStatus::take(10000)->pluck('name', 'id');
        return view('employee.show', compact(['data', 'departments', 'genders', 'religions', 'banks',
            'job_titles', 'employees', 'statuses', 'employee_statuses']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
