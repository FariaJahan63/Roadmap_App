# Roadmap App

A Laravel-based web application that allows users to explore, upvote, comment, and reply to educational and career roadmaps. It features user authentication, voting/unvoting, nested comments (up to 2 replies), and more.

---

## Features

- User authentication (login/register)
- Vote and unvote functionality (one vote per user per roadmap)
- Comment system with nested replies (max 2 replies per comment)
- Roadmap browsing and interaction
- Admin/database seeding support

---

## Getting Started

Follow the steps below to run the project on your local environment.

---

### Prerequisites

Ensure you have the following installed:

- PHP >= 8.1
- Composer
- Node.js & npm
- MySQL
- Laravel 12+

---

###  Installation Instructions
Run composer  install to install all the packages.
Run npm install to install all npm packages.
Run npm run build to build the frontend.
Run php artisan:migrate to create the tables.
Run php artisan db:seed to create existing roadmaps.

#### 1. Clone the Repository

```bash
git clone https://github.com/FariaJahan63/Roadmap_App.git
cd roadmap-app
