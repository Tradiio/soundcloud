<?php

namespace Njasm\Soundcloud\UrlBuilder;

use Njasm\Soundcloud\Resource\ResourceInterface;

/**
 * SoundCloud API wrapper in PHP
 *
 * @author      Nelson J Morais <njmorais@gmail.com>
 * @copyright   2014 Nelson J Morais <njmorais@gmail.com>
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        http://github.com/njasm/soundcloud
 * @package     Njasm\Soundcloud
 */

class UrlBuilderHttp extends UrlBuilder
{
    private $scheme;
    private $hostname;
    private $subdomain;
    private $resource;

    public function __construct(
        ResourceInterface $resource,
        $subdomain = "api",
        $hostname = "soundcloud.com",
        $scheme = "http://"
    ) {
        parent::__construct($resource, $subdomain, $hostname, $scheme);
    }
}
