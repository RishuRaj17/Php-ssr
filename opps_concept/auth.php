<?php

interface Authenticator {
    public function authenticate($username, $password);
}

class AdminAuthenticator implements Authenticator {
    public function authenticate($username, $password) {
        $adminCredentials = [
            'admin' => 'admin_password' 
        ];
        
        return isset($adminCredentials[$username]) && $adminCredentials[$username] === $password;
    }
}

class UserAuthenticator implements Authenticator {
    public function authenticate($username, $password) {
        $userCredentials = [
            'user1' => 'user1_password', 
            'user2' => 'user2_password'
        ];
        
        return isset($userCredentials[$username]) && $userCredentials[$username] === $password;
    }
}

function authenticateUser ($role, $username, $password) {
    if ($role === 'admin') {
        $authenticator = new AdminAuthenticator();
    } elseif ($role === 'user') {
        $authenticator = new UserAuthenticator();
    } else {
        throw new InvalidArgumentException("Invalid role specified");
    }

    return $authenticator->authenticate($username, $password);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $role = strtolower(trim($_POST['role']));
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    try {
        if (authenticateUser ($role, $username, $password)) {
            echo "Authentication successful!";
        } else {
            echo "Authentication failed!";
        }
    } catch (InvalidArgumentException $e) {
        echo $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Authentication</title>
</head>
<body>
    <h1>User Authentication</h1>
    <form method="POST">
        <label for="role">Role (admin/user):</label>
        <input type="text" id="role" name="role" required><br><br>
        
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>
</body>
</html>