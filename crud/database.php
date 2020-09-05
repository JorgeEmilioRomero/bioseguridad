<?php
	class Database{
		private $con;
		private $connectstr_dbhost = '127.0.0.1';
        private $connectstr_dbusername = 'azure';
        private $connectstr_dbpassword = '6#vWHD_$';
        private $connectstr_dbname = 'localdb';

		function __construct(){
			$this->connect_db();
		}
		public function connect_db(){
			foreach ($_SERVER as $key => $value) {
                if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
                    continue;
                }
            $this->connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
            $this->connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
            $this->connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
            $this->connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
            }
            
            $this->con = mysqli_connect($this->connectstr_dbhost, $this->connectstr_dbusername, $this->connectstr_dbpassword,$this->connectstr_dbname);
           
            if($this->con->connect_errno){
                echo 'Fallo al conectarse con MySQL: ' . $this->mysqli->connect_error;
            }
		}
		
		public function sanitize($var){
			$return = mysqli_real_escape_string($this->con, $var);
			return $return;
		}
		
		public function read(){
			$sql = "SELECT * FROM contacto";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}
		
		public function single_record($id){
			$sql = "SELECT * FROM contacto where idContacto='$id'";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_object($res );
			return $return ;
		}
		public function update($nombre,$apellido,$correo,$telefono,$ciudad,$descripcion,$estado, $id){
			$sql = "UPDATE contacto SET nombre='$nombre', apellido='$apellido', correo='$correo', telefono='$telefono', ciudad='$ciudad', descripcion='$descripcion', estado='$estado'  WHERE idContacto=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		public function delete($id){
			$sql = "DELETE FROM contacto WHERE idContacto=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
	}
