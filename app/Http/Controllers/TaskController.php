<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TaskController extends Controller
{
    public function index(): JsonResponse
    {
        $tasks = Task::latest()->get();

        return response()->json([
            'success' => true,
            'data' => $tasks,
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:150'],
            'description' => ['nullable', 'string'],
            'status' => [
                'sometimes',
                Rule::in(['todo', 'in_progress', 'done']),
            ],
            'priority' => [
                'sometimes',
                Rule::in(['low', 'medium', 'high']),
            ],
        ]);

        $task = Task::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Task berhasil dibuat.',
            'data' => $task,
        ], 201);
    }

    public function show(Task $task): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $task,
        ]);
    }

    public function update(
        Request $request,
        Task $task
    ): JsonResponse {
        $data = $request->validate([
            'title' => ['sometimes', 'required', 'string', 'max:150'],
            'description' => ['nullable', 'string'],
            'status' => [
                'sometimes',
                Rule::in(['todo', 'in_progress', 'done']),
            ],
            'priority' => [
                'sometimes',
                Rule::in(['low', 'medium', 'high']),
            ],
        ]);

        $task->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Task berhasil diperbarui.',
            'data' => $task->fresh(),
        ]);
    }

    public function destroy(Task $task): JsonResponse
    {
        $task->delete();

        return response()->json([
            'success' => true,
            'message' => 'Task berhasil dihapus.',
        ]);
    }
}