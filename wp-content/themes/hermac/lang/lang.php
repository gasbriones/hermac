<?php
session_start();
if ($_GET["lang"]) {
    $_SESSION["lang"] = $_GET["lang"];
} elseif (!$_SESSION["lang"]) {
    $_SESSION["lang"] = "es";
}
