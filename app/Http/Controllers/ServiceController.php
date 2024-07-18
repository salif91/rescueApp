<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        // Simuler une liste de services pour l'exemple
        $services = [
            ['name' => 'Police', 'number' => '123-456-7890'],
            ['name' => 'Sapeur', 'number' => '987-654-3210'],
            ['name' => 'Gendarmerie', 'number' => '456-789-1234'],
            ['name' => 'Garde Nationale', 'number' => '456-789-1234'],
            ['name' => 'Gendarmerie', 'number' => '456-789-1234'],
            ['name' => 'Gendarmerie', 'number' => '456-789-1234'],
            ['name' => 'Gendarmerie', 'number' => '456-789-1234'],
            ['name' => 'Gendarmerie', 'number' => '456-789-1234'],
        ];

        return view('services.index', compact('services'));
    }
}
