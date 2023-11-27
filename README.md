# Разворачиватель строк
Данный пакет предназначен для быстрого (нет) и удобного (не очень) реверсирования строк.
## Требования
- PHP 7.0

## Установка
```bash
$ composer require egotpotopakhin/otus_composer
```

## Использование
```php
<?php
$reverser = new StringReverser();
echo $reverser->getReversedString('my string'); //gnirts ym
```
