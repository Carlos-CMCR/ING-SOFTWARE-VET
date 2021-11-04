<?php
    include_once("../shared/formulario.php");

    class formCambiarPassword extends formulario
    {

        public function EncabezadoShow(){
            $this -> encabezadoShowIni("Recordar Contraseña | King&Queen","../img/ico.png");
        }

        public function FormCambiarPassword(){
            ?> 
                <center>
                    <img src="../view/img/bannercama.jpg" alt="Banner" width="600" height="140">
                    <br/><br/>
                    <div  class="card bg-light mb-3" style="max-width: 20rem;">
                        <div class="card-header"><h5 class="card-title">Recuperar contraseña</h5></div>
                            <div class="card-body">

                                <form action="getCoincidirPassword.php" method="POST">
                                <p>Nueva Contraseña:</p>
                                <input type="text" value="" name="new_password" id="new_password"/><br/><br/>
                                <p>Repita Contraseña:</p>
                                <input type="text" value="" name="repet_password" id="repet_password"/><br/><br/>

                                <input type="submit" class="btn btn-secondary" name="btnActualizar" id="btnActualizar" value="Actualizar"/>
                                </form>

                        </div>
                    </div>
                </center> 
            <?php

            $this-> pieShow();

        }
    }
?>