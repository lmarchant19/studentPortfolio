<?php
#*********************************************************************************
#
#Administration page
#Name       Date          Description
#Logan      9/11/2020     Added admin info to website.
#Logan      9/18/2020     Added function calls to database.
#Logan      9/23/2020     Added secure connection
#********************************************************************************* 
 require_once('util/secure_conn.php');
require_once('util/valid_admin.php');

require_once('./model/database.php');
require_once('./model/employee.php');
require_once('./model/visitor.php');

/* echo "Connection ok"; */

// Get category ID
if (!isset($empID)) {
    $empID = filter_input(INPUT_GET, 'empID',
            FILTER_VALIDATE_INT);
    if ($empID == NULL || $empID == FALSE) {
        $empID = 1;
    }
}

// Get all employees
$employees = getEmployees();

// Get visitors for employee
$visitors = getVisitorByEmp($empID);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="description" content="Logan Marchant's student portfolio">
   <meta name="keywords" content="Logan Marchant, Portfolio">
   <meta name="author" content="Logan Marchant">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
   <link href="css/styles.css" rel="stylesheet"/>
   <link href="css/clock.css" rel="stylesheet"/>
   <script src="js/clock.js"></script>
   <title>Admin</title>
</head>
<body>
   <header>
     
     <h1 class="google"><a href="index.html"><img src="images/logo.svg" alt="My logo"></a>Logan Marchant</h1>
      <nav>
         <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="experience.html">Experience</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="login.php">Admin</a></li>
         </ul>
      </nav>
   </header>
   <main>
       <br>
       <h3>Select an employee to view messages</h3>
       <?php foreach ($employees as $employee) : ?>
            <li><a href="?empID=<?php echo $employee['employeeID']; ?>">
                    <?php echo $employee['first_name']; ?>
                </a>
            </li>
            <?php endforeach; ?>
       <br>
       <table>
            <tr>
                <th>Name</th>
                <th>E-Mail</th>
                <th>Message</th>
                <th>Date</th>
                <th>&nbsp;</th>
            </tr>

            <?php foreach ($visitors as $visitor) : ?>
            <tr>
                <td><?php echo $visitor['visitor_name']; ?></td>
                <td><?php echo $visitor['visitor_email']; ?></td>
                <td><?php echo $visitor['visitor_msg']; ?></td>
                <td><?php echo $visitor['visit_date']; ?></td>
                
                <td><form action="delete_visitor.php" method="post">
                    <input type="hidden" name="visitor_id"
                           value="<?php echo $visitor['visitor_id']; ?>">
                    <input type="hidden" name="employeeID"
                           value="<?php echo $visitor['employeeID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
   </main>
   <footer>
         <p>
             <a href="https://github.com/" target="_blank"><img src="images/iconmonstr-github-1-48.png" alt="social icon for github"></a>
             <a href="https://www.linkedin.com/" target="_blank"><img src="images/iconmonstr-linkedin-5-48.png" alt="social icon for linkedin"></a><br>
             &copy; Copyright 2019. All Rights Reserved<br/><br/>
         </p>
         <div id="MyClockDisplay" class="clock"></div>
   </footer>
</body>
</html>