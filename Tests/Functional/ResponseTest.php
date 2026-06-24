<?php

namespace B13\Hydra\Tests\Functional;

/*
 * This file is part of TYPO3 CMS-based extension "http2" by b13.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 */
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Functional\Framework\Frontend\InternalRequest;
use TYPO3\TestingFramework\Core\Functional\FunctionalTestCase;

class ResponseTest extends FunctionalTestCase
{
    protected array $testExtensionsToLoad = ['typo3conf/ext/hydra'];
    protected array $coreExtensionsToLoad = ['core', 'frontend'];
    protected array $pathsToLinkInTestInstance = ['typo3conf/ext/hydra/Build/sites' => 'typo3conf/sites'];

    #[Test]
    public function linkHeaderExists(): void
    {
        $this->importCSVDataSet(__DIR__ . '/Fixtures/Response.csv');
        $request = new InternalRequest('http://localhost/');
        $response = $this->executeFrontendSubRequest($request);
        self::assertTrue($response->hasHeader('x-foo'));
        self::assertSame('bar', $response->getHeaderLine('x-foo'));
    }

}
