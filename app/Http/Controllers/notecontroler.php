<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return response()->json($notes);
    }

    // Autres méthodes du contrôleur pour les opérations CRUD...
}
