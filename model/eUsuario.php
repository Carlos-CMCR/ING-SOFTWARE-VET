<?php

    include_once("conecta.php");
    class Usuario extends Conecta{

		/* MODULO DE SEGURIDAD */

		
		public function VerificarUsuario($log,$pass){
		 $SQL="SELECT * FROM usuario, detalle_rol,rol WHERE num_doc='$log' AND pass_user='$pass' AND estado_cuenta='activo' AND usuario.idusuario=detalle_rol.idusuario AND detalle_rol.idrol=rol.idrol ";
		 $resultado = mysqli_query($this->conectar(),$SQL);
		 $row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
		 $this->desconectar();
			if(is_array($row)){
				/*session_start();*/
				$_SESSION['num_doc']=$row['num_doc'];
				$_SESSION['pass_user']=$row['pass_user'];
				$_SESSION['nombres']=$row['nombres'];
				$_SESSION['estado_cuenta']=$row['estado_cuenta'];
				$_SESSION['rol']=$row['rol'];
				$rol=$row['idrol'];
				return $rol;
			}else{
				return 0;
			}
		}

        public function VerificarLog(){
			$log=$_SESSION["logRec"];
			$SQL="SELECT respuesta FROM usuario WHERE num_doc='$log' and estado_cuenta='activo';";
			$resultado = mysqli_query($this->conectar(),$SQL);
			$row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
			$this->desconectar();
			if(!(isset($row["respuesta"]))){
				return('0');
			}else{
				return($respuesta = $row["respuesta"]);
			}
		}

        public function Modificar($np){
			$log=$_SESSION["logRec"];
			$resp=$_SESSION["respBD"];
			$SQL="UPDATE `usuario` SET `pass_user`='$np' WHERE num_doc='$log' and respuesta='$resp' and estado_cuenta='activo';";
			$resultado = mysqli_query($this->conectar(),$SQL);
			$this->desconectar();
			if($resultado==TRUE){
				return(1);
			
			}else{
				return(0);
			}

		}

		public function ModificarPassword($np){
			$antigua_contra=$_SESSION["contrasena"];
			$login=$_SESSION["user"];
			$SQL="UPDATE `usuario` SET `pass_user`='$np' WHERE pass_user='$antigua_contra' and num_doc='$login';";
			$resultado = mysqli_query($this->conectar(),$SQL);
			$this->desconectar();
			if($resultado==TRUE){
				return(1);
			
			}else{
				return(0);
			}

		}
        
		/* GESTIONAR USUARIO */

		public function obtenerusuarios(){
			$SQL="SELECT usuario.idusuario , usuario.nombres, usuario.apellidos, usuario.num_doc, rol.rol, usuario.estado_cuenta, usuario.fecha_registro, usuario.fecha_modificacion FROM usuario, detalle_rol,rol where usuario.idusuario=detalle_rol.idusuario AND detalle_rol.idrol=rol.idrol ORDER BY usuario.idusuario";
			$resultado = mysqli_query($this->conectar(),$SQL);
			/*$num_registros = mysqli_num_rows($resultado);*/
			$this->desconectar();
		//	$respuesta ->fetch_all(MYSQLI_ASSOC);
			$data = $resultado -> fetch_all(MYSQLI_ASSOC);
     		return $data;
			/*for($i = 0; $i < $num_registros; $i++)
			$row = mysqli_fetch_array($resultado);
			return $row;*/
		}

		public function ObtenerRoles(){
			$SQL = "SELECT * FROM rol ";
			$resultado = mysqli_query($this->conectar(),$SQL);
			$roles = $resultado ->fetch_all(MYSQLI_ASSOC);
			return $roles;
		}

		public function ObtenerUsuarioporID($id){
			$SQL = "SELECT * FROM usuario Where usuario.idusuario='$id' ";
			$resultado = mysqli_query($this->conectar(),$SQL);
			$row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
			$log=$row['num_doc'];
			$pass=$row['pass_user'];
			$SQL="SELECT * FROM usuario, detalle_rol,rol WHERE num_doc='$log' AND pass_user='$pass'  AND usuario.idusuario=detalle_rol.idusuario AND detalle_rol.idrol=rol.idrol ";
			$resultado = mysqli_query($this->conectar(),$SQL);
			$row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
			return $row;
		}

		public function ObtenerRolporID($id){
			$SQL = "SELECT rol.rol FROM detalle_rol,rol WHERE detalle_rol.idrol=rol.idrol and detalle_rol.idusuario='$id'";
			$resultado = mysqli_query($this->conectar(),$SQL);
			$row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
			return $row;
		}

		public function ActualizarUsuario($idusuario,$nombres,$apellidos){
			$SQL = "UPDATE usuario SET nombres='$nombres', apellidos='$apellidos' WHERE idusuario='$idusuario' ";
			$resultado = mysqli_query($this->conectar(),$SQL);
		}

		public function ActualizarRol($idusuario,$idrol){
			$SQL = "SELECT rol.idrol FROM rol WHERE rol='$idrol' ";
			$resultado = mysqli_query($this->conectar(),$SQL);
			$row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
			$idrol=$row['idrol'];
			$SQL = "UPDATE detalle_rol SET idrol='$idrol' WHERE idusuario='$idusuario' ";
			$resultado = mysqli_query($this->conectar(),$SQL);
		}

		public function VerificarUsuarioExistente($num_doc){
			$SQL = "SELECT * FROM usuario WHERE num_doc='$num_doc' ";
			$resultado = mysqli_query($this->conectar(),$SQL);
			$this->desconectar();
			$aciertos = mysqli_num_rows($resultado);
			if($aciertos==1){
				return(1);
			
			}else{
				return(0);
			}
		}

		public function AgregarUsuario($nombres,$apellidos,$num_doc,$pass_user,$respuesta){
			$SQL = "INSERT INTO usuario (nombres,apellidos,pass_user,num_doc,respuesta,estado_cuenta) VALUES ('$nombres','$apellidos','$pass_user','$num_doc','$respuesta','activo')";
			$resultado = mysqli_query($this->conectar(),$SQL);
			$SQL = "SELECT usuario.idusuario FROM usuario WHERE num_doc='$num_doc' ";
			$resultado = mysqli_query($this->conectar(),$SQL);
			$row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
			$idusuario=$row['idusuario'];
			return $idusuario;

		}

		public function AgregarRol($idusuario,$idrol){
			$SQL = "INSERT INTO detalle_rol (idusuario,idrol) VALUES ('$idusuario','$idrol')";
			$resultado = mysqli_query($this->conectar(),$SQL);
		}

		public function CambiarEstadoUsuario($idusuario,$nuevoestado){

			if($nuevoestado=='activo'){
			$SQL = "UPDATE usuario SET estado_cuenta='inactivo' WHERE idusuario='$idusuario' ";
			$resultado = mysqli_query($this->conectar(),$SQL);
			}
			else{
			$SQL = "UPDATE usuario SET estado_cuenta='activo' WHERE idusuario='$idusuario' ";
			$resultado = mysqli_query($this->conectar(),$SQL);
			}
			//var_dump($resultado);
		}

		public function obtenerusuariosfiltrados($filtroestado){
			//	echo $filtroestado;
				$SQL="SELECT * FROM usuario, detalle_rol,rol where usuario.idusuario=detalle_rol.idusuario AND detalle_rol.idrol=rol.idrol AND usuario.estado_cuenta='$filtroestado' ";
				$resultado = mysqli_query($this->conectar(),$SQL);
				$num_registros = mysqli_num_rows($resultado);
				$this->desconectar();
				$data = $resultado ->fetch_all(MYSQLI_ASSOC);
				 return $data;
			}

    }    
?>
