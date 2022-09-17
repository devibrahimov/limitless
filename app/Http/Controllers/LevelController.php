<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLevelRequest;
use App\Http\Requests\UpdateLevelRequest;

class LevelController extends Controller
{
    public function index()
    {}

    public function create()
    {}

    public function store(StoreLevelRequest $request)
    {}

    public function show(Level $level)
    {}

    public function edit(Level $level)
    {}

    public function update(UpdateLevelRequest $request, Level $level)
    {}

    public function destroy(Level $level)
    {}
}