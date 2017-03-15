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

$app->get('/upload', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Aqui se haran los uploads");

    // Render index view
    return $this->view->render($response,'upload.twig.php');
})->setName('Upload');

$app->post('/upload', function ($request, $response, $args)  {
    //<input type="file">
    if($_FILES['fichero']['error']==0){
        if($_FILES['fichero']['type']=='text/xml'){
              $documento= simplexml_load_file($_FILES['fichero']['name']);
               $alum-> __SET('id',     $_REQUEST['id']);
    $alum-> __SET('nombre',     $_REQUEST['Nombre']);
    $alum-> __SET('apellidos',     $_REQUEST['Apellidos']);
    $alum-> __SET('telefono',     $_REQUEST['Telefono']);

    $model->Actualizar($alum);

              $documento->YourKey->Product_Key[0]['Name'];
        }elseif ($_FILES['fichero']['type']=='text/csv') {
            
        }else{
            //error
        }
        return $this->view->render($response,'upload.twig.php');
    }else{
         $data = array('error' => 'Error: fallo al subir el fichero');
        $body = $this->view->fetch('upload.twig.php', $error);
        return $response->write($body); 
    }
    
});
