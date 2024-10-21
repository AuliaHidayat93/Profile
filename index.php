<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ade - Head of IT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .hero {
            background: #007bff;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .hero img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }
        .skills .progress-bar {
            background-color: #007bff;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Home Section -->
    <section class="hero">
        <div class="container">
            <img src="profile.jpg" alt="Ade - Head of IT">
            <h1>Ade</h1>
            <h3>Head of IT</h3>
            <p>Experienced IT leader specializing in system infrastructure, ERP SAP B1, and networking solutions.</p>
        </div>
    </section>

    <!-- About Me Section -->
    <section class="about mt-5">
        <div class="container">
            <h2>About Me</h2>
            <p>With over 10 years of experience, I have successfully led multiple IT departments, overseeing network security, system upgrades, and ERP implementations. My strengths lie in managing complex IT environments, troubleshooting issues swiftly, and ensuring business continuity through reliable IT solutions.</p>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="skills mt-5">
        <div class="container">
            <h2>Skills</h2>
            <div class="row">
                <div class="col-md-6">
                    <h4>Networking & Security</h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 90%">90%</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>ERP SAP B1</h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 85%">85%</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Server Management</h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%">80%</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>SQL & VB.NET</h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%">75%</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio mt-5">
        <div class="container">
            <h2>Projects</h2>
            <div class="row">
                <div class="col-md-4">
                    <h5>ERP Implementation</h5>
                    <p>Led the successful implementation of SAP B1 for a large-scale company.</p>
                </div>
                <div class="col-md-4">
                    <h5>Network Infrastructure</h5>
                    <p>Designed and deployed a robust network infrastructure for a multi-site organization.</p>
                </div>
                <div class="col-md-4">
                    <h5>Security Enhancements</h5>
                    <p>Developed and implemented new security policies, minimizing security breaches by 50%.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact mt-5">
        <div class="container">
            <h2>Contact Me</h2>
            <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="mt-5">
        <p>© 2024 Ade - Head of IT</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
