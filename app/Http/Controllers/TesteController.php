<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

    class TesteController extends Controller{


        public function index($nome){


            return view("teste.index",['nome'=>$nome]);

        }

        public function notas(){

            $notas =  [
                0 => 'Anotação 1',
                1 => 'Anotação 2',
                2 => 'Anotação 3',
                3 => 'Anotação 4',
                4 => 'Anotação 5',
            ];

            return view('teste.notas',compact('notas'));
        }




//        public function posts(){
//
//            $posts = [
//
//                0 => 'Meu primerio post  Neste Blog sera sobre
//                     As tecnologias usadas em js no ano de 2016
//
//                ',
//                1 => 'lorem'
//            ];
//
//            return view('teste.posts',compact('posts'));
//
//
//        }


    }
