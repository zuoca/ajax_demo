<?php

/**
 * Created by PhpStorm.
 * User: zuoca
 * Date: 5/17/14
 * Time: 4:42 PM
 */
class UserModel
{

    function __construct()
    {
        $this->name = 'zuoca';
        $this->sex = 'male';
        $this->hobby = array(
            'riding', 'swiming', 'hiking'
        );
    }

    private $name;
    private $sex;
    private $hobby;

    public function getUserInfo()
    {
        $ar=get_object_vars($this);
        $result = json_encode($ar);
        return $result;
    }


}

$user=new UserModel();

$return=$user->getUserInfo();

echo 'var hi=\''.$return.'\'';

