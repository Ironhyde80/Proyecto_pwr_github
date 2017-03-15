<?php
// Routes
$aln = new Alumnos();
$lcn = new Licencias();
$prof = new Profesores();
$model = new Modelo();


$app->get('/', function ($request, $response, $args) use($model) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");
    $data= array('listaAlumnos' => $model->prueba());
    // Render index view
    return $this->view->render($response,'index.php');
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

$app->post('/upload', function ($request, $response, $args)  use ($aln, $model, $prof, $lcn){
    //<input type="file">
    if($_FILES['fichero']['error']==0){
        if($_FILES['fichero']['type']=='text/xml'){
            $documento= simplexml_load_file($_FILES['fichero']['name']);
             foreach ($documento->YourKey->Product_Key[0]->Key->item as $key) {
                  $lcn-> __SET('nombre',$documento->YourKey->Product_Key[0]['Name']); 
                  $lcn->____SET('clave',$documento->YourKey->Product_Key[0]->$key);
                  $lcn->__SET('ref_tipo_licencia',2);
                  $model->AñadirLicencias($lcn);
               }  
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
