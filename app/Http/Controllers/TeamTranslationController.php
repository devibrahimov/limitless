<?php

namespace App\Http\Controllers;

use App\Models\TeamTranslation;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeamTranslationRequest;
use App\Http\Requests\UpdateTeamTranslationRequest;

class TeamTranslationController extends Controller
{
    public function index()
    {}

    public function create()
    {}

    public function store(StoreTeamTranslationRequest $request)
    {}

    public function show(TeamTranslation $teamTranslation)
    {}

    public function edit(TeamTranslation $teamTranslation)
    {}

    public function update(UpdateTeamTranslationRequest $request, TeamTranslation $teamTranslation)
    {}

    public function destroy(TeamTranslation $teamTranslation)
    {}
}