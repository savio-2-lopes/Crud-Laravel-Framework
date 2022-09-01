<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /** 
     * Liste os clientes
     * 
     * @return View
     */
    public function index(): View
    {
        $clients = Client::get();
        return view('clients.index', [
            'clients' => $clients
        ]);
    }

    /** 
     * Mostra um cliente
     * 
     * @param integer $id
     * @return View
     */
    public function show(int $id): View
    {
        $client = Client::find($id);
        return view('clients.show', [
            'client' => $client
        ]);
    }

    /** 
     * Exibe o formulário de criação
     * 
     * @return View
     */
    public function create(): View
    {
        return view('clients.create');
    }

    /** 
     * Cria um cliente no banco de dados
     * 
     * @params Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $dados = $request->except('_token');
        Client::create($dados);
        return redirect('/clients');
    }

    /** 
     * Mostra o formulário para edição
     * 
     * @params integer $id
     * @return View
     */
    public function edit(int $id): View
    {
        $client = Client::find($id);
        return view('clients.edit', [
            'client' => $client
        ]);
    }

    /** 
     * Atualiza o cliente no banco de dados
     * 
     * @params integer $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(int $id, Request $request): RedirectResponse
    {
        $client = Client::find($id);
        $client->update([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'observacao' => $request->observacao
        ]);
        return redirect('/clients');
    }

    /** 
     * Apaga um cliente no banco de dados
     * 
     * @params integer $id
     * @return RedirectResponse
     */
    public function destroy(int $id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect('/clients');
    }
}
