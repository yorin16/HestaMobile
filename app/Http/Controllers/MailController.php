<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\validator;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function store(Request $request){

        // send email

        $validator = validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if($validator->fails()){
            return redirect('/#contact')->withErrors($validator);
        }
$bericht = "Bedrijfsnaam: " . request('bedrijf') . "\nNaam: " . request('naam') . "\ntelefoonnummer: " . request('tel') . "\nBericht:\n" . request('bericht');
        Mail::raw($bericht, function($message) {
            $message->to('yorin.meijerink@gmail.com') //aanpassen
                ->from(request('email'))
                ->subject('Website Contact formulier');

        });

        return redirect('/#contact')
            ->with('message', 'Email verzonden.');

    }
}
