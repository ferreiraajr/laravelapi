<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiGithubController extends Controller
{
    public function index()
    {
        return view('github');
    }
    public function show(Request $request)
    {
        $request->validate([
            'search' => 'required|string|', // Validação básica
        ]);
        $username = $request->input('search');
        $url = "https://api.github.com/users/{$username}";


        $options = [
            'http' => [
                'method' => 'GET',
                'header' => [
                    'User-Agent: PHP'
                ]
            ]
        ];

        $context = stream_context_create($options);
        $response = file_get_contents($url, false, $context);

        if ($response === false) {
            return view('github', ['error' => 'Erro ao consultar o CEP']);
        }

        $address = json_decode($response);

        if (isset($address->erro)) {
            return view('github', ['error' => 'CEP não encontrado']);
        }

        $user = json_decode($response);

        return view('github', compact('user'));
    }
}
