<?php
// require('header.php');
 ?>
 <!doctype html>
 <html lang="en-us">
 <head>
 <title>Dummy Page</title>
 <meta charset="UTF-8"/>
 <style>
 .testDivision{
   height: 200px;
   max-width: 50%;
   background-color: #36454f;
   color: #d6ed17ff;
 }
 .divv{
   height: 100px;
   width: 500px;
   background-color: #000;
   color: #fff;
 }
 .gift{
   margin: 10px auto;
   padding: 40px;
   border: 2px inset #f00;
   width: 80%;
   box-sizing: border-box;
 }
 .customBox{
 /** Total wisdth: 200px; **/
 width: 146px;
 padding: 20px;
 margin: 5px;
 border: 2px outset khaki;
 font-size: 8px;
 height: 146px;
 }
 </style>
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 </head>
 <body>
 <h1>Hello World.</h1>
 <div class="testDivision">
 <p>It's worrking as expected.</p>
</div>
<div class="divv">
<p>Another Division.</p>
</div>
<div class="gift">
<h1><u>Gift Division:</u></h1>
<p>A simple text.</p>
</div>
<div class="customBox">
<h1>customBox Division:</h1>
<p>A customBox text.</p>
</div>
</body>
</html>
<?php  //require 'footer.php';  ?>
