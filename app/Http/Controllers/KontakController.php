<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\TestEmail;
use App\Models\Information;
class KontakController extends Controller
{
    public function index()
    {
        $information = Information::first();
        $kontak = Kontak::all();

        return view('pages.kontak', compact('kontak', 'information'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'nomor_wa' => 'required|string',
            'pesan' => 'required|string',
        ]);

        $formData = $request->all();

        Kontak::create($validatedData);

        Mail::to($formData['email'])->send(new TestEmail($formData));

        Mail::to('1017website@gmail.com')->send(new ContactMail($formData));

        return redirect()->route('kontak.store');
    }
}