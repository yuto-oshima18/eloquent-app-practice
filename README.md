# eloquent-app-practice

## 概要
COACHTECH Laravel基礎 「9-4-9: Eloquent ORM - ハンズオン演習」にて作成

## 使用技術
- PHP 8.5.8
- Laravel 10.50.2
- Eloquent ORM
- MySQL 8.4.10

## 学んだこと
- モデルファイルの作成手順
- ルート・コントローラ・ビュー・モデル間の具体的な紐付きとコーディング方法
- Eloquent ORMを使用したDBの操作方法

## 動作確認
- ①sailコマンドによりバックグラウンドで起動(sail up -d)
- ②sailコマンドによるコンテナ状態確認(sail ps)
- ③DBにレコードが正常に追加されているか確認(sail artisan tinker)
- ④http://localhost/postsにアクセス
- ⑤各ページが表示されることを確認し、下記要件を満たしていることを確認
- 　投稿の一覧が表示できる
- 　新しい投稿を作成できる
- 　投稿を編集できる
- 　投稿を削除できる
- 　公開日時が表示できる