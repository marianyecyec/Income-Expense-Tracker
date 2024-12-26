# IncomeExpenseTracker

**IncomeExpenseTracker** is a Laravel-based web application designed to help users manage and track their financial transactions, including income and expenses. 
## Features
- Record and manage income and expense entries.
- Categorize transactions.
- Visual dashboard with financial summaries and charts.
- Generate detailed reports.

## Requirements
- **PHP**: >= 8.0
- **Composer**: Latest version
- **Node.js**: >= 16.x
- **Database**: MySQL or SQLite

## Installation and Setup

1. **Clone the Repository**:
   ```bash
   git clone <repository-url>
   cd IncomeExpenseTracker
   ```

2. **Install PHP Dependencies**:
   ```bash
   composer install
   ```

3. **Install Node.js Dependencies**:
   ```bash
   npm install
   ```

4. **Environment Configuration**:
   - Copy the example `.env` file and adjust settings:
     ```bash
     cp .env.example .env
     ```
   - Update database credentials and other configurations in the `.env` file.

5. **Generate Application Key**:
   ```bash
   php artisan key:generate
   ```

6. **Run Database Migrations**:
   ```bash
   php artisan migrate
   ```

7. **Build Frontend Assets**:
   ```bash
   npm run dev
   ```
   For production:
   ```bash
   npm run build
   ```

8. **Start the Development Server**:
   ```bash
   php artisan serve
   ```
   The app will be available at [http://localhost:8000](http://localhost:8000).
