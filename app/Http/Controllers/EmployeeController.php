<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;
use DB;

class EmployeeController extends Controller
{
    


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employee.index');
    }

 
    public function add(Request $request)
    {     
          $employee = new Employee;
          $this->validate($request, [
              'firstName'=> 'required|min:3',
              'lasrName'=> 'required|min:3',
              'email' => 'unique:connection.users,email_address',
              'phone'=>  'required|numeric|phone_number|size:11',
              'address'=> 'required',
              'jobTitle'=> 'required',
              'salary'=> 'required|numeric',
              'description' =>'required',
              'startDate' => 'required|date_parse_from_format',
              'endDate' => 'required|date_parse_from_format',
              
          ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $employees = DB::table("employees")->get();
             return view('employee.index', ['employees' => $employees]);
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
