<?php

define('APP_ROOT', __DIR__);

include 'lib/router.php';
include 'lib/render.php';

set_view('/', 'index.index');
set_view('/language/br', 'pages.language.br.index');
set_view('/language/en', 'pages.language.en.index');

router_execute();
