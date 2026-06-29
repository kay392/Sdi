<?php
header('Content-Type: application/json; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_errors', 1);

$apiKey = 'AIzaSyCKvpItiOxtm-_D7jQMjUPyZkd5Be0h4yc';
$placeId = trim($_GET['place_id'] ?? '');
$query = trim($_GET['query'] ?? '');
$language = trim($_GET['language'] ?? 'en');

if (!$placeId && !$query) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Missing place_id or query parameter.'
    ]);
    exit;
}

function fetchGoogleUrl(string $url): array {
    if (function_exists('curl_init')) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 15);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $response = curl_exec($ch);
        $error = curl_error($ch);
        curl_close($ch);

        if ($response === false) {
            return [
                'ok' => false,
                'error' => $error ?: 'cURL request failed.'
            ];
        }

        return [
            'ok' => true,
            'body' => $response
        ];
    }

    $response = @file_get_contents($url);
    if ($response === false) {
        return [
            'ok' => false,
            'error' => 'Unable to fetch URL. Please enable allow_url_fopen or install cURL.'
        ];
    }

    return [
        'ok' => true,
        'body' => $response
    ];
}

if (!$placeId) {
    $searchUrl = sprintf(
        'https://maps.googleapis.com/maps/api/place/findplacefromtext/json?input=%s&inputtype=textquery&fields=place_id,name&language=%s&key=%s',
        rawurlencode($query),
        rawurlencode($language),
        rawurlencode($apiKey)
    );

    $searchResult = fetchGoogleUrl($searchUrl);
    if (!$searchResult['ok']) {
        echo json_encode(['status' => 'error', 'message' => $searchResult['error']]);
        exit;
    }

    $searchData = json_decode($searchResult['body'], true);
    if (empty($searchData['candidates'][0]['place_id']) || ($searchData['status'] ?? '') !== 'OK') {
        echo json_encode([
            'status' => 'error',
            'message' => 'Could not find a matching place for the query.'
        ]);
        exit;
    }

    $placeId = $searchData['candidates'][0]['place_id'];
}

$detailsUrl = sprintf(
    'https://maps.googleapis.com/maps/api/place/details/json?place_id=%s&fields=name,rating,user_ratings_total,url,reviews&language=%s&key=%s',
    rawurlencode($placeId),
    rawurlencode($language),
    rawurlencode($apiKey)
);

$detailsResult = fetchGoogleUrl($detailsUrl);
if (!$detailsResult['ok']) {
    echo json_encode(['status' => 'error', 'message' => $detailsResult['error']]);
    exit;
}

$detailsData = json_decode($detailsResult['body'], true);
if (($detailsData['status'] ?? '') !== 'OK' || empty($detailsData['result'])) {
    echo json_encode([
        'status' => 'error',
        'message' => $detailsData['error_message'] ?? 'Unable to fetch place details.'
    ]);
    exit;
}

$result = $detailsData['result'];
$reviews = [];

if (!empty($result['reviews']) && is_array($result['reviews'])) {
    foreach ($result['reviews'] as $review) {
        $reviews[] = [
            'author_name' => $review['author_name'] ?? 'Anonymous',
            'rating' => isset($review['rating']) ? intval($review['rating']) : 5,
            'text' => $review['text'] ?? '',
            'relative_time_description' => $review['relative_time_description'] ?? '',
            'profile_photo_url' => $review['profile_photo_url'] ?? ''
        ];
    }
}

echo json_encode([
    'status' => 'success',
    'place_name' => $result['name'] ?? '',
    'rating' => isset($result['rating']) ? $result['rating'] : null,
    'user_ratings_total' => $result['user_ratings_total'] ?? null,
    'reviews' => $reviews
]);
exit;
