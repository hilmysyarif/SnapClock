<?php  namespace SnapClock\Http\Controllers\Snappy; 

use Illuminate\Http\Request;
use SnapClock\Http\Controllers\Controller;

class EmployeeController extends Controller {
    public function index()
    {
        return view('employee.index');
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        dd($request);
    }
}