<?php
$username = 'Ivy'; //사칼라변수

$user_array1 = ['Ivy', 34, 'Web programming']; //배열

$user_array2 = [ //키/값 배열
  'name'  => 'Ivy',
  'age'   => 34,
  'major' => 'Web programming',
];

class User {
  public $name;
  public $age;
  public $major;
  public function __construct($name, $age, $major) {
    //정의할 때 매개변수
    $this->name  = $name;
    $this->age   = $age;
    $this->major = $major;
  }
}
// => 호출 할 때 인수
$user_object = new User('Ivy', 34, 'Web programming');
?>
<p>Scalar: <?php var_dump($username); ?></p>
<p>Array:  <?php var_dump($user_array1); ?></p>
<p>Object: <?php var_dump($user_array2); ?></p>
