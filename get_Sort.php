<?php 

    require_once('./db_connection.php');

    $q = $_GET['q'];
    
   if($q == "sortN"){
    $get_sort_query = "SELECT * FROM  `news` ORDER BY `time` DESC ";
    $response = $GLOBALS['conn']->query($get_sort_query);
    if ($response && $response->num_rows > 0) {
        
        while ($row = $response->fetch_array()) {
                    echo '<li>';
                    echo "<a href=".$row["url"].">".$row["title"]."</a>";
                    echo "<ul>";
                    echo "<li>".$row["score"]." likes | ".$row["time"]." | ".$row["descendants"]." Comment </li>";
                    echo "</ul>";
                    echo '</li>';
            
        }
        
    } else {
        echo '<h2>Your Hacker News list is empty!</h2>';
    }
}else if($q == "sortL"){
     $get_sort_query= "SELECT * FROM  `news` ORDER BY  `news`.`score` DESC  ";
    $response = $GLOBALS['conn']->query($get_sort_query);
    if ($response && $response->num_rows > 0) {
        
        while ($row = $response->fetch_array()) {
                    echo '<li>';
                    echo "<a href=".$row["url"].">".$row["title"]."</a>";
                    echo "<ul>";
                    echo "<li>".$row["score"]." likes | ".$row["time"]." | ".$row["descendants"]." Comment </li>";
                    echo "</ul>";
                    echo '</li>';
            
        }
        
    } else {
        echo '<h2>Your Hacker News list is empty!</h2>';
    }
    
    
}else{
    
     $get_sort_query = "SELECT * FROM  `news` ORDER BY  `news`.`descendants` DESC ";
    $response = $GLOBALS['conn']->query($get_sort_query);
    if ($response && $response->num_rows > 0) {
        
        while ($row = $response->fetch_array()) {
                    echo '<li>';
                    echo "<a href=".$row["url"].">".$row["title"]."</a>";
                    echo "<ul>";
                    echo "<li>".$row["score"]." likes | ".$row["time"]." | ".$row["descendants"]." Comment </li>";
                    echo "</ul>";
                    echo '</li>';
            
        }
        
    } else {
        echo '<h2>Your Hacker News list is empty!</h2>';
    }
    
    
    
}
?>