<?php
function insert_News($title,$Url,$textarea)
{
    // validate the given task
    $title1 = validate_input($title);
    $Url1 = validate_input($Url);
    $textarea1 = validate_input($textarea);
    if(empty($title1) && empty($Url1) && empty($textarea1)){
        return;
    }
 
    // create a prepared statement to protect against SQL injections
    $insert_statement = $GLOBALS['conn']->prepare("INSERT INTO `c9`.`news` (`score`, `title`, `url`, `time`, `descendants`) VALUES ('2', ?, ?, now(), '2');");

    if ($insert_statement) {
        // Bind our variable to the prepared statement as a parameter
        $insert_statement->bind_param("ss",$title,$Url); // s indicates the data type is string.
        /* execute the prepared statement, and check if it was successful
        * If it was inserted successfully, then the affected rows should be 1
        */
        if (!$insert_statement->execute() || $insert_statement->affected_rows !=1) {
            print_r('Error executing MySQL insert statement: ' . $insert_statement->err);
            return;
        }
        // close the prepared statement
        $insert_statement->close();
    } else {
        printf("Failed to insert into the database:Erro number: %d,  %s\n",
        $insert_statement->errorno, $insert_statement->error);
    }
}

// trim any extra white spaces and escape special HTML characters
function validate_input($data)
{
    $data = trim($data); 
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>