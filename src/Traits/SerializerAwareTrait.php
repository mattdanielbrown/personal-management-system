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
        return $this->getSerializer()->serialize($object, "json", [
            AbstractNormalizer::CIRCULAR_REFERENCE_LIMIT => 10,
        ]);
    }

    /**
     * @param string|array $data
     * @param string       $targetFqn
     *
     * @return mixed
     */
    private function deserialize(string|array $data, string $targetFqn): mixed
    {
        $normalizedData = is_array($data) ? json_encode($data) : $data;
        return self::getSerializer()->deserialize($normalizedData, $targetFqn, "json");
    }

    /**
     * @return Serializer
     */
    private function getSerializer(): Serializer
    {
        return new Serializer([
            new ObjectNormalizer(),
        ], [
            new JsonEncoder(),
        ]);
    }
}