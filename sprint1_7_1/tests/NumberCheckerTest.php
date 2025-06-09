<?php declare(strict_types= 1);
    use PHPUnit\Framework\TestCase;
    //require_once  "\src\NumberChecker.php";
    require_once __DIR__ . '/../src/NumberChecker.php';

    class NumberCheckerTest extends TestCase {
        public function testIsPositive() {
            $numberChecker = new NumberChecker(3);
            $expectet = "TRUE";
            $this->assertTrue($numberChecker->isPositive());
        }

        public function testIsEven() {
            $numberChecker = new NumberChecker(4);
            $expectet = "TRUE";
            $this->assertTrue($numberChecker->isEven());
        }
        
    }

?>