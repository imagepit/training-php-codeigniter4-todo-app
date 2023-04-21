# PHPダイジェスト研修 Codeigniter4 Todoアプリケーション

## 1. 概要

PHPダイジェスト研修のCodeigniter4 Todoアプリケーションです。

## 2. 環境

- PHP 8.0
- Codeigniter 4.x.x
- Docker

### 3. 使い方

_コマンド実行_
```bash
docker-compose up -d
docker-compose exec php bash
cd todo1
composer install
php spark migrate
php spark db:seed TodoSeeder
php spark serve --host 0.0.0.0
```

ブラウザで次のURLにアクセスすると、「Hello World!」というテキストが表示されます。

- [http://localhost:8080/hello](http://localhost:8080/hello)
- [http://localhost:8080/todo](http://localhost:8080/todo)
