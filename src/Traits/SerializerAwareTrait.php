<?php

namespace App\Traits;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

trait SerializerAwareTrait
{
    /**
     * @param object $object
     *
     * @return string
     */
    private function serialize(object $object): string
    {
        $serializer = new Serializer([
            new ObjectNormalizer(),
        ], [
            new JsonEncoder(),
        ]);

        return $serializer->serialize($object, "json", [
            AbstractNormalizer::CIRCULAR_REFERENCE_LIMIT => 10,
        ]);
    }
}