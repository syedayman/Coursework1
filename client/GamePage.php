<html>
<head>
  <title>Tasty Tower</title>
</head>
<link rel="stylesheet" type="text/css" href="Game.css">
<body bgcolor="#4297FB">

<div id="background" class="background">

    <table>
        <tr>
            <td><h1>Score: </h1></td>
            <td><h1 id="score">0</h1></td>
        </tr>
    </table>
	<div class="burger">
        <img src="burger1.png" id="burger">
    </div>
    <div class="player">
        <img src="pngegg.png" id="player">
    </div>
    <div id="gameover"></div>
    <img src="background_18.png" width="600px" height="1000px">
</div>

<div class="startbtn">
    <button onclick='move()'><b>Start Game</b></button>  
</div>
<script src="Game.js"></script>
</body>
</html>
