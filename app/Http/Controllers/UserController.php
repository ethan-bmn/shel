<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller {
    public function roles() {
        return Inertia::render('Roles')
            ->with([
                'users' => User::all()->select('id', 'name', 'surname', 'email', 'role_id')
            ]);
    }

    public function updateRole($user_id, $role_id) {
        $user = User::find($user_id);
        $user->role_id = $role_id;
        $user->save();
        return response()->json(['message' => 'Rôle mis à jour']);
    }
}
