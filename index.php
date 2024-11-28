<?php
class aiImage {
    public $name;
    public $size;

    function __construct($name, $size) {
        $this->name = $name;
        $this->size = $size;
      }
      function get_name() {
        return $this->name;
      }
      function get_size() {
        return $this->size;
      }
    }
    $animal = new aiImage("Cat", 1);
    echo $animal-> get_name(); 
    echo "<br>";
    echo $animal-> get_size();
?>