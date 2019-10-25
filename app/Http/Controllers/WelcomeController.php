<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $this->seo()->setTitle('Welcome');

        return $this->render('welcome');
    }
}
