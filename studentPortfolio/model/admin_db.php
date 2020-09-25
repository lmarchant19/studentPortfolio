<?php
/* * *************************************************************************************** */
/* Date        Name             Description                                               */
/* ----------  ---------------- --------------------------------------------------------- */
/* 9-18-2020    Logan Marchant       Added new model for visitor entity.                      */
/*                                                                                        */
/* * *************************************************************************************** */
function add_admin($email, $password) {
    //global $db;
    $db = Database::getDB();
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = 'INSERT INTO administrators (emailAddress, password)
              VALUES (:email, :password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $hash);
    $statement->execute();
    $statement->closeCursor();
}

function is_valid_admin_login($email, $password) {
    //global $db;
    $db = Database::getDB();
    $query = 'SELECT password FROM administrators
              WHERE emailAddress = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $row = $statement->fetch();
    $statement->closeCursor();
    if (isset($row['password']) ) {
        $hash = $row['password'];
    } else {
        $hash = false;
    }
    //$hash = $row['password'];
    return password_verify($password, $hash);
}
?>