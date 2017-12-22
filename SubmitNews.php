<!DOCTYPE html>
<head>
    <title>Submit News</title>
    <link rel="stylesheet" type="text/css" href="myStyle.css">
</head>
<?php 
    require_once('./db_connection.php');
    require('./insert_News.php');
    
    if(isset($_POST['Submit_btn'])) {
            // insert a new todo item
            $title = $_POST["titleBox"];
            if(!empty($_POST["UrlBox"]) && empty($_POST["textareaBox"])){
            $Url = $_POST["UrlBox"];
            insert_News($title,$Url," ");
            }else if(empty($_POST["UrlBox"]) && !empty($_POST["textareaBox"])){
            $textarea= $_POST["textareaBox"];
            insert_News($title,$textarea," ");
        }
    }


?>
<body class="jsBody">
        <div class="jsContent">
    <h1 id="headTitle">Submit</h1>
    <form method="post" id="addForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div id="Linput">
        <div id="divTitle">
        <label>Title: <div></div><input id="titleBox" name="titleBox" type="text"></label>
    </div>
        <div></div>
        <div id="divURL">
        <label>URL: <div></div><input id="passBox" name="UrlBox" type="text"></label> 
    <h4>or</h4>
    <div id="textBox">
            <label>Text:<textarea id="textareaBox" name="textareaBox" rows="10" cols="50"></textarea></label>
        </div>
    </div>
</div>
    <button name="Submit_btn" id="Submit-btn" onclick="Valid();">Submit</button>
    </div>
    </form>
    
    <script>
    
     //cheack title
        var Title = document.createElement('div');
        Title.appendChild(document.createTextNode("Title Must be filled out..!"));
        Title.style = "coloer: black ; border: 1px solid red ;  margin: 3px ; padding: 3px ; background-color: rgb(255, 220, 220) ; display: none "
        document.getElementById("divTitle").appendChild(Title);
        var titleValid = function(TitleField){
        if (TitleField.value == "") 
        {
            Title.style.display = "block"
            return false;
        }
        Title.style.display = "none"
        return true;
}

     //cheack URL & textArea
     var cheack = document.createElement('div');
     cheack.appendChild(document.createTextNode("Either the URL or Text field must be filled out..!"));
     cheack.style = "coloer: black ; border: 1px solid red ;  margin: 3px ; padding: 3px ; background-color: rgb(255, 220, 220) ; display: none "
        document.getElementById("divURL").appendChild(cheack);
        var Valid = function(){
            titleValid(document.getElementById("titleBox"));
        if (document.getElementById("passBox").value == "" && document.getElementById("textareaBox").value == "") 
        {
            cheack.style.display = "block"
            return false;
        }
        cheack.style.display = "none"
        return true;
}
    
    </script>
</body>