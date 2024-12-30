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

    protected function getAllContacts($userId)
    {

        try {

            //Insert the new contact on the table contact  
            require_once "../includes/dataBaseConection.php";
            $query = "select contactId, contactName, phoneNumber, email, userId from contacts where userId=?";
            $statement = $phpDataObject->prepare($query);
            $statement->execute([$userId]);
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);//Returns a associative array of all the elements selected in the query
            $numRows = $statement->rowCount();

            //Finalize the execution
            $phpDataObject=null;
            $statement=null;

        

            //Verify if the query returned a result or nothing
            if ($numRows>0) {
                return $result; }
                  
            else
                {return null;}
            }

    catch (PDOException $exception) {
        die("Failed to get the contacts: " . $exception->getMessage());

    }
}


    protected function updateContact($contact){
        try {

            //Update the contact on the table contact  
            require_once "../includes/dataBaseConection.php";
            $query = "UPDATE contacts SET contactName=?,phoneNumber=?,email=? WHERE contactId=?";
            $statement = $phpDataObject->prepare($query);
            $contactName = $contact->getContactName();
            $phoneNumber = $contact->getPhoneNumber();
            $email = $contact->getEmail();
            $contactId = $contact->getId();
            $statement->execute([$contactName, $phoneNumber, $email, $contactId]);//Lerning step
            // $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);
            // $statement->execute([$userName, $hashedPassword]);//Secure password

            //Finalizate the exectution
            $phpDataObject = null;
            $statement = null;
            $_SESSION["status"]="Contacto actualizado com sucesso";
            $_SESSION["class"]="sucess";
            header("Location: ../views/viewContacts.php");
            die();

        } catch (PDOException $exception) {
            die("Failed to save the contact: " . $exception->getMessage());

        }

    }

    /**
     * 
     * 
     *@param $contact The contact of a user
     * @return never
     */
    protected function deleteContact($contact){
        try {

            //Update the contact on the table contact  
            require_once "../includes/dataBaseConection.php";
            $query = "DELETE FROM contacts WHERE contactId=?";
            $statement = $phpDataObject->prepare($query);
            $contactId = $contact->getId();
            $statement->execute([$contactId]);
            // $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);
            // $statement->execute([$userName, $hashedPassword]);//Secure password

            //Finalizate the execution
            $phpDataObject = null;
            $statement = null;
            $_SESSION["status"]="Contacto deletado com sucesso";
            $_SESSION["class"]="sucess";
            header("Location: ../views/viewContacts.php");
            die();

        } catch (PDOException $exception) {
            die("Failed to delete the contact: " . $exception->getMessage());

        }

    }

/**
 * @param $contact The contact of a user  */
protected function searchContacts($contact){

    try{
        require_once "../includes/dataBaseConection.php";
        //Search contacts on the table contact using the name and the user Id
        $query="select contactId, contactName,phoneNumber,email from contacts where userId=? and contactName like ?";
        $statement=$phpDataObject->prepare($query);
        $userId=$contact->getUserId();
        $contactName=$contact->getContactName();
        $statement->execute([$userId,"%$contactName%"]);
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        $numRows=$statement->rowCount();

        //Configure a new session
        require_once "../includes/sessionConfig.php";
        
        //Verify if the query returned a result or nothing
        if($numRows>0){
            $_SESSION["contactsFounded"]= $result;
        }

          //Finalize the execution
          $phpDataObject=null;
          $statement=null; 
          header("Location: ../views/viewContacts.php" );
          die();

    }
    catch(PDOException $exception){
     die("Failed to search the contact: ". $exception->getMessage());
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
