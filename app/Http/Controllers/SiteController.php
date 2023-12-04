<?php

namespace App\Http\Controllers;

use DateInterval;
use DateTime;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
    }

    public function ex1()
    {
        $pessoas = [
            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'nome' => 'Alessandro',
                'birth' => '29/01/90',
                'idade' => 29
            ],

            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'nome' => 'Bonieky',
                'birth' => '10/11/1933',
                'idade' => 90
            ],

            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'nome' => 'Maria',
                'birth' => '01/01/2020',
                'idade' => 2
            ]
        ];

        $data['pessoas'] = $pessoas;

        // Aqui poderia ser criada uma lógica, buscar dados, validar usuário...
        return view('ex1', $data);
    }

    public function ex2()
    {

        $url = 'https://i.pravatar.cc/150?img=';

        $data['url'] = $url;

        return view('ex2', $data);
    }

    public function incluir()
    {
        return view('include');
    }

    public function components()
    {
        return view('comp');
    }

    public function layout()
    {
        return view('site');
    }

    public function layout2()
    {
        return view('site2');
    }
}
