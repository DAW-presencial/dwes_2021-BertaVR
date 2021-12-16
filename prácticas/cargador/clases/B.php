<?php

Class B extends padre{

    public function __construct(int $id, string $name)
    {
         $this->id = $id;
        $this->name = $name;
    }

    function claseB(){
        echo "Cargada clase B<br>";
    }
}


?>