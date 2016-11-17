<?php

$app->get('/evenement/{event_id:[0-9]+}/epreuve/{trial_id:[0-9]+}', 'EpreuveController:show')->setName('epreuve.show');

$app->group('', function () {
    $this->map(['GET', 'POST'], '/evenement/{event_id:[0-9]+}/epreuve/add', 'EpreuveController:add')->setName('epreuve.add');
    $this->map(['GET', 'POST'], '/evenement/{event_id:[0-9]+}/epreuve/{trial_id:[0-9]+}/edit', 'EpreuveController:edit')->setName('trial.edit');
})->add(new App\Middleware\AuthMiddleware($container));
