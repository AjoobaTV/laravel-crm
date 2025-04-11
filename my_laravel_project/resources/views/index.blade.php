@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="text-center">
        <img src="{{ asset('images/my-photo.jpg') }}" alt="My Photo" class="profile-image">
        <h1 class="animated-header">Welcome to My Portfolio</h1>
        <p class="moving-text">Hello! I’m Ajooba TV, a skilled Computer Engineer with a passion for PHP development.</p>
       
    </div>
    <section id="about" class="about-section mt-5">
        <div class="container">
            <h2 class="section-heading"><i class="fas fa-user"></i> About Me</h2>
            <p class="intro-text">I’m a Computer Engineer with extensive experience in PHP development and a strong foundation in various programming languages, frameworks, and tools. Here’s a summary of my skills, qualifications, and professional experience:</p>
            
            <div class="row">
                <div class="col-md-6 left-content">
                    <!-- Left Side -->
                    <h3 class="subheading"><i class="fas fa-laptop-code"></i> Technical Skills</h3>
                    <ul class="skills-list">
                        <li><i class="fas fa-code"></i> <strong>Programming Languages:</strong> PHP, JavaScript, HTML, CSS</li>
                        <li><i class="fas fa-cogs"></i> <strong>Frameworks & Libraries:</strong> CodeIgniter, Laravel, Bootstrap</li>
                        <li><i class="fas fa-database"></i> <strong>Databases:</strong> MySQL</li>
                        <li><i class="fas fa-tools"></i> <strong>Tools & Technologies:</strong> Git, Postman, AJAX</li>
                        <li><i class="fas fa-globe"></i> <strong>Web Technologies:</strong> API Development, Responsive Web Design</li>
                    </ul>
                    
                    <h3 class="subheading"><i class="fas fa-graduation-cap"></i> Technical Qualification</h3>
                    <p><strong>B-Tech in Computer Science | 2016</strong></p>
                    <p><strong>Institution:</strong> Calicut University</p>
                    <p><strong>Project:</strong> Broadcasting of warning messages on vehicular Ad-hoc network</p>
                    <p><strong>Seminar:</strong> Working ad-hoc network</p>
                    
                    <h3 class="subheading"><i class="fas fa-star"></i> Personal Strengths</h3>
                    <ul class="strengths-list">
                        <li><i class="fas fa-comments"></i> <strong>Communication:</strong> Excellent interpersonal skills, including verbal communication, problem-solving, and active listening.</li>
                        <li><i class="fas fa-handshake"></i> <strong>Service:</strong> Customer-focused approach with patience, attentiveness, and positive language.</li>
                        <li><i class="fas fa-calendar-alt"></i> <strong>Organization:</strong> Proficient in organizing tasks, prioritizing deadlines, and managing time effectively.</li>
                        <li><i class="fas fa-tachometer-alt"></i> <strong>Management:</strong> Capable of directing and reviewing performance to ensure project success.</li>
                    </ul>

                    <h3 class="subheading"><i class="fas fa-certificate"></i> Certifications</h3>
                    <ul class="certifications-list">
                        <li><i class="fas fa-medal"></i> Robotics International Level Championship</li>
                        <li><i class="fas fa-award"></i> PHP CodeIgniter Certification at Kinfra Technopark</li>
                    </ul>

                    <h3 class="subheading"><i class="fas fa-language"></i> Languages</h3>
                    <ul class="languages-list">
                        <li><i class="fas fa-comment-dots"></i> <strong>English:</strong> 80%</li>
                        <li><i class="fas fa-comment-dots"></i> <strong>Hindi:</strong> 50%</li>
                        <li><i class="fas fa-comment-dots"></i> <strong>Malayalam:</strong> 100%</li>
                        <li><i class="fas fa-comment-dots"></i> <strong>Arabic:</strong> 50%</li>
                    </ul>

                    <h3 class="subheading"><i class="fas fa-heart"></i> Interests</h3>
                    <ul class="interests-list">
                        <li><i class="fas fa-music"></i> Singing</li>
                        <li><i class="fas fa-plane"></i> Traveling</li>
                        <li><i class="fas fa-book"></i> Reading</li>
                    </ul>
                </div>
                <div class="col-md-6 right-content">
                    <!-- Right Side -->
                    <h3 class="subheading"><i class="fas fa-briefcase"></i> Professional Experience</h3>
                    <p><strong>Fourplus Systems, Kuwait City - Sharq</strong><br>CRM Project Developer & Business Intelligence Specialist<br>June 2023 – Present</p>
                    <ul class="experience-list">
                        <li><i class="fas fa-cogs"></i> Led the development of a comprehensive CRM system with features including inventory management, billing, sales tracking, project management, and employee attendance.</li>
                        <li><i class="fas fa-chart-line"></i> Designed and implemented Business Intelligence (BI) dashboards to provide critical data visualization for strategic decision-making.</li>
                        <li><i class="fas fa-tachometer-alt"></i> Optimized backend processes using Core PHP, significantly enhancing system performance and user experience.</li>
                        <li><i class="fas fa-code-branch"></i> Utilized Git for version control and Postman for API testing and creation for Android and iOS platforms.</li>
                        <li><i class="fas fa-plug"></i> Implemented secure and efficient API endpoints and enhanced application functionality with features like WhatsApp notifications, Google Maps integration, and firewall notifications.</li>
                    </ul>

                    <p><strong>Elegansys Technologies, Kinfra Technopark - Kakkanchery</strong><br>Web Developer<br>July 2018 - June 2019</p>
                    <ul class="experience-list">
                        <li><i class="fas fa-truck"></i> Played a major role in developing an online delivery application with multiple user roles, including vendor, dealer, admin, super admin, delivery boy, and customer.</li>
                        <li><i class="fas fa-laptop"></i> Developed front-end interfaces and backend logic for the application, contributing to its overall functionality and user experience.</li>
                    </ul>

                    <p><strong>Enzapps Solutions, Kinfra Technopark - Kakkanchery</strong><br>Junior Developer<br>January 2018 - June 2018</p>
                    <ul class="experience-list">
                        <li><i class="fas fa-code"></i> Received training in PHP, CodeIgniter, MySQL, and HTML.</li>
                        <li><i class="fas fa-project-diagram"></i> Contributed to a job search project using the CodeIgniter MVC structure.</li>
                        <li><i class="fas fa-tools"></i> Developed front-end interfaces and backend logic for the application, including a job track application.</li>
                    </ul>

                    <h3 class="subheading"><i class="fas fa-user-circle"></i> Personal Dossier</h3>
                    <p><strong>Gender:</strong> Female</p>
                    <p><strong>Date of Birth:</strong> 14-09-1994</p>
                    <p><strong>Marital Status:</strong> Married</p>
                    <p><strong>Nationality:</strong> Indian</p>
                    <p><strong>Civil ID:</strong> Visa Status No:22</p>
                    <p><strong>Permanent Address:</strong> Chukkan Melottil House, Tirurangadi (PO), Kariparambu, Malappuram, Kerala, India, PIN: 676306</p>

                    <h3 class="subheading"><i class="fas fa-file-signature"></i> Declaration</h3>
                    <p>I hereby declare that the above-mentioned information is true and I bear the responsibility for the correctness of the above-mentioned particulars.</p>

                    <p><strong>Ajooba T.V</strong></p>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="projects-section mt-5">
    <div class="container">
        <h2 class="section-heading">Projects</h2>
        
        <!-- Latest Project -->
        <div class="project-card mb-4">
            <h3 class="project-title">ERP + CRM + Project Management System</h3>
            <p class="project-description">A comprehensive ERP system integrating CRM and project management functionalities. This project offers a range of features designed to enhance organizational efficiency and streamline operations.</p>
            <div class="project-details">
                <ul class="project-features">
                    <li><i class="icon-check-circle"></i><strong>Sales Management:</strong> Efficient tracking and management of sales processes, from order placement to payment collection.</li>
                    <li><i class="icon-check-circle"></i><strong>Bill Adding:</strong> Automated generation and management of invoices and bills, ensuring accurate financial records.</li>
                    <li><i class="icon-check-circle"></i><strong>Inventory Management:</strong> Real-time tracking of inventory levels, stock alerts, and order management to maintain optimal inventory levels.</li>
                    <li><i class="icon-check-circle"></i><strong>Project Adding:</strong> Comprehensive project management with features for task assignments, progress tracking, and deadline management.</li>
                    <li><i class="icon-check-circle"></i><strong>Profit Checking:</strong> Calculation and analysis of profits through integrated financial reports and real-time data.</li>
                    <li><i class="icon-check-circle"></i><strong>Fleet Management:</strong> Management of company vehicles, including tracking, maintenance scheduling, and operational costs.</li>
                    <li><i class="icon-check-circle"></i><strong>Attendance Checking:</strong> Automated tracking of employee attendance, including clock-in/out times and absence management.</li>
                    <li><i class="icon-check-circle"></i><strong>Total Working Hours Calculation:</strong> Calculation of total working hours for payroll and productivity analysis.</li>
                    <li><i class="icon-check-circle"></i><strong>Overtime Calculation:</strong> Automated calculation of overtime hours and compensation based on predefined rules.</li>
                    <li><i class="icon-check-circle"></i><strong>Multiple Login:</strong> Support for multiple user roles with distinct access levels and permissions.</li>
                    <li><i class="icon-check-circle"></i><strong>Shift Management:</strong> Scheduling and management of employee shifts, including shift swaps and time-off requests.</li>
                    <li><i class="icon-check-circle"></i><strong>Login Location Checking:</strong> Tracking of user login locations for enhanced security and monitoring.</li>
                    <li><i class="icon-check-circle"></i><strong>HR Section:</strong> Management of HR-related tasks, including employee records, performance reviews, and recruitment processes.</li>
                    <li><i class="icon-check-circle"></i><strong>Resume Processing:</strong> Automated handling of resumes, including filtering, sorting, and tracking applications.</li>
                    <li><i class="icon-check-circle"></i><strong>Site Location Sharing:</strong> Real-time sharing of site locations for field employees and project tracking.</li>
                    <li><i class="icon-check-circle"></i><strong>Salary Calculation:</strong> Accurate calculation of employee salaries, including deductions, bonuses, and adjustments.</li>
                </ul>
            </div>
        </div>

        <!-- Previous Project -->
        <div class="project-card mb-4">
            <h3 class="project-title">E-commerce Web Application</h3>
            <p class="project-description">An advanced e-commerce web application catering to various user roles and integrating modern features for enhanced user experience and operational efficiency.</p>
            <div class="project-details">
                <ul class="project-features">
                    <li><i class="icon-user-circle"></i><strong>Super Admin, Admin, Dealer, Vendor, Customer, Delivery Boy Roles:</strong> Comprehensive user role management with distinct permissions and functionalities for each role to ensure effective system operation.</li>
                    <li><i class="icon-whatsapp"></i><strong>WhatsApp Notifications:</strong> Integration of WhatsApp notifications for real-time updates on order status, delivery tracking, and promotional messages.</li>
                    <li><i class="icon-bell"></i><strong>Push Notifications:</strong> Implementation of push notifications for app users to receive instant updates on new offers, order statuses, and system alerts.</li>
                    <li><i class="icon-api"></i><strong>API Generation:</strong> Development of robust APIs for seamless integration with other systems, supporting functionalities such as payment processing, inventory management, and user authentication.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="contact-section mt-5">
    <div class="container">
        <h2 class="section-heading">Contact Me</h2>
        
        <div class="contact-info mb-4">
            <p class="contact-details">
                <i class="icon-phone"></i>Phone: <a href="tel:+96560728345">+96560728345</a>
            </p>
        </div>
        
        <div class="contact-form">
            <h3 class="form-heading">Send Me a Message</h3>
            <form action="{{ route('contact.submit') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Send Message</button>
</form>

        </div>
    </div>
</section>



</div>
@endsection
