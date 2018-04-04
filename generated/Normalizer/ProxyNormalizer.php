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

class ProxyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'AsyncWebDriver\\Api\\Model\\Proxy';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \AsyncWebDriver\Api\Model\Proxy;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \AsyncWebDriver\Api\Model\Proxy();
        if (property_exists($data, 'proxyType')) {
            $object->setProxyType($data->{'proxyType'});
        }
        if (property_exists($data, 'proxyAutoconfigUrl')) {
            $object->setProxyAutoconfigUrl($data->{'proxyAutoconfigUrl'});
        }
        if (property_exists($data, 'ftpProxy')) {
            $object->setFtpProxy($data->{'ftpProxy'});
        }
        if (property_exists($data, 'httpProxy')) {
            $object->setHttpProxy($data->{'httpProxy'});
        }
        if (property_exists($data, 'sslProxy')) {
            $object->setSslProxy($data->{'sslProxy'});
        }
        if (property_exists($data, 'socksProxy')) {
            $object->setSocksProxy($data->{'socksProxy'});
        }
        if (property_exists($data, 'socksUsername')) {
            $object->setSocksUsername($data->{'socksUsername'});
        }
        if (property_exists($data, 'socksPassword')) {
            $object->setSocksPassword($data->{'socksPassword'});
        }
        if (property_exists($data, 'noProxy')) {
            $object->setNoProxy($data->{'noProxy'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getProxyType()) {
            $data->{'proxyType'} = $object->getProxyType();
        }
        if (null !== $object->getProxyAutoconfigUrl()) {
            $data->{'proxyAutoconfigUrl'} = $object->getProxyAutoconfigUrl();
        }
        if (null !== $object->getFtpProxy()) {
            $data->{'ftpProxy'} = $object->getFtpProxy();
        }
        if (null !== $object->getHttpProxy()) {
            $data->{'httpProxy'} = $object->getHttpProxy();
        }
        if (null !== $object->getSslProxy()) {
            $data->{'sslProxy'} = $object->getSslProxy();
        }
        if (null !== $object->getSocksProxy()) {
            $data->{'socksProxy'} = $object->getSocksProxy();
        }
        if (null !== $object->getSocksUsername()) {
            $data->{'socksUsername'} = $object->getSocksUsername();
        }
        if (null !== $object->getSocksPassword()) {
            $data->{'socksPassword'} = $object->getSocksPassword();
        }
        if (null !== $object->getNoProxy()) {
            $data->{'noProxy'} = $object->getNoProxy();
        }

        return $data;
    }
}