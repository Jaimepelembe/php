<?php
class User
{
    private $id;
    private $name;
    private $password;



    /**
     * The constructor of the user
     * @param int $id the id of the user
     * @param string $name the name of the user 
     * @param string $password the password of the user
     */
    public function __construct($name, $password)
    {
        $this->name = $name;
        $this->password = $password;
    }


    /**
     * Send the new user to the class UserDAO 
     * @param $user The user created
     * 
     */
    // public function createUser(User $user)
    // {
    //     require_once "DAO/userDAO.php";
    //     $userDAO=new UserDAO();
    //     $userDAO->saveUser($user);

    // }



    /**
     * Save the new user on the database
     * @param $user The new user created
     */
    protected function saveUser(User $user)
    {

        try {

            //Insert the username and password on user table
            require_once "../includes/dataBaseConection.php";
            $query = "INSERT INTO users (username,userpassword) VALUES(?,?)";
            $statement = $phpDataObject->prepare($query);
            $userName = $user->getName();
            $userPassword = $user->getPassword();
            // $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);

            // $statement->execute([$userName, $hashedPassword]);//Secure password
            $statement->execute([$userName, $userPassword]);//Lerning step

            //Finalizate the exectution
            $phpDataObject = null;
            $statement = null;

            //Configure a new session
            require_once "../includes/sessionConfig.php";
            //Create the variables for the new session and go to the main page
            $_SESSION["userName"] = $userName;
            $_SESSION["userPassword"] = $userPassword;
            header("Location: ../views/main.php");
            die();

        } catch (PDOException $exception) {
            die("Query failed: " . $exception->getMessage());

        }
    }




    // protected function loginUser(User $user)
//     {
//         try {
//             require_once "../includes/dataBaseConection.php";
//             $sql = "SELECT userpassword FROM users WHERE username=? AND userpassword=?";
//             $statement = $phpDataObject->prepare($sql);
//             $userName = $user->getName();
//             $userPassword = $user->getPassword();
//             $result = $statement->execute([$userName, $userPassword]);


    //             //Verify if the query is valid or not
//             if (!$result) {
//                 //Finalize the execution
//                 $phpDataObject = null;
//                 $statement = null;
//                 header("Location: ../views/index.php?error=statementfailed");
//                 exit();

    //             }
//             //Verify if the query returned a array ou nothing
//             if ($statement->rowCount() == 0) {
//                 $phpDataObject = null;
//                 $statement = null;
//                 header("Location: ../views/index.php?error=usernotfound");
//                 exit();

    //             } else {
//                 $hashedPassword = $statement->fetchAll(PDO::FETCH_ASSOC);
//                 $checkPassword = password_verify($userPassword, $hashedPassword[0]["userpassword"]);

    //                 if (!$checkPassword) {
//                     $statement = null;
//                     header("Location: ../views/index.php?error=wrongpassword");
//                     exit();
//                 }else{

    //                 }

    //             }



    //         } catch (PDOException $exception) {
//             echo die("Query failed: " . $exception->getMessage());

    //         }

    //     }

    /**
     * Verify if a user exist on the database
     * @param $user The user
     */
    protected function checkUser(User $user)
    {
        try {
            require_once "../includes/dataBaseConection.php";

            $sql = "SELECT id,username,userpassword FROM users WHERE username=? AND userpassword=?";
            $statement = $phpDataObject->prepare($sql);
            $userName = $user->getName();
            $userPassword = $user->getPassword();
            $statement->execute([$userName, $userPassword]);
            $result=$statement->fetch(PDO::FETCH_ASSOC);
            $numRows = $statement->rowCount();

            //Configure a new session
            require_once "../includes/sessionConfig.php";

            //Verify if the query returned a result or nothing
            if ($numRows > 0) {
                //Create the variables for the new session
                $_SESSION["userId"]=$result["id"];
                $_SESSION["userName"] = $result["username"];
               // $_SESSION["userPassword"] =$result["userpassword"];
                header("Location: ../views/main.php");

            } else {
                //User doesn't exist on database
                //Destroy the variables of the session
                unset($SESSION["userName"]);
                unset($SESSION["userPassword"]);
                header("Location: ../views/login.php");

            }

        } catch (PDOException $exception) {
            echo die("Query failed: " . $exception->getMessage());

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

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }


}
