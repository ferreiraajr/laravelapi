<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Response;

class ApicepController extends Controller
{
    public function index()
    {
        return view('viacep');
    }
    public function limparconsultar()
    {
        session(['consultas' => []]);
        return redirect()->route('apiviacep.index');
    }
    public function consultar(Request $request)
    {
        $cep = $request->input('search');
        $response = Http::get("https://viacep.com.br/ws/{$cep}/json/");
        $data = $response->json();

        $consultas = session('consultas', []);
        $consultas[] = $data;
        session(['consultas' => $consultas]);

        return view('viacep', compact('data','consultas'));
    }
//
    public function exportar()
    {
        $data = session('consultas', []);
        $csvFileName = 'consultas.csv';
        $csvFilePath = storage_path($csvFileName);

        $file = fopen($csvFilePath, 'w');
        fputcsv($file, ['CEP', 'Logradouro', 'Bairro', 'Cidade', 'Estado']);

        foreach ($data as $consulta) {
            fputcsv($file, [
                $consulta['cep'],
                $consulta['logradouro'],
                $consulta['bairro'],
                $consulta['localidade'],
                $consulta['uf'],
            ]);
        }

        fclose($file);

        return Response::download($csvFilePath);
    }
}
