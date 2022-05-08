<?php
namespace controllers;

use controllers\IController;
use db\ConexionDB;
use models\Estudiante;

class EstudianteController implements IController
{

    public function list()
    {
        $sql = "select * from estudiantes";
        $conexionDB = new ConexionDB();
        $resultQuery = $conexionDB -> getResultQuery($sql);
        $estudiantes = [];
        if ($resultQuery->num_rows > 0) {
            while($row = $resultQuery->fetch_assoc()){
                $estudiante = new Estudiante();
                $estudiante->set('id',$row['id']);
                $estudiante->set('codigo',$row['codigo']);
                $estudiante->set('nombres',$row['nombres']);
                $estudiante->set('apellidos',$row['apellidos']);
                $estudiante->set('edad',$row['edad']);

                array_push($estudiantes, $estudiante);
            }
        }
        $conexionDB->close();
        return $estudiantes;
    }

    public function detail($id)
    {
    }

    public function create($estudianteModel)
    {
    }

    public function update($d,$estudaiantesModel)
    {
    }

    public function delete($sid)
    {
    }
}