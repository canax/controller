Anax Controller
==================================

[![Latest Stable Version](https://poser.pugx.org/anax/controller/v/stable)](https://packagist.org/packages/anax/controller)
[![Join the chat at https://gitter.im/canax/controller](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/canax/controller?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

[![Build Status](https://travis-ci.org/canax/controller.svg?branch=master)](https://travis-ci.org/canax/controller)
[![CircleCI](https://circleci.com/gh/canax/controller.svg?style=svg)](https://circleci.com/gh/canax/controller)

[![Build Status](https://scrutinizer-ci.com/g/canax/controller/badges/build.png?b=master)](https://scrutinizer-ci.com/g/canax/controller/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/canax/controller/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/canax/controller/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/canax/controller/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/canax/controller/?branch=master)

[![Maintainability](https://api.codeclimate.com/v1/badges/225b19ca0e961727e90b/maintainability)](https://codeclimate.com/github/canax/controller/maintainability)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/65c7dcf6e04848fea7432bae8f1ce117)](https://www.codacy.com/app/mosbth/controller?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=canax/controller&amp;utm_campaign=Badge_Grade)

Anax Controller is a collection of sample utility controllers, use them as scaffold (copy and modify) when creating your own controllers.

The controller can be useful code structure when building a site, as an alternative to ordinary route callbacks.



Class, interface, trait
------------------

The following classes, interfaces and traits exists.

| Class, interface, trait                 | Description |
|-----------------------------------------|-------------|
| `Anax\Controller\DevelopmentController` | To aid debugging and visualising Anax internals. |



Exceptions
------------------

There are no module specific exceptions.

It is common to use router exceptions when a route callback fails for some reason. Here are router exceptions that creates appropriate HTTP responses.

| Exception                                     | What    |
|-----------------------------------------------|---------|
| `Anax\Route\Exception\ForbiddenException`     | Results in a 304. |
| `Anax\Route\Exception\NotFoundException`      | Results in a 404. |
| `Anax\Route\Exception\InternalErrorException` | Results in a 500. |



App style or di style
------------------



Mounting a controller class on the router
------------------

router/style and config/router-style.



How route path maps to controller/action
------------------



The initialize method
------------------



The catchAll method
------------------



License
------------------

This software carries a MIT license. See [LICENSE.txt](LICENSE.txt) for details.



```
 .  
..:  Copyright (c) 2013 - 2019 Mikael Roos, mos@dbwebb.se
```
