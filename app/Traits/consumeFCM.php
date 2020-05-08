<?php

namespace App\Traits;

use Guzzlehttp\Client;

trait ConsumeFCM 
{
	public function setEndPoint($endpoint)
    {    //if there is a case to override endpoint
        $this->endpoint = $endpoint;
    }

    public function data(array $data=[])
    {
        $this->data = $data;
    }
    public function topic($topic)
    {
        $this->topic=$topic;
    }
    public function notification(array $notification = [])
    {
        $this->notification = $notification;
        return $this;
    }
    public function send(){

        $server_key = "AAAA1lyU3uU:APA91bG61i112mXIh5VIgIhepAMdjYMagveTiElNXXLUxgtK9aDoPtkdJzLV0j7PtXSYzoLld8cbAsLntyHdgEEsJnG7iI_Y3RWtun_3Nb0cz7QijchzyISsNezyuiz3u80Hru4dvGCS";

        $headers = [
            'Authorization' => 'key='.$server_key,
            'Content-Type'  => 'application/json',
        ];
        $fields = [
            'to'=>"f4gBimIrg5f0V43QZyBPuI:APA91bE_EQ3AJKf_-n8HoRzm1LXT6P6wkUvmA_la5gLG4haYmoPfbXWWoDt1DtMV_e2TPD1ooEthK-ZvnGAEdYBiJNPmgwz5knR3tdDJ6HaDVgrodkWl9xokHkPcsVpqJnx1RS-lp2X7",
            'content-available' => true,
            'priority' => 'high',
            'data' => $this->data,
        ];

        $fields = json_encode($fields);
        
        $client = new Client($this->endpoint);

        try{
            $request = $client->post([
                'headers' => $headers,
                "body" => $fields,
            ]);
            $response = $request->getBody();
            return dd($response);
        }
        catch (Exception $e){
            return $e;
        }

    }

}