<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function index()
    {
        $users = User::with('userDomicilio')->get();
        $data = array();
        if (count($users) > 0) {
            $data = $users->map(function ($user) {
                $age = Carbon::parse($user->fecha_nacimiento)->age;
                return [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'edad' => $age,
                    'domicilio' => $user->userDomicilio->domicilio,
                    'numero_exterior' => $user->userDomicilio->numero_exterior,
                    'colonia' => $user->userDomicilio->colonia,
                    'cp' => $user->userDomicilio->cp,
                    'ciudad' => $user->userDomicilio->ciudad,
                    // 'user_domicilio' => (object)[
                    // ]
                ];
            });
        }
        return response()->json($data);
    }
}
