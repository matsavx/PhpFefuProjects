<?php


namespace App\sources;


use Curl\Curl;

class StorageClient
{
    private $URL;
    private $token;

    public function __construct() {
        $this->URL = getenv('URL');
    }

    public function userRegister($user_login, $password) {
        $curl = new Curl();
//        $path = '/client/user-register';
        $curl->post($this->setPath('/client/user-register'), array(
            'user_login' => $user_login,
            'password' => $password
        ), true);
        return $curl->response;
    }

    public function setPath($path) {
        return $this->URL + $path;
    }

    public function userSignIn($user_login, $password) {
        $curl = new Curl();
        $curl->setHeader('Content-Type', 'application/json');
        $curl->post($this->setPath('/client/user-sign-in'), array(
            'user_login' => $user_login,
            'password' => $password
        ), true);
        $this->token = $curl->response;
        return $curl->response;
    }


}