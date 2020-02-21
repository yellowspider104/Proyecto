<?php 
include_once('model/conexionbd.php');

class Proyecto extends Model{

	public $id_proyecto;
	public $nombre_proyecto;
	public $descripcion_proyecto;
	public $fecha_inicio_proyecto;
	public $fecha_termino_proyecto;
	public $estado_proyecto;
	public $encargado_proyecto;


	public function __construct(){ 
      parent::__construct(); 
    }

    public function get_proyectos(){ 
      $sql = $this->db->query("SELECT * FROM proyectos");  
      $html = '';
      foreach ($sql->fetch_all(MYSQLI_ASSOC) as $key){
        $html .= '<tr>
                    <td>'.$key['id_proyecto'].'</td>
                    <td>'.$key['nombre_proyecto'].'</td>
                    <td>'.$key['descripcion_proyecto'].'</td>
                    <td>'.$key['fecha_inicio_proyecto'].'</td>
                    <td>'.$key['fecha_termino_proyecto'].'</td>
                    <td>'.$key['estado_proyecto'].'</td>
                    <td>'.$key['encargado_proyecto'].'</td>
                    </td>
                  </tr>';
      }
      return $html;
   	} 
}




 ?>