<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="AScript/ascript.css">
  <link rel="stylesheet" href="responsive.css">
  <title>AScript CSS</title>
  <style>
    *{
  box-sizing: border-box;
}
*::selection{
  background: rgba(255, 243, 0, 0.98);
  color: rgba(0, 24, 255, 1);
}
:root{
  --color: #262626;
}
  /* Common CSS Style */
body{
  width: 1200px;
  min-width: 100%;
  margin: 0;
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
a:hover{
  color: #ff3;
  background: rgba(55, 0, 255, 1);
}
img{
  max-width: 100%;
  
}
  /* Header Area Style */
#header_area{
  display: grid;
  grid-template-columns: 23% 66%;
  justify-content: space-between;
  width: 1200px;
  max-width: 100%;
  background-color: #2e70fe;
  height: 40px;
}
#header_area img{
  max-width: 100%;
  height: 40px;
}
#header_area nav ul{
  display: flex;
}
nav ul li {
  list-style: none;
  text-decoration: none;
  margin: -10px auto 0;
  font-size: 25px;
  padding: 0;
}
nav ul li a{
  text-decoration: none;
  color: #fee;
  margin: 10px;
  padding: 5px;
}
#header_area nav ul li a:first-child{
  color: #fff;
  background: darkblue;
}
/* Body Area */
.container{
  margin-left: 15px;
  display: grid;
  grid-template-columns: 50% 20%;
  justify-content: space-evenly;
}
h1{
  text-align: center;
}
  </style>
</head>
<body>
  <header id="header_area">
    <img src="img/ascript.png" alt="AScript">
    <nav>
      <ul>
        <li>
          <a href="#">Home</a>
          <a href="#">About</a>
          <a href="#">Ofline AScript</a>
          <a href="#">CDN AScript</a>
          <a href="#">Contact</a>
        </li>
      </ul>
    </nav>
  </header>
  <div class="container">
    <div class="child1">
      <h1>Build a Website using CSS AScript</h1>
      <h3>1. What is CSS AScript ?</h3>
      <p>Answer : <br>
      <blockquote>
        AScript is a CSS framework. With which you can create a website very easily.This script is a CSS framework made up of CSS Flex Box , CSS Grid , PHP , Python and JavaScript.Also CSS variables are fully supported here.But not all browsers support CSS AScript.Some specific browsers support it.Below is the list of supported browsers. <br><br>
        <strong>Supported Browser:</strong> Google Chrome , Firefox , Opera , Microsoft Edge , safari etc.
      </blockquote>
      </p>
      <h3>2.How To Use CSS AScript ?</h3>
      <p>Answer: <br>
      <blockquote>
        You can use CSS AScript in two ways.
        <ul>
          <li>You Can Use Only CDN</li>
          <li>You Can Use Offile AScript</li>
          <a href="">Click here</a> for more details about offline AScript.
        </ul>
      </blockquote></p>
    </div>
    <div class="child2">
      <!-- <img src="img/favicon.png" alt=""> -->
    </div>
  </div>
    <script src="AScript/ascript.js"></script>
</body>
</html>