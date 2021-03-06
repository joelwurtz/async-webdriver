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

class SessionCapabilitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'AsyncWebDriver\\Api\\Model\\SessionCapabilities';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \AsyncWebDriver\Api\Model\SessionCapabilities;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \AsyncWebDriver\Api\Model\SessionCapabilities();
        $data = clone $data;
        if (property_exists($data, 'browserName')) {
            $object->setBrowserName($data->{'browserName'});
            unset($data->{'browserName'});
        }
        if (property_exists($data, 'version')) {
            $object->setVersion($data->{'version'});
            unset($data->{'version'});
        }
        if (property_exists($data, 'platform')) {
            $object->setPlatform($data->{'platform'});
            unset($data->{'platform'});
        }
        if (property_exists($data, 'javascriptEnabled')) {
            $object->setJavascriptEnabled($data->{'javascriptEnabled'});
            unset($data->{'javascriptEnabled'});
        }
        if (property_exists($data, 'takesScreenshot')) {
            $object->setTakesScreenshot($data->{'takesScreenshot'});
            unset($data->{'takesScreenshot'});
        }
        if (property_exists($data, 'handlesAlerts')) {
            $object->setHandlesAlerts($data->{'handlesAlerts'});
            unset($data->{'handlesAlerts'});
        }
        if (property_exists($data, 'databaseEnabled')) {
            $object->setDatabaseEnabled($data->{'databaseEnabled'});
            unset($data->{'databaseEnabled'});
        }
        if (property_exists($data, 'locationContextEnabled')) {
            $object->setLocationContextEnabled($data->{'locationContextEnabled'});
            unset($data->{'locationContextEnabled'});
        }
        if (property_exists($data, 'applicationCacheEnabled')) {
            $object->setApplicationCacheEnabled($data->{'applicationCacheEnabled'});
            unset($data->{'applicationCacheEnabled'});
        }
        if (property_exists($data, 'browserConnectionEnabled')) {
            $object->setBrowserConnectionEnabled($data->{'browserConnectionEnabled'});
            unset($data->{'browserConnectionEnabled'});
        }
        if (property_exists($data, 'cssSelectorsEnabled')) {
            $object->setCssSelectorsEnabled($data->{'cssSelectorsEnabled'});
            unset($data->{'cssSelectorsEnabled'});
        }
        if (property_exists($data, 'webStorageEnabled')) {
            $object->setWebStorageEnabled($data->{'webStorageEnabled'});
            unset($data->{'webStorageEnabled'});
        }
        if (property_exists($data, 'rotatable')) {
            $object->setRotatable($data->{'rotatable'});
            unset($data->{'rotatable'});
        }
        if (property_exists($data, 'acceptSslCerts')) {
            $object->setAcceptSslCerts($data->{'acceptSslCerts'});
            unset($data->{'acceptSslCerts'});
        }
        if (property_exists($data, 'nativeEvents')) {
            $object->setNativeEvents($data->{'nativeEvents'});
            unset($data->{'nativeEvents'});
        }
        if (property_exists($data, 'proxy')) {
            $object->setProxy($this->denormalizer->denormalize($data->{'proxy'}, 'AsyncWebDriver\\Api\\Model\\Proxy', 'json', $context));
            unset($data->{'proxy'});
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', $key)) {
                $value_1 = $value;
                if (is_string($value)) {
                    $value_1 = $value;
                }
                if (isset($value)) {
                    $value_1 = $value;
                }
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBrowserName()) {
            $data->{'browserName'} = $object->getBrowserName();
        }
        if (null !== $object->getVersion()) {
            $data->{'version'} = $object->getVersion();
        }
        if (null !== $object->getPlatform()) {
            $data->{'platform'} = $object->getPlatform();
        }
        if (null !== $object->getJavascriptEnabled()) {
            $data->{'javascriptEnabled'} = $object->getJavascriptEnabled();
        }
        if (null !== $object->getTakesScreenshot()) {
            $data->{'takesScreenshot'} = $object->getTakesScreenshot();
        }
        if (null !== $object->getHandlesAlerts()) {
            $data->{'handlesAlerts'} = $object->getHandlesAlerts();
        }
        if (null !== $object->getDatabaseEnabled()) {
            $data->{'databaseEnabled'} = $object->getDatabaseEnabled();
        }
        if (null !== $object->getLocationContextEnabled()) {
            $data->{'locationContextEnabled'} = $object->getLocationContextEnabled();
        }
        if (null !== $object->getApplicationCacheEnabled()) {
            $data->{'applicationCacheEnabled'} = $object->getApplicationCacheEnabled();
        }
        if (null !== $object->getBrowserConnectionEnabled()) {
            $data->{'browserConnectionEnabled'} = $object->getBrowserConnectionEnabled();
        }
        if (null !== $object->getCssSelectorsEnabled()) {
            $data->{'cssSelectorsEnabled'} = $object->getCssSelectorsEnabled();
        }
        if (null !== $object->getWebStorageEnabled()) {
            $data->{'webStorageEnabled'} = $object->getWebStorageEnabled();
        }
        if (null !== $object->getRotatable()) {
            $data->{'rotatable'} = $object->getRotatable();
        }
        if (null !== $object->getAcceptSslCerts()) {
            $data->{'acceptSslCerts'} = $object->getAcceptSslCerts();
        }
        if (null !== $object->getNativeEvents()) {
            $data->{'nativeEvents'} = $object->getNativeEvents();
        }
        if (null !== $object->getProxy()) {
            $data->{'proxy'} = $this->normalizer->normalize($object->getProxy(), 'json', $context);
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', $key)) {
                $value_1 = $value;
                if (is_string($value)) {
                    $value_1 = $value;
                }
                if (!is_null($value)) {
                    $value_1 = $value;
                }
                $data->{$key} = $value_1;
            }
        }

        return $data;
    }
}
