<?php

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace('Sistema\Control');

SimpleRouter::get('blog', 'SiteControlador@index');

SimpleRouter::start();