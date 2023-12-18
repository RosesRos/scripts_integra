<?php

use AmoCRM\Exceptions\AmoCRMApiException;
use AmoCRM\Collections\WebhooksCollection;
use League\OAuth2\Client\Token\AccessTokenInterface;

include_once __DIR__ . '/bootstrap.php';

$accessToken = getToken();
$apiClient->setAccessToken($accessToken)
    ->setAccountBaseDomain($accessToken->getValues()['baseDomain'])
    ->onAccessTokenRefresh(
        function (AccessTokenInterface $accessToken, string $baseDomain) {
            saveToken(
                [
                    'accessToken' => $accessToken->getToken(),
                    'refreshToken' => $accessToken->getRefreshToken(),
                    'expires' => $accessToken->getExpires(),
                    'baseDomain' => $baseDomain,
                ]
            );
        }
    );

try {
    $webhookData = $apiClient->webhooks()->get();
    $webhookDatas =  json_decode($webhookData);

    // Проходим по каждому вебхуку и выводим URL-назначения
    /** @var WebhooksCollection $webhookData */
    if (count($webhookDatas) > 1) {
        echo "two and more webhook";
        echo "<br/>";

        foreach ($webhookData as $webhook) {
            echo "ID вебхука: {$webhook->getId()}\n";
            echo "URL-назначения: {$webhook->getDestination()}\n";
            echo "<br/>";
            
        }
    } else {
        echo "one webhook";
        echo "<br/>";

        foreach ($webhookData as $webhook) {
            echo "ID вебхука: {$webhook->getId()}\n";
            echo "URL-назначения: {$webhook->getDestination()}\n";
            
            
        }
    }

} catch (AmoCRMApiException $e) {
    printError($e);
    die();
}




?>