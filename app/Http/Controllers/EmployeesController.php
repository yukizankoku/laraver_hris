<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use App\Models\Status;
use App\Models\Jabatan;
use App\Models\Employee;
use App\Models\Golongan;
use App\Models\Department;
use App\Models\Pendidikan;
use App\Models\Perusahaan;
use App\Models\JenisKelamin;
use Illuminate\Http\Request;
use App\Models\StatusKaryawan;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.employees.index', [
            "title" => "Dashboard",
            "employees" => Employee::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.employees.create',[
            "title" => "Tambah Data Karyawan",
            'perusahaans' => Perusahaan::all(),
            'departments' => Department::all(),
            'jabatans' => Jabatan::all(),
            'golongans' => Golongan::all(),
            'statuss' => Status::all(),
            'status_karyawans' => StatusKaryawan::all(),
            'jenis_kelamins' => JenisKelamin::all(),
            'pendidikans' => Pendidikan::all(),
            'agamas' => Agama::all(),
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
            'nama_karyawan' => 'required|max:255',
            'no_karyawan' => 'required|max:255|unique:employees',
            'tanggal_masuk' => 'required|date',
            'mulai_kontrak' => 'required|date',
            'habis_kontrak' => 'nullable|date',
            'tetap' => 'nullable|date',
            'no_ktp' => 'required|max:255|unique:employees',
            'no_npwp' => 'required|max:255|unique:employees',
            'no_kk' => 'required|max:255',
            'nama_ibu_kandung' => 'required|max:255',
            'asuransi_bnilife' => 'nullable|max:255|unique:employees',
            'bpjs_tk' => 'nullable|max:255|unique:employees',
            'bpjs_kes' => 'nullable|max:255|unique:employees',
            'sim_a' => 'nullable|max:255|unique:employees',
            'sim_b' => 'nullable|max:255|unique:employees',
            'sim_c' => 'nullable|max:255|unique:employees',
            'no_hp' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:employees',
            'email_kantor' => 'nullable||email|unique:employees',
            'email_pribadi' => 'required|email:dns|unique:employees',
            'bidang_kejuruan' => 'required|max:255',
            'kota' => 'required|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat_ktp' => 'required|max:255',
            'domisili' => 'required|max:255',
            'perusahaan_id' => 'required',
            'department_id' => 'required',
            'jabatan_id' => 'required',
            'golongan_id' => 'required',
            'status_id' => 'required',
            'status_karyawan_id' => 'required',
            'jenis_kelamin_id' => 'required',
            'pendidikan_id' => 'required',
            'agama_id' => 'required',
        ]);

        Employee::create($validatedData);

        return redirect('/dashboard/employees')->with('success', 'Data Karyawan Baru Sudah Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('dashboard.employees.show', [
            'title' => 'Detail Karyawan',
            'employee' => $employee
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('dashboard.employees.edit',[
            "title" => "Edit Data Karyawan",
            "employee" => $employee,
            'perusahaans' => Perusahaan::all(),
            'departments' => Department::all(),
            'jabatans' => Jabatan::all(),
            'golongans' => Golongan::all(),
            'statuss' => Status::all(),
            'status_karyawans' => StatusKaryawan::all(),
            'jenis_kelamins' => JenisKelamin::all(),
            'pendidikans' => Pendidikan::all(),
            'agamas' => Agama::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $rules = [
            'nama_karyawan' => 'required|max:255',
            'no_karyawan' => 'required|max:255',
            'tanggal_masuk' => 'required|date',
            'mulai_kontrak' => 'required|date',
            'habis_kontrak' => 'nullable|date',
            'tetap' => 'nullable|date',
            'no_ktp' => 'required|max:255',
            'no_npwp' => 'required|max:255',
            'no_kk' => 'required|max:255',
            'nama_ibu_kandung' => 'required|max:255',
            'asuransi_bnilife' => 'nullable|max:255',
            'bpjs_tk' => 'nullable|max:255',
            'bpjs_kes' => 'nullable|max:255',
            'sim_a' => 'nullable|max:255',
            'sim_b' => 'nullable|max:255',
            'sim_c' => 'nullable|max:255',
            'no_hp' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email_kantor' => 'nullable||email',
            'email_pribadi' => 'required|email:dns',
            'bidang_kejuruan' => 'required|max:255',
            'kota' => 'required|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat_ktp' => 'required|max:255',
            'domisili' => 'required|max:255',
            'perusahaan_id' => 'required',
            'department_id' => 'required',
            'jabatan_id' => 'required',
            'golongan_id' => 'required',
            'status_id' => 'required',
            'status_karyawan_id' => 'required',
            'jenis_kelamin_id' => 'required',
            'pendidikan_id' => 'required',
            'agama_id' => 'required',
        ];
    
        if ($request->no_karyawan != $employee->no_karyawan) {
            $rules['no_karyawan'] = 'required|max:255|unique:employees';
        }
    
        if ($request->no_ktp != $employee->no_ktp) {
            $rules['no_ktp'] = 'required|max:255|unique:employees';
        }
    
        if ($request->no_npwp != $employee->no_npwp) {
            $rules['no_npwp'] = 'required|max:255|unique:employees';
        }

        if ($request->asuransi_bnilife != $employee->asuransi_bnilife) {
            $rules['asuransi_bnilife'] = 'nullable|max:255|unique:employees';
        }

        if ($request->bpjs_tk != $employee->bpjs_tk) {
            $rules['bpjs_tk'] = 'nullable|max:255|unique:employees';
        }

        if ($request->bpjs_kes != $employee->bpjs_kes) {
            $rules['bpjs_kes'] = 'nullable|max:255|unique:employees';
        }

        if ($request->sim_a != $employee->sim_a) {
            $rules['sim_a'] = 'nullable|max:255|unique:employees';
        }

        if ($request->sim_b != $employee->sim_b) {
            $rules['sim_b'] = 'nullable|max:255|unique:employees';
        }

        if ($request->sim_c != $employee->sim_c) {
            $rules['sim_c'] = 'nullable|max:255|unique:employees';
        }

        if ($request->no_hp != $employee->no_hp) {
            $rules['no_hp'] = 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:employees';
        }

        if ($request->email_kantor != $employee->email_kantor) {
            $rules['email_kantor'] = 'nullable||email|unique:employees';
        }

        if ($request->email_pribadi != $employee->email_pribadi) {
            $rules['email_pribadi'] = 'required|email:dns|unique:employees';
        }
        
        $validatedData = $request->validate($rules);

        Employee::where('id', $employee->id)->update($validatedData);
    
        return redirect('/dashboard/employees')->with('success', 'Data Karyawan Berhasil Diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {

        Employee::destroy($employee->id);

        return redirect('/dashboard/employees')->with('success', 'Data Karyawan Berhasil Dihapus!');
    }
}
