# Tim for Laravel

腾讯云 即时通信 IM SDK for Laravel

[![Latest Stable Version](https://poser.pugx.org/chenjiacheng/laravel-tim/v/stable.svg)](https://packagist.org/packages/chenjiacheng/laravel-tim)
[![Latest Unstable Version](https://poser.pugx.org/chenjiacheng/laravel-tim/v/unstable.svg)](https://packagist.org/packages/chenjiacheng/laravel-tim)
[![Total Downloads](https://poser.pugx.org/chenjiacheng/laravel-tim/downloads)](https://packagist.org/packages/chenjiacheng/laravel-tim)
[![License](https://poser.pugx.org/chenjiacheng/laravel-tim/license)](https://packagist.org/packages/chenjiacheng/laravel-tim)

## 运行环境

- PHP >= 8.0.2
- [Composer](https://getcomposer.org/) >= 2.0
- Laravel || Lumen >= 9.0

## 安装方式

```bash
composer require chenjiacheng/laravel-tim
```

### Laravel

创建服务配置文件

```bash
php artisan vendor:publish --provider="Chenjiacheng\LaravelTim\TimServiceProvider"
```

### Lumen

注册服务提供者（需要手动复制配置文件）

```bash
$app->register(\Chenjiacheng\LaravelTim\TimServiceProvider::class);
```

## 使用示例

```php
<?php

namespace App\Http\Controllers;

use Chenjiacheng\Tim\Tim;
use Illuminate\Routing\Controller as BaseController;

class TimController extends BaseController
{
    public function testImport(Tim $tim)
    {
        // 第一种方式
        $result1 = $tim->account->import('101');
        var_dump($result1);
        
        // 第二种方式
        $result2 = app('tim')->account->import('102');
        var_dump($result2);
        
        // 第三种方式
        $result3 = \Chenjiacheng\LaravelTim\Facades\Tim::account()->import('103');
        var_dump($result3);
        
        return [];
    }
}
```

更多示例请查看 [https://github.com/chenjiacheng/tim](https://github.com/chenjiacheng/tim)

## License

MIT