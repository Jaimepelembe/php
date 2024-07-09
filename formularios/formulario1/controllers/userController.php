<?php
require_once "../models/user.php";
class userController extends User
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

    public function getUserData($userName, $userPassword)
    {
        require_once "../includes/validation.php";
        if (validateUserName(($userName) && validatePassword($userPassword, 4, 255))) {

            try {
                //Create the object user
                $user = new User($userName, $userPassword);
                $user->saveUser($user);}
            catch (PDOException $exception) {
                die("User criation failed: " . $exception->getMessage());
            }

        } else {
            header("Location: ../views/signup.php");
        }

    }

    public function verifyUser($userName,$userPassword){
        require_once "../includes/validation.php";
        if (validateUserName(($userName) && validatePassword($userPassword, 3, 255))) {

            try {
                //Create the object user
                $user = new User($userName, $userPassword);
                $user->checkUser($user);
            }
          
            catch (PDOException $exception) {
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
