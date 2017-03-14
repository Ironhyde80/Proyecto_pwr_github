<?php
// Routes

$app->get('/', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.html', $args);
});

$app->get('/acercade', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Vista acerca de");

    // Render index view
    return $this->renderer->render($response, 'acercade.php', $args);
});

$app->get('/upload', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Aqui se haran los uploads");

    // Render index view
    return $this->renderer->render($response, 'upload.php', $args);
});

$app->get('/login', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Aqui se haran los login");

    // Render index view
    return $this->renderer->render($response, 'login.php', $args);
});

