<?php

if (!isset($_COOKIE["fecha"])) { 
    setcookie("fecha", (date('l jS \of F Y h:i:s A')));
    echo "te has conectado por primera vez en: " . date('l jS \of F Y h:i:s A');
}else{
    echo "te conectaste por última vez en: " . $_COOKIE["fecha"];
    setcookie("fecha", (date('l jS \of F Y h:i:s A')));

}