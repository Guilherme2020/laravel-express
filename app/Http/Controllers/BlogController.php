<?php
/**
 * Created by PhpStorm.
 * User: grodrigues
 * Date: 24/10/16
 * Time: 12:47
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function posts(){

        $posts = [

            0 => '.Meu primerio post  Neste Blog sera sobre
                     As tecnologias usadas em js no ano de 2016

                ',
            1 => '.Brazil JS em 2016',

            2 => 'Eventos

                Organizamos e fazemos a curadoria de uma série de eventos em todo Brasil. Desde que a primeira BrazilJS Conf aconteceu, em 2011, mais de 50 eventos relacionados surgiram e acontecem todo ano no Brasil. Isso mostra o poder e engajamento de toda comunidade brasileira.

                Conteúdo

                Levamos conteúdo de qualidade para toda a comunidade. Através da BrazilJS Weekly, artigos no portal, vídeos no Youtube, screencasts, cursos, etc, é possível estar sempre atualizado com o que existe de novo no mundo Front-end, além de se profissionalizar, tudo isso com o selo de qualidade BrazilJS.

                Comunidade e Open-source

                Sem comunidade, não existe a BrazilJS. Estamos sempre focados em ajudar e fomentar o crescimento saudável da comunidade JavaScript no Brasil. Amamos e acreditamos no Open-source, por isso, sempre que possível, desenvolvemos projetos que possam ajudar outros desenvolvedores.'
        ];

        return view('blog.posts',compact('posts'));


    }



}