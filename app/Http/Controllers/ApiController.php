<?php

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function sendDataToSheetDB(Request $request)
    {
        // Mengambil nilai dari inputan formulir
        $name = $request->input('name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $address = $request->input('address');

        // Menyiapkan data untuk dikirim
        $data = [
            'data' => [
                'id' => "INCREMENT",
                'name' => $name , // Menggabungkan nama depan dan nama belakang
                'last_name' => $last_name, // Menggabungkan nama depan dan nama belakang
                'email' => $email,
                'phone' => $phone,
                'address' => $address
            ]
        ];

        // Membuat instance dari GuzzleHttp Client
        $client = new Client([
            'headers' => [
                'Content-Type' => 'application/json'
            ]
        ]);

        // Mengirim data dengan GuzzleHttp
        $response = $client->post('https://sheetdb.io/api/v1/r7ek69vtuei1p', [
            'json' => $data,
        ]);

        // Mendapatkan respons dari SheetDB
        return $response->getBody()->getContents();
    }
}
