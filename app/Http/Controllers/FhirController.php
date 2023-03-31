<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Dcarbone\FHIR\Client\Client;
// use Dcarbone  FHIR Client
use Dcarbone\FHIR\Client\Client;

class FhirController extends Controller
{
    // 
    public function index()
    {
        $client = new Client([
            'base_uri' => 'https://myfhirserver.com/fhir',
            'headers' => [
                'Accept' => 'application/fhir+json',
            ],
            'auth' => ['myusername', 'mypassword'],
        ]);

        $response = $client->search('Patient', [
            'name' => 'John',
            'birthdate' => '1970-01-01',
        ]);

        return $response;
    }
}
