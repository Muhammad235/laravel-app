<?php

namespace App\Http\Controllers\Api;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::get();

        return response()->json(['data' => $todos], 200);
    }

    public function store(StoreTodoRequest $request)
    {

        $todo = Todo::create($request->validated());

        return response()->json([
            "data" => $todo,
        ], 201);
    }

    public function show(Request $request, Todo $todo)
    {
        // $todo = Todo::findOrFail($id);

        return response()->json(["data" => $todo], 200);
    }

    public function update(UpdateTodoRequest $request, Todo $todo)
    {
        $todo->update($request->validated());
        if ($request->status == true) {
            $todo->update([
                'completed_at' => now()
            ]);
        }
        return response()->json(["data" => $todo]);
    }

    public function destroy(Request $request, Todo $todo)
    {
        $todo->delete();
        return response()->json(["message" => "Todo deleted successfully"], 204);
    }


}
