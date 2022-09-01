<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function sobre()
    {
        return view('sobre');
    }

    public function contato()
    {
        return view('contato');
    }

    public function servico(int $id)
    {
        $servicos = [
            1 => [
                'nome' => 'Lavagem de roupa',
                'descricao' => 'Descrição muito longa..'
            ],
            2 => [
                'nome' => 'Lavagem de Coberta',
                'decricao' => 'Descrição muito longa...'
            ],
            3 => [
                'nome' => 'Lavagem de Urso',
                'decricao' => 'Descrição muito longa...'
            ],
        ];
        return view('servico', [
            'servico' => $servicos[$id]
        ]);
    }
}
