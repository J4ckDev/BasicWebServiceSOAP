# Servicio SOAP Básico

Este proyecto es un ejemplo de un servicio SOAP básico, que recibe el nombre de un cliente y le retorna un mensaje indicando que el servidor está bien con la fecha y hora de la petición.

## Services.php

Este archivo contiene la definición de todos los servicios del proyecto, para este ejemplo solo tiene un servicio llamado `serverInfo`.

## Server.php

Este archivo contiene la instancia del servicio web que se encargará de atender las peticiones del cliente. El servidor atiende POST y GET para los siguientes objetivos:  
- Para hacer uso del servicio `serverInfo`, la petición se debe realizar con POST a la URL `http://localhost/soap/Server.php`. 
- Para obtener el WSDL del servicio, la petición se debe realizar con GET a la URL `http://localhost/soap/Server.php?wsdl`.  

### Nota
Es importante que los archivos de este repositorio se guarden en una carpeta llamada **soap** y que esta sea hijo directo de la carpeta **www (en el caso de wamp)**, **htdocs (en el caso de xampp)** o del lugar donde localhost carga los archivos; para que las URL mencionadas anteriormente sean válidas. Si por el contrario estos archivos son guardados en otro lugar, deberá actualizar la información en el archivo [wsdl](./wsdl/services.wsdl) con su nueva URL.

## Client.php

En construcción.