<?php
class Student {
 public $name;
 public $surname;
 public $age;
 public $classes;
  public function __construct( $name, $surname, $age, $classes ) {
    $this->name = $name;
    $this->surname = $surname;
    $this->age = $age;
    $this->classes = $classes;
  }
  public function message(){
   return "Student name : $this->name <br> Surname :$this->surname <br> age: $this->age <br> class : $this->classes";
  }
}

$student = new Student("Hasan","Kılıcı",17,"12/D");
echo $student->message();
?>
