<pre>
<?php


$scrollseturl = "data/scrollset.txt";

$scrollsetraw = file_get_contents($scrollseturl);
$scrollset = json_decode($scrollsetraw);
$scrolls = $scrollset->scrolls;
$server = $scrollset->server;

foreach($scrolls as $value){

    copy($server."scrolls/".$value,"scrolls/".$value);

}

    echo json_encode($scrollset,JSON_PRETTY_PRINT);
    
?>
</pre>
<a href = "index.html"><img src = "iconsymbols/home.svg" alt = "home"/></a>
<style>
body{
    font-size:1em;
    font-family:courier;
    color:#00ff00;
    background-color:black;
}
</style>
