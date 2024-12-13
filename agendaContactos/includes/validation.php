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
 * Validate the size of a text in a textField or textArea
 * @param string  $fieldName The name of the textField or textArea
 * @param string $text The text of the element
 * @param int $minimum The minimum lenght of the text
 * @param int $maximum The maximum lenght of the text
 * @return boolean True if the size is valid or False otherwise
 */



function validateTextFieldSize($fieldName, $text, $minimum, $maximum)
{
    if (!validateTheContent($text)) {
        $message = "O campo " .
            $fieldName . " não pode estar vázio";

        setMessageOnSession($message, "failure");
        return false;
    }
    if (strlen($text) < $minimum) {
        $message = "O campo " .
            $fieldName . " deve ter no mínimo " . $minimum . " caracteres.";

        setMessageOnSession($message, "failure");
        return false;



    }

    if (strlen($text) > $maximum) {
        $message = "O campo " .
            $fieldName . " deve ter no máximo " . $maximum . " caracteres.";

        setMessageOnSession($message, "failure");
        return false;
    }

    return true;

}

/**
 * Create variables in the current session to be displayed after
 * @param string  $message The message to be displayed to the user
 * @param string $class The of the error
 */

function setMessageOnSession($message, $class)
{
    $_SESSION["status"] = $message;
    $_SESSION["class"] = $class;

}













/**
 * Verify if a phone number is valid using the format 8[2-7]XXXXXXX
 * @param $phoneNumber The phone number
 *@returns True if the number is valid and False otherwise*/


function validatePhoneNumber($phoneNumber)
{
    if (isEmpty($phoneNumber . "")) {
        return false;
    } else {
        $regularExpression = '/^8[2-7]\d{7}$/';
        return preg_match($regularExpression, $phoneNumber . "");
    }
}



/**
 * Verify if the email is valid using the format
 * @param $email The email
 *@returns True if the email is valid and False otherwise
 *
 */
function validateEmail($email)
{

    if (isEmpty($email . "")) {
        return false;
    } else {
        $regularExpression = '/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})$/';
        return preg_match($regularExpression, $email . "");
    }
}