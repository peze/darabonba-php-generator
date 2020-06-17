<?php

// This file is auto-generated, don't edit it. Thanks.
namespace Tea\PHP\Tests;

use AlibabaCloud\Tea\Request;
use AlibabaCloud\Tea\Response;
use AlibabaCloud\Tea\Exception\TeaError;
use AlibabaCloud\Tea\Tea;

class Client {

    /**
     * @return void
     * @throws \Exception
     */
    public function hello(){
        $_request = new Request();
        $_request->method = "GET";
        $_request->pathname = "/";
        $_request->headers = [
            "host" => "www.test.com"
            ];
        if (true) {
            $_request->headers["host"] = "www.test2.com";
        }
        $_lastRequest = $_request;
        $_response= Tea::send($_request);
        if (true) {
            throw new TeaError($_request, $_response);
        }
        else {
            true;
        }
        self::helloIf();
        !false;
        $a = null;
        $a = "string";
        return null;
    }

    /**
     * @return void
     * @throws \Exception
     */
    public static function helloIf(){
        if (true) {
        }
        if (true) {
        }
        else if (true) {
        }
        else {
        }
    }

    /**
     * @return void
     * @throws \Exception
     */
    public static function helloThrow(){
        throw new TeaError([]);
    }

    /**
     * @return void
     * @throws \Exception
     */
    public static function helloForBreak(){
        foreach($item as []){
            break;
        }
    }

    /**
     * @return void
     * @throws \Exception
     */
    public static function helloWhile(){
        while (true) {
            break;
        }
    }

    /**
     * @return void
     * @throws \Exception
     */
    public static function helloDeclare(){
        $hello = "world";
        $helloNull = null;
        $hello = "hehe";
    }
}