<?php namespace ProcessWire;
/**
 * Collection of useful date/time related functions
 *
 * @author Bernhard Baumrock, 12.02.2020
 * @license Licensed under MIT
 * @link https://www.baumrock.com
 */
class RockDatehelper extends WireData implements Module {

  public static function getModuleInfo() {
    return [
      'title' => 'RockDatehelper',
      'version' => '0.0.1',
      'summary' => 'Module that helps you with date/time related tasks.',
      'autoload' => false,
      'icon' => 'bolt',
    ];
  }

  // checks

  // conversions

  /**
   * Convert value to timestamp
   * @param mixed $value
   * @return integer
   */
  public function toTimestamp($value) {
    // todo
  }
}
