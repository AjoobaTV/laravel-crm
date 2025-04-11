<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
/* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #000000; /* Black background */
    background-image: url('{{ asset('images/background.jpg') }}'); /* Add your background image */
    background-size: 50% auto; /* Adjust size as needed */
    background-position: top center; /* Position the background image */
    background-repeat: no-repeat; /* Prevent image repetition */
    color: #333333; /* Dark text color for contrast */
    margin: 0;
    padding: 0;
}

/* Profile Image */
.profile-image {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin-top: 20px;
    object-fit: cover;
}

/* Animated Header */
.animated-header {
    font-size: 2.5rem;
    color: #007bff; /* Blue color for headers */
    animation: slideIn 3s ease-out 0.5s forwards;
}

/* Animated Subheader */
.animated-subheader {
    font-size: 1.5rem;
    color: #6c757d; /* Gray color for subheaders */
    animation: fadeIn 3s ease-out 0.5s forwards;
}

/* Project Card */
.card {
    background-color: rgba(255, 255, 255, 0.9); /* Slightly transparent white */
    border: none;
}

/* Media Queries for Responsiveness */
@media (max-width: 768px) {
    .animated-header {
        font-size: 2rem;
    }

    .animated-subheader {
        font-size: 1.25rem;
    }

    .profile-image {
        width: 120px;
        height: 120px;
    }
}

/* Animated Header */
.animated-header {
    font-size: 2.5rem;
    color: #007bff; /* Blue color for headers */
    animation: slideIn 3s ease-out 0.5s forwards;
}

/* Animated Subheader */
.animated-subheader {
    font-size: 1.5rem;
    color: #6c757d; /* Gray color for subheaders */
    animation: fadeIn 3s ease-out 0.5s forwards;
}

/* Text Movement Animation */
.moving-text {
    display: inline-block;
    white-space: nowrap;
    overflow: hidden;
    animation: moveText 10s linear infinite;
    color: #ff0000; /* Red color */
}

/* Animation Keyframes */
@keyframes moveText {
    0% { transform: translateX(100%); }
    100% { transform: translateX(-100%); }
}

@keyframes slideIn {
    0% { transform: translateX(-100%); opacity: 0; }
    100% { transform: translateX(0); opacity: 1; }
}

@keyframes fadeIn {
    0% { opacity: 0; }
    100% { opacity: 1; }
}

/* About Section Styles */
.about-section {
    background-color: #f8f9fa; /* Light gray background for contrast */
    padding: 40px 20px; /* Padding around the section */
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    margin: 20px 0; /* Margin for spacing from other sections */
}

/* Main Heading */
.about-section h2 {
    color: #007bff; /* Blue color for main headings */
    font-size: 2.5rem; /* Larger font size for prominence */
    border-bottom: 2px solid #007bff; /* Blue underline for emphasis */
    padding-bottom: 10px; /* Space below the heading */
    margin-bottom: 20px; /* Space below the heading */
}

/* Subheading */
.about-section h3 {
    color: #343a40; /* Dark gray color for subheadings */
    font-size: 1.75rem; /* Slightly larger font size for subheadings */
    margin-top: 20px; /* Space above the subheading */
    margin-bottom: 15px; /* Space below the subheading */
}

/* Paragraph text */
.about-section p {
    color: #495057; /* Medium gray color for text */
    font-size: 1rem; /* Standard font size for readability */
    line-height: 1.6; /* Improved line spacing for readability */
    margin-bottom: 20px; /* Space below paragraphs */
}

/* List Styles */
.about-section ul {
    list-style-type: disc; /* Disc bullets for list items */
    padding-left: 20px; /* Padding for bullet alignment */
}

.about-section ul li {
    margin-bottom: 10px; /* Space below each list item */
    color: #495057; /* Medium gray color for list items */
}

/* Responsive Design */
@media (max-width: 768px) {
    .about-section {
        padding: 20px 15px; /* Adjust padding for smaller screens */
    }

    .about-section h2 {
        font-size: 2rem; /* Adjust font size for smaller screens */
    }

    .about-section h3 {
        font-size: 1.5rem; /* Adjust font size for smaller screens */
    }
}
/* Resetting margins and padding */
.container, .row {
    margin: 0 auto;
    padding: 0;
}

/* Adjust column sizes and ensure they don't exceed container width */
.col-md-6 {
    padding: 15px;
    box-sizing: border-box; /* Ensure padding is included in the width calculation */
}

/* Handle potential overflow */
.about-section {
    overflow: hidden; /* Ensure no content overflows the container */
    padding: 20px;
    background-color: #f8f9fa;
}

.row {
    display: flex;
    flex-wrap: wrap; /* Ensure columns wrap on smaller screens */
}

@media (max-width: 768px) {
    .col-md-6 {
        flex: 0 0 100%; /* Full width on smaller screens */
    }
}
/* About Me Section Styles */
#about {
    padding: 40px 0;
    background-color: #ffffff; /* White background for the section */
}

#about .section-heading {
    color: #003366; /* Dark Blue */
    font-size: 2.5em;
    margin-bottom: 20px;
    text-align: center;
}

#about .intro-text {
    color: #333333; /* Charcoal */
    font-size: 1.1em;
    margin-bottom: 30px;
    text-align: center;
}

#about .left-content {
    background-color: #f8f9fa; /* Light background for left content */
    padding: 20px;
    border-radius: 8px;
}

#about .right-content {
    background-color: #f8f9fa; /* Light background for right content */
    padding: 20px;
    border-radius: 8px;
}

#about .subheading {
    color: #008080; /* Teal */
    font-size: 1.75em;
    margin-bottom: 15px;
}

#about .skills-list li, 
#about .strengths-list li, 
#about .certifications-list li, 
#about .languages-list li, 
#about .interests-list li, 
#about .experience-list li {
    color: #6c757d; /* Slate Gray */
    margin-bottom: 10px;
}

#about .certifications-list li::before, 
#about .languages-list li::before, 
#about .interests-list li::before {
    content: "\f00c"; /* Font Awesome checkmark */
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
    color: #FF6F00; /* Dark Orange */
    margin-right: 8px;
}

#about .experience-list li::before {
    content: "\f05a"; /* Font Awesome briefcase */
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
    color: #FF6F00; /* Dark Orange */
    margin-right: 8px;
}

@media (max-width: 767px) {
    #about .row {
        flex-direction: column;
    }
    
    #about .col-md-6 {
        margin-bottom: 20px;
    }
}

.projects-section {
    background-color: #f0f4f8; /* Light grayish-blue */
    padding: 50px 0;
}

.section-heading {
    text-align: center;
    font-size: 2.5rem;
    color: #333333; /* Dark gray */
    margin-bottom: 40px;
}

.project-card {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-bottom: 20px;
}

.project-title {
    font-size: 1.75rem;
    color: #007bff; /* Bootstrap Primary Color */
    margin-bottom: 15px;
}

.project-description {
    font-size: 1rem;
    color: #6c757d; /* Bootstrap Secondary Color */
    margin-bottom: 20px;
}

.project-details {
    margin-top: 20px;
}

.project-features {
    list-style: none;
    padding: 0;
}

.project-features li {
    font-size: 1rem;
    color: #495057; /* Medium gray */
    margin-bottom: 10px;
    display: flex;
    align-items: center;
}

.icon-check-circle {
    width: 24px;
    height: 24px;
    background: url('path-to-check-circle-icon.svg') no-repeat center center;
    background-size: contain;
    margin-right: 10px;
}

.icon-user-circle {
    width: 24px;
    height: 24px;
    background: url('path-to-user-circle-icon.svg') no-repeat center center;
    background-size: contain;
    margin-right: 10px;
}

.icon-whatsapp {
    width: 24px;
    height: 24px;
    background: url('path-to-whatsapp-icon.svg') no-repeat center center;
    background-size: contain;
    margin-right: 10px;
}

.icon-bell {
    width: 24px;
    height: 24px;
    background: url('path-to-bell-icon.svg') no-repeat center center;
    background-size: contain;
    margin-right: 10px;
}

.icon-api {
    width: 24px;
    height: 24px;
    background: url('path-to-api-icon.svg') no-repeat center center;
    background-size: contain;
    margin-right: 10px;
}

.contact-section {
    background-color: #f8f9fa; /* Light gray */
    padding: 50px 0;
}

.section-heading {
    text-align: center;
    font-size: 2.5rem;
    color: #333333; /* Dark gray */
    margin-bottom: 30px;
}

.contact-info {
    text-align: center;
    margin-bottom: 30px;
}

.contact-details {
    font-size: 1.25rem;
    color: #333333; /* Dark gray */
    margin-bottom: 15px;
}

.contact-details a {
    color: #007bff; /* Bootstrap Primary Color */
    text-decoration: none;
}

.contact-details a:hover {
    text-decoration: underline;
}

.icon-email, .icon-phone {
    width: 24px;
    height: 24px;
    vertical-align: middle;
    margin-right: 10px;
}

.contact-section {
    background-color: #f8f9fa; /* Light gray */
    padding: 50px 0;
}

.section-heading {
    text-align: center;
    font-size: 2.5rem;
    color: #333333; /* Dark gray */
    margin-bottom: 30px;
}

.contact-info {
    text-align: center;
    margin-bottom: 30px;
}

.contact-details {
    font-size: 1.25rem;
    color: #333333; /* Dark gray */
    margin-bottom: 15px;
}

.contact-details a {
    color: #007bff; /* Bootstrap Primary Color */
    text-decoration: none;
}

.contact-details a:hover {
    text-decoration: underline;
}

.icon-email, .icon-phone {
    width: 24px;
    height: 24px;
    vertical-align: middle;
    margin-right: 10px;
}

.contact-form {
    max-width: 600px;
    margin: 0 auto;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

.form-heading {
    font-size: 1.75rem;
    color: #007bff; /* Bootstrap Primary Color */
    margin-bottom: 20px;
    text-align: center;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-size: 1rem;
    color: #495057; /* Medium gray */
    margin-bottom: 5px;
}

.form-group input, .form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ced4da; /* Light gray border */
    border-radius: 4px;
    font-size: 1rem;
    color: #495057; /* Medium gray */
}

.form-group textarea {
    resize: vertical;
}

.submit-button {
    background-color: #007bff; /* Bootstrap Primary Color */
    color: #ffffff;
    border: none;
    border-radius: 4px;
    padding: 10px 20px;
    font-size: 1rem;
    cursor: pointer;
    display: block;
    width: 100%;
    text-align: center;
    transition: background-color 0.3s;
}

.submit-button:hover {
    background-color: #0056b3; /* Darker shade of Bootstrap Primary Color */
}


        </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">My Portfolio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; {{ date('Y') }} My Portfolio. All rights reserved.</p>
    </footer>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
