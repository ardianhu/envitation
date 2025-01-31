<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    //
    public function store(Request $request)
    {
        Invitation::create([
            'theme_id' => $request->theme_id,
            'title' => $request->title,
            'male' => $request->male,
            'female' => $request->female,
            'location' => $request->location,
            'date' => $request->date,
            'time' => $request->time,
            'url' => $request->url,
            'music' => $request->music,
        ]);
    }
    public function show($url, $receiver)
    {
        $addition = 'envitation.test/';
        $modifiedUrl = $addition . $url;
        $invitation = Invitation::where('url', $modifiedUrl)->first();
        $penerima = ucfirst($receiver);
        // dd($invitation);
        if ($invitation) {
            $date = Carbon::parse($invitation->date);
            Carbon::setLocale('id');
            $formattedDate = $date->translatedFormat('l, d F Y');
            $day = $date->format('l');
            if ($invitation->theme_id == 1) {
                return view('themes.theme1', compact('invitation', 'penerima', 'formattedDate'));
            }
        } else {
            return abort('404');
        }
    }
}
