<?php
#*********************************************************************************
#
#Employee List
#Name       Date          Description
#Logan      9/16/2020     Displays employees in order alphabetically
#
#********************************************************************************* 
$dsn = 'mysql:host=localhost;dbname=lmportfolio';
$username = 'lm_user';
$password = 'Pa$$w0rd';

class Database {
    private static $dsn = 'mysql:host=localhost;dbname=lmportfolio';
    private static $username = 'lm_user';
    private static $password = 'Pa$$w0rd';
    private static $db;

    private function __construct() {}

    public static function getDB () {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                                     self::$username,
                                     self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                //include('../errors/database_error.php');
                exit();
            }
        }
        return self::$db;
    }
}        

class Employee{
    private $id;
    private $first_name;
    private $last_name;

    public function __construct($id, $first_name, $last_name) {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function getID() {
        return $this->id;
    }

    public function setID($value) {
        $this->id = $value;
    }

    public function getFirstName() {
        return $this->first_name;
    }

    public function setFirstName($value) {
        $this->first_name = $value;
    }
    public function getLastName() {
        return $this->last_name;
    }

    public function setLastName($value) {
        $this->last_name = $value;
    }
}

class EmployeeDB {
    public static function getEmployees() {
        $db = Database::getDB();
        $query = 'SELECT * FROM employee
                  ORDER BY last_name';
        $statement = $db->prepare($query);
        $statement->execute();
        
        $employees = array();
        foreach ($statement as $row){
            $employee = new Employee($row['employeeID'], $row['first_name'], $row['last_name']);
            $employees[] = $employee;
        }
    
        return $employees;
    }
}

$employees = EmployeeDB::getEmployees();
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
   <title>Thank You</title>
</head>
<body>
   <header>
     
     <h1 class="google"><a href="index.html"><img src="images/logo.svg" alt="My logo"></a>Logan Marchant</h1>
      <nav>
         <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="experience.html">Experience</a></li>
            <li><a href="contact.html">Contact</a></li>
         </ul>
      </nav>
   </header>
   <main>
       <h2>Employee Listing</h2>
       <ul>
           <?php foreach ($employees as $employee) : ?>
           <li>
               <?php echo $employee->getLastName() . ", " . $employee->getFirstName(); ?>
           </li>
       </ul>
       <?php endforeach; ?>
       <br>
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