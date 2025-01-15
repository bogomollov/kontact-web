<?php

namespace App\Http\Controllers;

use App\Http\Requests\Department\StoreRequest;
use App\Http\Requests\Department\UpdateRequest;
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

    public function show(Department $department) {
        $cache = Redis::get('department_show_' . $department->id);
        if ($cache) return $cache;
        else {
            $cache = new DepartmentResource($department);
            Redis::put('department_show_' . $department->id, $cache, now()->addMinutes(10));
            return $cache;
        }
    }

    public function store(StoreRequest $request) {
        return new DepartmentResource(Department::create($request->validated()));
    }

    public function update(UpdateRequest $request, Department $department) {
        $department->update($request->validated());
        return new DepartmentResource($department);
    }

    public function destroy(Department $department) {
        $department->delete();
        return new DepartmentResource($department);
    }
}
