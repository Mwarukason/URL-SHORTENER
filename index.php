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
    echo "<p align=center>Shortened URL: localhost/url-shortener/url.php?url={$random}</p>";

  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome To URL Shortener Website</title>
    <style type = "text/css">
        body{
          margin: 0;
          background-color: #e6e6e6;
          }
        .form{
          margin: 0 auto;;
          display: flex;
          justify-content: center;
        }

        /* Add padding to formContent elements */
        .formContent {
            width: 50%;
            margin: 0;
            padding: 0;
        }
        .formContent h3{
          text-align: center;
          color: white;
        }

        /* Full-width inputBtn fields */
        .inputBtn {
            width: 60%;
            padding: 10px;
            margin: 10px;
            border-radius: 4px;
            display: inline-block;
            font-family: Helvetica;
            border: 1px solid #ccc;
            float: left;
            border: 1px solid #e6e6e6;

        }

        .label{
          width: 30%;
          float: left;
          padding: 10px;
          font-family: Helvetica;
        }
        /* Set a style for register submit buttons */
        .submitBtn {
            width: 98%;
            color: white;
            border: none;
            height: 50px;
            cursor: pointer;
            font-size: 18px;
            line-height: 50px;
            border-radius: 5px;
            text-align: center;
            font-family: Helvetica;
            background-color: #293ca6;

            /*shadow*/
            -moz-box-shadow: 0 4px 0px rgba(0, 0, 0, 0.4);
             -webkit-box-shadow: 0 4px 0px rgba(0, 0, 0, 0.4);
             box-shadow: 0 4px 0px rgba(0, 0, 0, 0.4);
        }
    </style>
  </head>
  <body>
    <form method="POST" class="form" action="" name="regForm">
    <div class="formContent">
    <h3 class="submitBtn">WELCOME TO URL SHORTEN SITE</h3>
    <div>
      <label class="label">PLEASE, ENTER YOUR URL HERE:</label>
      <input class="inputBtn" name="url" type="text" placeholder="Enter url here." name="un" />
      <br>
    </div>
    <input type="submit" value="ENTER" class="submitBtn" />
    </div>
  </div>
</form>
  </body>
</html>
