<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    /**
     * Affiche la liste des notes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::all();
        return response()->json($notes);
    }

    /**
     * Affiche une note spécifique.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note = Note::findOrFail($id);
        return response()->json($note);
    }

    /**
     * Enregistre une nouvelle note.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ID_utilisateur' => 'required',
            'titre' => 'required',
            'topic_id' => 'required',
            'description' => 'required',
            'publication_date' => 'required',
            'mot_cle' => 'required',
            'rating' => 'numeric|min:0|max:5' // Assurez-vous que le rating est entre 0 et 5
        ]);

        $note = Note::create($request->all());
        return response()->json($note, 201);
    }

    /**
     * Met à jour une note spécifique.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $note = Note::findOrFail($id);

        $request->validate([
            'ID_utilisateur' => 'required',
            'titre' => 'required',
            'topic_id' => 'required',
            'description' => 'required',
            'publication_date' => 'required',
            'mot_cle' => 'required',
            'rating' => 'numeric|min:0|max:5' // Assurez-vous que le rating est entre 0 et 5
        ]);

        $note->update($request->all());
        return response()->json($note, 200);
    }

    /**
     * Supprime une note spécifique.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Note::findOrFail($id);
        $note->delete();
        return response()->json(null, 204);
    }
}
