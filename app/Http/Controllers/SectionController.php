<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    //
    public function createsection (Request $req){
        $values =   $req->validate([
                'section' => 'required|string|max:255'
            ]);

            Section::create($values);

           return redirect('/section')->with('success','Section created successfully');

        }
}
