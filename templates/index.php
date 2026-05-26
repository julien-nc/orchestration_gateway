<?php

declare(strict_types=1);

use OCP\Util;

Util::addScript(OCA\OrchestrationGateway\AppInfo\Application::APP_ID, OCA\OrchestrationGateway\AppInfo\Application::APP_ID . '-main');
Util::addStyle(OCA\OrchestrationGateway\AppInfo\Application::APP_ID, OCA\OrchestrationGateway\AppInfo\Application::APP_ID . '-main');

?>

<div id="orchestration_gateway"></div>
