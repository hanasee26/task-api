<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    
    public function index()
    {
        return response()->json([
            ['id' => 1,'title' => 'Belajar Routing', 'is_completed' => false],
            ['id' => 2,'title' => 'Belajar Controller', 'is_completed' => false],
            ['id' => 3,'title' => 'Belajar phpMyAdmin', 'is_completed' => false],
            ['id' => 4,'title' => 'Belajar Backend', 'is_completed' => false],
            ['id' => 5,'title' => 'Belajar Frontend', 'is_completed' => false],
        ]);
    }

    public function store(Request $request)
    {
        return response()->json([
            'message' => 'Task berhasil dibuat (masih sata startis)',
        ], 201);
    }

}
