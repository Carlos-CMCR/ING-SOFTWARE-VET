<?php
    include_once("../shared/formulario.php");
/*formCambiarPasswordCC*/
    class formCambiarClave extends formulario
    {

        public function EncabezadoShow(){
            $this -> encabezadoShowIni("Cambiar Clave | King&Queen","../img/ico.png");
        }
/*FormCambiarPasswordCC*/
        public function formCambiarClaveShow(){
            ?> 
                <center>
                    <img src="../img/bannercama.jpg" alt="Banner" width="600" height="140">
                    <br/><br/>
                    <div  class="card bg-light mb-3" style="max-width: 20rem;">
                        <div class="card-header"><h5 class="card-title">Cambiar Clave</h5></div>
                            <div class="card-body">

                                <form action="getCoincidirCambioClave.php" method="POST">
                                <p>Nueva Contraseña:</p>
                                <input type="text" value="" name="new_password" id="new_password"/><br/><br/>
                                <p>Repita Contraseña:</p>
                                <input type="text" value="" name="repet_password" id="repet_password"/><br/><br/>

                                <input type="submit" class="btn btn-secondary" name="btnActualizar" id="btnActualizar" value="Actualizar"/>
                                </form>

                        </div>
                    </div>
                </center> 

                            <!--<center>
                                <img src="../img/bannercama.jpg" alt="Banner de Autentica Usuario" width="640" height="180">
                                <form action="../Controller/getCoincidirPasswordCC.php" method="POST">
                                <p>Nueva Contraseña:</p>
                                <input type="text" value="" name="new_password" id="new_password"/><br/>
                                <p>Repita Contraseña:</p>
                                <input type="text" value="" name="repet_password" id="repet_password"/><br/>

                                <input type="submit" name="btnActualizar" id="btnActualizar" value="Actualizar"/>

                                </form>
                            </center>-->
            <?php

            $this-> pieShow();

        }
    }
?>