<?php
$name = "Dhruv Kaushik";
$bio = "a Full-Stack Developer experienced in React, Next.js, Express, NestJS, MongoDB, MySQL,PHP and now learning Laravel.";
$education = [
    [
        "degree" => "B.Tech (Branch To Decide)",
        "institution" => "Netaji Subhas University of Technology (NSUT)",
        "year" => "To be Graduated in 2029"
    ]
];
$skills = ["PHP", "Laravel (learning)", "React", "Next.js", "Express.js", "NestJS", "MySQL", "MongoDB", "HTML", "CSS", "JavaScript"];
$projects = [
    [
        "title" => "Todo App in PHP",
        "description" => "A basic todo app built using core PHP and session storage with form validation.",
        "link" => ""
    ],
    [
        "title" => "A small utility for a game I used to play",
        "description" => "Made using Next.js and Tailwind CSS — basically a ZIP Reader.",
        "link" => "https://mcpackutils.vercel.app"
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $name ?> | Portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
            max-width: 800px;
            margin: auto;
            background: #f8f8f8;
        }
        h1, h2 {
            color: #333;
        }
        .skills span {
            background: #ddd;
            padding: 5px 10px;
            border-radius: 20px;
            margin: 5px;
            display: inline-block;
        }
        .project, .education {
            background: white;
            border-radius: 10px;
            padding: 15px;
            margin: 15px 0;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
        .project a {
            text-decoration: none;
            color: #007BFF;
        }
    </style>
</head>
<body>

    <h1><?= $name ?></h1>
    <p><?= $bio ?></p>

    <h2>Education</h2>
    <?php foreach ($education as $edu): ?>
        <div class="education">
            <strong><?= $edu['degree'] ?></strong><br>
            <?= $edu['institution'] ?><br>
            <small><?= $edu['year'] ?></small>
        </div>
    <?php endforeach; ?>

    <h2>Skills</h2>
    <div class="skills">
        <?php foreach ($skills as $skill): ?>
            <span><?= $skill ?></span>
        <?php endforeach; ?>
    </div>

    <h2>Projects</h2>
    <?php foreach ($projects as $project): ?>
        <div class="project">
            <h3><?= $project['title'] ?></h3>
            <p><?= $project['description'] ?></p>
            <a href="<?= $project['link'] ?>">View Project</a>
        </div>
    <?php endforeach; ?>

</body>
</html>
