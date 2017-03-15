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

        $nombre=$_FILES['fichero']['name'];
        $tamanio = $_FILES['fichero']['size'];

        if($_FILES['fichero']['type']=='text/xml'){
            $documento= simplexml_load_file($nombre);
             foreach ($documento->YourKey->Product_Key->Key->item as $key) {
                  $lcn-> __SET('nombre',$documento->YourKey->Product_Key[0]['Name']); 
                  $lcn->____SET('clave',$documento->YourKey->Product_Key[0]->$key);
                  $lcn->__SET('ref_tipo_licencia',2);
                  $model->AñadirLicencias($lcn);
               }  

        }elseif ($_FILES['fichero']['type']=='text/csv') {
            $archivotmp = $_FILES['fichero']['tmp_name'];
            //cargamos el archivo
            $lineas = file($archivotmp);

            $i=0;
 
            //Recorremos el bucle para leer línea por línea
            foreach ($lineas as $linea_num => $linea)
            { 
               //abrimos bucle
               /*si es diferente a 0 significa que no se encuentra en la primera línea 
               (con los títulos de las columnas) y por lo tanto puede leerla*/
               if($i != 0) 
               { 
                   //abrimos condición, solo entrará en la condición a partir de la segunda pasada del bucle.
                   /* La funcion explode nos ayuda a delimitar los campos, por lo tanto irá 
                   leyendo hasta que encuentre un ; */
                   $datos = explode(";",$linea);
             
                   //Almacenamos los datos que vamos leyendo en una variable;

                  $prof-> __SET('ref_departamento',trim($datos[0])); 
                  $prof-> __SET('dni',trim($datos[1]));
                  $prof-> __SET('nombre',trim($datos[2]));
                  $prof-> __SET('primer_apellido',trim($datos[3])); 
                  $prof-> __SET('segundo_apellido',trim($datos[4]));
                  $prof-> __SET('telefono',trim($datos[5]));
                  $prof-> __SET('email',trim($datos[7]));
                  $prof-> __SET('email',trim($datos[9]));     
                  $model->AñadirLicencias($prof);
               }
             
               /*Cuando pase la primera pasada se incrementará nuestro valor y a la siguiente pasada ya 
               entraremos en la condición, de esta manera conseguimos que no lea la primera línea.*/
               $i++;
               //cerramos bucle
            }
        }else{
            //errorvdvd
        }
        return $this->view->render($response,'upload.twig.php');
    }
    
});

