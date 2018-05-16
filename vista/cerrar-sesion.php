<?php 

session_destroy();
session_unset();

header("location: sign-in.html");

