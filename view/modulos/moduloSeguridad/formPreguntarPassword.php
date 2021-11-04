<?php
include_once("../shared/formulario.php");


class FormPreguntarPassword extends formulario{

    public function encabezadoShow(){
        $this->encabezadoShowIni("Cambiar Clave | King&Queen","../img/ico.png");
    }

    public function FormPreguntarPasswordShow(){
        ?>
                    <center>
                        <img src="../../img/bannercama.jpg" alt="Banner" width="640" height="180">

                        <br/><br/>  
                        <div class="card bg-light mb-3" style="max-width: 20rem;">
                            <div class="card-header"><h5 class="card-title">Cambiar Clave</h5></div>
                                <div class="card-body">

                                <form action="getPassword.php" method="POST">
                                    <p>Contraseña:</p>
                                    <input type="password" name="passwordUSER" id="passwordUSER"/><br><br/>
                                    <input type="submit" class="btn btn-secondary"  name="btnSiguiente" id="btnSiguiente" value="Siguiente"/>
                                    <input type="submit" class="btn btn-secondary"  name="btnAtras" id="btnAtras" value="Atras"/><br/>
                                </form> 

                                </div>
                        </div>
                    </center>
        <!--
            <center>
                <img src="../img/bannercama.jpg" alt="Banner Home" width="640" height="180">
                <form action="../Controller/getPassword.php" method="POST">
                    <p>Contraseña:</p><br/>
                    <input type="text" name="passwordUSER" id="passwordUSER"/><br><br/>
                    <input type="submit" name="btnSiguiente" id="btnSiguiente" value="Siguiente"/>
                    <input type="submit" name="btnAtras" id="btnAtras" value="Atras"/><br/>
                </form>    
            </center>-->
            

        <?php
        $this-> pieShow();
        
    }

}
?>