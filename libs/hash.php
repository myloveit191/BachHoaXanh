<?php

/**
 *
 */
class Hash
{
  /**
  * Tham so 1: Ten thuat toan @param string
  * Tham so 2: Du lieu can encode @param string
  * Tham so 3: Key bi mat @param string
  */
  public static function create($algo, $data, $secret)
    {

        $context = hash_init($algo, HASH_HMAC, $secret);
        hash_update($context, $data);

        return hash_final($context);

    }
}
