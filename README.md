# ShortLink - Free & Easy URL Shortener

ShortLink is a free and easy-to-use URL shortener that allows you to shorten long links without requiring any login or registration. Perfect for quick and hassle-free link sharing.

## Features
- 🔗 **Free to Use** - No hidden charges, completely free.
- ⚡ **Fast & Simple** - Shorten URLs in just one click.
- 🛡️ **No Login Required** - Use instantly without any account.
- 📊 **Basic Analytics** - Track the number of clicks on your links (optional).
- 🔄 **Custom Aliases** - Choose custom short URLs (if available).

## How to Use
1. Enter your long URL in the input box.
2. Click the "Shorten" button.
3. Copy your new short URL and share it anywhere!

## Installation (Self-Hosting)
If you want to host your own instance of ShortLink, follow these steps:

### Requirements
- PHP 8+
- Laravel Framework
- MySQL / SQLite / PostgreSQL (Database)

### Steps
1. Clone the repository:
   ```sh
   git clone https://github.com/your-repo/shortlink.git
   cd shortlink
   ```
2. Install dependencies:
   ```sh
   composer install
   npm install && npm run build
   ```
3. Set up environment variables:
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```
4. Configure database and run migrations:
   ```sh
   php artisan migrate
   ```
5. Start the server:
   ```sh
   php artisan serve
   ```

## Contributing
We welcome contributions! Feel free to fork the repository, submit issues, or create pull requests.

## License
This project is open-source and available under the [MIT License](LICENSE).

---

Start shortening your links now with **ShortLink** – No login, No hassle!

