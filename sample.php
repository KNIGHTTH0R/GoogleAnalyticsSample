<?php

require_once('./vendor/autoload.php');

$private_key_json = "[ Google APIs 認証情報から取得したサービスアカウントキー ].json";

$client = new Google_Client();
$client->setApplicationName('Test Service Analytics');              // どこに使われてるか謎。指定はする。
$client->setAuthConfig($private_key_json);
$client->setScopes(Google_Service_Analytics::ANALYTICS_READONLY);   // リードオンリー
$client->useApplicationDefaultCredentials();

$ga = new Google_Service_Analytics($client);

$option = array(
    'dimensions' => 'ga:pageTitle,ga:pagePath,ga:source',           // ディメンション
    'sort' => '-ga:sessions',                                       // - を付けると降順ソート
    'max-results' => 10,                                            // 取得件数
);

//計測の開始
$res = $ga->data_ga->get(
    'ga:XXXXXXXXX',  // ビューID ( XXXXXXXは情報を取得したいAnalyticsのID )
    '2016-11-10',    // 開始日
    '2016-12-20',    // 終了日
    'ga:sessions',   // メトリクス
    $option
);

print_r($res->getRows());

