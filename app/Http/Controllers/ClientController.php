<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Requests\ClientStoreRequest;

class ClientController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ClientStoreRequest $request)
    {
        return Client::create($request->all());
    }

}
