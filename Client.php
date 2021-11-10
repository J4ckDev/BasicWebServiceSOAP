<?php

$date = date('Y-m-d');
$time = date('H:i:s');
if (!file_exists("./logs")) mkdir("./logs");
$log = fopen("./logs/log_$date.txt", 'a');

try {
    $urlWebService = 'http://127.0.0.1/soap/Server.php?wsdl';
    
    $client = new SoapClient($urlWebService);

    $params = array(
        "name" => "John"
    );

    // Si se desean observar las funciones disponibles en el servicio web, se debe descomentar la siguiente linea
    // var_dump($client->__getFunctions());
    // En este caso, como en Services.php solo se definió una funcion, obtendrá "serverInfoResponse serverInfo(serverInfo $name)".

    /* 
        serverInfo es la función disponible en el servicio web y response es el nombre de la etiqueta donde viene el mensaje de 
        respuesta.
    */
    $result = $client->serverInfo($params)->response;
    
    echo $result;

} catch (SoapFault $e) {
    fwrite($log, "$time | " . "ERROR | " . "The operation was not executed. - " . $e->getMessage() . "\n");
}
