<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();


dump($request);

dump($request->getPathInfo());

//request.php?nom=lol
dump($request->query->get('nom'));
//échapper les caractères html pour éviter les failles html
echo '<h1>Bonjour <strong>' . $request->query->get('nom','toi').'</strong></h1>';
//idem que plus haut mais sécurisé & pus lisible
$name = $request->query->get('nom','toi');
echo sprintf('Bonjour sécurisé <strong>%s</strong>', htmlspecialchars($name));

dump($request->request->get('bar'));

dump($request->server->get('HTTP_POST'));
