# Laravel 12 GraphQL CRUD (Lighthouse)

Egyszerű CRUD API GraphQL-lel Laravel 12-ben, a [Lighthouse](https://lighthouse-php.com) csomag segítségével.
Ez a projekt SQLite adatbázist használ, így nem szükséges MySQL-t vagy más szervert telepítened.

## 🔧 Telepítés

1. Klónozd a projektet:
 - git clone https://github.com/felhasznaloneved/laravel-graphql-crud.git
 - cd laravel-graphql-crud
2. Telepítsd a függőségeket:
 - composer install
3. Hozd létre az .env fájlt, és benne az alábbi beállítással használj SQLite-ot:
 - APP_NAME=Laravel
 - APP_ENV=local
 - APP_KEY=
 - APP_DEBUG=true
 - APP_URL=http://localhost
 - LOG_CHANNEL=stack
 - DB_CONNECTION=sqlite
 - DB_DATABASE=database/database.sqlite
4. Generáld az alkalmazás kulcsát:
 - php artisan key:generate
5. Hozd létre az SQLite adatbázis fájlt:
 - database\database.sqlite
6. Futtasd az adatbázis migrációt:
 - php artisan migrate

## 🚀 Fejlesztői szerver indítása
 - php artisan serve

- Ezután a GraphQL Playground itt érhető el: http://localhost:8000/graphql-playground

## 📦 Funkciók
 - createTask(title, description) – új feladat létrehozása
 - updateTask(id, ...) – feladat szerkesztése
 - deleteTask(id) – feladat törlése
 - tasks – összes feladat listázása
 - task(id) – egy feladat lekérdezése

## 📁 Fontos fájlok és mappák
 - graphql/schema.graphql – GraphQL sémák
 - app/Models/Task.php – Eloquent modell
 - routes/web.php – Route definíciók (Playground engedélyezése)
 - config/lighthouse.php – Lighthouse beállítások

## 🛠 Használt csomagok
- Laravel 12
- nuwave/lighthouse
- GraphQL Playground (beépítve)
