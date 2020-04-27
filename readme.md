Ropa.js(h1)
 
## 概要
　アパレルショップとアパレルショップを探す人を繋げるプラットフォームサービスです。ビジネスモデル的にはO2O(Online to Offline)を
　意識しています。アパレルショップのオーナーは自分の店を当サイトにお店情報を提供します。
　アパレルショップを探す人はこのサイトを訪れ、検索機能により、お気に入りのアパレルショップを探します。


##　使用技術
 フロントエンド - Vue.js(JavaScript) 
 バックエンド　 - Laravel(PHP) 
 DB           - MySQL 
 AWS          - S3 
 サーバ        - heroku 
 
## ディレクトリ構成-
 JSファイル　　　/ropa/resources/js/
 CSSファイル　　 /ropa/resources/sass/
 コントローラー　/ropa/app/Http/Controllers/

## 機能 
- 認証機能(JWT)
- 検索機能(Laravel Eloquent ORM)
- 一覧表示
- いいね機能
- コメント投稿・表示
- 写真投稿(S3)


## 使い方

-----------------------------
 アパレルショップを探す人の画面
-----------------------------
 ★サイトにアクセス 
 以下URLにアクセスしてください。 
 https://wwww.ropa.jp/ 


 ★ログイン 
 テストユーザ 
 EMAIL / PASS: test@sample.com / aaaaaaaa 


 ★検索 
 キーワードを入れて検索できます。 
 データがあまり入っていないため、何も入力せずに🔎を押下してください。 
 ショップ一覧画面に遷移します。 


 ★ショップ一覧画面 
 任意のお店をクリックしてください。 
 ショップ詳細画面に遷移します。 


 ★ショップ詳細画面 
 いいね機能、コメント機能があります。(ログイン済だと使用可能になります。) 


-----------------------------
 アパレルショップオーナーの管理画面 
-----------------------------
 ★サイトにアクセス 
 以下のURLにアクセスしてください。 
 https://www.ropa.jp/owners 


 ホーム画面フッターの「店舗を掲載する場合はこちら」からでもアクセスできます。 

 ★ログイン 
 テストユーザ 
 EMAIL / PASS aaa@sample.com / bbbbbbbb 


 ★店舗詳細変更画面 
 ログイン後、ヘッダーに「店舗情報変更」現が現れるので、押下してください。 
 画面には登録した情報が変更できるようになっております。 


 ★写真変更画面 
 写真の登録、削除、カバー写真の変更(一番上に表示される写真)の変更ができます。 
 任意の写真をクリックすると写真左上にチェックマークがつきます。 
 選択した写真を画面下の方にあるボタンより操作を行ってください。 

 データ操作はご自由に頂ければ幸いです。 
 

## インストール
 
```
$ https://github.com/ropajp/ropajp.git
$ cd ropa
$ npm install
$ npm run dev
$ open https://www.ropa.jp
```
 
## 作者
 
[@石田匡助]
mail to: ibrahimovicaaa@gmail.com
 
