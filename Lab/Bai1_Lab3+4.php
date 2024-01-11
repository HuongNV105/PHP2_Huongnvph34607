<?php
    // bài 1
    class Animal{
        public $chan;
        public $mat;
        public $mieng;
        public $mui;

        public function an(){
            echo "ăn bằng miệng";
        }
        public function setChan($chan){
            $this->chan = $chan;
        }
    }
    class Dog extends Animal{
        public function diChuyen(){
            echo "Chó di chuyển bằng ".$this->chan." chân <br>";
        }
        public function sua(){
            echo "Chó thì biết sủa gâu gâu <br>";
        }
    }
    class Cat extends Animal{
        public function diChuyen(){
            echo "Mèo di chuyển bằng ".$this->chan." chân <br>";
        }
        public function cheoCay(){
            echo "Mèo biết chèo cây <br>";
        }
    }
    class Bird extends Animal{
        public $canh;
        public $mo;
        public function setCanh($canh){
            $this->canh = $canh;
        }
        public function bay(){
            echo "Chim bay bằng ".$this->canh." cánh <br>";
        }
        public function hot(){
            echo "Chim thì biết hót <br>";
        }

    }
    // khởi tạo đối tượng
    $cho = new Dog();
    $cho->setChan(4);
    $cho->diChuyen(); 
    $cho->sua();
    // khởi tạo đối tượng
    $meo = new Cat();
    $meo->setChan(4);
    $meo->diChuyen(); 
    $meo->cheoCay();

    // khởi tạo đối tượng
    $chim = new Bird();
    $chim->setCanh(2);
    $chim->bay(); 
    $chim->hot();
?>