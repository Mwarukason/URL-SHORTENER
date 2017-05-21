<?php
  if (isset($_POST['url'])) {
    $urls = file_get_contents("urls.json");
    //need to decode
    $urls = json_decode($urls, true);

    //create random string
    $random = substr(sha1(microtime()),0,9);

    //checking random string if exist in json file
    if (!isset($urls[$random])) {
        $urls[$random] = $_POST['url'];
    }
    //how to save urls to json file
    file_put_contents('urls.json',json_encode($urls));
    //user doesnt know Shortened url, so need to print
    //to see, whenever user reg new url will see.
    echo "Shortened URL: localhost/url-shortene/url.php?url={$random}";
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
     <form class="" action="" method="POST">
       <input type="text" name="url" value="Enter your url..">
       <input type="submit" name="" value="Submit URL ">
     </form>

   </body>
 </html>
