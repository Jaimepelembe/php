<?php

class Contact
{
    private $id;
    private $contactName;
    private $phoneNumber;
    private $email;
    private $userId;

    public function __construct($phoneNumber, $email, $userId)
    {
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
        $this->userId = $userId;
    }


    /**
     * Save the new user on the database
     * @param $user The new user created
     */
    protected function saveContact(Contact $contact)
    {

        try {

            //Insert the username and password on user table
            require_once "../includes/dataBaseConection.php";
            $query = "INSERT INTO contact (contact_name,phone_number,email,user_id) VALUES(?,?,?,?)";
            $statement = $phpDataObject->prepare($query);
            $contactName = $contact->getContactName();
            $phoneNumber = $contact->getPhoneNumber();
            $email = $contact->getEmail();
            $userId = $contact->getUserId();
            $statement->execute([$contactName, $phoneNumber,$email,$userId ]);//Lerning step
            // $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);
            // $statement->execute([$userName, $hashedPassword]);//Secure password



            //Finalizate the exectution
            $phpDataObject = null;
            $statement = null;
            //header("Location: ../views/contacts.php");
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

}
