<?php

namespace App\Http\Controllers;

use App\Models\Employee;
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
        Employee::create($request->all());

        // Kirim data ke SheetDB
        $client = new Client([
            'headers' => [
                'Content-Type' => 'application/json'
            ]
        ]);

        $data = [
            'data' => [
                'id' => "INCREMENT",
                'name' => $request->input('name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address')
            ]
        ];

        $response = $client->post('https://sheetdb.io/api/v1/r7ek69vtuei1p', [
            'json' => $data,
        ]);

        // Redirect kembali
        return back();
    }
}
