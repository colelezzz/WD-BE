<?php
include 'header.php';
?>
<section class="hero">
    <h1>Coleen's Projects</h1>
</section>

<div class="container">
    <section id="home" class="home">
        <div class="welcome row">
            <div class="col-12">
                <h3 style="font-size: 30px;">Welcome to my Web Dev Project Website!</h3>
                <p>Your one-stop destination to explore my journey as an IT student.</p>
            </div>
        </div>

        <h2 class="featuredTitle text-center" style="font-size:30px; font-weight:bolder;">Featured Projects</h2>
        <div class="featuredProjectsContainer row">
            <div class="featuredProjectCard col-12 col-md-4">
                <h3>Featured Project 1</h3>
                <img src="images/project1.png" alt="Description of Project 1" class="projectImage">
                <p>This Java project is inspired by the "Inside Out" theme, centering on the character "Anger" and
                    designed as a Four Pics One Word game.</p>
            </div>
            <div class="featuredProjectCard col-12 col-md-4">
                <h3>Featured Project 2</h3>
                <img src="images/project2.png" alt="Description of Project 2" class="projectImage">
                <p>This recent project, developed using HTML, presents a gallery displaying a variety of images. It has
                    interactive elements like a button for dark and light mode, and collapse and expand buttons.</p>
            </div>
            <div class="featuredProjectCard col-12 col-md-4">
                <h3>Featured Project 3</h3>
                <img src="images/project3.png" alt="Description of Project 3" class="projectImage">
                <p>This project highlights multimedia skills, featuring Photoshop-edited images showcased in class,
                    using techniques like cartoonization and bubble-head effects.</p>
            </div>
        </div>

        <div class="contact">
            <h2 class="text-center" style="font-size:30px; font-weight:bolder;">Contact Me</h2>
            <p>If you would like to get in touch, feel free to reach out through my social media below or through this
                calling card!</p>
            <div class="imageContainer row">
                <div class="imageColumn col-12 col-md-6">
                    <img src="images/isles_front.jpg" alt="Calling Card Front" class="contactImage">
                </div>
                <div class="imageColumn col-12 col-md-6">
                    <img src="images/isles_back.jpg" alt="Calling Card Back" class="contactImage">
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about" style="display: none;">
        <h3 style="font-size:30px; font-weight:bolder;">About Me</h3>
        <div class="aboutMeBox">
            <p>
                I am an IT student at the Polytechnic University of the Philippines Sto. Tomas Campus, where I am
                passionate about exploring the vast field of technology and its applications.
                I strive to enhance my skills and contribute to innovative projects. My journey in IT has equipped me
                with problem-solving abilities and a keen interest in emerging technologies.
                I am eager to collaborate with like-minded individuals and make a positive impact in the tech community.
            </p>
        </div>
    </section>

    <section id="projects" class="projects" style="display: none;">
        <h2 style="font-size: 30px; font-weight:bolder;"> My Projects</h2>
        <div class="projectsContainer">
            <div class="projectsCards row">
                <div class="card col-12 col-sm-6 col-md-4">
                    <h3 style="margin-top:100px;">Project 1</h3>
                    <p>A08</p>
                    <a href="A08/index.php"></a>
                </div>
                <div class="card col-12 col-sm-6 col-md-4">
                    <h3 style="">Stay Tuned!</h3>
                    <p>🔜</p>
                </div>
                <div class="card col-12 col-sm-6 col-md-4">
                    <h3 style="">Stay Tuned!</h3>
                    <p>🔜</p>
                </div>
                <div class="card col-12 col-sm-6 col-md-4">
                    <h3 style="">Stay Tuned!</h3>
                    <p>🔜</p>
                </div>
                <div class="card col-12 col-sm-6 col-md-4">
                    <h3 style="">Stay Tuned!</h3>
                    <p>🔜</p>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include 'footer.php';
?>