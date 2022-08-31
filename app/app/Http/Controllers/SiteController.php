<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        echo 'Conteúdo dinâmico - Home';
    }

    public function sobre()
    {
        $soma = 10 + 9;
        echo "Conteúdo dinâmico sobre $soma";
    }

    public function contato()
    {
        echo "Conteúdo dinâmico - Contato";
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
        echo $servicos[$id]['nome'];
        echo '<br>';
        echo $servicos[$id]['descricao'];
    }
}
