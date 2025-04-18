🐶 Animal Adopt Center
A modern, responsive pet adoption web platform connecting adorable animals with their forever homes. Built using PHP, MySQL, HTML/CSS, and JavaScript, this system helps users browse, apply, and learn about pet adoption—while admins manage listings and applications efficiently.

🌟 Features
🐾 Browse Pets – View available cats and dogs with full profiles.

📝 Adoption Form – Apply online to adopt your favorite animal.

📚 Pet Care Info – Learn about proper animal care before adopting.

💖 Success Stories – Get inspired by real adoption experiences.

🔐 Admin Panel – Manage pet listings, applications & content.

📱 Fully Responsive – Looks great on mobile, tablet & desktop.

🚀 Tech Stack
Layer	Tech Used
💻 Frontend	HTML, CSS, JavaScript
🧠 Backend	PHP
🗄️ Database	MySQL
📸 Assets	Image-based listings
📸 Screenshots
Preview the user interface and admin panel in action

🐱 Pet Listings	🛠️ Admin Dashboard	🧾 Application Form
📂 Folder Structure
bash
Copy code
Animal-Adopt-Center/
├── admin/              # Admin features & controls
├── css/                # Styling files
├── images/             # Pet photos & UI assets
├── js/                 # Interactive behavior
├── includes/           # DB config, helper files
├── adopt.php           # Adoption form
├── index.php           # Home page
└── ...
⚙️ Getting Started
🧰 Prerequisites
PHP server (e.g., XAMPP)

Web browser

MySQL client

🛠️ Installation
Clone the repository

bash
Copy code
git clone https://github.com/Jayanidu-Abeysinghe/Animal-Adopt-Center.git
Move to your web root directory

bash
Copy code
mv Animal-Adopt-Center/ /xampp/htdocs/
Import the SQL database

Open phpMyAdmin or MySQL CLI

Import animal_adopt_center.sql (if included)

Update DB config

In /includes/config.php, configure:

php
Copy code
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'animal_adopt';
Run the server

Visit: http://localhost/Animal-Adopt-Center

👩‍💻 Admin Credentials
You can log in to the admin panel using the following credentials (if available):

pgsql
Copy code
Username: admin
Password: admin123 (or check your DB)
🛡️ Security Features
🔐 Passwords are stored securely (hashing recommended)

📦 Form input validation

🔒 Session-based login for admin area

🌐 RDBMS configured in a separate secure file

✅ Future Enhancements
📤 Image upload for new pets

📧 Email notifications for applications

🐕 Filter & search pets by breed, age, size

🚦 Application status tracking

🌈 User accounts & favorites

🤝 Contributing
Feel free to fork, improve, or suggest new features! Pull requests are always welcome.

📄 License
This project is open-source and available under the MIT License.

📬 Contact
Developed with ❤️ by Jayanidu Abeysinghe