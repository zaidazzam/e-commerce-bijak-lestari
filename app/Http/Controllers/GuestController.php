<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Models\Testimoni;
use Inertia\Inertia;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function landing() {
        $artikels = Artikel::all();
        $testimonis = Testimoni::all();
        return Inertia::render('LandingPage', ['artikels' => $artikels, 'testimonis' => $testimonis]);
    }
}
