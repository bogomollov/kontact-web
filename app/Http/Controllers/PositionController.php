<?php

namespace App\Http\Controllers;

use App\Http\Requests\Position\StoreRequest;
use App\Http\Requests\Position\UpdateRequest;
use App\Http\Resources\PositionResource;
use App\Models\Position;
use Illuminate\Support\Facades\Cache as Redis;

class PositionController extends Controller
{
    public function index() {
        $cache = Redis::get('position_index');
        if ($cache) return $cache;
        else {
            $cache = PositionResource::collection(Position::all());
            Redis::put('position_index', $cache, now()->addMinutes(10));
            return $cache;
        }
    }

    public function show(Position $position) {
        $cache = Redis::get('position_show_' . $position->id);
        if ($cache) return $cache;
        else {
            $cache = new PositionResource($position);
            Redis::put('position_show_' . $position->id, $cache, now()->addMinutes(10));
            return $cache;
        }
    }

    public function store(StoreRequest $request) {
        return new PositionResource(Position::create($request->validated()));
    }

    public function update(UpdateRequest $request, Position $position) {
        $position->update($request->validated());
        return new PositionResource($position);
    }

    public function destroy(Position $position) {
        $position->delete();
        return new PositionResource($position);
    }
}
