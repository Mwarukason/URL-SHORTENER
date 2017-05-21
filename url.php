<?php
  if (isset($_GET['url'])) {
    //getting the urls from json file
    $urls = file_get_contents("urls.json");
    //passing it
    $urls = json_decode($urls, true);

    if(isset($urls[$GET['url']])){
      //set the http protocal b4 www 
      $urls = "http:/{$urls[$_GET['url']]}";
      header("Location: {$url}");
    }else {
      //if doesnt exist redirect user to index.php
      header('Location: index.php');
    }
  }else {
    die("Error: You never satisfy the required condition");
  }


 ?>
