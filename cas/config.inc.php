<?php 

	//los atributos de abajo son los que tenemos que modificar
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    //$username = "lauryv";
    $password = "";
    $database = "c9";
    $dbport = 3306;

    // Create connection
    /*mysql_connect($servername, $username, $password) or die ("No se a podido conectar");
    mysql_select_db($database);*/
    // Check connection
    //$us=mysql_query("SELECT `nombre` FROM `Usuarios` WHERE ID like 2");
    //$user=mysql_fetch_row($us);
    //
    //echo $user[0];
    //echo "Connected successfully!";
    //--------------------------------------------------------------------------------------------
    /*$username = "u292883372_rami"; 
    $password = "cursoandroid";*/ 
    $dbname = "u292883372_bdrem"; 


    // Para saber más de que se trata UTF-8 visita http://en.wikipedia.org/wiki/UTF-8 
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'); 
     
    try 
    { 
        $db = new PDO("mysql:host={$servername};dbname={$database};charset=utf8", $username, $password, $options); 
    } 
    catch(PDOException $ex) 
    { 
        die("Failed to connect to the database: " . $ex->getMessage()); 
    } 
     
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
     
    if(function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()) 
    { 
        function undo_magic_quotes_gpc(&$array) 
        { 
            foreach($array as &$value) 
            { 
                if(is_array($value)) 
                { 
                    undo_magic_quotes_gpc($value); 
                } 
                else 
                { 
                    $value = stripslashes($value); 
                } 
            } 
        } 
     
        undo_magic_quotes_gpc($_POST); 
        undo_magic_quotes_gpc($_GET); 
        undo_magic_quotes_gpc($_COOKIE); 
    } 
    header('Content-Type: text/html; charset=utf-8'); 
    session_start(); 
    //$us=mysql_query("SELECT `nombre` FROM `Usuarios` WHERE ID like 2");
    //$user=mysql_fetch_row($us);
    //
   // echo $user[0];
    //echo "Connected successfully!";

?>