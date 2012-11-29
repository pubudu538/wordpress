<?php
/**
 * SAML 2.0 remote IdP metadata for simpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://rnd.feide.no/content/idp-remote-metadata-reference
 */

/*
 * Guest IdP. allows users to sign up and register. Great for testing!
 */
$metadata['https://localhost:9443/samlsso'] = array(
	'name' => array(
		'en' => 'WSO2 IS - guest users',
	),
	'description'          => '',

    'SingleSignOnService'  => 'https://idp.slive.com:8243/samlsso',
    'SingleLogoutService'  => 'https://idp.slive.com:8243/samlsso',
    'certFingerprint'      => '6bf8e136eb36d4a56ea05c7ae4b9a45b63bf975d',
    /*'certFingerprint'      => '3B:B1:35:E0:B1:35:BB:83:26:F5:00:F6:62:8D:67:B1:DC:98:82:BA'*/
    /*'certificate'        =>'server.pem'*/
);


