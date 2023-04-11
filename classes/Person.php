<?php

class Person
{
    private $fbPassword = "asdfsdfa";
    public function setFbPassword($newFbPassword){
        $this->fbPassword = $newFbPassword;
    }
    public function getFbPassword(){
        return $this->fbPassword;
    }
}