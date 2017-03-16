<?php


class Modelo
{
    private $licencias;
    private $profesores;
    private $alumnos;
    private $orm;
    private $pdo;
    //$ruta = './db/sqlite:IESPC.sqlite';

    public function __CONSTRUCT(){
        try{
            $this->pdo = new PDO ('mysql:host=localhost;dbname=dblicenses;charset=utf8', 'usuario_proyecto', 'pensarconLOGICA');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->orm = new NotORM($this->pdo);
        }
        catch(Exception $e){
            die ($e->getMessage());
        }
    }
    
    function ObtenerDatos(){
        try
        {
            foreach($this->orm->Alumnos() as $r) {
                $alumno = new Alumnos();
                $alumno->__SET('id_alumno',$r['id_alumno']);
                $alumno->__SET('dni',$r['dni']);
                $alumno->__SET('nombre',$r['nombre']);
                $alumno->__SET('primer_apellido',$r['primer_apellido']);
                $alumno->__SET('segundo_apellido',$r['segundo_apellido']);
                $alumno->__SET('cial',$r['cial']);
                $alumno->__SET('expediente',$r['expediente']);
                $alumno->__SET('telefono',$r['telefono']);
                $alumno->__SET('email',$r['email']);
                $alumno->__SET('clave',$r['clave']);
                $alumno->__SET('url_foto',$r['url_foto']);

                $alumnos[]= $alumno;
            }
            return $alumnos;

        }
        catch(Exeption $e)
        {
            die($e->getMessage());
        }
    }
   /* public function listar()
    {
        try
        {
            $result = array();

            $stm= $this->library->alumnos();

            foreach($stm as $r) {
                $alm = new Alumno();

                $alm->__SET('id', $r['id']);
                $alm->__SET('nombre', $r['nombre']);
                $alm->__SET('apellidos', $r['apellidos']);
                $alm->__SET('telefono', $r['telefono']);

                $result[] = $alm;
            }
            return $result;
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }*/


    /*public function Eliminar($id)
    {
        try{
            $stm = $this->library->alumnos()->where("id = ?",$id)->delete();
            // $stm = $this->pdo->prepare('DELETE FROM alumnos WHERE id = ?');
            // $stm->execute(array($id));
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }*/

    public function AñadirLicencias(Licencias $data)
    //Para cargar xml(Realizar en controlador)->http://web.tursos.com/como-leer-un-archivo-xml-con-php/
    {
        try{
            $stm = $this->orm->licencias();
            $datos = array(
                "nombre"=> $data->__GET('nombre'),//sds
                "clave"=> $data->__GET('clave'),
                "ref_tipo_licencia"=>$data->__GET('ref_tipo_licencia'),
                );
            $stm->insert($datos);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function AñadirProfesores(Profesores $data)
    {
        try{
            $stm = $this->orm->profesores();
            $datos = array(
                "dni"=> $data->__GET('dni'),
                "nombre"=> $data->__GET('nombre'),
                "primer_apellido"=> $data->__GET('primer_apellido'),
                "segundo_apellido"=> $data->__GET('segundo_apellido'),
                "telefono"=> $data->__GET('telefono'),
                "email"=> $data->__GET('email'),
                "tutor"=> $data->__GET('tutor'),
                "ref_departamento"=> $data->__GET('ref_departamento'),
                //EN el controlador asignar los valores siguioentes valores
                /*"fecha" => CURRENT_TIMESTAMP,
                "ref_tipo_licencia"=> 2,*/
                );
            $resultado=$stm->insert($datos);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function AñadirAlumnos(Alumnos $data)
    {
        try{
            $stm = $this->orm->alumnos();
            $datos = array(
                "nombre"=> $data->__GET('nombre'),
                "primer_apellido"=> $data->__GET('primer_apellido'),
                "segundo_apellido"=> $data->__GET('segundo_apellido'),
                "cial"=> $data->__GET('cial'),
                "expediente"=> $data->__GET('expediente'),
                "dni"=> $data->__GET('dni'),
                "telefono"=> $data->__GET('telefono'),
                "movil"=> $data->__GET('movil'),
                "email"=> $data->__GET('email'),
                "clave"=> $data->__GET('clave'),
                "url_foto"=> $data->__GET('url_foto'),
                );
            $resultado=$stm->insert($datos);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    function ObtenerAlumnos(){
        try
        {
            foreach($this->orm->Alumnos() as $r) {
                $alumno = new Alumnos();
                $alumno->__SET('id_alumno',$r['id_alumno']);
                $alumno->__SET('dni',$r['dni']);
                $alumno->__SET('nombre',$r['nombre']);
                $alumno->__SET('primer_apellido',$r['primer_apellido']);
                $alumno->__SET('segundo_apellido',$r['segundo_apellido']);
                $alumno->__SET('cial',$r['cial']);
                $alumno->__SET('expediente',$r['expediente']);
                $alumno->__SET('telefono',$r['telefono']);
                $alumno->__SET('email',$r['email']);
                $alumno->__SET('clave',$r['clave']);
                $alumno->__SET('url_foto',$r['url_foto']);

                $alumnos[]= $alumno;
            }
            return $alumnos;

        }
        catch(Exeption $e)
        {
            die($e->getMessage());
        }
    }



    function Obtener_licencias(){
        try
        {
            foreach($this->orm->licencias() as $r) {
                $licencia = new Licencias();
                $licencia->__SET('id_licencia',$r['id_licencia']);
                $licencia->__SET('nombre',$r['nombre']);
                $licencia->__SET('clave',$r['clave']);
                $licencia->__SET('fecha',$r['fecha_insercion']);
                $licencia->__SET('ref_tipo_licencia',$r['ref_tipo_licencia']);

                $licencias[]= $licencia;
            }
            return $licencias;

        }
        catch(Exeption $e)
        {
            die($e->getMessage());
        }
    }

    /*public function Obtener($id)
    {
        try{
            $alumnos=$this->library->alumnos()->where('id',$id);
            foreach ($alumnos as $r) {
                $alm = new Alumno();

                $alm->__SET('id', $r['id']);
                $alm->__SET('nombre', $r['nombre']);
                $alm->__SET('apellidos', $r['apellidos']);
                $alm->__SET('telefono', $r['telefono']);
            }
            return $alm;
            // $stm = $this->pdo->prepare("SELECT * FROM alumnos where id = ?");
            // $stm->execute(array($id));

            // $r = $stm->Fetch(PDO::FETCH_OBJ);

            //  $alm = new Alumno();

            //  $alm->__SET('id', $r->id);
            //  $alm->__SET('nombre', $r->nombre);
            //  $alm->__SET('apellidos', $r->apellidos);
            //  $alm->__SET('telefono', $r->telefono);

            //  return $alm;

        } catch (Exception $e)
        {
            die($e->getMessage());
        }

    }*/


    /*public function Actualizar(Alumno $data)
    {
        try{
            $actu=$this->library->alumnos()->where('id',$data->__GET('id'));
            foreach ($actu as $r) {
                $datos=array(
                    'nombre'=> $data->__GET('nombre'),
                    'apellidos'=> $data->__GET('apellidos'),
                    'telefono' => $data->__GET('telefono')
                    );
            }
            $actu->update($datos);
            // $stm = $this->pdo->prepare("UPDATE alumnos SET nombre = ?, apellidos = ?, telefono = ?  WHERE id = ?");
            // $stm->execute(array($data->__GET('nombre'),$data->__GET('apellidos'),$data->__GET('telefono'),$data->__GET('id')));
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
    public function getUsuarioByLogin($login){
        return $this->library->alumnos()->where('login',$login)->fetch();
    }*/

}
