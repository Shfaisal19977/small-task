# Project Management System

A Laravel-based REST API for managing projects, tasks, and comments. This application provides a hierarchical structure where projects contain tasks, and tasks contain comments.

## Task Overview

Build a project management API system with the following features:
- **Projects**: Create and manage projects with details like name, description, dates, and status
- **Tasks**: Create and manage tasks within projects with priority, status, and due dates
- **Comments**: Add comments to tasks for collaboration and tracking

## Features

### Projects
- List all projects with their associated tasks and comments
- Create new projects with validation
- Update existing projects
- Projects include: name, description, start date, end date, and status

### Tasks
- List all tasks for a specific project
- Create new tasks within a project
- Update existing tasks within a project
- Tasks include: title, details, status, priority, and due date
- Tasks are automatically associated with their parent project

### Comments
- List all comments for a specific task
- Create new comments on tasks
- Update existing comments on tasks
- Delete comments
- Comments include: comment text and author name

## API Endpoints

### Projects
- `GET /api/projects` - List all projects
- `POST /api/projects` - Create a new project
- `PUT /api/projects/{project}` - Update a project
- `PATCH /api/projects/{project}` - Update a project (partial)

### Tasks
- `GET /api/projects/{project}/tasks` - List all tasks for a project
- `POST /api/projects/{project}/tasks` - Create a new task in a project
- `PUT /api/projects/{project}/tasks/{task}` - Update a task
- `PATCH /api/projects/{project}/tasks/{task}` - Update a task (partial)

### Comments
- `GET /api/tasks/{task}/comments` - List all comments for a task
- `POST /api/tasks/{task}/comments` - Create a new comment on a task
- `PUT /api/tasks/{task}/comments/{comment}` - Update a comment
- `PATCH /api/tasks/{task}/comments/{comment}` - Update a comment
- `DELETE /api/tasks/{task}/comments/{comment}` - Delete a comment

## Technology Stack

- **Framework**: Laravel 12
- **PHP**: 8.4.15
- **Testing**: Pest PHP v4
- **Authentication**: Laravel Sanctum v4
- **Code Style**: Laravel Pint

## Installation

1. Clone the repository
2. Install dependencies:
   ```bash
   composer install
   npm install
   ```
3. Copy `.env.example` to `.env` and configure your database
4. Generate application key:
   ```bash
   php artisan key:generate
   ```
5. Run migrations:
   ```bash
   php artisan migrate
   ```
6. Start the development server:
   ```bash
   php artisan serve
   ```

## Testing

Run the test suite using Pest:

```bash
php artisan test
```

## Project Structure

- `app/Models/` - Eloquent models (Project, Task, Comment)
- `app/Http/Controllers/` - API controllers
- `app/Http/Requests/` - Form request validation classes
- `database/migrations/` - Database schema migrations
- `database/factories/` - Model factories for testing
- `routes/api.php` - API route definitions
- `tests/` - Pest test files
