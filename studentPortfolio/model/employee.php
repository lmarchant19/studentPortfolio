<?php
/******************************************************************************************/
    /* Date        Name             Description                                               */
    /* ----------  ---------------- --------------------------------------------------------- */
    /* 9-18-2020    logan Marchant       Added new model for employee entity               */
    /* 9-23-2020    logan Marchant       Added static call to getDB() and try/catch                               */
    /******************************************************************************************/
function getEmployees() {
    //global $db;
    try {
        $db = Database::getDB();
        $query = 'SELECT * FROM employee     ORDER BY employeeID';
        $statement = $db->prepare($query);
        $statement->execute();
        $employees = $statement->fetchAll();
        $statement->closeCursor();
    } catch (PDOException $e) {
        include('../model/database_error.php');
    }

    return $employees;
}
?>
