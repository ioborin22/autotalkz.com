<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    $trackingId = 'G-SEVVRFEESC';
    $clientId = $data['clientId'];

    sendToGoogleAnalytics($trackingId, $clientId, $data['url'], $data['referrer'], $data['timestamp']);
}

function sendToGoogleAnalytics($trackingId, $clientId, $url, $referrer, $timestamp) {
    $url = 'https://www.google-analytics.com/collect?' . http_build_query([
        'v' => '1',
        'tid' => $trackingId,
        'cid' => $clientId,
        't' => 'pageview',
        'dp' => $url,
        'dr' => $referrer,
        'qt' => $timestamp
    ]);

    $response = file_get_contents($url);
    
    if ($response === FALSE) {
         error_log('Google Analytics request failed');
    }
}
