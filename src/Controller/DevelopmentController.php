<?php

namespace Anax\Controller;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;
use Anax\Route\Exception\NotFoundException;

/**
 * A controller to ease with development and debugging information.
 */
class DevelopmentController implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;



    /**
     * Render views that are supported.
     *
     * @throws Anax\Route\Exception\NotFoundException when route is not found.

     * @return object as the response.
     */
    public function catchAll() : object
    {
        $title = " | Anax development utilities";
        $pages = [
            "" => "index",
            "di" => "di",
            "request" => "request",
            "router" => "router",
            "session" => "session",
            "view" => "view",
        ];

        $path = $this->di->get("router")->getMatchedPath();

        if (!array_key_exists($path, $pages)) {
            throw new NotFoundException();
        }

        $page = $this->di->get("page");
        $page->add(
            "anax/v2/dev/{$pages[$path]}",
            [
                "mount" => "dev/"
            ]
        );

        return $page->render([
            "title" => ucfirst($pages[$path]) . $title
        ]); 
    }
}
