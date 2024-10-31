<?php

use myapi\lib\actions\api\Exception;

class shopMApiPluginGetProductsController extends waJsonController
{
    private $token = 'CSlJMrt1eaqhAC7ebAR2';
    protected $method = 'POST';

    public function execute()
    {
        $this->checkRequestMethod($this->method);

        $request_token = waRequest::request('Autorization');
        if ($request_token !== 'Bearer ' . $this->token) {
            wa()->getResponse()->setStatus(405);
            $this->response = [
                'status' => 'error',
                'message' => 'Invalid token'
            ];
            return;
        }

        $this->response = [
            'status' => 'success',
            'products' => [
                [
                    'id' => 1,
                    'name' => 'Product 1',
                    'price' => 100
                ],
                [
                    'id' => 2,
                    'name' => 'Product 2',
                    'price' => 200
                ]
            ]
        ];
    }

    public function checkRequestMethod($method)
    {
        if (strtoupper(waRequest::method() !== $method)) {
            // check request method
            wa()->getResponse()->setStatus(405); // Метод не разрешен
            $this->response = [
                'status' => 'error',
                'message' => 'Method Not Allowed'
            ];
            exit;
        }
    }


}