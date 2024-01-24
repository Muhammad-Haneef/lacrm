<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\email;

use App\Models\Lead;
use App\Models\Task;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'matters' =>
                        [
                            'pending' => 70,
                            'open' => 100,
                            'in_process' => 200,
                            'closed' => 30,
                            'total' => 400
                        ],
            'leads' => Lead::orderBy('id', 'desc')->limit(6)->get(),
            'task_assign_to_me' => Task::where('assigned_to', 1)->orderBy('id', 'desc')->limit(6)->get(),



        ];
        return view('dashboard', ['data' => $data]);
    }
}
