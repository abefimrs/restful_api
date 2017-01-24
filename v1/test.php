<?php

	require_once '../include/DbConnect.php';
    // opening db connection
    $db = new DbConnect();
    $conn = $db->connect();
    $email = "asif@legatotechbd.com";

   
        $sql = ' SELECT password_hash FROM users WHERE email = "'.$email.'"';

        $result = $conn->query($sql);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        //$password_hash = $result->password_hash;
        echo ($row["password_hash"]);
    //$stmt->close();
    //return 0;//$num_rows;// > 0;
?>