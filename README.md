# MileApp Assignment

## Prasyarat

Untuk menjalankan aplikasi ini di lokal, Anda perlu menginstall:

-   PHP versi >= 8.0.
-   MongoDB.
-   Composer

## Cara instalasi

1. Clone repository
2. Install package

```
composer install
```

3. Buat file `.env` di root project yang isinya diambil dari file `.env.example`
4. Isi application key

```
php artisan key:generate
```

5. Hubungkan project dengan MongoDB yang sudah terinstall dan berjalan dengan mengisi `DB_CONNECTION` dan `DB_DSN` di `.env`

```
DB_CONNECTION=mongodb
DB_DSN="mongodb://localhost:27017/mydb"
```

6. Jalankan project

```
php artisan serve
```

## Dokumentasi API

Anda bisa melihat dokumentasi API di route `/request-docs` (`/request-docs/?openapi=true` untuk versi OpenAPI). Package yang digunakan: [rakutentech/laravel-request-docs](https://github.com/rakutentech/laravel-request-docs)

## Testing

1. Buat file `phpunit.xml` di root project yang isinya diambil dari file `phpunit.xml.dist`
2. Isi nilai dari env name `DB_CONNECTION` dan `DB_DATABASE` (Anda bisa menambahkan suffix `_test` dari nama database project yang sesungguhnya)

```xml
<env name="DB_CONNECTION" value="mongodb"/>
<env name="DB_DATABASE" value="mydb_test"/>
```

3. Jalankan test

```
php artisan test
```
