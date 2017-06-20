<?php
/**
 * Created by PhpStorm.
 * User: szaikin
 * Date: 20.06.2017
 * Time: 13:53
 */

function pingIP($IP)
{
    echo ("<div class='block'><div class='ip'><font color=black><b>".$IP."</b></font></div>");
    exec('ping -n 1 -w 60 '.$IP, $past);
    $convert=convert_cyr_string($past[2],"d","w");
    if (strpos($convert, "Ответ")===false)
        echo ("<div class='status'><font color=#b22222><b>OFFLINE!</b></font></div></div>");
    else echo ("<div class='status'><font color=#00ff33><b>ONLINE</b></font></div></div>");
}

pingIP($_GET['IP']);