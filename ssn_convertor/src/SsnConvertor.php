<?php

/**
 * Converts integer value to ssn format.
 */
 
namespace Drupal\ssn_convertor;

use Twig_Extension;
use Twig_SimpleFilter;

class SsnConvertor extends \Twig_Extension {
  
  /**
   * {@inheritdoc}
   */
  public function getFilters() {
    return [ new \Twig_SimpleFilter('ssnconvertor', [$this, 'ssnConvertor'])];
  }
  
  /**
   * {@inheritdoc}
   */
  public function getName() {
    return 'ssn_convertor.twig_extension';
  }
  
  /**
   * {@inheritdoc}
   */
  public static function ssnConvertor($string) {
    if (isset($string[0])) {
      $value = $string[0]['#context']['value'];
    }
    else {
      $value = $string['#context']['value'];
    }
    return ssn_convertor($value);
  }
}
