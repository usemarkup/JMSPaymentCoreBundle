#!/usr/bin/env php
<?php

include_once 'common.php';

run('vendor/bin/phpunit');
run('vendor/bin/phpstan analyse . --level 1');

if (shouldBuildDocs()) {
    run('venv/bin/sphinx-build -E -W Resources/doc Resources/doc/_build');
}
