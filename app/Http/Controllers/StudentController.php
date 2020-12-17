<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Student::all();
        return response()->view("students.list", compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view("students.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Student $std
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Student $std)
    {
        $std->fill($request->all());
        $std->save();
        return redirect()->route("students.index");
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student, $id)
    {
        $data = Student::findOrFail($id);
        return response()->view("students.edit", compact(['data']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $data = $student::find($request->id);
        $data->fill($request->all());
        $data->save();
        return redirect()->route("students.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student, $id)
    {
        $data = $student::findOrFail($id);
        $data->delete();
        return redirect()->route("students.index");
    }
}
