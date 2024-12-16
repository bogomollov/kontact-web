<?php

namespace App\Http\Controllers;

use App\Http\Resources\DepartmentResource;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache as Redis;

class DepartmentController extends Controller
{
    public function index() {
        $cache = Redis::get('department_index');
        if ($cache) return $cache;
        else {
            $cache = DepartmentResource::collection(Department::all());
            Redis::put('department_index', $cache, now()->addMinutes(10));
            return $cache;
        }
    }
}