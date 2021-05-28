<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;   
class crudController extends Controller
{
    public function homeFun() {
        $employees = Employee::all();
        return view('pages.home', compact(
            'employees'
        ));
    }

     public function employeeFun($id) {
        $employee = Employee::findOrFail($id);
        
        return view('pages.employee', compact(
            'employee'
        ));   
    }      

    public function formFun(){
 
        return view('pages.form');
    }

     public function dbFun(Request $request){   

         $validate = $request -> validate([

            'firstname' => 'max:50' ,
            'lastname' => 'max:50',    
            'role' => 'max:50' ,   
            'ral' => 'numeric' ,
              
      
         ]);   
           
         $addDB = Employee::create($validate);             
        return redirect() -> route('employee',$addDB ->id );      
    }

    public function delete($id){

        $employee = Employee::findOrFail($id);   
   
        $employee -> delete();
           
        return redirect() -> route('home');       
           
   
    }   

    public function edit($id){

        $employee = Employee::findOrFail($id);  
        return view('pages.update',compact('employee'));   
    }   

    public function update(Request $request, $id){   
    
             $validate = $request -> validate([
    
                'firstname' => 'max:50' ,
                'lastname' => 'max:50',    
                'role' => 'max:50' ,   
                'ral' => 'numeric' ,
                     
          
             ]);   
    
             $employee = Employee::findOrFail($id);
              
             $employee -> update($validate);
                     
            return redirect() -> route('employee',$employee ->id );         
        }   
}   
   