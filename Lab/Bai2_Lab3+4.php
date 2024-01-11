<?php
    class Person{
        public $ten;
        public $tuoi;
    }
    class Employee extends Person{
        public $maNV;
        public $luongCB;
        public $soGioLam;
        public $chucVu;

        public function setChucVu($chucVu){
            $this->chucVu = $chucVu;
        }
        public function thongTinChucVu(){
            echo "Nhân viên có chức vụ là: ".$this->chucVu."<br>";
        }
        public function noiLamViec(){
            echo "Nhân viên thì làm tại xưởng sản xuất <br>";
        }
    }
    class Manager extends Employee{
        public $theQuanLy;
        public function thongTinChucVu(){
            echo "Quản lý có chức vụ là: ".$this->chucVu."<br>";
        }
        public function phatLuong(){
            echo "Quản lý thì có thể phát lương cho nhân viên <br>";
        }
        public function kiemDiem(){
            echo "Quản lý thì có thể kiểm điểm nhân viên mắc lỗi <br>";
        }
    }

    // khởi tạo đối tượng
    $nv = new Employee();
    $nv->setChucVu("nhân viên");
    $nv->thongTinChucVu();
    $nv->noiLamViec();
    // khởi tạo đối tượng
    $ql = new Manager();
    $ql->setChucVu("quản lý");
    $ql->thongTinChucVu();
    $ql->phatLuong();
    $ql->kiemDiem();

?>