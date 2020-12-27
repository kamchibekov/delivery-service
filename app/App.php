<?php

namespace app;

class App
{

    public function run(string $content = null)
    {
        ob_start();
        include_once 'views/layout/main.html';
        echo ob_get_clean();
    }
}
