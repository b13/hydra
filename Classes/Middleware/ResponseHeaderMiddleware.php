<?php
declare(strict_types=1);

namespace B13\Hydra\Middleware;

/*
 * This file is part of TYPO3 CMS-extension hydra by b13.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 */

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use TYPO3\CMS\Core\Site\Entity\Site;

class ResponseHeaderMiddleware implements MiddlewareInterface
{
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $response = $handler->handle($request);

        $site = $request->getAttribute('site');
        if (!$site instanceof Site) {
            return $response;
        }

        $configuration = $site->getConfiguration();
        if (empty($configuration['responseHeaders']) || !is_array($configuration['responseHeaders'])) {
            return $response;
        }

        foreach ($configuration['responseHeaders'] as $header => $content) {
            if (is_array($content)) {
                $response = $response->withAddedHeader($header, implode(' ', $content));
            } else {
                $response = $response->withAddedHeader($header, $content);
            }
        }

        return $response;
    }
}
