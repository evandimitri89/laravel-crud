<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $students = Student::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhere('nis', 'like', "%{$search}%");
        })
            ->orderBy('id', 'desc')
            ->paginate(5)
            ->appends(['search' => $search]);
        return view('students.index', compact('students', 'search'));
    }


    public function create()
    {
        return view('students.create');
    }

    public function edit(Student $student)
    {
        return view('students.edit', [
            'student' => $student
        ]);
    }

    public function store(StoreRequest $request)
    {
        $validatedRequest = $request->validated();

        Student::create($validatedRequest);
        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    public function update(Student $student, Request $request)
    {
        $validatedRequest = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:students,email,' . $student->id],
            'nis' => ['required', 'string', 'max:10', 'unique:students,nis,' . $student->id],
            'address' => ['required', 'string', 'max:500'],
            'birthday' => ['required', 'date'],
        ]);

        $student->update($validatedRequest);
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
