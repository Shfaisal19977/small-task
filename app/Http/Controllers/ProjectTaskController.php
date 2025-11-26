<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\JsonResponse;

class ProjectTaskController extends Controller
{
    public function index(Project $project): JsonResponse
    {
        $tasks = $project->tasks()
            ->latest()
            ->get();

        return response()->json($tasks);
    }

    public function store(StoreTaskRequest $request, Project $project): JsonResponse
    {
        $task = $project->tasks()->create($request->validated());

        return response()->json($task, 201);
    }

    public function update(UpdateTaskRequest $request, Project $project, Task $task): JsonResponse
    {
        abort_if($task->project_id !== $project->id, 404);

        $task->update($request->validated());

        return response()->json($task);
    }
}
