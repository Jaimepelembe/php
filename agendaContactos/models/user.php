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
            $query = "INSERT INTO users (userName,userPassword) VALUES(?,?)";
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
            $_SESSION["status"] = "Usuário cadastrado com sucesso. Faça o login";
            $_SESSION["class"] = "sucess";
            header("Location: ../views/login.php");

        } catch (PDOException $exception) {
            die("Query failed: " . $exception->getMessage());

        }
    }

    /**
     * Verify if a user exist on the database
     * @param $user The user
     */
    public function checkUser(User $user)
    {
        try {
            require_once "../includes/dataBaseConection.php";

            $sql = "SELECT userId,userName,userPassword FROM users WHERE userName=? AND userPassword=?";
            $statement = $phpDataObject->prepare($sql);
            $userName = $user->getName();
            $userPassword = $user->getPassword();
            $statement->execute([$userName, $userPassword]);
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            $numRows = $statement->rowCount();

            //Configure a new session
            require_once "../includes/sessionConfig.php";

            //Verify if the query returned a result or nothing
            if ($numRows > 0) {
                //Create the variables for the new session
                $_SESSION["userId"] = $result["userId"];
                $_SESSION["userName"] = $result["userName"];
                // $_SESSION["userPassword"] =$result["userpassword"];
                header("Location: ../views/main.php");

            } else {
                //User doesn't exist on database
                $_SESSION["status"] = "O nome ou a senha estão incorrectos";
                $_SESSION["class"] = "failure";

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
