<?php

namespace App\Tests\Service;

// use App\Service\NewsletterGenerator;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class NewsletterGeneratorTest extends KernelTestCase
{
    public function testSomething()
    {
        // (1) boot the Symfony kernel
        self::bootKernel();
        /*
        // (2) use static::getContainer() to access the service container
        $container = static::getContainer();

        // (3) run some service & test the result
        $newsletterGenerator = $container->get(NewsletterGenerator::class);
        $newsletter = $newsletterGenerator->generateMonthlyNews(...);

        $this->assertEquals('...', $newsletter->getContent());
        */
    }
}