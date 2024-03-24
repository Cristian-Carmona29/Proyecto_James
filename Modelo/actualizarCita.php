<?php
require_once 'Conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["cita_id"]) && isset($_POST["nueva_fecha"]) && isset($_POST["nueva_hora"])) {
        $cita_id = $_POST["cita_id"];
        $nueva_fecha = $_POST["nueva_fecha"];
        $nueva_hora = $_POST["nueva_hora"];

        require_once 'GestorCita.php';
        $gestorCita = new GestorCita();
        $filasAfectadas = $gestorCita->editarCita($cita_id, $nueva_fecha, $nueva_hora);

        if ($filasAfectadas > 0) {
            echo "La cita se actualizó correctamente.";
        } else {
            echo "No se pudo ctualizar la cita";
        }
    }
}