<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    $trackingId = 'G-SEVVRFEESC';
    $clientId = $data['clientId'];

    sendToGoogleAnalytics($trackingId, $clientId, $data['url'], $data['referrer'], $data['timestamp']);
}

function sendToGoogleAnalytics($trackingId, $clientId, $url, $referrer, $timestamp) {
    $encodedUrl = urlencode($url);
    $encodedReferrer = urlencode($referrer);
    $encodedTimestamp = urlencode($timestamp);

     $gaUrl = 'https://www.google-analytics.com/collect?' . http_build_query([
        'v' => '1',
        'tid' => $trackingId,
        'cid' => $clientId,
        't' => 'pageview',
        'dp' => $encodedUrl,
        'dr' => $encodedReferrer,
        'qt' => $encodedTimestamp
    ]);

    $response = file_get_contents($gaUrl);
    
    if ($response === FALSE) {
        error_log('Google Analytics request failed');
    }
}
