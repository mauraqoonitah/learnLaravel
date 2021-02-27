<?php

namespace App\Http\Controllers;

use App\Models\Student;
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
        $students = Student::all();
        // return view('students.index', ['students' => $students]);
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // return $request;
        // $request berisi inputan yang ada di method create

        // VALIDATE INPUT
        $request->validate([
            'nama' => 'required',
            'nrm' => 'required|max:12',
            'email' => 'required|email',
            'jurusan' => 'required',
            
            
        ]);

        // // OPSI PENULISAN 1
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->nrm = $request->nrm;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;

        // $student->save();
        // return redirect('/students');

        // // OPSI PENULISAN 2
        // tambahkan protected fillable di model agar tidak error mass assignment
        // Student::create([
        //     'nama' => $request->nama,
        //     'nrm' => $request->nrm,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan,
        // ]);
        // return redirect('/students');


        // OPSI PENULISAN 3 : 
        // jika protected fillable sudah ditambahkan di model, 
        // hanya akan mengambil field yang ada di fillable
        Student::create($request->all());
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.detail', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {

         // VALIDATE INPUT
         $request->validate([
            'nama' => 'required',
            'nrm' => 'required|max:12',
            'email' => 'required|email',
            'jurusan' => 'required',
                      
        ]);

        Student::where('id', $student->id)
                ->update([
                     'nama' => $request->nama,
                     'nrm' => $request->nrm,
                     'email' => $request->email,
                     'jurusan' => $request->jurusan
                ]);
        // return $request;
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Diubah!');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Dihapus!');
    }
}
