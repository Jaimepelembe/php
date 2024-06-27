<?php

ini_set("session.use_only_cookies", 1);
ini_set("session.use_strict_mode", 1); //The browser will use only the ID session created by the server and will create a complex ID session

$domain = "localhost";
$path = "/";
$lifetime = 1800;  //The lifetime of the cookie
session_set_cookie_params([
    "lifetime" => $lifetime,
    "domain" => $domain,
    "path" => $path,
    "secure" => true,
    "httponly" => true
]);

session_start();

//Regenerate a ID for the session in a interval of time in seconds
if (!isset($_SESSION["last_regeneration"])) {
    session_regenerate_id(true);
    $_SESSION["last_regeneration"] = time();
} else {
    $interval = 60 * 30;
    if (time() - $_SESSION["last_regeneration"] >= $interval) {
        session_regenerate_id(true);
        $_SESSION["last_regeneration"] = time();
    }
}