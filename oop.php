<?php
class Contact
{
    public $name;
    public $phone;

    function set_name($name)
    {
        $this->name = $name;
    }

    function set_phone($phone)
    {
        $this->phone = $phone;
    }

    function get_all(){
        return array("name"=>$this->name,"phone"=>$this->phone);
    }
}

$agustin = new Contact();
$agustin->set_name("agustin");
$agustin->set_phone("123123123");
echo json_encode($agustin->get_all());
