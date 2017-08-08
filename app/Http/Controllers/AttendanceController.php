<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\AttendanceDetail;
use App\Company;
use App\Employee;
use App\PermitType;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = null;
        $companies = Company::take(100)->orderBy('name', 'asc')->pluck('name', 'id');
        $permit_types = PermitType::take(1000)->orderBy('name', 'asc')->pluck('name', 'id');

        if($request['company_id'] && $request['date']){
            $attendance = Attendance::where('COMPANY_ID', '=', $request['company_id'])
                ->where('TANGGAL', '=', $request['date'])
                ->first();

            $datas = AttendanceDetail::where('ATTENDANCE_ID', '=', $attendance['ID']);
            $employee = Employee::whereNotIn('id', $datas->pluck('employee_id'))
                ->where('employee_status_id', '=', '1')
                ->get();

            foreach ($employee as $data){
                $create = new AttendanceDetail();
                $create['EMPLOYEE_ID'] = $data['ID'];
                $create['ATTENDANCE_ID'] = $attendance['ID'];
                $create->save();
            }

            $datas = AttendanceDetail::with('employee')->where('ATTENDANCE_ID', '=', $attendance['ID'])->get();
        }
        return view('attendance/index', compact(['companies', 'permit_types', 'datas']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
