# Laravel CRUD with Task Management and Authentication

This is a basic Laravel CRUD project with a task manager and user authentication. Users can register, log in, and manage tasks. Tasks can be created, edited, deleted, and marked as completed.

## Features
- User authentication using Laravel Breeze (Login, Register, and Logout).
- Task management system (Create, Read, Update, Delete).
- Mark tasks as completed.
- Validation for task creation and update.
- Simple and attractive UI using Tailwind CSS.

## Prerequisites

Before you begin, ensure you have met the following requirements:
- PHP >= 8.0
- Composer
- Laravel 10.x
- MySQL or SQLite database

## Installation

Follow these steps to set up the project locally.

### 1. Clone the Repository

```bash
git clone repoURL

```

## 2. Install Dependencies

Navigate to the project directory and install the dependencies via Composer:

```
    cd laravel-task-manager
    composer install
```

## 3. Set Up the Environment File

```
    cp .env.example .env
```

## 4. Configure the Database

```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
```

## 5. Generate Application Key

```
    php artisan key:generate
```

## 6. Migrate the Database

```
    php artisan migrate
```

## 7. Serve the Application

```
    php artisan serve
```

## Usage

## Authentication

- Register a new user.
-  Log in with the registered credentials.
-  You can access the task management dashboard upon logging in.

## Task Management

- After logging in, you will be able to view, create, edit, and delete tasks.
- You can mark tasks as completed by ticking the checkbox in the task list or edit form.
- Tasks are validated to ensure that the title is required and the completion status is a boolean (true or false).

## Task Form Example
You can create or edit tasks with the following fields:

- Title (required)
- Description (optional)
- Completed (checkbox to mark the task as completed)