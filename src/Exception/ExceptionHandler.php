<?php

namespace QH\Sellandsign\Exception;

use QH\Sellandsign\DTO\Response;
use Symfony\Contracts\HttpClient\ResponseInterface;

class ExceptionHandler
{

    public static function handleApiErrors(ResponseInterface $response) {

        if($response->getStatusCode() >= Response::HTTP_BAD_REQUEST && $response->getStatusCode() < Response::HTTP_INTERNAL_SERVER_ERROR ) {
            throw new ApiException($response->getContent(false));
        }

    }


}