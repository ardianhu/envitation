<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    //
    public function store(Request $request)
    {
        Invitation::create([
            'theme_id' => $request->theme_id,
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'location' => $request->location,
            'date' => $request->date,
            'time' => $request->time,
            'url' => $request->url,
            'music' => $request->music,
        ]);
    }
    public function show($url)
    {
        $addition = 'envitation.test/';
        $modifiedUrl = $addition . $url;
        $invitation = Invitation::where('url', $modifiedUrl)->first();
        // dd($invitation);
        if($invitation->theme_id == 1){
            return view('themes.theme0', compact('invitation'));
        }
    }
}
