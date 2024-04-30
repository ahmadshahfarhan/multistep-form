<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleSheetsService;
use App\Http\Controllers\Controller;

class SheetController extends Controller
{
    protected $googleSheetsService;

    public function __construct(GoogleSheetsService $googleSheetsService)
    {
        $this->googleSheetsService = $googleSheetsService;
    }

    public function readGoogleSheet()
    {
        $sheetsService = $this->googleSheetsService->getSheetsService();
        $spreadsheetId = '1n-yvJ14TOAUFO8regIMYnGpOAMPrclfmd2DtWiifPDE';
        $range = 'Sheet1!A1:D';
        $response = $sheetsService->spreadsheets_values->get($spreadsheetId, $range);
        $values = $response->getValues();
        return $values;
    }
}
