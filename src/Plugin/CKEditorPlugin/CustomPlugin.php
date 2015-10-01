<?php

/** @file
 *  Definition of \Drupal\ckeditor_custom_plugin\CKEditorPlugin\CustomPlugin
 */

namespace Drupal\ckeditor_custom_plugin\Plugin\CKEditorPlugin;
use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defined the "CustomPlugin" plugin
 *
 * @CKEditorPlugin(
 *  id = "custom_plugin",
 *  label = @Translation("Custom Plugin")
 * )
 *
 */

class CustomPlugin extends PluginBase implements CKEditorPluginInterface, CKEditorPluginButtonsInterface {

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getDependencies().
   */
  function getDependencies(Editor $editor) {
    return array();
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getLibraries().
   */
  function getLibraries(Editor $editor) {
    return array();
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::isInternal().
   */
  function isInternal() {
    return FALSE;
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getFile().
   */
  function getFile() {
    return drupal_get_path('module', 'ckeditor_custom_plugin') . '/js/plugins/custom_plugin/plugin.js';
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginButtonsInterface::getButtons().
   */
  function getButtons() {
    global $base_url;
    return array(
      'CustomPlugin' => array(
        'label' => t('Custom Plugin'),
        'image' => drupal_get_path('module', 'ckeditor_custom_plugin') . '/js/plugins/custom_plugin/icons/icon.png',
        // 'image_alternative' => t('Custom Plugin BTN'), Use this if you don't have an icon available and it shows text instead.
      ),
    );
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getConfig().
   */
  public function getConfig(Editor $editor) {
    return array();
  }
}