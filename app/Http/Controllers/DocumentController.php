<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
   


        public function upload(Request $request) {

            


            $file = $request->file('document');


            if ($file) {
                $originalName = $file->getClientOriginalName();

                $file->storeAs('public', $originalName);

            
            }



            return Document::create([
                'name'=>$request->file('document')->getClientOriginalName(),

            ]);




        }
}
