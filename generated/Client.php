<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AsyncWebDriver\Api;

class Client extends \Jane\OpenApiRuntime\Client\Psr7HttplugClient
{
    /**
     * @param \AsyncWebDriver\Api\Model\SessionCreate $session
     * @param string                                  $fetch   Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\SessionPostResponse200|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function createSession(\AsyncWebDriver\Api\Model\SessionCreate $session, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\CreateSession($session), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSession(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\DeleteSession(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\StatusGetResponse200|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getStatus(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\GetStatus(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getTimeouts(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\GetTimeouts(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function setTimeouts(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\SetTimeouts(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getCurrentUrl(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\GetCurrentUrl(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function go(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\Go(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function back(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\Back(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function forward(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\Forward(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function refresh(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\Refresh(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getTitle(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\GetTitle(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function closeWindow(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\CloseWindow(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getWindowHandle(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\GetWindowHandle(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function switchToWindow(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\SwitchToWindow(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getWindowHandles(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\GetWindowHandles(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function switchToFrame(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\SwitchToFrame(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function switchToParentFrame(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\SwitchToParentFrame(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getWindowRect(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\GetWindowRect(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function setWindowRect(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\SetWindowRect(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function maximizeWindow(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\MaximizeWindow(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function minimizeWindow(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\MinimizeWindow(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function fullscreenWindow(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\FullscreenWindow(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getActiveElement(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\GetActiveElement(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function findElement(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\FindElement(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function findElements(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\FindElements(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function findElementFromElement(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\FindElementFromElement(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function findElementsFromElement(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\FindElementsFromElement(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function isElementSelected(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\IsElementSelected(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getElementAttribute(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\GetElementAttribute(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getElementProperty(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\GetElementProperty(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getElementCSSValue(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\GetElementCSSValue(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getElementText(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\GetElementText(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getElementTagName(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\GetElementTagName(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getElementRect(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\GetElementRect(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function isElementEnabled(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\IsElementEnabled(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function clickOnElement(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\ClickOnElement(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function clearElement(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\ClearElement(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function sendKeysToElement(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\SendKeysToElement(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getPageSource(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\GetPageSource(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function executeScript(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\ExecuteScript(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function executeAsyncScript(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\ExecuteAsyncScript(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAllCookies(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\DeleteAllCookies(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getAllCookies(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\GetAllCookies(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function addCookie(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\AddCookie(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCookie(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\DeleteCookie(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getCookie(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\GetCookie(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function releaseActions(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\ReleaseActions(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function performActions(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\PerformActions(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function dismissAlert(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\DismissAlert(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function acceptAlert(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\AcceptAlert(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function getAlertText(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\GetAlertText(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function sendAlertText(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\SendAlertText(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function takeScreenshot(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\TakeScreenshot(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\AsyncWebDriver\Api\Model\Error|\Psr\Http\Message\ResponseInterface
     */
    public function takeElementScreenshot(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \AsyncWebDriver\Api\Endpoint\TakeElementScreenshot(), $fetch);
    }

    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\HttpClientDiscovery::find();
        }
        $messageFactory = \Http\Discovery\MessageFactoryDiscovery::find();
        $streamFactory = \Http\Discovery\StreamFactoryDiscovery::find();
        $serializer = new \Symfony\Component\Serializer\Serializer(\AsyncWebDriver\Api\Normalizer\NormalizerFactory::create(), [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())]);

        return new static($httpClient, $messageFactory, $serializer, $streamFactory);
    }
}