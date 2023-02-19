<?php

class SkidataAPI {
    
    private $url = "https://skidata-integration.com/api/";
    private $user = '';
    private $pass = '';
    private $timeout = 5000;
    private $request = '{}';
  
    # Prijeti/zmena dotazu
    public function request($request)
    {
        $this->request = $request;
    }

    # Cteni dat z API
    public function SkidataRead($type = 'GetVersion')
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url . $type);
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, $this->user . ":" . $this->pass);
        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->request);
        curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
        
        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }

    # Uprava dat pro zobrazeni
    public function view($data)
    {
        return '<pre>' . json_decode($data, true) . '</pre>';
    }

}

?>