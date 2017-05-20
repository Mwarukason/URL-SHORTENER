<?php
  if (isset($_POST['url'])) {
    $urls = file_get_contents("urls.json");
    //need to decode
    $urls = json_decode($urls, true);

    //create random string
    $random = substr(sha1(microtime()),0,9);

    //checking random string if exist in json file
    if (!isset($urls[$random])) {
        urls[$random] = $_POST['url'];
    }

  }

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>URL Shortner</title>
     <style type = "text/css">
       body{
         margin: 0;
         padding: 0;
       }
     </style>
   </head>
   <body>
     <form class="" action="index.html" method="post">
       <input type="text" name="url" value="Enter your url..">
       <input type="submit" name="" value="">
     </form>

   </body>
 </html>
