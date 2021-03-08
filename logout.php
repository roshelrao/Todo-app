<?php
Session_start();
Session_destroy();
header("location:home.php");