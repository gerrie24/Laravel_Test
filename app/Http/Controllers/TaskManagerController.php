<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskManager;
use Illuminate\Console\View\Components\Task;
use League\CommonMark\Extension\TaskList\TaskListItemMarker;

class TaskManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = TaskManager::get();

        return response()->json(['data', $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();

        TaskManager::create([
            'Title' => $data['Title'],
            'Description' => $data['Description'],
        ]);

        return response()->json(['data' => 'record created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = TaskManager::get();

        return response()->json(['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $TaskManager = TaskManager::find($id);

        $data = $request->all();

        $TaskManager->update([
            'Title' => $data['Title'],
            'Description' => $data['Description']
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $TaskManager = TaskManager::find($id);

        $TaskManager->delete();

        return response()->json(['data' => "record deleted"]);
    }
}
