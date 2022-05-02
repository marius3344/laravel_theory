<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IdentityCard;

class IdentityCardController extends Controller
{
    public function index()
    {
        $identity = IdentityCard::with(['user'])->get();

        dd($identity);
    }
}
