<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class Tasks extends BaseController
{
    public function welcome()
    {
        $taskModel = new TaskModel();

        $today = date('Y-m-d');

        $tasks = $taskModel
            ->where('task_date', $today)
            ->findAll();

        return view('welcome', ['tasks' => $tasks]);
    }

    public function index()
    {
        $taskModel = new TaskModel();

        $tasks = $taskModel
            ->orderBy('task_date', 'ASC')
            ->findAll();

        return view('tasks', ['tasks' => $tasks]);
    }

    public function profile()
    {
        $userModel = new UserModel();

        $user = $userModel->first();

        return view('profile', ['user' => $user]);
    }
}