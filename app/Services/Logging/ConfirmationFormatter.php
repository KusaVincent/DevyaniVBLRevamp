<?php

namespace App\Services\Logging;

use Monolog\Formatter\LineFormatter;

final class ConfirmationFormatter
{
    public function __invoke($logger): void
    {
        foreach ($logger->getHandlers() as $handler) {
            $handler->setFormatter(
                new LineFormatter(
                    "%datetime%|%extra.uuid%|%level_name%|%extra.file%|%extra.function%|%extra.ip%|%extra.line%|%message%\n",
                    "Y-m-d H:i:s",
                    true,
                    true
                )
            );
        }
    }
}
