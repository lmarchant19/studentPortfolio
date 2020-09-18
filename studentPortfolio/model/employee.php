<?php
/******************************************************************************************/
    /* Date        Name             Description                                               */
    /* ----------  ---------------- --------------------------------------------------------- */
    /* 9-18-2020    logan Marchant       Added new model for employee entity               */
    /*                                                                                        */
    /******************************************************************************************/
function getEmployees(){
    global $db;
    $query = 'SELECT * FROM employee
                           ORDER BY employeeID';
    $statement = $db->prepare($query);
    $statement->execute();
    $employees = $statement->fetchAll();
    $statement->closeCursor();
    
    return $employees;
}
?>
