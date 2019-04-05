<!DOCTYPE html>
<html>
<head>
<title>How To Make Image SlideShow Using Javascript</title>
<link rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="fontawesome/css/font-awesome.css"/>
<script  src="javakl.js"></script>

</head>
<body>
<!-- Html source code How To Make Image SlideShow Using Javascript
 Video tutorial https://www.youtube.com/watch?v=f-nUv4HPS8Q-->
<div id="container">

<p id="pic"></p>

<div id="sliderdiv">
<img src="images/Chrysanthemum.jpg" height="400px" width="900px" id="imagethmb"/>

<div id="buttons">
<a href="#" onclick="startslide(1)"  > </a>
<img src="images/next.png" onclick="startslide(1)" height="70px" width="70px" class="next"/>
<img src="images/previous.png" onclick="startslide(-1)" height="70px" width="70px" class="previous"/>
</div>

<div id="caption">
<p id="cap">caption</p>
</div>

</div>
</div>
</body>
</html>
