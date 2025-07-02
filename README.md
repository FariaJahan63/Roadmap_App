# Roadmap App

A Laravel-based web application that allows users to explore, upvote, comment, and reply to educational and career roadmaps. It features user authentication, voting/unvoting, nested comments (up to 2 replies), and more.

---

## Features

 User Authentication
Login/Signup: Users can register and log in using email and password via Laravel Breeze (or Jetstream). Built-in CSRF protection and validation ensure secure authentication.

 Roadmap Display
UI Design: A clean and minimal UI displays roadmap items with titles, statuses, and upvote counts.

Filtering & Sorting: Roadmaps can be filtered or sorted by category (e.g., “In Progress,” “Completed”) and popularity (upvotes), making the experience user-centric and navigable.

 Upvoting Feature
Users can upvote roadmap items. Each user can upvote only once per item to maintain fairness.

A toggle mechanism is implemented: if a user already voted, an "Unvote" option is shown instead.

💬 Commenting System
Add Comments: Users can leave feedback or ask questions on each roadmap item.


🧵 Nested Replies
Users can reply to comments, supporting up to 3 levels of nested replies (parent, child, grandchild).

Visual indentation reflects the depth hierarchy, keeping the interface readable and organized.

Reply forms appear dynamically via JavaScript when the user clicks “Reply.”

## Getting Started

Follow the steps below to run the project on your local environment.

---

### Prerequisites

Ensure you have the following installed:

- PHP >= 8.1
- Composer
- Node.js & npm
- MySQL
- Laravel 12

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
