<?php
/**
 * Either some parts of ATK14 system (i.e. mailing subsystem) or some third party libs
 * could be configured by constants or variables.
 * 
 * This file is the right place to do such configuration.
 *
 * You can inspect all ATK14 application`s constants in atk14/default_settings.php
 * 
 * All the application constants should be inspected by calling:
 *	$ ./scripts/dump_settings
 * 
 * A certain constant should be inspected this way:
 *	$ ./scripts/dump_settings DEFAULT_EMAIL
 */

definedef("DEFAULT_EMAIL","your@email.com");
definedef("ATK14_ADMIN_EMAIL",DEFAULT_EMAIL); // the address for sending error reports and so on...

definedef("ATK14_APPLICATION_NAME","ATK14 Skelet");
definedef("ATK14_APPLICATION_DESCRIPTION","Yet another application running on ATK14 Framework");

definedef("ATK14_HTTP_HOST",PRODUCTION ? "skelet.atk14.net" : "atk14skelet.localhost");

date_default_timezone_set('Europe/Prague');

definedef("USING_BOOTSTRAP4",true);
definedef("USING_FONTAWESOME",true);

definedef("REDIRECT_TO_SSL_AUTOMATICALLY",PRODUCTION);

// Automatic redirection to the ATK14_HTTP_HOST
definedef("REDIRECT_TO_CORRECT_HOSTNAME_AUTOMATICALLY",false);

// If you don't want to let users to register freely (e.g. your app is an closed alpha),
// set the constant INVITATION_CODE_FOR_USER_REGISTRATION.
// See app/forms/users/create_new_form.php for more info
// define("INVITATION_CODE_FOR_USER_REGISTRATION","some great secret");

definedef("PUPIQ_API_KEY","101.DemoApiKeyForAccountWithLimitedFunctions");

definedef("ARTICLE_BODY_MAX_WIDTH",825);

// If these two constant are properly defined (see https://github.com/atk14/RecaptchaField#installation),
// the re-captcha field is being automatically added into the contact form.
// define("RECAPTCHA_SITE_KEY","");
// define("RECAPTCHA_SECRET_KEY","");

if(DEVELOPMENT || TEST){
	// a place for development and testing environment settings

	ini_set("display_errors","1");
}

if(PRODUCTION){
	// a place for production environment settings

	if(php_sapi_name()!="cli"){
		ini_set("display_errors","0");
	}
}
