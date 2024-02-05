# Movie Review

Movie Review is a web application built using Laravel, a popular PHP framework, and designed with Tailwind CSS. It provides users with a platform to read and submit reviews about movies.

## Table of Contents

- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
- [Features](#features)

  
## Getting Started

These instructions will help you get a copy of the project up and running on your local machine or web server.

### Prerequisites

- [PHP](https://www.php.net/) >= 7.4
- [Composer](https://getcomposer.org/)
- [Laravel](https://laravel.com/)
- [Tailwind](https://tailwindcss.com/)

### Installation

Clone the repository:

   ```bash
   git clone https://github.com/your-username/your-repo.git
   ```

Navigate to the project directory:

   ```bash
   cd your-repo
   ```

Install dependencies:

   ```bash
   composer install
   npm install
    # or
   yarn install
   ```

Set up your environment variables:

   ```bash
    cp .env.example .env
    # configure database and other necessary settings in .env
    php artisan key:generate
   ```

Run migrations and seed the database:

   ```bash
    php artisan migrate --seed
   ```

Start the development server:

   ```bash
    php artisan serve
   ```


### Usage

After opening the Movie Review app, users can perform the following actions:

1. **Search for Movies:**

Use the search bar to find specific movies by their titles.

2. **Sort Movies:**
Movies can  be sorted using the following metrics:

Latest: Sort movies based on their release date, displaying the newest releases first.

Popular: Sort movies based on their popularity, showing the most popular ones at the top.

Highest Rated: Sort movies based on their average rating, displaying the highest-rated movies first.

3. **Read and Add Reviews:**

Click on each movie to view detailed reviews and ratings from other users and also add your own reviews.



### Features

Movie Review offers the following features:

1. **Search Movies:**

Easily search for movies by their titles.

2. **Sort Movies:**

Sort movies by their release date, popularity, or average rating.

3. **Read and Add Reviews:**

Access  and adddetailed reviews and ratings for each movie.



