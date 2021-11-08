<?php

require_once './Services.php';

/* 
    Durante la ejecución del script, se usa ini_set para asegurar que esté deshabilitada la opción de cache del WSDL.
    El WSDL, es una notación que permite indicar a un cliente en como debe componer la solicitud del 
    servicio web SOAP al que desea acceder. 

    https://www.php.net/manual/es/function.ini-set.php
    https://www.php.net/manual/es/soap.configuration.php
*/
ini_set("soap.wsdl_cache_enabled", "0");

/* 
    Creación del SoapServer 
    https://www.php.net/manual/es/class.soapserver.php 
*/

// Especificar ubicación donde se encontrará el WSDL del servicio web. Parámetro wsdl en el constructor de SoapServer. 
$wsdlLocation = './wsdl/services.wsdl';

// options para el constructor del SoapServer 
$parameters = [
    'uri' => 'http://localhost/soap/',
    'soap_version' => SOAP_1_1,
];

$server = new SoapServer($wsdlLocation, $parameters);

// Instanciar la clase Service para que sea un servicio web basado en SOAP.
$server->setClass('Services');

// Procesar la petición del cliente. Si no se pasa un argumento, se asume que la petición viene en los datos POST.
$server->handle();