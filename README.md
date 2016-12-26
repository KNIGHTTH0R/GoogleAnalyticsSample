# Google Analytics API Sample

## 事前準備

1. Google APIs ( Google API Console ) でサービスアカウントキーJSONを準備する。
1. Google Analyticsのアクセスを許可したいアカウントを選択して、「権限を付与するユーザー」に「サービスアカウントID」を設定する。
1. PHP で利用するためにcomposerからgoogleのapiclientを準備する。

コマンドで以下を実行する場合
```
$ composer require google/apiclient:^2.0
```

composer.jsonに設定する場合
```json:composer.json
{
    "require": {
        "google/apiclient": "^2.0"
    }
}
```

## PHPでGoogleAnalyticsAPIを使うためのサンプル

1. sample.phpにある４行目``$private_key_json``に準備したJSONのPATHを設定する
1. 23行目にある``ga:XXXXXXXXX``のXXXXXXにGoogle AnalyticsのビューIDを設定する
1. 実行するとJSON形式で値を取得できる。

## 取得例

```
Array
(
    [0] => Array
        (
            [0] => タイトルA - SatoBlog
            [1] => /entry/2016/12/06/ZZZZZZ
            [2] => google
            [3] => 792
        )

    [1] => Array
        (
            [0] => タイトルB - SatoBlog
            [1] => /entry/2016/12/01/YYYYYY
            [2] => google
            [3] => 419
        )
)
```

