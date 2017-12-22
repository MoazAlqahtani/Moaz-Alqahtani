<!DOCTYPE html>
<head>
<title>Getting Started with Node.js</title>
<link rel="stylesheet" type="text/css" href="myStyle.css">
</head>
<body class="jsBody">
    <div class="jsContent">
        <div id="vote">
            <button id="up">&#708;</button>
            <p id="num">0</p>
            <button id="down">&#709;</button>
        </div>
    <h1>Getting Started with Node.js</h1>
    <h2>Installation:</h2>
    <div id="Windows">
        <h4>Windows</h4>
        <p>Download the Windows Installer Directly from <a href="#">nodejs.or</a></p>
    </div>
    <div id="macOS">
        <h4>macOS</h4>
        <div class="Code"><code>brew install node</code></div>
    </div>
    <div id="Linux">
            <h4>Linux</h4>
            <div class="Code"><code>curl -sL https://deb.nodesource.com/setup_6.x | sudo -E bash - sudo apt-get install -y nodejs</code></div>
    </div>
    <div id="Guides">
        <h3>Guides</h3>
        <p>Articles and tutorails about Node.js are <a href="#">available here</a></p>
    </div>
    <h3>Looking for guides of previous Node.js releases?</h3>
    <div id="table">
            <table>
                <tr>
                    <th>Version</th>
                    <th>Guides</th>
                </tr>
                <tr>
                    <td>Node.js</td>
                    <td><a href="#">Node.js 5.x Guides</a></td>
                </tr>
                <tr>
                    <td>Node.js</td>
                    <td><a href="#">Node.js 4.x Guides</a></td>
                </tr>
                <tr>
                    <td>Node.js</td>
                    <td><a href="#">Node.js 0.12 Guides</a></td>
                </tr>
                <tr>
                    <td>Node.js</td>
                    <td><a href="#">Node.js 0.10 Guides</a></td>
                </tr>
            </table>
    </div>
</div>

<script>

var up = document.getElementById("up");
var num = document.getElementById("num");
var down = document.getElementById("down");

up.addEventListener("click",function(){
    var numInt = parseInt(num.innerHTML);
    numInt++;
    num.innerHTML = numInt;

})

down.addEventListener("click",function(){
    var numInt = parseInt(num.innerHTML);
    numInt--;
    num.innerHTML = numInt;

})



</script>
</body>