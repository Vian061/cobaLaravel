<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Students = Student::all();
        return view('Mahasiswa.index',['Students'=> $Students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Mahasiswa.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // Validate input
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:8',
            'jurusan' => 'required',
            'email' => 'required',
            'Alamat' => 'required',
            'Agama' => 'required',
            'JenisKelamin' => 'required',
            'TempatLahir' => 'required',
            'TanggalLahir' => 'required',
        ]);

        // using fillable at model
        Student::create($request->all());
        return redirect('/mahasiswa') ->with('status', 'Data Berhasil Di tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('Mahasiswa/detail', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('Mahasiswa.update', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        // Validate input
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:8',
            'jurusan' => 'required',
            'email' => 'required',
            'Alamat' => 'required',
            'Agama' => 'required',
            'JenisKelamin' => 'required',
            'TempatLahir' => 'required',
            'TanggalLahir' => 'required',
        ]);
        
        // Update data
        Student::where('id', $student->id)
                ->update([
                    'nama' => $request->nama,
                    'nim' => $request->nim,
                    'jurusan' => $request->jurusan,
                    'email' => $request->email,
                    'Alamat' => $request->Alamat,
                    'Agama' => $request->Agama,
                    'JenisKelamin' => $request->JenisKelamin,
                    'TempatLahir' => $request->TempatLahir,
                    'TanggalLahir' => $request->TanggalLahir,
                ]);
        return redirect('/mahasiswa')->with('status', 'Data Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/mahasiswa') ->with('status', 'Data Berhasil Di Hapus!');
    }
}
