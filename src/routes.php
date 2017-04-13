<?php
// Routes
$aln = new Alumnos();
$lcn = new Licencias();
$prof = new Profesores();
$model = new Modelo();


$app->get('/', function ($request, $response, $args) use($model,$lcn,$aln) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");
    $data= array('alumnos' => $model->ObtenerAlumnos(),
        'alumno' => $aln);
    // Render index view
    return $this->view->render($response,'index.php',$data);
})->setName('Inicio');

$app->get('/acercade', function ($request, $response, $args) use ($app){
    $fecha = date('l dS \o\f F Y h:i:s A');
    $data = array('nombre' => 'Ayoze Pacheco Herrera y Gustavo Lopez Garcia',
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
    if($_FILES['fichero']['error']==0){

        $nombre=trim($_FILES['fichero']['name']);
        $temporal= $_FILES['fichero']['tmp_name'];
        $subidos= 'C:\wamp64\www\Proyecto_pwr_github\\';

        move_uploaded_file ( (string)$temporal , $subidos.$nombre );

        if($_FILES['fichero']['type']=='text/xml'){
            $documento= simplexml_load_file($subidos, $nombre);

             foreach ($documento->Product_Key->Key as $k) {
                  $lcn->__SET('nombre',$documento->Product_Key['Name']);
                  //$lcn-> __SET('nombre',(string)$k['Name']);
                  $lcn->__SET('clave',(string)$k);
                  $lcn->__SET('ref_tipo_licencia',2);
                  if($model->ComprobarLicencias($lcn)==false){
                        $model->AñadirLicencias($lcn);
                  }
               }
        }else{
            $lineas = file($subidos.$nombre);
            // print_r($lineas);
            // die();
            $i=0;
            foreach ($lineas as $linea_num => $linea)
            {
              $datos = explode(";",$linea);
                if($datos[0]=="Departamento"){ //Fichero de profesores
                  if($i != 0)
                   {
                    if($datos[0]=='Informática'){
                        $prof-> __SET('ref_departamento',1);
                    }
                      $prof-> __SET('dni',trim($datos[1]));
                      $prof-> __SET('nombre',trim($datos[2]));
                      $prof-> __SET('primer_apellido',trim($datos[3]));
                      $prof-> __SET('segundo_apellido',trim($datos[4]));
                      $prof-> __SET('telefono',trim($datos[5]));
                      $prof-> __SET('email',trim($datos[7]));
                      if(trim($datos[9]) != ''){
                        $prof-> __SET('tutor',1);
                      }else{
                        $prof-> __SET('tutor',0);
                      }
                      if($model->ComprobarProfesores($prof)==false){
                            $model->AñadirProfesores($prof);
                      }
                   }
                }else if(($datos[0]=="Grupo Clase")){ //Fichero de alumnos
                  if($i != 0)
                   {
                      $aln-> __SET('dni',trim($datos[8]));
                      $aln-> __SET('nombre',trim($datos[3]));
                      $aln-> __SET('primer_apellido',trim($datos[4]));
                      $aln-> __SET('segundo_apellido',trim($datos[5]));
                      $aln-> __SET('cial',trim($datos[7]));
                      $aln-> __SET('expediente',trim($datos[6]));
                      $aln-> __SET('telefono',trim($datos[8]));
                      $aln-> __SET('email',trim($datos[9]));
                      $aln-> __SET('url_foto','C:\wamp64\www\Proyecto_pwr_github\media\fotos\\'.trim($datos[7]).'.jpg');
                      if($model->ComprobarAlumnos($aln)==false){
                            $model->AñadirAlumnos($aln);
                      }
                   }
                }else{
                  print_r('ERROR: No se ha introducido un archivo válido');
                }
              $i++;
            //cerramos bucle
            }
        }
        $data = array('exito' => "Correcto");
        return $this->view->render($response,'upload.twig.php',$data);
    }
});

$app->get('/lista', function ($request, $response, $args) {
  $this->logger->info("Slim-Skeleton '/lista' route");
  $data= array('alumnos' => $model->ObtenerAlumnos(),
      'alumno' => $aln);
  // Render index view
  return $this->view->render($response,'index.php',$data);
})->setName('Lista');
