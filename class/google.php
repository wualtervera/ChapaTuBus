<?php
	include_once('conexion.php');
	class Google extends Model{

		public function __construct(){ 
     	 	parent::__construct(); 
    	}

	    public function get_lat_lng($value){
			$sql = $this->db->query("SELECT ruta_latitud, ruta_longitud FROM tbl_ruta WHERE ruta_id = '$value' LIMIT 1");
	    	$lat = 0; 
	    	$lng = 0; 
	    	foreach ($sql as $key){
	    		$lat = $key['ruta_latitud'];
	    		$lng = $key['ruta_longitud'];
	    	}	
	    	$array = array('lat' => $lat, 'lng' => $lng);
	    	return $array;
		}
		

		/* PUNTO DE LA RUTA */
		public function get_puntos_lat_lng($value){
	    	$sql = $this->db->query("SELECT punto_latitud, punto_longitud FROM puntos_rutas WHERE ruta_id = '$value' LIMIT 1");
	    	$lat = 0; 
	    	$lng = 0; 
	    	foreach ($sql as $key){
	    		$lat = $key['punto_longitud'];
	    		$lng = $key['punto_longitud'];
	    	}	
	    	$array = array('lat' => $lat, 'lng' => $lng);
	    	return $array;
	    }

	    public function get_stores(){
	    	$sql = $this->db->query("SELECT ruta_id, ruta_nombre FROM tbl_ruta ORDER BY ruta_nombre");
	    	$option = '';
	    	foreach ($sql as $key){
	    		$id = $key['ruta_id'];
	    		$name = $key['ruta_nombre'];
	    		$option .= '<option value="'.$id.'">'.$name.' - B</option>';
	    	}
	    	return $option;
	    }
	}

	if(isset($_POST['value'])){
		$class = new Google;
		//$run = $class->get_lat_lng($_POST['value']);
		$run = $class->get_lat_lng();
		exit(json_encode($run));
	}
?>