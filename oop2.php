<?php
declare(strict_types = 1);
class Contact
{
    public $name;
    public $phone;

    function __construct(string $name, string $phone){
        $this->name = $name;
        $this->phone = $phone;
    }

    function set_name(string $name)
    {
        $this->name = $name;
    }

    function set_phone(string $phone)
    {
        $this->phone = $phone;
    }

    function get_all() : array{
        return array("name"=>$this->name,"phone"=>$this->phone);
    }
}

$agustin = new Contact("agus","123123");
echo json_encode($agustin->get_all());
