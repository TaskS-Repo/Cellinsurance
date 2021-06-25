<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Yajra\DataTables\Facades\DataTables;

class InsuranceController extends Controller
{
    public function insuranceview(Request $request){
       if($request->ajax())
       {
        $users=User::select('*');
        return DataTables::of($users)
        ->addColumn('action',function($row){
            $btn="<button class='btn btn-info' onclick='viewData(".$row->id.")'><i class='fas fa-eye'></i></button>";
            $btn=$btn."<button class='btn btn-primary' onclick='editData(".$row->id.")'><i class='fas fa-edit'></i></button>";
            $btn=$btn."<button class='btn btn-danger' onclick='deleteData(".$row->id.")'><i class='far fa-trash-alt'></i></button>";

            return $btn;
        })
        ->rawColumns(['action'])
        ->make(true);
       }

        return view('mobileinsurance.insurance');
    }
}
