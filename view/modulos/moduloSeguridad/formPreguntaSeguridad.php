<?php
    include_once("../shared/formulario.php");

    class formPreguntaSeguridad extends formulario
    {

        public function EncabezadoShow(){
            $this -> encabezadoShowIni("Recordar Contraseña | King&Queen","../img/ico.png");
        }

        public function FormPreguntaSeguridadShow(){
            ?> 
                <center>
                    <img src="../view/img/bannercama.jpg" alt="Banner" width="600" height="140">
                    <br/><br/>
                    <div  class="card bg-light mb-3" style="max-width: 20rem;">
                        <div class="card-header"><h5 class="card-title">Recuperar contraseña</h5></div>
                            <div class="card-body">
                                <form action="getRespuesta.php" method="POST">
                                    <p>¿Cuál es la palabra clave?</p>
                                    <input type="text" value="" name="respuesta" id="respuesta"/><br/><br/>
                                    <input type="submit" class="btn btn-secondary"  name="btnEnviar" id="btnEnviar" value="Enviar">
                                </form>

                        </div>
                    </div>
                </center>  
            <?php

            $this-> pieShow();

        }
    }
?>