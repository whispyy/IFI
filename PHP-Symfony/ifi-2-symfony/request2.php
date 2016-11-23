<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$name = htmlspecialchars($request->query->get('nom','toi'));

$response = new Response(<<<HTML
<html>
  <body>Bonjour $name</body>
</html>
HTML
);

$response->send();
