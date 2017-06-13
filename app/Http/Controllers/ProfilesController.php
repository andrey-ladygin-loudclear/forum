<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        $activities = $this->getActivites($user);

        return view('profiles.show', [
            'profileUser' => $user,
            'activities' => $activities
        ]);
    }

    /**
     * @param User $user
     * @return mixed
     */
    public function getActivites(User $user)
    {
        $activities = $user->activity()->latest()->with('subject')->take(50)->get()->groupBy(function ($activity)
        {
            return $activity->created_at->format('Y-m-d');
        });

        return $activities;
    }
}
