<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
   


    public function upload(Request $request)
    {
        $request->validate([
            'document' => 'required|mimes:doc,docx,pdf|max:2048',
        ]);
    
        $file = $request->file('document');
        if ($file) {
            $originalName = $file->getClientOriginalName();
            $file->storeAs('public', $originalName);
        }
    
        return Document::create([
            'name' => $request->file('document')->getClientOriginalName(),
        ]);
    }


    public function getDocuments() {

        try {
            $reponse = Document::all();

         return response()->json($reponse);
        } catch (\Throwable $th) {
            throw $th->getMessage();
        }
    }
}

