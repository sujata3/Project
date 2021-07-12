<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Form;
// use SebastianBergmann\Environment\Console;
// use DB;
class formcontroller extends Controller
{
   
    public function index()
    {
        return view('form.index');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix|required|unique:forms'
        ]);
    

        $query=DB::table('forms')->insert([
            'firstname'=>$request->input('firstname'),
            'lastname'=>$request->input('lastname'), 
            'email'=>$request->input('email')
        ]);
        if($query){
            return back()->with('success','Data have been successfully inserted');
        }
        else{
            return back()->with('fail','Something went wrong, try again');
        }
    }


    public function list()
    {
        $data = DB::table('forms')->get();
        return view('form.RED', compact('data'));
    }
    public function edit($id)
    {
        $value = DB::table('forms')->where('id', $id)->first();
        return view('form.edit-value', compact('value'));
    }
    public function update(Request $request)
    {
       $query= DB::table('forms')->where('id', $request->id)->update([
            'firstname'=>$request->input('firstname'),
            'lastname'=>$request->input('lastname'), 
            'email'=>$request->input('email')
        ]);
        if($query){
            return back()->with('value_update','Data have been successfully updated');
        }
        else{
            return back()->with('update_fail','Something went wrong, try again');
        }
 
    }

    public function delete($id)
    {
        DB::table('forms')->where('id', $id)->delete();
        return back()->with('value_delete', 'Value deleted successfully');
    }
}