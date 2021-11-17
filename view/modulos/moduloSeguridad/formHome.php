<?php
    
    include_once("../shared/formulario.php");

    class FormHome extends formulario{

        public function FormEmitirProforma(){
            ?>
                <form action="../moduloVentas/getEmitirProforma.php" method="POST">
                    <input type="submit" name="btnEmitirProforma" id="btnEmitirProforma" value="Emitir Proforma">
                </form>
            <?php
        }
        public function FormCambiarClave(){
            ?>
                <form action="../controller/getCambiarClave.php" method="POST">
                    <input type="submit" name="btnCambiarClave" id="btnCambiarClave" value="Cambiar Clave">
                </form>
            <?php
        }


        public function RegistrarMascota(){
            ?>
                <form action="../moduloSeguridad/registrarmascota.php" method="POST">
                    <input type="submit" name="btnCambiarClave" id="btnCambiarClave" value="RegistrarMascota">
                </form>
            <?php
        }



        public function FormEmitirBoleta(){
            ?>

            <table class="tg">
            <thead align="center">
              <tr>
                <th class="tg-0pky">
                    <img src="../img/boleta.png" alt="boleta" width="100" height="100">
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="tg-0pky">
                    <form action="../moduloVentas/getBtnEmitir.php" method="POST">
                        <input type="submit" name="btnEmitirBoleta" id="btnEmitirBoleta" value="Emitir Boleta">
                    </form>
                </td>
              </tr>
            </tbody>
            </table>
                
            <?php
        }
        public function FormReporteVentas(){
            ?>

            <table class="tg">
            <thead align="center">
              <tr>
                <th class="tg-0pky">
                    <img ali src="../img/reporte.png" alt="reporte" width="100" height="100">
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="tg-0pky">
                    <form action="../moduloVentas/getBtnReporte.php" method="POST">
                        <input type="submit" name="btnReporteVentas" id="btnReporteVentas" value="Generar Reporte de Ventas">
                    </form>
                </td>
              </tr>
            </tbody>
            </table>
                
            <?php
        }
        public function FormGestionarUsuario(){
            ?>
                <form action="getGestionarUsuario.php" method="POST">
                    <input type="submit" name="btnGestionarUsuario" id="btnGestionarUsuario" value="Gestionar Usuario">
                </form>
            <?php
        }

        public function FormGestionarProductos(){
            ?>
                <form action="getGestionarProductos.php" method="POST">
                    <input type="submit" name="btnGestionarProductos" id="btnGestionarProductos" value="Gestionar Productos">
                </form>
            <?php
        }

        
        public function FormDespacharBoleta(){
            ?>
                <form action="../moduloVentas/getDespacharBoleta.php" method="POST">
                    <input type="submit" name="btnDespacharBoleta" id="btnDespacharBoleta" value="Despachar Boleta">
                </form>
            <?php
        }

        public function FormCerrarSesion(){
            ?>
                <form action="../controller/getCerrarSesion.php" method="POST">
                    <input type="submit" name="btnCerrarSesion" id="btnCerrarSesion" value="Cerrar Sesion" />
                </form>
            <?php 
        }
        
        public function FormHomeUpShow(){
            $this -> encabezadoShowIni("Home | King&Queen","./img/ico.png");/* No se visualiza icono */
            ?> 
                <center>
                    <img src="../view/img/bannercama.jpg" alt="Banner Home" width="640" height="180">
            <?php
        }

        public function FormHomeDownShow(){
            ?>
                </center>
            <?php
        }
    }
?>