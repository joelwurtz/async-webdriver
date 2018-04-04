<?php

require __DIR__ . '/vendor/autoload.php';

\Amp\Loop::run(function () {
    $client = \AsyncWebDriver\Api\ClientAsync::create(new \AsyncWebDriver\WebDriverClient('http://127.0.0.1:9515'));
    $status = yield $client->getStatus();

    $createSession = new \AsyncWebDriver\Api\Model\SessionCreate();

    $capabilities = new \AsyncWebDriver\Api\Model\SessionCapabilities();
    $capabilities->setBrowserName('chrome');
    $capabilities->setPlatform('any');
    $capabilities->setApplicationCacheEnabled(true);
    $capabilities->setAcceptSslCerts(true);
    $capabilities->setBrowserConnectionEnabled(true);
    $capabilities->setCssSelectorsEnabled(true);
    $capabilities->setDatabaseEnabled(true);
    $capabilities->setHandlesAlerts(true);
    $capabilities->setLocationContextEnabled(true);
    $capabilities->setNativeEvents(true);
    $capabilities->setRotatable(true);
    $capabilities->setTakesScreenshot(true);
    $capabilities->setWebStorageEnabled(true);
    $capabilities->setVersion('');

    $createSession->setDesiredCapabilities($capabilities);

    $session = yield $client->createSession($createSession);
    var_dump($session);
});

