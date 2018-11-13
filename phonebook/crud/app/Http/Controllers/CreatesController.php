<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phonebook;

class CreatesController extends Controller
{
   	public function home(){
   		$phonebooks = Phonebook::all();
   		return view('home',['phonebooks' => $phonebooks]);
   	}
   	public function add(Request $request){
   		$this->validate($request, [
   			'name' => 'required',
   			'number' => 'required',
   			'address' => 'required'
   		]);
   		$phonebooks = new Phonebook;
   		$phonebooks->name = $request->input('name');
   		$phonebooks->number = $request->input('number');
   		$phonebooks->address = $request->input('address');
   		$phonebooks->save();
   		return redirect('/')->with('info','Contact Saved Succesfully');
   		}
   	public function update($id){
   		$phonebooks = Phonebook::find($id);
   		return view('update',['phonebooks' => $phonebooks]);
   	}
   	public function edit(Request $request, $id){
   		$this->validate($request, [
   			'name' => 'required',
   			'number' => 'required',
   			'address' => 'required'
   		]);
   		$data = array(
   			'name' => $request->input('name'),
   			'number' => $request->input('number'),
   			'address' => $request->input('address')
   		);
   		Phonebook::where('id',$id)->update($data);
   		return redirect('/')->with('info','Contact Updated Successfully');
   	}
   	public function read($id){
   		$phonebooks = Phonebook::find($id);
   		return view('read',['phonebooks'=> $phonebooks]);
   	}
   	public function delete($id){
   		Phonebook::where('id',$id)->delete();
   		return redirect('/')->with('danger','Contact Deleted Successfully');
   	}
}
