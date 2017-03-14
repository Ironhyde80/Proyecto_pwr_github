<?php
// Routes

$app->get('/', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.php', $args);
})->setName('Inicio');

$app->get('/acercade', function ($request, $response, $args) use ($app){
    $fecha = date('l dS \o\f F Y h:i:s A');
    $data = array('nombre' => 'Ayoze Pacheco y Gustavo Lopez Garcia',
                  'descripcion' => 'Aplicacion orientada a la adminitración de licencias para alumnos por parte de los profesores', 
                  'fecha' =>$fecha);
    $body = $this->view->fetch('acercade.twig.php', $data);
    return $response->write($body); 
})->setName('Acerca_de');

$app->get('/upload', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Aqui se haran los uploads");

    // Render index view
    return $this->view->render($response,'upload.twig.php');
})->setName('Upload');

$app->get('/login', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Aqui se haran los login");

    // Render index view
    return $this->view->render($response,'login.twig.php');
})->setName('Login');

$app->get('/logout', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Aqui se haran los logout");

    // Render index view
    return $this->view->render($response,'logout.twig.php');
})->setName('Logout');

//Agregar ficheros
$app->get('/agregarFichero', function ($request, $response, $args) {
    // Render index view
    return $this->renderer->render($response, 'agregarFichero.twig.php', $args);
});

$app->post('/agregarFichero', function ($request, $response, $args) {
    $nombreFichero=$request->getParam('nombreFichero');
    if(preg_match(""))
    return $this->renderer->render($response, 'agregarFichero.twig.php', $args);
});

