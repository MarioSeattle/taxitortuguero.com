
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/spa.css" rel="stylesheet">
    <link rel="stylesheet" href="http://icono-49d6.kxcdn.com/icono.min.css">
    <meta charset="UTF-8">
    <title>Tortuguero WaterTaxi</title>
</head>

<body>

<div class="mobile">
    <ul class="dotstyle dotstyle-fillin">
        <li><a href="#home">Home</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</div>

<section id="home">
    <div class="container">
        <h2>Welcome</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
</section>

<section id="portfolio">
    <div class="container">
        <h2>Portfolio</h2>
        <a href="http://drbl.in/onqZ"><img class="item" src="https://d13yacurqjgara.cloudfront.net/users/353963/screenshots/2004547/roshanion4.png"></a>
        <a href="http://drbl.in/okhh"><img class="item" src="https://d13yacurqjgara.cloudfront.net/users/353963/screenshots/1995923/bigsky.png"></a>
        <a href="http://drbl.in/ofSl"><img class="item" src="https://d13yacurqjgara.cloudfront.net/users/353963/screenshots/1984331/responsive-turtle.jpg"></a>
        <a href="http://drbl.in/oeYe"><img class="item" src="https://d13yacurqjgara.cloudfront.net/users/353963/screenshots/1981932/turtle-dribbble.png"></a>
        <a href="http://drbl.in/nzFU"><img class="item" src="https://d13yacurqjgara.cloudfront.net/users/353963/screenshots/1897162/firelands_dribbble.jpg"></a>
        <a href="http://drbl.in/obXn"><img class="item" src="https://d13yacurqjgara.cloudfront.net/users/353963/screenshots/1973777/sevenly.png"></a>
    </div>
</section>

<section id="services">
    <div class="container">

        <h2>Services</h2>

        <div class="unit one-of-three">
            <h4>Web and Interface</h4>
        </div>

        <div class="unit two-of-three last">
            <p>We help plan, design, and engineer digital experiences that engage your customers across web, mobile, and social platforms. </p>
            <h3>Capabilities</h3>
            <div class="unit one-of-three">
                <ul class="services-list">
                    <li>iOS App Design</li>
                    <li>Web App Design</li>
                    <li>User Interface & Experience</li>
                </ul>
            </div>
            <div class="unit one-of-three">
                <ul class="services-list">
                    <li>Custom Web Design</li>
                    <li>Responsive Design</li>
                    <li>UI Design & Experience</li>
                </ul>
            </div>
            <div class="unit one-of-three last">
                <ul class="services-list">
                    <li>CMS Integration</li>
                    <li>Front & Back End Dev</li>
                    <li>Information Architecture</li>
                </ul>
            </div>
        </div>

        <div class="unit one-of-three">
            <h4>Brand and Identity</h4>
        </div>

        <div class="unit two-of-three last">
            <p>Your brand and your company are inseparable. Your brand strategy needs to be ongoing, well beyond its initial launch.</p>
            <h3>Capabilities</h3>
            <div class="unit one-of-three">
                <ul class="services-list">
                    <li>Logos & Wordmarks</li>
                    <li>Identity System</li>
                    <li>Messaging</li>
                </ul>
            </div>
            <div class="unit one-of-three">
                <ul class="services-list">
                    <li>Iconography</li>
                    <li>Illustration</li>
                    <li>Infographics</li>
                </ul>
            </div>
            <div class="unit one-of-three last">
                <ul class="services-list">
                    <li>Copywriting</li>
                    <li>Print Design</li>
                    <li>Packaging Design</li>
                </ul>
            </div>
        </div>

    </div>
</section>

<section id="quote">
    <div class="container-2">
        <span>"</span>
        <p>Design is not just what it looks like and feels like. Design is how it works.</p>
        <h3>Steve Jobs</h3>
    </div>
</section>

<section id="about">
    <div class="container-2">
        <h2>About</h2>
        <div class="avatar"> <img src="http://www.chrisbreitigan.com/files/theme/aboutme.jpg"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat ante nec vestibulum vulputate. Nullam porttitor vel libero et lacinia. Vestibulum placerat justo eget commodo imperdiet. Cras at risus sed dolor tempus rutrum vitae eu nisi. Pellentesque
            habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce non consequat massa. Praesent vitae lectus imperdiet, maximus arcu id, pellentesque purus. Nulla porta consequat nunc, quis dictum enim tempor nec. Curabitur
            euismod tellus massa, id dictum libero tempus et. Nunc mattis luctus aliquam.</p>
    </div>
</section>

<section id="contact">
    <div class="container-2">
        <h2>Contact</h2>

        <form id="contact-form" action="" method="post">

            <div class="form-item">
                <input type="text" id="name" name="user_name" placeholder="Johnny Appleseed">
                <label for="name">Name</label>
            </div>

            <div class="form-item">
                <input type="email" id="mail" name="user_email" placeholder="john@example.com">
                <label for="mail">Email</label>
            </div>

            <div class="form-item">
                <input type="text" id="subject" name="user_subject" placeholder="Project Quote">
                <label for="subject">Subject</label>
            </div>

            <div class="form-item">
                <input type="checkbox" id="development" value="service_development" name="user_service">
                <label for="frontend">Dev</label>
                <input type="checkbox" id="design" value="design" name="user_service">
                <label for="design">Design</label>
                <label>Services</label>
            </div>

            <div class="form-item large">
                <textarea id="message" rows="4" name="user_message" placeholder="Your message here"></textarea>
                <label for="message">Message</label>
            </div>
        </form>

        <p>Stay Connected</p>
        <ul class="social">
            <li><a href="mailto:info@chrisbreitigan.com"><i class="fa fa-envelope-o "></i></a></li>
            <li><a href="http://www.dribbble.com/breitigan"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="http://www.twitter.com/breitigan"><i class="fa fa-twitter"></i></a></li>
            <li><a href="http://www.chrisbreitigan.com"><i class="fa fa-link"></i></a></li>
        </ul>

    </div>
</section>

<script>
    $('a[href^="#"]').click(function(event) {
        var id = $(this).attr("href");
        var offset = 0;
        var target = $(id).offset().top - offset;
        $('html, body').animate({scrollTop:target}, 500);
        event.preventDefault();
    });
</script>
<script>

    </script>

</body>

</html>

