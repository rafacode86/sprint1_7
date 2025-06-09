<?php

    class Sprint1_07_02 {
        public function noteClasification(int $note) {
            $clasification = "";
            if ($note < 0 || $note > 100) {
                $clasification = "Introdueixi una nota valida \n";
            } elseif ($note >= 60 && $note <= 100) {
                $clasification = "Primera Divisió \n";
            } elseif ($note >= 45) {
                $clasification = "Segona Divisió \n";
            } elseif ($note >= 33) {
                $clasification = "Tercera Divisió \n";
            } else {
                $clasification = "L'estudiant reprovarà \n";
            } 
            return $clasification;
        }
    }
?>