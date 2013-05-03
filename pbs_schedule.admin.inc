<?php

function pbs_schedule_admin_site_settings() {
  $form = array();
  
  $form['pbs_api_settings'] = array(
    '#title' => 'PBS API Settings',
    '#type' => 'fieldset'
  );
  
  $form['pbs_api_settings']['pbs_schedule_api_key'] = array(
    '#title' => 'PBS API Key',
    '#type' => 'textfield',
    '#required' => TRUE,
    '#description' => 'API Key for the PBS Schedule API.',
    '#default_value' => variable_get('pbs_schedule_api_key'),
  );
  $form['pbs_api_settings']['pbs_schedule_default_callsign'] = array(
    '#title' => 'Default Callsign',
    '#type' => 'textfield',
    '#required' => TRUE,
    '#description' => 'Default callsign to use for the Schedule API. (Use commas to separate multiple callsigns - API responses will be combined)',
    '#default_value' => variable_get('pbs_schedule_default_callsign'),
  );
  
  $options = variable_get('pbs_schedule_channels_available', array());
  $description = empty($options) ? 'No channels found. Please add or update your API credentials and save this form.' : 'Select channels to display.';
  $form['pbs_api_settings']['pbs_schedule_active_channels'] = array(
    '#title' => 'Active Channels',
    '#type' => 'checkboxes',
    '#options' => $options,
    '#description' => $description,
    '#default_value' => variable_get('pbs_schedule_active_channels'),
  );

  $form = system_settings_form($form);
  return $form;
}

/**
 * Implements hook_form_validate
 */
function pbs_schedule_admin_site_settings_validate($form, &$form_state) {
  $values = $form_state['values'];
  $api_key = $values['pbs_schedule_api_key'];
  $callsign = $values['pbs_schedule_default_callsign'];
  $response = pbs_schedule_request($api_key, $callsign, 'channels',array(), 0);
    
  if (!$response) {
    form_set_error('pbs_api_settings', 'Failed to connect to PBS Schedule API with those credentials.');
  }
  else {
    //Attempt to get a list of active shortnames. This is terribly inefficient.
    $channels = array();
    foreach ($response->headends as $headend) {
      foreach ($headend->feeds as $feed) {
        $channels[$feed->short_name] = $feed->full_name;
      }
    }
    if (!empty($channels)) {
      variable_set('pbs_schedule_channels_available', $channels);
    }
  }
}
