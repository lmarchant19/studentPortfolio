<?php
    
    $visitor_name = filter_input(INPUT_POST, 'name');
    $visitor_email = filter_input(INPUT_POST, 'email');
    $visitor_msg = filter_input(INPUT_POST, 'message');
    /* echo "Fields: " . $visitor_name . $visitor_email . $visitor_msg;  */
    
    // Validate inputs
    if ($visitor_name == null || $visitor_email == null ||
        $visitor_msg == null) {
        $error = "Invalid input data. Check all fields and try again.";
        /* include('error.php'); */
        echo "Form Data Error: " . $error; 
        exit();
        } else {
            $dsn = 'mysql:host=localhost;dbname=lmportfolio';
            $username = 'lm_user';
            $password = 'Pa$$w0rd';

            try {
                $db = new PDO($dsn, $username, $password);

            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                /* include('database_error.php'); */
                echo "DB Error: " . $error_message; 
                exit();
            }

            // Add the product to the database  
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
            /* echo "Fields: " . $visitor_name . $visitor_email . $visitor_msg; */

}

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
       <br>
       <h2>Thank you <?php echo $visitor_name; ?>, for your response. I will get back to you shortly!</h2>
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