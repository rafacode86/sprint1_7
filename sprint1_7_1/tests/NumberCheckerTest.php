<?php declare(strict_types= 1);
    use PHPUnit\Framework\TestCase;
    //require_once  "\src\NumberChecker.php";
    require_once __DIR__ . '/../src/NumberChecker.php';

    class NumberCheckerTest extends TestCase {
        public function testIsPositive() {
            $numberChecker = new NumberChecker(5);
            $expectet = "TRUE";
            $this->assertTrue($numberChecker->isPositive());
           

        }

        public function testIsNegative() {
            $numberChecker = new NumberChecker(-5);
            $expectet = "False";
            $this->assertFalse($numberChecker->isPositive());
           

        }

        public function testIsZero() {
            $numberChecker = new NumberChecker(0);
            $expectet = "False";
            $this->assertFalse($numberChecker->isPositive());
        }

        public function testIsEven() {
            $numberChecker = new NumberChecker(4);
            $expectet = "TRUE";
            $this->assertTrue($numberChecker->isEven());
        }
        
        public function testIsOdd() {
            $numberChecker = new NumberChecker(5);
            $expectet = "False";
            $this->assertFalse($numberChecker->isEven());
        }

        public function testIsEvenNegative() {
            $numberChecker = new NumberChecker(-4);
            $expectet = "TRUE";
            $this->assertTrue($numberChecker->isEven());
        }

        public function testIsOddNegative() {
            $numberChecker = new NumberChecker(-5);
            $expectet = "False";
            $this->assertFalse($numberChecker->isEven());
        }
    }

?>