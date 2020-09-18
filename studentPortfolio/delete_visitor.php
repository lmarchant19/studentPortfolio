<?php
#*********************************************************************************
#
#Delete Visitor php code
#Name       Date          Description
#Logan      9/11/2020     Added delete functionality
#
#*********************************************************************************

require_once('./model/visitor.php');
require_once('./model/database.php');

// Get IDs
$visitor_id = filter_input(INPUT_POST, 'visitor_id', FILTER_VALIDATE_INT);
//$employee_id = filter_input(INPUT_POST, 'employeeID', FILTER_VALIDATE_INT);

echo "The visitor id: $visitor_id";
//echo "The employee id: $employee_id";

// Delete the product from the database
if ($visitor_id != false) {
    delVisitor($visitor_id);
}

// Display the Product List page
include('admin.php');