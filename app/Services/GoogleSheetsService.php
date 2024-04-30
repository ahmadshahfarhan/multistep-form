<?php

namespace App\Services;

use Google_Client;
use Google_Service_Sheets;

class GoogleSheetsService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Google_Client();
        $this->client->setClientId(env('GOOGLE_CLIENT_ID'));
        $this->client->setClientSecret(env('GOOGLE_CLIENT_SECRET'));
        $this->client->setRedirectUri(env('GOOGLE_REDIRECT_URI'));
        $this->client->setAccessType('offline');
        $this->client->setScopes(Google_Service_Sheets::SPREADSHEETS);
    }

    public function getClient()
    {
        return $this->client;
    }

    public function getSheetsService()
    {
        return new Google_Service_Sheets($this->client);
    }
}
