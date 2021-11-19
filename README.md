# ES-CPNV-Yoda

## Local development

Clone the repo where ever you want.

```bash
git clone https://github.com/Penfu/ES-CPNV-Yoda.git
```

First move into code directory `cd src/` and install packages dependencies.

```bash
cd src/
composer install
npm install
```

Setup the environment variables by making your own __.env__ file from the example one.
Run the migrations and seeders.

```bash
php artisan migrate --seed
```

Build the project resources.

```bash
npm run build
```

Generate the encryption key

```bash
php artisan key:generate
```

Finaly start the server.

```bash
php artisan serve
```
