<?php
 
namespace App\Http\Controllers;
 
use App\Companies;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
 
class CompaniesController extends Controller{
 
 
    public function index(){
 
        $Companiess  = Companies::all();
 
        return response()->json($Companiess);
 
    }
 
    public function getCompanies($id){
 
        $Companies  = Companies::find($id);
 
        return response()->json($Companies);
    }
 
    public function createCompanies(Request $request){
        var_dump($request->all());die;
        $Companies = Companies::create($request->all());
 
        return response()->json($Companies);
 
    }
 
    public function deleteCompanies($id){
        $Companies  = Companies::find($id);
        $Companies->delete();

        return response()->json('success');
    }
 
    public function updateCompanies(Request $request,$id){
        $Companies  = Companies::find($id);
        $Companies->company_name = $request->input('company_name');
        $Companies->category = $request->input('category');
        $Companies->addres = $request->input('addres');
        $Companies->phone_number = $request->input('phone_number');
        $Companies->email = $request->input('email');
        $Companies->Description = $request->input('Description');
        $Companies->save();
 
        return response()->json($Companies);
    }
 
}