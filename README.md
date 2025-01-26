# RENTAL MOBIL

Assalamualaikum wr wb. Ini adalah project website rental mobil yang dikembangkan menggunakan **Laravel 11** dan **MySQL/SQLite** sebagai database. Website ini dirancang untuk memudahkan pengunjung dalam mencari dan menyewa mobil dengan cepat.

## installation

sebelum menjalankan, ikuti langkah berikut ini

1. duplikat file "env" kemudian rename file duplikat menjadi ".env"
    ```
    cp env .env
    ```
2. buka file ".env", isi yang diperlukan
3. jalankan perintah berikut pada terminal

    - install dependencies

        ```
        composer install
        ```

        ```
        npm install
        ```

    - migration
        ```
        php artisan migrate:fresh --seed
        ```

4. untuk menjalankan
    ```
    php artisan serve
    ```
5. development code
    ```
    npm run dev
    ```
6. build code
    ```
    npm run build
    ```
