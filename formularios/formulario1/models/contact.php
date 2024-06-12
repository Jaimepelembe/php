<?php

class Contact{
private $id;
private $phoneNumber;
private $email;
private $userId;

public function __construct($phoneNumber,$email,$userId){
$this->phoneNumber=$phoneNumber;
$this->email=$email;
$this->userId=$userId;
}

public function getId(){
    return $this->id;
}
public function setId($id){
    $this->id=$id;
}


public function getPhoneNumber(){
    return $this->phoneNumber;
}

public function setPhoneNumber($phoneNumber){
    $this->phoneNumber=$phoneNumber;
}

public function getEmail(){
    return $this->email;
}

public function setEmail($email){
    $this->email=$email;
}

public function getUserId(){
    return $this->userId;
}

}
