<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\TodoTask;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $tasks = TodoTask::count();
        return view("user.dashboard", compact('userCount', 'tasks'));
    }
}
