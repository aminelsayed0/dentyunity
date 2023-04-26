<?php

namespace App\Http\Controllers;

use App\Models\DescribedCase;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::orderBy('id','desc')->paginate(10);
        return view('patients.index',compact('patients'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:200',
            'age'=>'required|numeric',
           'phone'=>'required|numeric|min:10',
           'address'=>'required|string|max:200',
           'diagnosis'=>'required|string|',
           'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $patient = new Patient();
        $patient->name = $request->name;
        $patient->age = $request->age;
        $patient->phone = $request->phone;
        $patient->address = $request->address;
        $patient->name = $request->name;
        $described = new DescribedCase();
        $described->diagnosis = $request->diagnosis;
        Storage::disk('public')->put('patients', $request->image);
        $described->image = $request->file('image')->store('patients');
        $patient->save();
        $described->save();

        return redirect()->route('patients.index')->with('message','patient add');



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
