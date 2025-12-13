## 🛠️ Technology Stack

* **Framework:** Laravel (Latest Version)
* **Database:** MySQL
* **Frontend:** Blade Templates, SCSS (via Vite), Plain JavaScript
* **Assets Compilation:** Vite

## 🚀 Installation and Setup

Follow these steps to get a development copy of the project up and running on your local machine.

### Prerequisites

You need the following software installed:

* PHP (8.2+)
* Composer
* Node.js (LTS) & npm

### Clone and Install Dependencies

```bash
# Clone the repository (if applicable) or navigate to the project directory
# cd cinema-hub

# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install

### Run the Development Server

Start both the Laravel backend server and the Vite asset bundler:

1.  **Start Laravel Server:**
    ```bash
    php artisan serve
    ```
2.  **Start Vite (Asset Bundler):**
    ```bash
    npm run dev
    # This watches for changes in your SCSS and automatically recompiles.
    ```
3.  The application should now be accessible at `http://127.0.0.1:8000/`
