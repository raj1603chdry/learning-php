<?php
  class classname {
    public function __construct($param) {
      echo "Constructor called when $param object created<br />";
    }
  }

  $a = new classname("First");
  $b = new classname("Second");
  // $c = new classname();

  class classname1 {
    private $attribute;
    public function __construct($param) {
      $this->attribute = $param;
      echo "$this->attribute<br />";
    }
    public function __clone() {
      echo 'Clone of classname1 created<br />';
    }
  }

  $c = new classname1("First");
  $d = new classname1("Second");

  class classname2 {
    private $attribute;
    public function __get($name) {
      return $this->$name;
    }
    public function __set($name, $value) {
      $this->$name = $value;
    }
  }

  $e = new classname2();
  $e->attribute = 5;
  echo $e->attribute.'<br />';

  class classname3 {
    public $attribute1;
    public function operation1() {
      echo 'Operation 1 called<br />';
    }
  }

  class classname4 extends classname3 {
    public $attribute2;
    public function operation2() {
      echo 'Operation 2 called<br />';
    }
  }

  $f = new classname4();
  $f->attrubute1 = 5;
  $f->attribute2 = 10;
  $f->operation1();
  $f->operation2();

  class Math {
    const pi = 3.14159;
    static function squared($input) {
      return $input*$input;
    }
  }

  echo Math::pi.'<br />';
  echo Math::squared(24).'<br />';

  $g = clone $d;

  abstract class A {
    abstract function operation($param1, $param2);
  }

  foreach($f as $attribute) {
    echo $attribute.'<br />';
  }

  
?>
