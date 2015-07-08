<?php

if(YII_ENV_DEV) {
    return include('environments/dev.php');
} else if (YII_ENV_TEST) {
    return include('environments/hom.php');
} else {
    return include('environments/prod.php');
}