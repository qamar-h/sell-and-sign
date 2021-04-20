<?php

namespace QH\Sellandsign\DataTransformer;

use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;

class RequestToArrayTransformer implements DataTransformerInterface
{

    public function transform($value)
    {
        $serializer = SerializerBuilder::create()
            ->setPropertyNamingStrategy(new SerializedNameAnnotationStrategy(new IdenticalPropertyNamingStrategy()))
            ->build();
        return $serializer->toArray($value);
    }


}