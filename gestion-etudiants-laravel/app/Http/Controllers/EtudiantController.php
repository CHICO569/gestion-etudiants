<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display the list of students
     */
    public function index()
    {
        return 'Student list';
    }

    /**
     * Display the student creation form
     */
    public function create()
    {
        return 'Student creation form';
    }

    /**
     * Store a new student
     */
    public function store(Request $request)
    {
        return 'Student successfully registered';
    }

    /**
     * Display the information of a student
     */
    public function show($id)
    {
        return 'Information about student number ' . $id;
    }

    /**
     * Display the student edit form
     */
    public function edit($id)
    {
        return 'Edit form for student number ' . $id;
    }

    /**
     * Update a student
     */
    public function update(Request $request, $id)
    {
        return 'Student number ' . $id . ' successfully updated';
    }

    /**
     * Delete a student
     */
    public function destroy($id)
    {
        return 'Student number ' . $id . ' successfully deleted';
    }
}