<?php

namespace Drupal\utm_builder\Plugin\WebformElement;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\Element as RenderElement;
use Drupal\Core\Render\Element;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\webform\Entity\WebformOptions;
use Drupal\webform\Utility\WebformElementHelper;
use Drupal\webform\Utility\WebformOptionsHelper;
use Drupal\webform\Plugin\WebformElementBase;
use Drupal\webform\WebformInterface;
use Drupal\webform\WebformSubmissionInterface;
use Drupal\webform\Plugin\WebformElement\WebformCompositeBase;

/**
 * Provides a 'utm_builder' element.
 *
 * @WebformElement(
 *   id = "utm_builder",
 *   label = @Translation("UTM Builder element"),
 *   description = @Translation("Provides a webform element utm builder."),
 *   category = @Translation("UTM elements"),
 *   multiline = TRUE,
 *   composite = TRUE,
 *   states_wrapper = TRUE,
 * )
 *
 */
class UtmBuilderFields extends WebformCompositeBase {

  /**
   * {@inheritdoc}
   */
  protected function formatHtmlItemValue(array $element, WebformSubmissionInterface $webform_submission, array $options = []) {
    return $this->formatTextItemValue($element, $webform_submission, $options);
  }

  /**
   * {@inheritdoc}
   */
  protected function formatTextItemValue(array $element, WebformSubmissionInterface $webform_submission, array $options = []) {
    $value = $this->getValue($element, $webform_submission, $options);

    $lines = [];
    if (!empty($value['utm_source'])) {
      $lines['utm_source'] = $value['utm_source'];
    }
    if (!empty($value['utm_medium'])) {
      $lines['utm_medium'] = $value['utm_medium'];
    }
    if (!empty($value['utm_term'])) {
      $lines['utm_term'] = $value['utm_term'];
    }
    if (!empty($value['utm_content'])) {
      $lines['utm_content'] = $value['utm_content'];
    }
    if (!empty($value['utm_campaign'])) {
      $lines['utm_campaign'] = $value['utm_campaign'];
    }
    return $lines;
  }

}
