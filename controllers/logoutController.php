<?php

/**
 *
 */
class LogoutController extends Controller
{

  function __construct()
  {
    Session::destroy();
    header('location:'.URL);
    exit;
  }
}
