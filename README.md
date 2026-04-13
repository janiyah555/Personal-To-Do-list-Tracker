# Personal-To-Do-list-Tracker

This repository contains a PHP-based to-do list tracker website in the `INFO152project_jal547/` folder.

## Project structure

- `INFO152project_jal547/index.php` - main entry page
- `INFO152project_jal547/login.php` - login page
- `INFO152project_jal547/logout.php` - logout script
- `INFO152project_jal547/database.sql` - database schema and initial setup
- `INFO152project_jal547/css/` - stylesheet folder
- `INFO152project_jal547/js/` - JavaScript folder
- `INFO152project_jal547/includes/` - shared header/footer and database connection
- `INFO152project_jal547/pages/` - task pages for add, edit, delete and dashboard

## Setup instructions

1. Install a PHP environment with MySQL or MariaDB support.
   - Locally: XAMPP, WAMP, MAMP, LAMP, or PHP built-in server + MySQL
   - Remotely: any PHP hosting provider

2. Create the database.
   - Import `INFO152project_jal547/database.sql` into your MySQL/MariaDB server.
   - Example:
     ```bash
     mysql -u root -p < INFO152project_jal547/database.sql
     ```

3. Configure the database connection.
   - Open `INFO152project_jal547/includes/db.php`
   - Update the host, username, password, and database name as needed.

4. Place the project in your web server root.
   - Example local path: `htdocs/INFO152project_jal547` or `public_html/INFO152project_jal547`
   - Access it through your browser, e.g. `http://localhost/INFO152project_jal547/`

## Important note

This project uses PHP and a SQL database, so it cannot run on GitHub Pages alone. Use a PHP-capable server or hosting provider.

## Optional next steps

- Add environment-specific database credentials if needed
- Secure the login logic for production use
- Deploy to a PHP host such as 000webhost, InfinityFree, or a VPS with Apache/Nginx and PHP
