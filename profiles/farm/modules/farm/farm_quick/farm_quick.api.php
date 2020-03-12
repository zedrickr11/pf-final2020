<?php

/**
 * @file
 * Hooks provided by farm_quick.
 *
 * This file contains no working PHP code; it exists to provide additional
 * documentation for doxygen as well as to document hooks in the standard
 * Drupal manner.
 */

/**
 * @defgroup farm_quick Farm quick module integrations.
 *
 * Module integrations with the farm_quick module.
 */

/**
 * @defgroup farm_quick_hooks Farm quick's hooks
 * @{
 * Hooks that can be implemented by other modules in order to extend farm_quick.
 */

/**
 * Define quick forms provided by this module
 */
function hook_farm_quick_forms() {
  return array(
    'myform' => array(

      // This will be displayed as the title of the tab under "Quick forms".
      'label' => t('My form'),

      // This permission will be required to access the form.
      'permission' => 'create farm_harvest log entities',

      // The form callback function.
      'form' => 'my_quick_form',

      // If the quick form functions are stored in a separate PHP file, specify
      // that as follows (relative to the module's directory).
      'file' => 'mymodule.farm_quick.inc',
    ),
  );
}

/**
 * @}
 */
