<?php
include("api.php");
$use = new tele();
$use->cookie = "stel_web_auth=https%3A%2F%2Fweb.telegram.org%2Fk%2F'";             //If you need cookies in the future.But now working...
$use->tgfind();
