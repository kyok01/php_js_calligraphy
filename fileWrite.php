<?php
// CORS permission
if($_SERVER["HTTP_HOST"] == 'localhost'){
    header('Access-Control-Allow-Origin: http://localhost:3000');
    header('Access-Control-Allow-Methods: GET, POST');
    header("Access-Control-Allow-Headers: X-Requested-With");
}

$html = $_POST["html"];
$js = $_POST["js"];
$css = $_POST["css"];

$file = fopen("./data/test.html", "w" ); //ファイルOPEN
fwrite( $file, $html); //書込みです
fclose( $file ); //ファイル閉じる

$file = fopen("./data/main.js", "w" ); //ファイルOPEN
fwrite( $file, $js); //書込みです
fclose( $file ); //ファイル閉じる

$file = fopen("./data/style.css", "w" ); //ファイルOPEN
fwrite( $file, $css); //書込みです
fclose( $file ); //ファイル閉じる

clearstatcache(); // cashe clear
echo $html;
?>