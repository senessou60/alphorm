<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exemple de page HTML avec la plate-forme LAMP</title>
        <style media="screen">
        body {
            font-family: Verdana;
            display: flex;
            flex-direction: column;
        }
        header {
            background-color: #F3F3F3;
            padding: 0.5rem;
            height: 40px;
            display: flex;
            align-content: space-between;
        }
        footer {
            align-content: space-between;
            background-color: #333;
            color: white;
            display: flex;
            height: 40px;
        }
        footer > p {
            flex-grow: 1;
            flex-shrink: 1;
            text-align: center;
        }
        main {
            flex-grow: 1;
            flex-shrink: 1;
        }
        form {
            flex-grow: 1;
            flex-shrink: 1;
            display: flex;
        }
        ul {
            list-style: none;
            margin: 20vh auto;
            background-color: #333;
            border: 1px solid #FFF;
            border-radius: 8px;
            box-shadow: 0 0 12px 2px #CCC;
            max-width: 50%;
            padding: 0;
        }
        a {
            color: inherit;
            text-decoration: none;
        }
        li {
            color: #FFF;
            background-color: #333;
            padding: 2rem;
            transition: all 0.2s ease;
        }
        li:hover {
            background-color: #F3F3F3;
            color: #333;
            transition: all 0.2s ease;
        }
        li:not(:last-of-type) {
            border-bottom: 1px solid #EEE;
        }
        input {
            display: inline-block;
            margin: 0 1rem;
        }

        </style>
    </head>
    <body>
        <?php include "includes/header.html"; ?>
        <main>
            <h1>Page d'accueil de la TODO-List (version PHP)</h1>
            <ul>
                <li>
                    Ajouter une tâche à faire</li>
                <li>
                    Voir toutes les tâches</li>
                <li>
                    <a href="page_2.html">Informations</a></li>
		<li>
		   <?php $db = mysqli_connect('localhost', 'root', 'isabelle<3', 'tutoriel');   ?>
		   <?php echo $db->host_info ?>
            </ul>
        </main>
        <?php include "includes/footer.html"; ?>
            </body>
</html>
