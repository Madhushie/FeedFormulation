# Feed Formulation Portal
Feed Formulation Portal aims to provide a web portal enabling academics to formulate nutritional feed for the various marine life the researchers study. Each species requires specific formulae. This platform will greatly impact how researchers are able to formulate feed, enabling better data visualisations, user interaction for tweaking required feed nutritional values, and being able to share their research with colleagues around the world. 

## Getting Started
These instructions will get you a copy of the web application up and running on your local machine for development purposes. 

### Prerequisites
Before you begin, make sure you have the following software installed on your local machine:
- **XAMPP**: Required to run the application and host the database locally. Download using this link: https://www.apachefriends.org/download.html

### Installation
Follow these steps to set up the project:
#### 1. Open your terminal or command prompt and change to XAMPP directory
- Open the htdocs directory of your XAMPP installation. File directory: "yourpath/xampp/htdocs".
``` 
cd yourpath/xampp/htdocs
```

#### 2. Clone the repository
``` 
git clone https://github.com/Gopher-Industries/FeedFormulation.git
```

#### 3. Start XAMPP
- Launch XAMPP and start the Apache and MySQL services.

#### 4. Configure the Database
- Open phpMyAdmin by navigating to http://localhost/phpmyadmin in your web browser.
- Create a new database, called "**feed_formulation_db**"
- Import the database structure and data from the provided SQL file, "**db.sql**" or download using this link: https://github.com/Gopher-Industries/FeedFormulation/blob/main/db.sql

#### 5. Access the Application:
- Open your web browser and navigate to http://localhost/FeedFormulation to access the application.