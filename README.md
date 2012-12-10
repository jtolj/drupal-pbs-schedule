drupal-pbs-schedule
===================

A Drupal 7 module for the PBS Schedule API with sample implementation.
Documentation for the API can be found at http://docs.pbs.org/confluence/display/tvsapi/TV+Schedules+Version+2

###Dependencies:

* Ctools (used for modal display of program information)

###Configuration:

Set API Key, Callsign at /admin/config/system/pbs_schedule. Once you click save, you will be able to select channels that should be displayed in the sample implementation.

###Usage:

    pbs_schedule_request($api_key, $callsign, $endpoint, $args, $cache_expire)
    
* $api_key => Your PBS Schedule API Key (http://open.pbs.org/tools/pbs-api-key-request/)
* $callsign => Your station callsign. For example: WCVE
* $endpoint => The API endpoint for this request. For example: today
* $args => An optional array of arguments for this endpoint. These will be exploded and added to the request URL. For example array('program', 'onetimeonly_2455') using the 'upcoming' endpoint would become ../upcoming/program/onetimeonly_2455/
* $cache_expire => The length of time in seconds the response to this request should be cached locally, or 0 if you would not like to cache the response. The default is 10 minutes.

###Returns:

The JSON Response data from the API converted into a PHP object. Sample responses are shown at http://docs.pbs.org/confluence/display/tvsapi/TV+Schedule+Methods

###Example Implementation:

Provides a block of programs "On Tonight" with modal (via Ctools) display of details.