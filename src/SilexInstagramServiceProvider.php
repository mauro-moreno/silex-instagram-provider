<?php
/**
 * Class SilexInstagramServiceProvider
 *
 * @author Mauro Moreno <moreno.mauro.emanuel@gmail.com>
 */
namespace MauroMoreno\SilexInstagram;

use Silex\ServiceProviderInterface;
use Silex\Application;
use MetzWeb\Instagram\Instagram;

/**
 * Class SilexInstagramServiceProvider
 * @package MauroMoreno\SilexInstagram
 */
class SilexInstagramServiceProvider implements ServiceProviderInterface
{

    /**
     * {@inheritdoc}
     */
    public function register(Application $app)
    {
        $app['instagram'] = function () use ($app) {
            return new Instagram([
                'apiKey' => $app['instagram.key'],
                'apiSecret' => $app['instagram.secret'],
                'apiCallback' => $app['instagram.callback']
            ]);
        };
    }

    /**
     * {@inheritdoc}
     */
    public function boot(Application $app)
    {
    }

}