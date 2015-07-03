<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Http\Requests;
use App\Http\Controllers\Controller;

const DEFAULT_URL = 'https://svet.firebaseio.com/';
const DEFAULT_TOKEN = 'NQugmpF7I7DzAQQuIKN5V1g4pgaLXDxYixaLS5wW';


class ArticleCtrl extends Controller
{
    public function index($articleKey)
    {
        $firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);
        $articleText = 'This is my art';

        $article = $firebase->get('/articles/-Jt9tZ_Cmpi98Tn_wQeE');
        return View::make("article.index", compact('article'));

    }

}
