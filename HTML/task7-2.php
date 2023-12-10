<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    class Staff{
        //プロパティ
        protected $name;
        protected $age;
        protected $sex;
        protected $id;

        //メゾット
        public function __construct($name,$age,$sex){
            $this -> name = $name;
            $this -> age = $age;
            $this -> sex = $sex;
            $this -> id = 'S' . sprintf('%04d',self::number());
            }

        protected static $counter = 1;

        public static function number(){
            return self::$counter++;
            }

        public function show(){
            printf("(%s),%s,%d歳,%s\n",$this ->id,$this -> name,$this -> age,$this ->sex);
            }
        }

    class PartStaff extends Staff{
        private $jikyu;

        public function __construct($name,$age,$sex,$jikyu){
            $this -> name = $name;
            $this -> age = $age;
            $this -> sex = $sex;
            $this -> jikyu = $jikyu;
            $this -> id = 'P' . sprintf('%04d',self::number());
            }

        public function show(){
            printf("(%s),%s,%d歳,%s 時給:%d円 \n",$this ->id,$this -> name,$this -> age,$this ->sex,$this ->jikyu);
            }
    }

    //インスタンス生成
    $staff1 = new Staff("佐藤 一郎", 31, "男性");
    $staff2 = new Staff("山田 花子", 25, "女性");
    $staff3 = new Staff("鈴木 次郎", 27, "男性");
    $partstaff1 = new PartStaff("田中 友子", 27, "女性",900);
    $staff3 = new Staff("中村 三郎", 27, "男性");

    //インスタンス表示
    $staff1->show();
    $staff2->show();
    $staff3->show();
    $partstaff1->show();
    $staff4->show();

  ?>
</body>
</html>