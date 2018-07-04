Rest api на yii2 + vue.js 

## Установка

1. клонируем проект с github

```
git clone https://github.com/disasterovich/test-yii2-vue.git
```

2. Создаем БД, прописываем свои логин, пароль, имя бд. (в файле /config/db.php). 

3. Переходим в папку и устанавливаем composer и npm пакеты

```
composer install
npm install
```

4. Выполняем миграции:

```
yii migrate
```

5. открываем браузер http://ваш_домен/products. Заполняем бд, добавляя товары. Проверяем уходят ли ajax запросы на сервер.

Поддерживаемые api-запросы:
```
GET /api/products: список всех товаров;
POST /api/products: создание нового товара;
GET /api/products/123: подробная информация о товаре 123;
```