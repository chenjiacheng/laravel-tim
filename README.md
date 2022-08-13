# Tim for Laravel

腾讯云 即时通信 IM SDK for Laravel

## 运行环境

- PHP >= 8.0.2
- [Composer](https://getcomposer.org/) >= 2.0
- Laravel || Lumen >= 8.0

## 安装方式

```bash
composer require chenjiacheng/laravel-tim
```

框架配置

```bash
php artisan vendor:publish --provider="Chenjiacheng\LaravelTim\TimServiceProvider"
```

以上完成后，在 `config/app.php` 的 `providers` 中添加：

```php
'providers' => [

    //...
    
    Chenjiacheng\LaravelTim\TimServiceProvider::class,    
],
```

## 使用示例

具体实例请查看 [https://github.com/chenjiacheng/tim](https://github.com/chenjiacheng/tim)

## License

MIT