<?php

declare(strict_types=1);

use Framework\App;

use function App\Config\registerRoutes;

$app = new App;

registerRoutes($app);

return $app;