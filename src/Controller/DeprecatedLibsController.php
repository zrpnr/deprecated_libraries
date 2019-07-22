<?php

namespace Drupal\deprecated_libraries\Controller;

use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\examples\Utility\DescriptionTemplateTrait;

/**
 * Controller for example description page.
 *
 * This class uses the DescriptionTemplateTrait to display text we put in the
 * templates/description.html.twig file.
 */
class DeprecatedLibsController {

  use DescriptionTemplateTrait;
  use StringTranslationTrait;

  /**
   * {@inheritdoc}
   */
  protected function getModuleName() {
    return 'deprecated_libraries';
  }


  /*
   * Core jQueryUI Accordion asset library.
   *
   * @return array
   *   A renderable array.
   */
  public function getCoreJqueryUIAccordion() {
    $build['element'] = [
      '#theme' => 'core_jquery_ui_accordion',
      '#title' => 'core/jquery.ui.accordion',
    ];

    $build['element']['#attached']['library'][] = 'deprecated_libraries/core.jquery_ui_accordion';

    return $build;
  }

  /*
   * Contrib jQueryUI Accordion asset library.
   *
   * @return array
   *   A renderable array.
   */
  public function getContribJqueryUIAccordion() {
    $build['element'] = [
      '#theme' => 'contrib_jquery_ui_accordion',
      '#title' => 'jquery_ui_accordion/accordion',
    ];

    $build['element']['#attached']['library'][] = 'deprecated_libraries/contrib.jquery_ui_accordion';

    return $build;
  }

  /*
   * Core jQueryUI Checkboxradio asset library.
   *
   * @return array
   *   A renderable array.
   */
  public function getCoreJqueryUICheckboxradio() {
    $build['element'] = [
      '#theme' => 'core_jquery_ui_checkboxradio',
      '#title' => 'core/jquery.ui.checkboxradio',
    ];

    $build['element']['#attached']['library'][] = 'deprecated_libraries/core.jquery_ui_checkboxradio';

    return $build;
  }

  /*
   * Contrib jQueryUI Checkboxradio asset library.
   *
   * @return array
   *   A renderable array.
   */
  public function getContribJqueryUICheckboxradio() {
    $build['element'] = [
      '#theme' => 'contrib_jquery_ui_checkboxradio',
      '#title' => 'jquery_ui_checkboxradio/checkboxradio',
    ];

    $build['element']['#attached']['library'][] = 'deprecated_libraries/contrib.jquery_ui_checkboxradio';

    return $build;
  }

  /*
   * Core jQueryUI Controlgroup asset library.
   *
   * @return array
   *   A renderable array.
   */
  public function getCoreJqueryUIControlgroup() {
    $build['element'] = [
      '#theme' => 'core_jquery_ui_controlgroup',
      '#title' => 'core/jquery.ui.controlgroup',
    ];

    $build['element']['#attached']['library'][] = 'deprecated_libraries/core.jquery_ui_controlgroup';

    return $build;
  }

  /*
   * Contrib jQueryUI Controlgroup asset library.
   *
   * @return array
   *   A renderable array.
   */
  public function getContribJqueryUIControlgroup() {
    $build['element'] = [
      '#theme' => 'contrib_jquery_ui_controlgroup',
      '#title' => 'jquery_ui_controlgroup/controlgroup',
    ];

    $build['element']['#attached']['library'][] = 'deprecated_libraries/contrib.jquery_ui_controlgroup';

    return $build;
  }

  /*
   * Core jQueryUI Droppable asset library.
   *
   * @return array
   *   A renderable array.
   */
  public function getCoreJqueryUIDroppable() {
    $build['element'] = [
      '#theme' => 'core_jquery_ui_droppable',
      '#title' => 'core/jquery.ui.droppable',
    ];

    $build['element']['#attached']['library'][] = 'deprecated_libraries/core.jquery_ui_droppable';

    return $build;
  }

  /*
   * Contrib jQueryUI Droppable asset library.
   *
   * @return array
   *   A renderable array.
   */
  public function getContribJqueryUIDroppable() {
    $build['element'] = [
      '#theme' => 'contrib_jquery_ui_droppable',
      '#title' => 'jquery_ui_droppable/droppable',
    ];

    $build['element']['#attached']['library'][] = 'deprecated_libraries/contrib.jquery_ui_droppable';

    return $build;
  }

  /*
   * Core jQueryUI Progressbar asset library.
   *
   * @return array
   *   A renderable array.
   */
  public function getCoreJqueryUIProgressbar() {
    $build['element'] = [
      '#theme' => 'core_jquery_ui_progressbar',
      '#title' => 'core/jquery.ui.progressbar',
    ];

    $build['element']['#attached']['library'][] = 'deprecated_libraries/core.jquery_ui_progressbar';

    return $build;
  }

  /*
   * Contrib jQueryUI Progressbar asset library.
   *
   * @return array
   *   A renderable array.
   */
  public function getContribJqueryUIProgressbar() {
    $build['element'] = [
      '#theme' => 'contrib_jquery_ui_progressbar',
      '#title' => 'jquery_ui_progressbar/progressbar',
    ];

    $build['element']['#attached']['library'][] = 'deprecated_libraries/contrib.jquery_ui_progressbar';

    return $build;
  }

  /*
   * Core jQueryUI Selectable asset library.
   *
   * @return array
   *   A renderable array.
   */
  public function getCoreJqueryUISelectable() {
    $build['element'] = [
      '#theme' => 'core_jquery_ui_selectable',
      '#title' => 'core/jquery.ui.selectable',
    ];

    $build['element']['#attached']['library'][] = 'deprecated_libraries/core.jquery_ui_selectable';

    return $build;
  }

  /*
   * Contrib jQueryUI Selectable asset library.
   *
   * @return array
   *   A renderable array.
   */
  public function getContribJqueryUISelectable() {
    $build['element'] = [
      '#theme' => 'contrib_jquery_ui_selectable',
      '#title' => 'jquery_ui_selectable/selectable',
    ];

    $build['element']['#attached']['library'][] = 'deprecated_libraries/contrib.jquery_ui_selectable';

    return $build;
  }

  /*
   * Core jQueryUI Selectmenu asset library.
   *
   * @return array
   *   A renderable array.
   */
  public function getCoreJqueryUISelectmenu() {
    $build['element'] = [
      '#theme' => 'core_jquery_ui_selectmenu',
      '#title' => 'core/jquery.ui.selectmenu',
    ];

    $build['element']['#attached']['library'][] = 'deprecated_libraries/core.jquery_ui_selectmenu';

    return $build;
  }

  /*
   * Contrib jQueryUI Selectmenu asset library.
   *
   * @return array
   *   A renderable array.
   */
  public function getContribJqueryUISelectmenu() {
    $build['element'] = [
      '#theme' => 'contrib_jquery_ui_selectmenu',
      '#title' => 'jquery_ui_selectmenu/selectmenu',
    ];

    $build['element']['#attached']['library'][] = 'deprecated_libraries/contrib.jquery_ui_selectmenu';

    return $build;
  }

  /*
   * Core jQueryUI Slider asset library.
   *
   * @return array
   *   A renderable array.
   */
  public function getCoreJqueryUISlider() {
    $build['element'] = [
      '#theme' => 'core_jquery_ui_slider',
      '#title' => 'core/jquery.ui.slider',
    ];

    $build['element']['#attached']['library'][] = 'deprecated_libraries/core.jquery_ui_slider';

    return $build;
  }

  /*
   * Contrib jQueryUI Slider asset library.
   *
   * @return array
   *   A renderable array.
   */
  public function getContribJqueryUISlider() {
    $build['element'] = [
      '#theme' => 'contrib_jquery_ui_slider',
      '#title' => 'jquery_ui_slider/slider',
    ];

    $build['element']['#attached']['library'][] = 'deprecated_libraries/contrib.jquery_ui_slider';

    return $build;
  }

}
