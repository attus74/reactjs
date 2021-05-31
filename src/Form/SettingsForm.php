<?php

namespace Drupal\reactjs\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Settings Form
 * 
 * @author Attila Németh
 * 15.01.2019
 */
class SettingsForm extends ConfigFormBase {
  
  /**
   * {@iheritdoc}
   */
  public function getFormId() {
    return 'reactjs_settings_form';
  }
  
  /**
   * {@iheritdoc}
   */
  public function getEditableConfigNames() {
    return ['reactjs.settings'];
  }
  
  /**
   * {@iheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('reactjs.settings');
    $form['dev'] = [
      '#type' => 'checkbox',
      '#title' => t('Developer Mode'),
      '#default_value' => $config->get('dev'),
    ];
    return parent::buildForm($form, $form_state);
  }
  
  /**
   * {@iheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->config('reactjs.settings');
    $config->set('dev', $form_state->getValue('dev'));
    $config->save();
    \Drupal::service('library.discovery')->clearCachedDefinitions();
    return parent::submitForm($form, $form_state);
  }
  
}
