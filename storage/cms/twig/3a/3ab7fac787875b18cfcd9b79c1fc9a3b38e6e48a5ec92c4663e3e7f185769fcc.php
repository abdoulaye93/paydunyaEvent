<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\wamp64\www\install-master/themes/demo/pages/calendar.htm */
class __TwigTemplate_f64ef10aa8410ff32e70a8b11d848bf19981395834dc7790374b1067baeabe37 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>Google Calendar API Quickstart</title>
    <meta charset=\"utf-8\" />
  </head>
  <body>
    <p>Google Calendar API Quickstart</p>

    <!--Add buttons to initiate auth sequence and sign out-->
    <button id=\"authorize_button\" style=\"display: none;\">Authorize</button>
    <button id=\"signout_button\" style=\"display: none;\">Sign Out</button>

    <pre id=\"content\" style=\"white-space: pre-wrap;\"></pre>

    <script type=\"text/javascript\">
      // Client ID and API key from the Developer Console
      var CLIENT_ID = '27600548519-e1du7hi2qjqbji3e7q6vmcmdg2jeq89q.apps.googleusercontent.com';
      var API_KEY = 'AIzaSyDHKZ2EdOBCGjnqrxVpGFfKNVXtpZ4yHEg';

      // Array of API discovery doc URLs for APIs used by the quickstart
      var DISCOVERY_DOCS = [\"https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest\"];

      // Authorization scopes required by the API; multiple scopes can be
      // included, separated by spaces.
      var SCOPES = \"https://www.googleapis.com/auth/calendar.readonly\";

      var authorizeButton = document.getElementById('authorize_button');
      var signoutButton = document.getElementById('signout_button');

      /**
       *  On load, called to load the auth2 library and API client library.
       */
      function handleClientLoad() {
        gapi.load('client:auth2', initClient);
      }

      /**
       *  Initializes the API client library and sets up sign-in state
       *  listeners.
       */
      function initClient() {
        gapi.client.init({
          apiKey: API_KEY,
          clientId: CLIENT_ID,
          discoveryDocs: DISCOVERY_DOCS,
          scope: SCOPES
        }).then(function () {
          // Listen for sign-in state changes.
          gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);

          // Handle the initial sign-in state.
          updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
          authorizeButton.onclick = handleAuthClick;
          signoutButton.onclick = handleSignoutClick;
        }, function(error) {
          appendPre(JSON.stringify(error, null, 2));
        });
      }
/**
 * Creates an event in the user's default calendar.
 */
function createEvent() {
  var calendarId = 'primary';
  var start = getRelativeDate(1, 12);
  var end = getRelativeDate(1, 13);
  var event = {
    summary: 'Lunch Meeting',
    location: 'The Deli',
    description: 'To discuss our plans for the presentation next week.',
    start: {
      dateTime: start.toISOString()
    },
    end: {
      dateTime: end.toISOString()
    },
    attendees: [
      {email: 'abdoulayekeita438@gmail.com'},
      {email: 'bob@example.com'}
    ],
    // Red background. Use Calendar.Colors.get() for the full list.
    colorId: 11
  };
  event = Calendar.Events.insert(event, calendarId);
  Logger.log('Event ID: ' + event.id);
}

/**
 * Helper function to get a new Date object relative to the current date.
 * @param {number} daysOffset The number of days in the future for the new date.
 * @param {number} hour The hour of the day for the new date, in the time zone
 *     of the script.
 * @return {Date} The new date.
 */
function getRelativeDate(daysOffset, hour) {
  var date = new Date();
  date.setDate(date.getDate() + daysOffset);
  date.setHours(hour);
  date.setMinutes(0);
  date.setSeconds(0);
  date.setMilliseconds(0);
  return date;
}
      /**
       *  Called when the signed in status changes, to update the UI
       *  appropriately. After a sign-in, the API is called.
       */
      function updateSigninStatus(isSignedIn) {
        if (isSignedIn) {
          authorizeButton.style.display = 'none';
          signoutButton.style.display = 'block';
          listUpcomingEvents();
        } else {
          authorizeButton.style.display = 'block';
          signoutButton.style.display = 'none';
        }
      }

      /**
       *  Sign in the user upon button click.
       */
      function handleAuthClick(event) {
        gapi.auth2.getAuthInstance().signIn();
      }

      /**
       *  Sign out the user upon button click.
       */
      function handleSignoutClick(event) {
        gapi.auth2.getAuthInstance().signOut();
      }

      /**
       * Append a pre element to the body containing the given message
       * as its text node. Used to display the results of the API call.
       *
       * @param {string} message Text to be placed in pre element.
       */
      function appendPre(message) {
        var pre = document.getElementById('content');
        var textContent = document.createTextNode(message + '\\n');
        pre.appendChild(textContent);
      }

      /**
       * Print the summary and start datetime/date of the next ten events in
       * the authorized user's calendar. If no events are found an
       * appropriate message is printed.
       */
      function listUpcomingEvents() {
    var event = {
    summary: 'Lunch Meeting',
    location: 'The Deli',
    description: 'To discuss our plans for the presentation next week.',
    start: {
      dateTime: start.toISOString()
    },
    end: {
      dateTime: end.toISOString()
    },
    attendees: [
      {email: 'abdoulayekeita438@gmail.com'},
      {email: 'bob@example.com'}
    ],
    // Red background. Use Calendar.Colors.get() for the full list.
    colorId: 11
  };
var request = gapi.client.calendar.events.insert({
  'calendarId': 'primary',
  'resource': event
});

request.execute(function(event) {
  appendPre('Event created: ' + event.htmlLink);
});

      }

    </script>

    <script async defer src=\"https://apis.google.com/js/api.js\"
      onload=\"this.onload=function(){};handleClientLoad()\"
      onreadystatechange=\"if (this.readyState === 'complete') this.onload()\">
    </script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master/themes/demo/pages/calendar.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
    <title>Google Calendar API Quickstart</title>
    <meta charset=\"utf-8\" />
  </head>
  <body>
    <p>Google Calendar API Quickstart</p>

    <!--Add buttons to initiate auth sequence and sign out-->
    <button id=\"authorize_button\" style=\"display: none;\">Authorize</button>
    <button id=\"signout_button\" style=\"display: none;\">Sign Out</button>

    <pre id=\"content\" style=\"white-space: pre-wrap;\"></pre>

    <script type=\"text/javascript\">
      // Client ID and API key from the Developer Console
      var CLIENT_ID = '27600548519-e1du7hi2qjqbji3e7q6vmcmdg2jeq89q.apps.googleusercontent.com';
      var API_KEY = 'AIzaSyDHKZ2EdOBCGjnqrxVpGFfKNVXtpZ4yHEg';

      // Array of API discovery doc URLs for APIs used by the quickstart
      var DISCOVERY_DOCS = [\"https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest\"];

      // Authorization scopes required by the API; multiple scopes can be
      // included, separated by spaces.
      var SCOPES = \"https://www.googleapis.com/auth/calendar.readonly\";

      var authorizeButton = document.getElementById('authorize_button');
      var signoutButton = document.getElementById('signout_button');

      /**
       *  On load, called to load the auth2 library and API client library.
       */
      function handleClientLoad() {
        gapi.load('client:auth2', initClient);
      }

      /**
       *  Initializes the API client library and sets up sign-in state
       *  listeners.
       */
      function initClient() {
        gapi.client.init({
          apiKey: API_KEY,
          clientId: CLIENT_ID,
          discoveryDocs: DISCOVERY_DOCS,
          scope: SCOPES
        }).then(function () {
          // Listen for sign-in state changes.
          gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);

          // Handle the initial sign-in state.
          updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
          authorizeButton.onclick = handleAuthClick;
          signoutButton.onclick = handleSignoutClick;
        }, function(error) {
          appendPre(JSON.stringify(error, null, 2));
        });
      }
/**
 * Creates an event in the user's default calendar.
 */
function createEvent() {
  var calendarId = 'primary';
  var start = getRelativeDate(1, 12);
  var end = getRelativeDate(1, 13);
  var event = {
    summary: 'Lunch Meeting',
    location: 'The Deli',
    description: 'To discuss our plans for the presentation next week.',
    start: {
      dateTime: start.toISOString()
    },
    end: {
      dateTime: end.toISOString()
    },
    attendees: [
      {email: 'abdoulayekeita438@gmail.com'},
      {email: 'bob@example.com'}
    ],
    // Red background. Use Calendar.Colors.get() for the full list.
    colorId: 11
  };
  event = Calendar.Events.insert(event, calendarId);
  Logger.log('Event ID: ' + event.id);
}

/**
 * Helper function to get a new Date object relative to the current date.
 * @param {number} daysOffset The number of days in the future for the new date.
 * @param {number} hour The hour of the day for the new date, in the time zone
 *     of the script.
 * @return {Date} The new date.
 */
function getRelativeDate(daysOffset, hour) {
  var date = new Date();
  date.setDate(date.getDate() + daysOffset);
  date.setHours(hour);
  date.setMinutes(0);
  date.setSeconds(0);
  date.setMilliseconds(0);
  return date;
}
      /**
       *  Called when the signed in status changes, to update the UI
       *  appropriately. After a sign-in, the API is called.
       */
      function updateSigninStatus(isSignedIn) {
        if (isSignedIn) {
          authorizeButton.style.display = 'none';
          signoutButton.style.display = 'block';
          listUpcomingEvents();
        } else {
          authorizeButton.style.display = 'block';
          signoutButton.style.display = 'none';
        }
      }

      /**
       *  Sign in the user upon button click.
       */
      function handleAuthClick(event) {
        gapi.auth2.getAuthInstance().signIn();
      }

      /**
       *  Sign out the user upon button click.
       */
      function handleSignoutClick(event) {
        gapi.auth2.getAuthInstance().signOut();
      }

      /**
       * Append a pre element to the body containing the given message
       * as its text node. Used to display the results of the API call.
       *
       * @param {string} message Text to be placed in pre element.
       */
      function appendPre(message) {
        var pre = document.getElementById('content');
        var textContent = document.createTextNode(message + '\\n');
        pre.appendChild(textContent);
      }

      /**
       * Print the summary and start datetime/date of the next ten events in
       * the authorized user's calendar. If no events are found an
       * appropriate message is printed.
       */
      function listUpcomingEvents() {
    var event = {
    summary: 'Lunch Meeting',
    location: 'The Deli',
    description: 'To discuss our plans for the presentation next week.',
    start: {
      dateTime: start.toISOString()
    },
    end: {
      dateTime: end.toISOString()
    },
    attendees: [
      {email: 'abdoulayekeita438@gmail.com'},
      {email: 'bob@example.com'}
    ],
    // Red background. Use Calendar.Colors.get() for the full list.
    colorId: 11
  };
var request = gapi.client.calendar.events.insert({
  'calendarId': 'primary',
  'resource': event
});

request.execute(function(event) {
  appendPre('Event created: ' + event.htmlLink);
});

      }

    </script>

    <script async defer src=\"https://apis.google.com/js/api.js\"
      onload=\"this.onload=function(){};handleClientLoad()\"
      onreadystatechange=\"if (this.readyState === 'complete') this.onload()\">
    </script>
  </body>
</html>", "C:\\wamp64\\www\\install-master/themes/demo/pages/calendar.htm", "");
    }
}
