-- Create database
CREATE DATABASE IF NOT EXISTS info152;
USE info152;

-- Users table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Tasks table
CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task_name VARCHAR(255) NOT NULL,
    due_date DATE,
    status VARCHAR(20),
    user_id INT
);

-- Sample users (plaintext passwords for simplicity)
INSERT INTO users (username, password) VALUES
('testuser1', 'password123'),
('testuser2', 'password123');

-- Sample tasks
INSERT INTO tasks (task_name, due_date, status, user_id) VALUES
('Finish INFO152 project', '2026-03-05', 'Pending', 1),
('Study for exam', '2026-03-06', 'Completed', 1),
('Buy groceries', '2026-03-07', 'Pending', 2),
('Clean room', '2026-03-08', 'Pending', 2);

-- Grant privileges
GRANT ALL PRIVILEGES ON info152.* TO 'root'@'localhost';