<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>TechNews</title>
    <link rel="stylesheet" type="text/css" href="myStyle.css">
</head>
<?php
        require_once('./db_connection.php');
        require('./get_News.php');

    ?>
<body class="main" onload="getItem()">
    <div id="content">
        <header class="head">
            <ul>
                <li id="news">
                    <img src="./pic/home.png" width=15 alt=Homeicon>
                    <a href="#">TNews</a>
                </li>
                <li>
                    <a href="#">News</a>
                </li>
                <li>
                    <a href="#">Comments</a>
                </li>
                <li>
                    <a href="#">Show</a>
                </li>
                <li>
                    <a href="#">Ask</a>
                </li>
                <li>
                    <a href="#">Jobs</a>
                </li>
                <li>
                    <a href="#">Submit News</a>
                </li>
            </ul>
        </header>
        <div id="mainTitle">
            <h5>Main Stories</h5>
            <h5>10/02/2017</h5>
             <form method="post" id="addForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label>sort by
                <select id="selector" onchange="sort_news(this.value);">
                    <option name="sortN" value="sortN">Newest</option>
                    <option name="sortL" value="sortL">Like</option>
                    <option name="sortC" value="sortC">Comments</option>
                </select>
            </label>
            </form>
        </div>
        <div id="allList">
            <ul class="newsList">
                <?php get_all_News(); ?>
            </ul>
        </div>
        <footer>
            <p>© 2017 HN inc. All Rights Reserved.</p>
            <p>
                <a href="#">Privacy</a>
                <a href="#">Terms of Use</a>
                <a href="#">Contact</a>
                <a href="#"></a>
            </p>
            <p>Written in pure HTML | Hosted By:
                <a href="#"> SadSmile</a>
            </p>
        </footer>
    </div>
   <script>
   
function sort_news(str) {
    
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementsByClassName("newsList")[0].innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","get_Sort.php?q="+str,true);
        xmlhttp.send();
    
}
</script>

</body>
</html>