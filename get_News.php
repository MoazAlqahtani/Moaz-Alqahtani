<?php 
function get_all_News()
{
    $get_all_tasks_query = "SELECT * FROM `news`";
    $response = $GLOBALS['conn']->query($get_all_tasks_query);
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