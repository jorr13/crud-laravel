<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Http\Requests\ClientRequest;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::orderBy('id', 'DESC')->paginate();
        return view('clients.index', compact('clients'));
    }

    public function show($id)
    {
        $clients = Client::find($id);
        return view('clients.show', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(ClientRequest $request)
    {
        {
            $clients = new Client;
            $clients->cedula =$request->cedula;
            $clients->name =$request->name;
            $clients->apellido =$request->apellido;
            $clients->telefono =$request->telefono;
            $clients->email =$request->email;
            $clients->fecha_nac =$request->fecha_nac;
            $clients->status =$request->status;
            
            $clients = $clients->save();
            return redirect()->route('clients.index')->with('info', 'El Cliente fue guardado con exito');
        }
    }


    public function edit($id)
    {
        $clients = Client::find($id);
        return view('clients.edit', compact('clients'));
    }
    public function update(ClientRequest $request, $id)
    {
        $clients = Client::find($id);
        $clients->cedula =$request->cedula;
        $clients->name =$request->name;
        $clients->apellido =$request->apellido;
        $clients->telefono =$request->telefono;
        $clients->email =$request->email;
        $clients->fecha_nac =$request->fecha_nac;
        $clients->status =$request->status;
        
        $clients = $clients->save();
        return redirect()->route('clients.index')->with('info', 'El Cliente fue actualizado con exito');
    }

    public function destroy($id)
    {
        $clients = Client::find($id);
        $clients = $clients->delete();
        return back()->with('info', 'El Cliente fue eliminado con exito');
    }
}
