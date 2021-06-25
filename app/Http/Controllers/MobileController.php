<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;

class MobileController extends Controller
{
    public function mobileview(Request $request){
        if($request->ajax())
        {
            $users=User::select('*');
            return DataTables::of($users)
            ->addColumn('action',function($raw){
                $btn="<button class='btn btn-info' onClick='viewData(".$raw->id.")'><i class='fas fa-eye'></i></button>";
                $btn.="<button class='btn btn-primary' onClick='editData(".$raw->id.")'><i class='fas fa-edit'></i></button>";
                $btn.="<button class='btn btn-danger' onClick='deleteData(".$raw->id.")'><i class='far fa-trash-alt'></i></button>";

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('mobileinsurance.mobile');
    }

    public function dashboard(){
        return view('mobileinsurance.dashboard');
    }
}
