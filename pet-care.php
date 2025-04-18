<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care - Pawfect Pawtrails</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="pet-care-styles.css">
    <link rel="icon" type="icon/x-icon" href="resources/Pawfect Pawtrails-4.png">
    <style>
        *::selection {
            background-color: #3d3d3d;
            color: whitesmoke;
        }
    </style>
</head>
<body style="background-color: rgb(251, 245, 235);">
    <main>
        <section class="heroo">
            <div class="hero-container">
                <h1>Your Pet. Our Care</h1>
                <div class="hero-buttons">
                    
                    <a href="#vet-booking-form"><button>Book a Vet</button></a>
                </div>
            </div>
        </section>

        <section class="book-vet">
            <h2>Book a Vet</h2>
            <p>Schedule an appointment with our trusted veterinarians for routine check-ups, vaccinations, or any health concerns.</p>
            <form id="vet-booking-form" action="pet-careb.php" method="post" onsubmit="return validate();">
                <div class="form-group">
                    <label for="pet-name">Pet's Name:</label>
                    <input type="text" id="pet-name" name="pet-name" required>
                </div>
                <div class="form-group">
                    <label for="owner-name">Owner's Name:</label>
                    <input type="text" id="owner-name" name="owner-name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="loc">Area/Location:</label>
                    <input type="text" id="loc" name="loc" required>
                </div>
                <div class="form-group">
                    <label for="appointment-date">Preferred Date:</label>
                    <input type="date" id="appointment-date" name="appointment-date" required>
                </div>
                <div class="form-group">
                    <label for="appointment-time">Preferred Time:</label>
                    <input type="time" id="appointment-time" name="appointment-time" required>
                </div>
                <div class="form-group">
                    <label for="reason">Reason for Visit:</label>
                    <textarea id="reason" name="reason" rows="3"></textarea>
                </div>
                <button type="submit" class="btn">Book Appointment</button>
            </form>
        </section>

        
    </main>

    <script src="main.js"></script>
</body>
</html>

