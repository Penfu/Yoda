# ES-CPNV-Yoda

## Project initialisation

### Initalise Laravel

```bash
composer create-project laravel/laravel example-app
cd example-app
php artisan serve
```

### Initialise Livewire

```bash
composer require livewire/livewire
```

### Initialise TailwindCSS

Install Tailwind and its peer-dependencies using npm:

```bash
npm install -D tailwindcss@latest postcss@latest autoprefixer@latest
```

Generate the tailwind.config.js file:

```bash
npx tailwindcss init
```

Edit the webpack.mix.js file to include the generated tailwind.config.js file:

```bash
npm run dev
```
