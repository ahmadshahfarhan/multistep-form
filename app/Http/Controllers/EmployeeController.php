<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Multi_Step;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('website.home.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Simpan data ke database
        // Multi_Step::create($request->all());

        // Kirim data ke SheetDB
        $client = new Client([
            'headers' => [
                'Content-Type' => 'application/json'
            ]
        ]);

        $data = [   
            'data' => [
                'id' => "INCREMENT",
                'Do you own or rent a house?' => $request->input('Q1'),
                'Do you already have solar panels?' => $request->input('Q2'),
                'How old is your existing solar system?' => $request->input('Q3'),
                'Why are you interested in solar battery?' => $request->input('Q4'),
                'How much is your quarterly electricity bill?' => $request->input('Q5'),
                'Whats the age of your home?' => $request->input('Q6'),
                'Whats your first name?' => $request->input('Q7'),
                'Whats your last name?' => $request->input('Q8'),
                'Whats your email address?' => $request->input('Q9'),
                'Whats your mobile phone number?' => $request->input('Q10')
            ]
        ];

        $response = $client->post('https://sheetdb.io/api/v1/r7ek69vtuei1p', [
            'json' => $data,
        ]);

        // Redirect kembali
        return back();
    }
}
