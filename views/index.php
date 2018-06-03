<?php
require 'config.php';

require 'libs/bootstrap.php';
require 'libs/controller.php';
require 'libs/model.php';
require 'libs/view.php';
require 'libs/hash.php';
require 'libs/database.php';
require 'libs/session.php';
Session::init();
$app = new Bootstrap();
