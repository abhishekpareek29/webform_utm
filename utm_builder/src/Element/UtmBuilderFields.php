<?php

namespace Drupal\utm_builder\Element;

use Drupal\Component\Utility\Html;
use Drupal\webform\Element\WebformCompositeBase;

/**
 * Provides a 'utm_builder'.
 *
 * Webform composites contain a group of sub-elements.
 *
 * @FormElement("utm_builder")
 *
 */
class UtmBuilderFields extends WebformCompositeBase {

  /**
   * {@inheritdoc}
   */
  public function getInfo() {
    return parent::getInfo();
  }

  /**
   * {@inheritdoc}
   */
  public static function getCompositeElements() {
    // Generate an unique ID that can be used by #states.
    $html_id = Html::getUniqueId('utm_builder');

    $elements = [];
    $elements['utm_source'] = [
      '#type' => 'hidden',
      '#title' => t('UTM Source'),
      '#attributes' => ['data-webform-composite-id' => $html_id . '--utm_source'],
    ];
    $elements['utm_medium'] = [
      '#type' => 'hidden',
      '#title' => t('UTM Medium'),
      '#attributes' => ['data-webform-composite-id' => $html_id . '--utm_medium'],
    ];
    $elements['utm_term'] = [
      '#type' => 'hidden',
      '#title' => t('UTM Term'),
      '#attributes' => ['data-webform-composite-id' => $html_id . '--utm_term'],
    ];
    $elements['utm_content'] = [
      '#type' => 'hidden',
      '#title' => t('UTM Content'),
      '#attributes' => ['data-webform-composite-id' => $html_id . '--utm_content'],
    ];
    $elements['utm_campaign'] = [
      '#type' => 'hidden',
      '#title' => t('UTM Campaign'),
      '#attributes' => ['data-webform-composite-id' => $html_id . '--utm_campaign'],
    ];

    return $elements;
  }

}
