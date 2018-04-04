<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AsyncWebDriver\Api\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SessionCreateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'AsyncWebDriver\\Api\\Model\\SessionCreate';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \AsyncWebDriver\Api\Model\SessionCreate;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \AsyncWebDriver\Api\Model\SessionCreate();
        if (property_exists($data, 'user')) {
            $object->setUser($data->{'user'});
        }
        if (property_exists($data, 'password')) {
            $object->setPassword($data->{'password'});
        }
        if (property_exists($data, 'desiredCapabilities')) {
            $object->setDesiredCapabilities($this->denormalizer->denormalize($data->{'desiredCapabilities'}, 'AsyncWebDriver\\Api\\Model\\SessionCapabilities', 'json', $context));
        }
        if (property_exists($data, 'requiredCapabilities')) {
            $object->setRequiredCapabilities($this->denormalizer->denormalize($data->{'requiredCapabilities'}, 'AsyncWebDriver\\Api\\Model\\SessionCapabilities', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getUser()) {
            $data->{'user'} = $object->getUser();
        }
        if (null !== $object->getPassword()) {
            $data->{'password'} = $object->getPassword();
        }
        if (null !== $object->getDesiredCapabilities()) {
            $data->{'desiredCapabilities'} = $this->normalizer->normalize($object->getDesiredCapabilities(), 'json', $context);
        }
        if (null !== $object->getRequiredCapabilities()) {
            $data->{'requiredCapabilities'} = $this->normalizer->normalize($object->getRequiredCapabilities(), 'json', $context);
        }

        return $data;
    }
}