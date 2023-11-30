<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

    class Staff {
        private $name;
        private $age;
        private $sex;
        private $id;

        public function __construct($name, $age, $sex) {
            $this->name = $name;
            $this->age = $age;
            $this->sex = $sex;
            $this->id = sprintf('S%04d', self::$number++);
        }

        public function show() {
            printf("(%s)%s %s %d歳 %s\n", $this->id, $this->name, $this->age, $this->sex);
        }
    }

    Staff::$number = 1;

    $staff1 = new Staff("佐藤", "一郎", 31, "男");
    $staff1->show();

    print_r($staff1)
  ?>

</body>
</html>