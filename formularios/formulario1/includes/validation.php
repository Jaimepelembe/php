<?php

/**
 * @param string $input the value of textField 
 * @return boolean true if the textField is empty  or false otherwise
 * * */
function isEmpty($input)
{
    if (empty($input)) {
        return true;
    }
    return false;

}


/**
 * Validate the content of a input
 * @param  $input the value of the component
 * @return boolean true if the component isn't empty and his value is diferent of "" 
 */
function validateTheContent($input)
{
    if (isEmpty($input) || $input == "") {
        return false;

    }
    return true;
}


/**
 * Validate a password
 * @return boolean true if the password is valid and false otherwise 
 * @param string $password The password
 * @param int $minLength The minimum length of the password
 * @param int $maxLength The maximum length of the password

 **/
function validatePassword($password, $minLength, $maxLength)
{
    if (validateTheContent($password) && strlen($password) > $minLength && strlen($password) < $maxLength) {
        return true;

    }
    return false;
}

/**
 * Validate the email typed by the user
 * @param $email The email inserted by the user
 * @return boolean true if the email is valid or false otherwise
 * 
 */
function validateEmail($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    return true;
}

/**
 * Validate the name of the user
 * @param $username The name of the user
 * @return boolean True if the name is valid or false otherwise
 */
function validateUserName($userName){
    if(!preg_match("/^[a-zA-Z0-9]*$/",$userName)){
        return false;
        
    }
    return true;
}


