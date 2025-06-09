<?php declare(strict_types=1);
    /*Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.

Condicions:

Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
Si la nota és menor a 33%, l'estudiant reprovarà.*/
    use PHPUnit\Framework\TestCase;
    require_once __DIR__ . '/../vendor/autoload.php';

    require_once __DIR__ ."/../src/Sprint1_07_02.php";

    class Sprint1_07_02Test extends TestCase {
        public function testNoteClasificationFirstDivision() {
            $noteChecker = new Sprint1_07_02();
            $clasification = $noteChecker->noteClasification(70);
            $this->assertEquals("Primera Divisió \n", $clasification);
            //$this->assertEquals("Segona Divisió", $clasification);
            //$this->assertEquals("Tercera Divisió", $clasification);
            //$this->assertEquals("L'estudiant reprovarà", $clasification);
        }

        public function testNoteClasificationSecondDivision() {
            $noteChecker = new Sprint1_07_02();
            $clasification = $noteChecker->noteClasification(50);
            $this->assertEquals("Segona Divisió \n", $clasification);

        }
        public function testNoteClasificationThirdDivision() {
            $noteChecker = new Sprint1_07_02();
            $clasification = $noteChecker->noteClasification(35);
            $this->assertEquals("Tercera Divisió \n", $clasification);
        }

        public function testNoteClasificationFailed() {
            $noteChecker = new Sprint1_07_02();
            $clasification = $noteChecker->noteClasification(10);
            $this->assertEquals("L'estudiant reprovarà \n", $clasification);
        }

        public function testNoteClasificationNoteError() {
            $noteChecker = new Sprint1_07_02();
            $clasification = $noteChecker->noteClasification(200);
            $this->assertEquals("Introdueixi una nota valida \n", $clasification);
        }


    }
    
    



?>