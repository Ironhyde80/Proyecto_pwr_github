<?php
namespace models\Model;

use lib\Database;
use lib\Response;

class Modelo
{
    private $db;
    private $licencias;
    private $profesores;
    private $alumnos;
    
    public function __CONSTRUCT()
    {
        $this->db = Database::StartUp();
        $this->response = new Response();
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
            $stm = $this->licencias->licencias();
            $datos = array(
                "nombre"=> $data->__GET('nombre'),
                "clave"=> $data->__GET('clave'),
                "fecha" =>  $data->__GET('fecha'),
                "ref_tipo_licencia"=>$data->__GET('ref_tipo_licencia'),
                );
            $resultado=$stm->insert($datos);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function AñadirProfesores(Profesores $data)
    {
        try{
            $stm = $this->profesores->profesores();
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
            $stm = $this->alumnos->alumnos();
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