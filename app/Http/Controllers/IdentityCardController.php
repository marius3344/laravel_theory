<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IdentityCard;

class IdentityCardController extends Controller
{
    public function index()
    {
        $identity = IdentityCard::with(['user'])->get();

        foreach ($identity as $value) {
            echo 'Identity ID: '. $value->identity_number . '<br>';
            echo 'Identity ID Name: '. $value->user->name . '<br>';
            echo '---------------------------------------------------<br>';
        }
    }
}
