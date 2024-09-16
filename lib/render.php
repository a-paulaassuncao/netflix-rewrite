<?php

function render_view(string $view_path, ?array $args = [])
{
    extract($args, EXTR_OVERWRITE);
    include APP_ROOT . "/pages/" . str_replace(".", DIRECTORY_SEPARATOR, $view_path) . ".php";
}

function set_view(string $route, string $view_path)
{
    set_route('GET', $route, fn($data) => render_view($view_path, $data));
}
