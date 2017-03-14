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
    return $this->renderer->render($response, 'acercade.html', $args);
});

$app->get('/upload', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Vista acerca de");

    // Render index view
    return $this->renderer->render($response, 'upload.html', $args);
});

