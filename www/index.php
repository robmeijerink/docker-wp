<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DockerWP</title>
        <link rel="stylesheet" href="/assets/css/bulma.min.css">
    </head>
    <body>
        <section class="hero is-medium is-info is-bold">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title">
                        DockerWP
                    </h1>
                    <h2 class="subtitle">
                        Creativity starts here
                    </h2>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h3 class="title is-3 has-text-centered">Environment</h3>
                        <hr>
                        <div class="content">
                            <ul>
                                <li>Nginx (Alpine Linux)</li>
                                <li>PHP <?= phpversion() ?></li>
                                <li>
                                    <?php
                                    $link = mysqli_connect('mysql', 'wp_user', 'secret', null);

                                    if (mysqli_connect_errno()) {
                                        printf("MySQL connection failed: %s", mysqli_connect_error());
                                    } else {
                                        printf("MySQL Server %s", mysqli_get_server_info($link));
                                    }
                                    mysqli_close($link);
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="column">
                        <h3 class="title is-3 has-text-centered">Quick Links</h3>
                        <hr>
                        <div class="content">
                            <ul>
                                <li><a href="/phpinfo.php">phpinfo()</a></li>
                                <li><a href="//<?= $_SERVER['SERVER_NAME']; ?>:8080">phpMyAdmin</a></li>
                                <li><a href="//<?= $_SERVER['SERVER_NAME']; ?>:8025">Mailpit</a></li>
                                <li><a href="/test_db.php">Test DB Connection with mysqli</a></li>
                                <li><a href="/test_db_pdo.php">Test DB Connection with PDO</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
