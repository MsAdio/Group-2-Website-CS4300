<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Group Project</title>
    <script>
        // JavaScript for interactive elements
        document.addEventListener("DOMContentLoaded", function() {
            const header = document.querySelector('header');

            // Change header background color on hover
            header.addEventListener('mouseover', function() {
                header.style.backgroundColor = 'red'; // Darker Blue
            });

            header.addEventListener('mouseout', function() {
                header.style.backgroundColor = '#3498db'; // Default Blue
            });
        });
    </script>
</head>

<body>
    <header>
        <h1>Welcome to Our Group Project</h1>
        <nav>
            <ul>
                <li><a href="member1.php">Hanifa Ali</a></li>
                <li><a href="member2.php">Member 2</a></li>
                <!-- Add more members as needed -->
            </ul>
        </nav>
    </header>
    <div class="container">In the vibrant realm of collaborative endeavors, our group emerged like a constellation of
        diverse talents converging on a shared cosmic mission—crafting a digital universe in the form of a website that
        transcends the ordinary. Each member, like a unique star in this celestial ensemble, brings a distinctive
        brilliance and skill set to the cosmic tapestry we collectively weave.
        <br><br>
        Our thematic odyssey began with spirited debates that traversed the nebulous realms of possibilities. From the
        inception of ideas to the crystallization of our vision, we navigated the cosmic currents of creativity,
        arriving at a thematic destination that promised to be both captivating and technically enriching.
        <br><br>
        As we embarked on the cosmic coding journey, the rhythmic symphony of HTML, CSS, JavaScript, and PHP echoed
        through our virtual workspace. The binary constellations aligned, giving birth to an interactive homepage that
        serves as the portal to our celestial odyssey. The navigation menu, a constellation chart of links, beckons
        visitors to explore the individual galaxies of our team members.
        <br><br>
        Individually, each group member's page unfolds as a unique celestial body, revealing personal narratives,
        skills, and the gravitational pull of their online presence. With HTML as the gravitational force structuring
        our content, CSS as the cosmic attire, and JavaScript adding interstellar interactivity, our pages emanate a
        dynamic energy that captivates visitors like a cosmic dance.
        <br><br>
        In the ethereal space where the server-side scripting language PHP dwells, we harnessed its power to process
        forms and dynamically render content—a cosmic force behind the scenes, orchestrating seamless transitions and
        interactions.
        <br><br>
        As we approach the event horizon of our project presentation, we stand ready to unveil our cosmic creation in a
        captivating video demo. Each member, like a cosmic ambassador, will illuminate their portion of the project,
        speaking for approximately two minutes. It is in this moment that our celestial opus will come to life,
        transcending the boundaries of mere code and pixels.
        <br><br>
        In the cosmic tapestry of our group, where diverse talents converge in harmonious collaboration, we have birthed
        a digital universe—a testament to the boundless possibilities when minds unite under the vast expanse of shared
        creativity. Our project, a cosmic dance of code and creativity, is poised to leave an indelible mark in the
        annals of our academic odyssey.
        <br><br><br><br><br><br>
    </div>
    <footer>
        <p>&copy;
            <?php echo date("Y"); ?> Group Project
        </p>
    </footer>
</body>

</html>