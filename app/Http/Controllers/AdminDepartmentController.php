<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class AdminDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.department.index', [
            "title" => "Jabatan",
            "departments" => Department::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.department.create',[
            "title" => "Department Baru",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255|unique:jabatans',
        ]);

        Department::create($validatedData);

        return redirect('/dashboard/department')->with('success', 'Department Baru Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        return view('dashboard.department.edit',[
            'title' => 'Edit Department',
            'department' => $department,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        $rules = [
            'nama' => 'required|max:255'
        ];

        if($request->nama != $department->nama){
            $rules['nama'] = 'required|max:255|unique:departments';
        }

        $validatedData = $request->validate($rules);

        Department::where('id', $department->id)
                        ->update($validatedData);

        return redirect('/dashboard/department')->with('success', 'Nama Department Telah Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        Department::destroy($department->id);

        return redirect('/dashboard/department')->with('success', 'Department Telah Dihapus!');
    }
}
