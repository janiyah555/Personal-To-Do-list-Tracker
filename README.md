#Personal To-Do List Tracker

A full-stack task management web application built with PHP and MySQL that allows users to securely create, manage, update, and track personal tasks.

Features
- User Authentication — Users can register, log in, and log out securely.
- Task Management — Create, view, edit, and delete personal tasks.
- Personal Dashboard — View and manage tasks from a centralized dashboard.
- Task Tracking — Organize and monitor personal tasks through the application.
- Session Management — Uses PHP sessions to maintain authenticated user accounts.
- Database Integration — Stores user and task information using MySQL.
- Responsive Interface — Designed with HTML and CSS for a clean and accessible user experience.

#Technologies
Technology	Purpose
PHP	Server-side application logic and authentication
MySQL	Database management and data storage
HTML	Website structure and content
CSS	Styling and page layout
JavaScript	Client-side functionality and interactivity
XAMPP	Local development server and MySQL environment
Git/GitHub	Version control and project management
Screenshots

#Home Page

screenshot of home page here.

<img width="2932" height="1750" alt="image" src="https://github.com/user-attachments/assets/42294ca9-8977-4ddd-a551-4bdbfba4915b" />


#Login Page

 screenshot of  login page here.



Dashboard

Add a screenshot of your task dashboard here.

![Dashboard](path/to/dashboard-screenshot.png)

Task Management

Add a screenshot showing the task creation/editing functionality here.

![Task Management](path/to/task-management-screenshot.png)

Note: Replace the screenshot paths above with the actual image filenames after uploading your screenshots to the repository.

Setup Instructions
Prerequisites

To run this application locally, you will need:

XAMPP
A web browser
Git (optional)
1. Clone the Repository

Clone this repository into your XAMPP htdocs folder:

git clone https://github.com/janiyah555/Personal-To-Do-list-Tracker.git

Or download the repository as a ZIP file and extract it into the htdocs folder.

2. Start XAMPP

Open the XAMPP Control Panel and start:

Apache
MySQL
3. Set Up the Database
Open phpMyAdmin.
Create a database for the application.
Import the provided database.sql file.
Make sure the database configuration in the project matches your local MySQL setup.
4. Move the Project

Make sure the project is located inside your XAMPP htdocs folder.

The project structure should look similar to:

htdocs/
└── INFO152project_jal547/
    ├── css/
    ├── js/
    ├── includes/
    ├── pages/
    ├── index.php
    ├── login.php
    ├── logout.php
    └── database.sql
5. Open the Application

Once Apache and MySQL are running, open your web browser and go to:

http://localhost/INFO152project_jal547/

From there, you can create an account, log in, and manage your tasks.

Key Contributions
Developed a full-stack task management application using PHP, MySQL, HTML, CSS, and JavaScript.
Implemented user authentication and PHP session management to control access to task-management features.
Built functionality for users to create, edit, delete, and manage personal tasks.
Developed a user dashboard for viewing and organizing tasks.
Integrated the application with a MySQL database for persistent storage of user and task information.
Designed the application's navigation and user interface using HTML and CSS.
Tested and debugged the application locally using XAMPP, Apache, and MySQL.
Used GitHub for version control and documented the setup process so the application can be reproduced in another development environment.
Project Structure
INFO152project_jal547/
├── css/
│   └── style.css
├── js/
├── includes/
│   ├── header.php
│   └── footer.php
├── pages/
│   ├── dashboard.php
│   ├── add_task.php
│   └── ...
├── index.php
├── login.php
├── logout.php
└── database.sql
Running Locally

This application is designed to run in a local XAMPP environment because it uses PHP and MySQL.

GitHub Pages is not supported for this project because GitHub Pages does not execute PHP or provide a MySQL database.

Project Purpose

This project was developed as part of my Web Systems and Services coursework to gain hands-on experience building a database-driven web application and working with server-side programming, authentication, database integration, and web development.
