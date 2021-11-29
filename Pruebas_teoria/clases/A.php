<?php

 Class A{
    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }

    function claseA(){
        echo 'Cargada clase A<br>';
    }

}


?>