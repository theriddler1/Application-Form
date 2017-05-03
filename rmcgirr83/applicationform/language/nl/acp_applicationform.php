<?php

/**
*
*
* @package - Application Form language
* @copyright 2016 Rich McGirr (RMcGirr83)
* Nederlandse vertaling @ Solidjeuh <http://www.froddelpower.be>
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Some characters you may want to copy&paste:
// ’ » “ ” …

$lang = array_merge($lang, array(
	'ACP_APPLICATIONFORM_SETTINGS'		=> 'Sollicitatie formulier instellingen',
	'APPLICATIONFORM_FORUM'				=> 'Forum',
	'APPLICATIONFORM_FORUM_EXPLAIN'		=> 'Selecteer een forum naar waar de sollicitaties moeten verzonden worden.',
	'APPLICATIONFORM_POSITIONS'			=> 'Sollicitatie posities',
	'APPLICATIONFORM_POSITIONS_EXPLAIN'	=> 'Voeg de posities waarvoor gebruikers kunnen solliciteren toe. Elk op een nieuwe lijn.',
	'APPFORM_SETTINGS_SUCCESS'			=> 'Sollicitatie formulier instellingen werden opgeslagen.',
	'APPFORM_MUST_HAVE_POSITIONS'		=> 'Je moet op zijn minst 1 positie hebben.',
	'APPFORM_GUEST'						=> 'Gasten toestaan',
	'APPFORM_GUEST_EXPLAIN'				=> 'Indien ingesteld op ja zullen gasten die je forum bezoeken toegang hebben tot het sollicitatieformulier.',
	'APPLICATIONFORM_NRU'				=> 'Nieuwe gebruikersgroep toestaan',
	'APPLICATIONFORM_NRU_EXPLAIN'		=> 'Indien ja zal de nieuw geregistreerde gebruikers groep toegang hebben tot het sollicitatie formulier.',
	'APPLICATIONFORM_ALLOW_ATTACHMENT'	=> 'Bijlagen toestaan',
	'APPLICATIONFORM_ALLOW_ATTACHMENT_EXPLAIN' => 'Indien ja zullen bestanden van deze formaten toegestaan worden: doc, pdf en tekst.',
	'APPLICATIONFORM_ATTACHMENT_REQ'	=> 'Bijlage is verplicht',
	'APPLICATIONFORM_ATTACHMENT_REQ_EXPLAIN' => 'Indien ja zal het formulier een bijlage nodig hebben voor de sollicitatie waarvoor aanvraag wordt gedaan.',
));
