<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Abdul Kader Rabbani - System Support Engineer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }
        nav {
            text-align: center;
            margin-top: 1rem;
        }
        nav a {
            margin: 0 1rem;
            text-decoration: none;
            color: #333;
        }
        section {
            padding: 2rem;
            background-color: #fff;
            margin: 1rem auto;
            max-width: 800px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        footer {
            text-align: center;
            padding: 1rem 0;
            background-color: #333;
            color: #fff;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
	<a location='left' href='index.php'>SM Home </a>
        <h1>Abdul Kader Rabbani</h1>
        <p>System Support Engineer</p>
    </header>

    <nav>
        <a href="#about">About Me</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact Information</a>
        <a href="#company">Company</a>
        <a href="#blog">Blog</a>
        <a href="#gallery">Gallery</a>
    </nav>

    <section id="about">
        <h2>About Me</h2>
        <p><?php echo "A person who works for human."; ?></p>
    </section>

    <section id="projects">
        <h2>Projects</h2>
        <p><?php echo "Details about your projects will go here."; ?></p>
    </section>

    <section id="contact">
        <h2>Contact Information</h2>
        <p>Email: <a href="mailto:abdulkaderrabbani@example.com"><?php echo "abdulkaderrabbani@example.com"; ?></a></p>
        <p>Phone: <?php echo "+123-456-7890"; ?></p>
    </section>

    <section id="company">
        <h2>Company</h2>
        <p><?php echo "Details about your company will go here."; ?></p>
    </section>

    <section id="blog">
        <h2>Blog</h2>
        <p><?php echo "Blog posts will go here."; ?></p>
    </section>

    <section id="gallery">
        <h2>Gallery</h2>
        <p><?php echo "Photos and other media will go here."; ?></p>
    </section>

    <footer>
        <p>&copy; 2024 Abdul Kader Rabbani. All rights reserved.</p>
    </footer>
</body>
</html>
