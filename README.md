# Laravel CMS Setup Guide

This guide will help you set up a Laravel application with a modern Content Management System (CMS) using the latest technologies such as Livewire and Filament.

## Prerequisites

Before you begin, ensure you have the following installed on your system:

- PHP (>= 7.3)
- Composer
- Node.js (with npm)
- MySQL or any other preferred database system

## Installation

1. Clone the repository:

    ```
    git clone https://github.com/niat786/easypress.git
    ```

2. Navigate into the project directory:

    ```
    cd easypress
    ```

3. Install PHP dependencies:

    ```
    composer install
    ```

4. Install JavaScript dependencies:

    ```
    npm install && npm run dev
    ```

5. Copy the `.env.example` file to `.env`:

    ```
    cp .env.example .env
    ```

6. Generate an application key:

    ```
    php artisan key:generate
    ```

7. Configure the database connection in the `.env` file:

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

8. Run the migrations to set up the database schema:

    ```
    php artisan migrate
    ```

9. Serve the application:

    ```
    php artisan serve
    ```

10. Visit `http://localhost:8000` in your web browser to see the application running.

## Features

### Content Management System (CMS) with Livewire and Filament

- **Livewire Integration**: Harnesses the power of Livewire for dynamic, reactive user interfaces without the need for JavaScript.
- **Filament Admin Panel**: Utilizes Filament for a sleek and customizable admin interface, providing an intuitive user experience for managing content.
- **User Authentication**: Provides authentication for users to log in and manage content.
- **Role-Based Access Control**: Allows assigning different roles to users with varying levels of permissions.
- **Content Creation**: Users can create, edit, and delete various types of content, such as articles, pages, or custom content types, all within the Filament admin panel.
- **WYSIWYG Editor**: Integrates a What-You-See-Is-What-You-Get editor for easy content creation.
- **Media Management**: Enables users to upload and manage media files like images, videos, and documents.

### Blog with CRUD Operations

- **Livewire Components**: Employs Livewire components for interactive and real-time functionality in the blog section.
- **Categories**: Supports categorizing blog posts for better organization and navigation.
- **Tags**: Allows tagging blog posts for easy searching and filtering.
- **Comments**: Enables users to comment on blog posts, with moderation options available for administrators.
- **Search Functionality**: Provides search functionality to find specific blog posts quickly.
- **Pagination**: Implements pagination for listing blog posts efficiently.

Feel free to customize and extend the application according to your specific requirements and preferences. Happy coding!
