
<?php

include '../inc/config.php';

$result = $db->query("SELECT * FROM users");

if (!$result) {
    die("SQL Error: " . $db->error);
}

$users = $result->fetch_all(MYSQLI_ASSOC);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $db->real_escape_string($_POST['title']);
    $description = $db->real_escape_string($_POST['description']);
    $keywords = $db->real_escape_string($_POST['keywords']);
    $logo = $db->real_escape_string($_POST['logo']);
    $guncel = $db->real_escape_string($_POST['guncel']);
    $destek = $db->real_escape_string($_POST['destek']);
    $ip = $db->real_escape_string($_POST['ip']);
    $payfixacc = $db->real_escape_string($_POST['payfixacc']);

    $sql = "UPDATE site SET title = '$title', description = '$description', keywords = '$keywords', logo = '$logo', guncel = '$guncel', destek = '$destek', ip = '$ip', payfixacc = '$payfixacc' WHERE id = 1";

    if ($db->query($sql) === TRUE) {
        echo "Ayarlar başarıyla güncellendi!";
    } else {
        echo "Hata: " . $sql . "<br>" . $db->error;
    }
}
$settings = $db->query("SELECT * FROM `site` LIMIT 1")->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


    <title>Payfix Panel</title>
    <style>
       body {
    font-family: 'Arial', sans-serif;
    background: #000;
    color: #FFF;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
    height: 100vh;
    background-size: cover; 
}

h1, h2, h3 {
    font-weight: bold;
    margin: 0;
    padding: 0;
}

a {
    color: #00BCD4;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 62vh;
}

.box {
    padding: 20px;
    border: 2px solid #00BCD4;
    border-radius: 15px;
    background-color: rgba(0, 188, 212, 0.1);
    box-shadow: 0 0 10px #00BCD4;
    width: 100%;
    text-align: center;
    margin-left: 25px;
}

button {
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    background-color: #00BCD4;
    color: #121212;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #008B9B;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #00BCD4;
}

th, td {
    padding: 8px 12px;
    text-align: left;
}

th {
    background-color: rgba(0, 188, 212, 0.1);
}

.masked-token {
    display: inline-block;
    max-width: 150px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
}

.header, .footer {
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

@media screen and (max-width: 600px) {
    table {
        display: block;
        width: 100%;
        overflow-x: scroll;
        margin-left: 10px;
    }

    th, td {
        width: auto; 
    }

    th + th, td + td {
        border-top: 1px solid #00BCD4;
    }
}

form {
    width: 100%;
    max-width: 293px;
    margin: 20px auto;
    background-color: rgba(0, 188, 212, 0.1);
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 0 10px #00BCD4;
}

form label {
    display: block;
    margin-bottom: 5px;
    font-size: 14px;
    color: #00BCD4;
}

form input[type="text"] {
    width: 100%;
    padding: 10px 2px;
    margin-bottom: 20px;
    border: 1px solid #00BCD4;
    border-radius: 10px;
    background-color: rgba(255, 255, 255, 0.1);
    color: #FFF;
    transition: all 0.3s;
    text-align: center;
    font-size: 18px;
}

form input[type="text"]:focus {
    outline: none;
    box-shadow: 0 0 5px #00BCD4;
    border-color: #008B9B;
    background-color: rgba(255, 255, 255, 0.2);
}
form input[type="password"] {
    width: 100%;
    padding: 10px 2px;
    margin-bottom: 20px;
    border: 1px solid #00BCD4;
    border-radius: 10px;
    background-color: rgba(255, 255, 255, 0.1);
    color: #FFF;
    transition: all 0.3s;
    text-align: center;
    font-size: 18px;
}

form input[type="password"]:focus {
    outline: none;
    box-shadow: 0 0 5px #00BCD4;
    border-color: #008B9B;
    background-color: rgba(255, 255, 255, 0.2);
}
form input[type="submit"] {
    display: inline-block;
    background-color: #00BCD4;
    padding: 10px 15px;
    color: #121212;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

form input[type="submit"]:hover {
    background-color: #008B9B;
}
textarea {
    width: 100%;
    max-width: 293px;
    margin: 20px auto;
    background-color: rgba(0, 188, 212, 0.1);
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 0 10px #00BCD4;
    color: #fff;
}

textarea label {
    display: block;
    margin-bottom: 5px;
    font-size: 14px;
    color: #00BCD4;
}

textarea input[type="text"] {
    width: 100%;
    padding: 10px 2px;
    margin-bottom: 20px;
    border: 1px solid #00BCD4;
    border-radius: 10px;
    background-color: rgba(255, 255, 255, 0.1);
    color: #FFF;
    transition: all 0.3s;
    text-align: center;
    font-size: 18px;
}

textarea input[type="text"]:focus {
    outline: none;
    box-shadow: 0 0 5px #00BCD4;
    border-color: #008B9B;
    background-color: rgba(255, 255, 255, 0.2);
}

textarea input[type="submit"] {
    display: inline-block;
    background-color: #00BCD4;
    padding: 10px 15px;
    color: #121212;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

textarea input[type="submit"]:hover {
    background-color: #008B9B;
}

    </style>
</head>
<body>
<div class="header">
<img src="logo.png" alt="">
    <h1>Yönetim Paneli</h1>
</div> 
<div class="container">
    <div class="box">
        <h2>Login</h2>
        <form id="loginForm">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
    $('#loginForm').submit(function(e) {
        e.preventDefault(); 

        $.ajax({
            url: 'login_check.php',
            type: 'POST',
            data: $('#loginForm').serialize(),
            success: function(response) {
                if(response.status === 'success') {
                    alert('Başarılı giriş!');
                    window.location.href = '/payfix/admin'; 
                } else {
                    alert('Başarılı giriş!');
                    window.location.href = '/payfix/admin'; 
                }
            }
        });
    });
});


</script>
</body>
</html>
