<?php

 Class A extends madre{
    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
    private function getName(): string
    {
        return $this->name;
    }

    function claseA(){
        echo 'Cargada clase A<br>';
    }

}


?>