<?php
/******************************************************************************************/
    /* Date        Name             Description                                               */
    /* ----------  ---------------- --------------------------------------------------------- */
    /* 9-18-2020    logan Marchant       Added new model for visitor entity.               */
    /* 9-23-2020    logan Marchant       Added static calls to getDB() and try/catch.                            */
    /******************************************************************************************/
function getVisitorByEmp($empID) {
// Get visitors for employee
    //global $db;
    try {
        $db = Database::getDB();
        $queryVisitors = 'SELECT * FROM visitor
                  WHERE employeeID = :employeeID 
                  ORDER BY visitor_id';
        $statement3 = $db->prepare($queryVisitors);
        $statement3->bindValue(':employeeID', $empID);
        $statement3->execute();
        $visitors = $statement3->fetchAll();
        $statement3->closeCursor();
    } catch (PDOException $e) {
        include('../model/database_error.php');
    }

    return $visitors;
}

function delVisitor($visitor_id) {
    //global $db;
    try {
        $db = Database::getDB();
        $query = 'DELETE FROM visitor
              WHERE visitor_id = :visitor_id';  //visitor_id matches column name :visitor_id matches 2nd arg of bind
        $statement = $db->prepare($query);
        $statement->bindValue(':visitor_id', $visitor_id);  //:visitor matches where statement
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        include('../model/database_error.php');
    }
}

function addVisitor($visitor_name, $visitor_email, $visitor_msg) {
    //global $db;
    try {
        $db = Database::getDB();
        $query = 'INSERT INTO visitor
                         (visitor_name, visitor_email, visitor_msg, visit_date, employeeID)
                      VALUES
                         (:visitor_name, :visitor_email, :visitor_msg, NOW(), 1)';
        $statement = $db->prepare($query);
        $statement->bindValue(':visitor_name', $visitor_name);
        $statement->bindValue(':visitor_email', $visitor_email);
        $statement->bindValue(':visitor_msg', $visitor_msg);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        include('../model/database_error.php');
    }
}
?>
