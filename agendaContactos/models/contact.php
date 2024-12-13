<?php

class Contact
{
    private $id;
    private $contactName;
    private $phoneNumber;
    private $email;
    private $userId;

    public function __construct($contactName, $phoneNumber, $email)
    {
        $this->contactName = $contactName;
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;

    }


    /**
     * Save the new Contact on the database
     * @param $contact The new contact created
     */
    protected function saveContact(Contact $contact)
    {

        try {

            //Insert the new contact on the table contact  
            require_once "../includes/dataBaseConection.php";
            $query = "INSERT INTO contacts (contactName,phoneNumber,email,userId) VALUES(?,?,?,?)";
            $statement = $phpDataObject->prepare($query);
            $contactName = $contact->getContactName();
            $phoneNumber = $contact->getPhoneNumber();
            $email = $contact->getEmail();
            $userId = $contact->getUserId();
            $statement->execute([$contactName, $phoneNumber, $email, $userId]);//Lerning step
            // $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);
            // $statement->execute([$userName, $hashedPassword]);//Secure password



            //Finalizate the exectution
            $phpDataObject = null;
            $statement = null;
            $_SESSION["status"]="Contacto adicionado com sucesso";
            $_SESSION["class"]="sucess";
            header("Location: ../views/addContact.php");
            die();

        } catch (PDOException $exception) {
            die("Failed to save the contact: " . $exception->getMessage());

        }
    }




    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getContactName()
    {
        return $this->contactName;
    }

    public function setContactName($contactName)
    {
        $this->contactName = $contactName;
    }


    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;

    }

}
