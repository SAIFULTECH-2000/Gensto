<?php

echo "SELAMAT DATANG KE FRAMEWORK EPUL CONCEPT OOP AND MVC LITE \n";
echo "DEVELOP BY saifultech.official@gmail.com\n\n";
echo "[1]CREATE CONTROLLER\n";
echo "[2]CREATE MODELS\n";
echo "[3]CREATE View\n";
echo "\n\n Your choice:";

$input = trim(fgets(STDIN,1024));
switch ($input) {
    case 1:
        echo "Masukan Nama Controller:";
        $name= trim(fgets(STDIN,1024));
        $file=fopen("./app/controllers/$name.php", "a");
        fwrite($file, "<?php
        class $name extends Controller{
            public function index(){

            }
        }
        ");
        fclose($file);
        break;
    case 2:
        echo "Masukan Nama Model:";
        $name= trim(fgets(STDIN,1024));
        $file=fopen("./app/models/$name.php", "a");
        fwrite($file, "<?php
        class $name{
           
        }
        ");
        fclose($file);
        break;
    case 3:
        echo "Masukan Nama View";
        $name= trim(fgets(STDIN,1024));
        $file=fopen("./app/models/$name.php", "a");
        fwrite($file, '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            
        </body>
        </html>
        ');
        fclose($file);
        break;
    
    default:
    echo "Maaf salah input sila cuma lagi";
}
?>