<?php

Class padre{
    private $name = "zdfsfdfd";

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    function claseB(){
        echo "Cargada clase B<br>";
    }


    public function setName(string $name): void
    {
        $this->name = $name;
    }
    protected function getName(): string
    {
        return $this->name;
    }


}


?>