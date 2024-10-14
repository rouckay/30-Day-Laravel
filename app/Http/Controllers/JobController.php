<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    public function index()
    {
        $job = Job::with('employer')->latest()->simplePaginate(3);
        return view('jobs.index', [
            'jobs' => $job
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);

    }

    public function store()
    {
        // here is validation
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required', 'numeric']
        ]);
        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1,
        ]);

        return redirect('/jobs');
    }

    public function edit(Job $job)
    {

        // if (Auth::guest()) {
        //     return redirect('/login');
        // }

        Gate::authorize('edit-job', $job);

        return view('jobs.edit', ['job' => $job]);
    }
    public function update(Job $job)
    {
        // $job = Job::findOrFail($id);
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required', 'numeric']
        ]);

        // authorized here
        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);
        return redirect('/jobs/' . $job->id);
    }

    public function delete(Job $job)
    {
        // $job = Job::findOrFail($id);
        $job->delete();
        return redirect('/jobs');
    }


}
