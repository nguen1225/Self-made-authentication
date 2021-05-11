# 環境構築
## docker-compose up -d --build

docker-compose exec app bash
* コンテナ内で
* composer create-project --prefer-dist "laravel/laravel=8.*" .

## .env編集
DB_CONNECTION=mysql  
DB_HOST=db  
DB_PORT=3306  
DB_DATABASE=laravel_local  
DB_USERNAME=phper  
DB_PASSWORD=secret 


.env.sampleも忘れず同じように編集