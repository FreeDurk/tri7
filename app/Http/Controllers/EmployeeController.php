<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    protected $redirectTo = '/';

    public function index(){
        $role = Auth::user()->role;
        $lists = Employee::when($role == 'Web Developer' , function($query) use ($role) {
            $query->where('position' , $role);
        })
        ->when($role == 'Web Designer'  , function($query) use ($role) {
            $query->where('position' , $role);
        })
        ->get();

        return view('list')->with('lists' , $lists);
    }

    public function create(){
        return view('add');
    }

    public function store(Request $request){
        $data = $request->only(['first_name' , 'last_name' , 'position']);

        Employee::create($data);

        return redirect('/list');
    }

    public function edit($id) {
        $employee = Employee::findOrFail($id);
        return view('edit')->with('employee' , $employee);
    }

    public function update(Request $request,$id) {
        $employee = Employee::findOrFail($id);
        $data = $request->only(['first_name' , 'last_name' , 'position']);

        $employee->update($data);

        return redirect('/list');
    }

    public function delete($id){
        $employee = Employee::findOrFail($id);

        $employee->delete();
        return redirect('/list');
    }
}
