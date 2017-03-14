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

    public function AñadirDatos(Licencias $data)
    {
        try{
            $stm = $this->library->alumnos();
            $datos = array(
                "nombre"=> $data->__GET('nombre'),
                "clave"=> $data->__GET('clave'),
                "fecha" => CURRENT_TIMESTAMP,
                "ref_tipo_licencia"=> 2,
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