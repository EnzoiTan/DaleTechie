<?php


if ($_POST["message"]) {


  mail(
    "jameslorenzo161001@email.address",
    "Here is the subject line",


    $_POST["insert your message here"] . "From: an@email.address"
  );
}
