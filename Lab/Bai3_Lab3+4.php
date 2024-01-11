<?php
    class Shape{
        // public $tenHinh;
        // public function setHinh($tenHinh){
        //   $this->tenHinh = $tenHinh;  
        // }
        public function calculateArea(){

        }
    }
    class Square extends Shape{
       public $canh;

       public function setCanh($canh){
            $this->canh = $canh;
       }
       public function calculateArea(){
            return $this->canh * $this->canh;
       }
       public function dienTichHinhVuong(){
            echo "Diện tích hình vuông = ".$this->calculateArea()."<br>";
       }
    }
    class Circle extends Shape {
        public $r;
        public $pi = 3.14;
        public function setR($r){
            $this->r = $r;
        }
        public function calculateArea(){
            return $this->pi * pow($this->r, 2);
        }
        public function dienTichHinhTron(){
            echo "Diện tích hình tròn = ".$this->calculateArea()."<br>";
       }
    }
    // khởi tạo đối tượng
    $hv = new Square();
    $hv->setCanh(3);
    $hv->dienTichHinhVuong();
    // khởi tạo đối tượng
    $htr = new Circle();
    $htr->setR(3);
    $htr->dienTichHinhTron();
?>