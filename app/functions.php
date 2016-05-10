<?php

function list_modules_css()
{
    $src = array("css", "modules");
    foreach($src as $path) {
        $hdl = opendir($path);
        while($file = readdir($hdl)) {
            if(preg_match('/\.css$/', $file)) {
                $mtime = filemtime($path."/".$file);
                echo "<link href=\"/$path/$file?r=$mtime\" rel=\"stylesheet\" type=\"text/css\" >\n";
            }
        }
        closedir($hdl);
    }
}

function list_modules_js()
{
    $src = array("js", "modules");
    foreach($src as $path) {
        $hdl = opendir($path);
        while($file = readdir($hdl)) {
            if(preg_match('/\.js$/', $file)) {
                $mtime = filemtime($path."/".$file);
                echo "<script src=\"/$path/$file?r=$mtime\"></script>\n";
            }
        }
        closedir($hdl);
    }
}

function list_templates()
{
    $src = array("templates", "modules");
    foreach($src as $path) {
        $hdl = opendir($path);
        while($file = readdir($hdl)) {
            if(preg_match('/\.tmpl$/', $file)) {
                $contents = file_get_contents($path."/".$file);
                echo "$contents\n";
            }
        }
        closedir($hdl);
    }
}

function list_html() {
    $src = array("modules");
    foreach($src as $path) {
        $hdl = opendir($path);
        while($file = readdir($hdl)) {
            if(preg_match('/\.html$/', $file)) {
                $contents = file_get_contents($path."/".$file);
                echo "$contents\n";
            }
        }
        closedir($hdl);
    }
}
