<?php

namespace App\GatewayTraits;

trait GatewayTraits
{
    private $apostData;
    private $response;
    private $requestparams;
    private $x_priority;

    public function upi(array $array)
    {
        $this->x_priority = $array['x_priority'];
        $reques_params = array(
            "mobile" => "7988000014",
            "device-id" => "400438400438400438400438",
            "account-provider" => "74",
            "payee-va" => "testo1@icici",
            "payer-va" => "uattesting0014@icici",
            "amount" => 400.00,
            "pre-approved" => "P",
            "use-default-acc" => "D",
            "default-debit" => "N",
            "default-credit" => "N",
            "payee-name" => "StagingMID",
            "mcc" => "6011",
            "merchant-type" => "ENTITY",
            "txn-type" => "merchantToPersonPay",
            "channel-code" => "MICICI",
            "remarks" => "none",
            "seq-no" => "ICI" . rand(1111111111111111, 9999999999999999),
            "profile-id" => "2996304"
        );
        $this->requestparams = $reques_params;
        return $this->encription();
    }

    public function imps(array $array)
    {
        $this->x_priority = $array['x_priority'];
        $reques_params = array(
            "localTxnDtTime" => date('Ymdhmi'),
            "beneAccNo" => '123456041',
            "beneIFSC" => "NPCI0000001",
            "amount" => "100.00",
            "tranRefNo" => "Testing" . rand(1111111111, 9999999999),
            "paymentRef" => "FTTransferP2A",
            "senderName" => "Pratik Mundhe",
            "mobile" => "9999988888",
            "retailerCode" => "rcode",
            "passCode" => "447c4524c9074b8c97e3a3c40ca7458d",
            "bcID" => "IBCKer00055",
            "aggrId" => "MESCOMP0070",
            "crpId" => "EKoNO8zHaxX3Prf3QsNgHyGTFE88vghA",
            "crpUsr" => "PRESTO"
        );

        $this->requestparams = $reques_params;
        return $this->encription();
    }


    public function encription()
    {

        $apostData = json_encode($this->requestparams);

        //print_r($apostData);
        $sessionKey = rand(1000000000000000, 9999999999999999);
        //print_r($sessionKey);

        //hash('MD5', time(), true); //16 byte session key
        $fp = fopen( __DIR__. "/ICICIUATpubliccert.txt", "r");

        $pub_key_string = fread($fp, 8192);

        openssl_get_publickey($pub_key_string);

        openssl_public_encrypt($sessionKey, $encryptedKey, $pub_key_string); // RSA


        $iv = 1234567890123456; //str_repeat("\0", 16);

        $encryptedData = openssl_encrypt($apostData, 'aes-128-cbc', $sessionKey, OPENSSL_PKCS1_PADDING, $iv); // AES

        $request = [

            "requestId" => "req_" . time(),

            "encryptedKey" => base64_encode($encryptedKey),

            "iv" => base64_encode($iv),

            "encryptedData" => base64_encode($encryptedData),

            "oaepHashingAlgorithm" => "RSA/ECB/PKCS1",

            "service" => "",

            "clientInfo" => "",

            "optionalParam" => ""
        ];

        $apostData = json_encode($request);


        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://apibankingonesandbox.icicibank.com/api/v1/composite-payment',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $apostData,
            CURLOPT_HTTPHEADER => array(
                'apikey:K2d3mSt2ryAGepE5TfbU1um7KbxP9fOj',
                'x-priority:' . $this->x_priority,
                'Content-Type:application/json'
            ),
        ));

        $response = curl_exec($curl);
        $this->response = $response;
        return $this->decryption();
        curl_close($curl);

        //exit();

    }

    public function decryption()
    {
        $decode = json_decode($this->response);
        $encryptedKey = base64_decode($decode->encryptedKey);
        $encryptedData = base64_decode($decode->encryptedData);


        $fp = fopen(__DIR__. "/privatekey.pem", "r");

        $priv_key = fread($fp, 8192);

        fclose($fp);

        //print_r($priv_key);
        $res = openssl_pkey_get_private($priv_key);

        openssl_private_decrypt($encryptedKey, $key, $res);

        $encData = openssl_decrypt($encryptedData, "aes-128-cbc", $key, OPENSSL_PKCS1_PADDING);

        $newsource = substr($encData, 16);
        return (json_decode($newsource, TRUE));
    }
}
