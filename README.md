# 环境要求
 - PHP >= 7.3
 - Swoole PHP extension >= 4.5，and Disabled `Short Name`
 - OpenSSL PHP extension
 - JSON PHP extension
 - PDO PHP extension （If you need to use MySQL Client）
 - Redis PHP extension （If you need to use Redis Client）
 - Protobuf PHP extension （If you need to use gRPC Server of Client）


# 如何运行
### 修改docker-compose
修改docker-compose中的启动命令为以下所示。
```
php -S 127.0.0.1:1100
```
### 启动
```
docker-compose up -d
```
### 进入容器
```
docker-compose exec work bash 
```
### composer
```
composer install
```
### 重新运行
```
docker-compose up -d
```

# 访问
```
http://127.0.0.1:9501
```

# nginx配置
```
location / {
    proxy_set_header    X-Real-IP $remote_addr;
    proxy_set_header    Host $host;
    proxy_set_header    X-Forwarded-For $proxy_add_x_forwarded_for;
    proxy_http_version  1.1;
    proxy_set_header    Connection keep-alive;

    if (!-e $request_filename) {
        proxy_pass  http://127.0.0.1:9501;
    }
}
```