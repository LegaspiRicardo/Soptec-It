<?php
    interface CRUD{
        public function crear();
        public function actualizar();
        public function borrar();
        public function leer_id();
        public function leer_todo();
    }
?>