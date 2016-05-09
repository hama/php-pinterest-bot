<?php

namespace seregazhuk\tests;

use seregazhuk\PinterestBot\Api\Providers\News;

/**
 * Class NewsTest.
 */
class NewsTest extends ProviderTest
{
    /**
     * @var News
     */
    protected $provider;
    /**
     * @var
     */
    protected $providerClass = News::class;

    /** @test */
    public function getLatest()
    {
        $news = ['data' => 'news'];
        $response = $this->createApiResponse($news);
        $error = $this->createErrorApiResponse();

        $this->setResponse($response);
        $this->assertEquals('news', $this->provider->latest());

        $this->setResponse($error);
        $this->assertFalse($this->provider->latest());
    }
}