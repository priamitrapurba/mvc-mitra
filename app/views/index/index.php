<!DOCTYPE html>
<html>
<head>
<style>
    body {
        background-color: greenyellow;
        font-family: Arial, sans-serif;
    }

    h2 {
        color: darkblue;
        text-align: center;
    }

    .info {
        background-color: yellowgreen;
        border: 1px solid whitesmoke;
        border-radius: 4px;
        padding: 10px;
        margin: 20px auto;
        max-width: 400px;
        text-align: center;
    }

    .info strong {
        font-weight: bold;
    }

    form {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 20px;
        margin: 0 auto;
        max-width: 400px;
        text-align: center;
    }

    p {
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: darkblue;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: skyblue;
    }
</style>
</head>
<body>
    <h2>Log In</h2>

    <div class="info">Selamat datang, <strong>Di Web MVC PBWL MITRA</strong></div>

    <form action="<?php echo URL; ?>/Dashboard/index" method="post">
        <p>Username</p>
        <input type="text">
        <p>Password</p>
        <input type="password">
        <input type="submit" value="Login">
    </form>
</body>
</html>
