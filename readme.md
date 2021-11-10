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

Este archivo se encarga de consultar el servicio web para hacer uso del servicio `serverInfo`, que retorna un mensaje. Si por ejemplo se envía el parámetro `John`, el servidor retornaría un mensaje como el siguiente `Today 2021-11-09 23:11:11 the server is running correctly my dear John`.

### Solución error en PHP 5.6.x
Si obtiene el siguiente error

```
Deprecated: Automatically populating $HTTP_RAW_POST_DATA is deprecated and will be removed in a future version. To avoid this warning set 'always_populate_raw_post_data' to '-1' in php.ini and use the php://input stream instead. in Unknown on line 0

Warning: Cannot modify header information - headers already sent in Unknown on line 0
```
o en la carpeta logs que puede generar `Client.php`, uno de los archivos contiene un error que dice `The operation was not executed. - looks like we got no XML document`. El error se soluciona abriendo el archivo `php.ini` descometando la línea `always_populate_raw_post_data = -1`. De todas maneras la recomendación es hacer un upgrade de PHP 5.6.x a cualquier versión de PHP 7.0 en adelante.