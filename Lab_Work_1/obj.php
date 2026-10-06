<html>
<body>

<h1> The Fruits Program </h1>

<?php
    class Fruits{
        public $name;
        public $color;

        function set_name($name){
            $this->name = $name;
        }

        function get_name(){
            return $this->name;
        }
    } 
    $apple = new Fruits();
    $Banana = new Fruits();
    $apple ->set_name('apple');
    $Banana ->set_name('Banana');

    echo $apple->get_name();
    echo "<br>";
    echo $Banana->get_name();
?>
</body>
</html>
