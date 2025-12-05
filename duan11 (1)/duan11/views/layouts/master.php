<?php
include __DIR__ . "/header.php";
include __DIR__ . "/menu.php";

if (isset($content) && file_exists($content)) {
    include $content;
}


include __DIR__ . "/footer.php";
