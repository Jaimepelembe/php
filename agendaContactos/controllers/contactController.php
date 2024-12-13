<?php
require_once "../models/contact.php";
class contactController extends Contact
{
    public function __construct()
    {
    }

    /**
     * Get the data of the user from the form 
     * @param $userName the name of the user
     * @param $userPassword the Password of the user
     * 
     * **/

    public function getContactData($userName, $phoneNumber, $email)
    {
        require_once "../includes/validation.php";
        if (validateTextFieldSize('nome',$userName,2,40) && validatePhoneNumber($phoneNumber) && validateEmail($email)) {

            try {
                //Initialize the session
                require_once "../includes/sessionConfig.php";

                //Create the object Contact
                $contact = new Contact($userName, $phoneNumber,$email);
               # echo $userName;
                $contact->setUserId($_SESSION["userId"]);
                $contact->saveContact($contact);

            } catch (PDOException $exception) {
                die("User criation failed: " . $exception->getMessage());
            }

        } else {
            header("Location: ../views/addContact.php");
        }

    }

    public function verifyUser($userName, $userPassword)
    {
        require_once "../includes/validation.php";
        if (validateTextFieldSize('nome',$userName,2,40) && validateTextFieldSize('senha',$userPassword,4,255)) {

            try {
                //Create the object user
                $user = new User($userName, $userPassword);
                $user->checkUser($user);
            } catch (PDOException $exception) {
                die("User verifications failed: " . $exception->getMessage());
            }

        } else {
            header("Location: ../views/login.php");
        }



    }

    protected function getDataForm()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //require_once "userController.php";
            //information from te form
            $userName = htmlspecialchars($_POST["userName"]);//htmlspecialchars convert special characters to html entities
            $userPassword = htmlspecialchars($_POST["userPassword"]);
            // $userController = new userController();
            //$userController->
            // getUserData($userName, $userPassword);


            //$phoneNumber = htmlspecialchars($_POST["phoneNumber"]);
            // $email = htmlspecialchars($_POST["email"]);
        } else {
            header("Location: ../views/index.php");
        }


    }



}
