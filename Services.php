<?php

class Services{
    public function serverInfo($client){
        $actualDate = date("Y-m-d H:i:s");
        $data = "Today " . $actualDate . " the server is running correctly my dear " . $client->name;
        $response = new stdClass();
        $response->response = $data;
        return $response;
    }
}