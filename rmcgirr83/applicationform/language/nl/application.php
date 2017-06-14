<?php
/**
*
* application [English]
*
* @package language
* @copyright (c) 2016 Rich McGirr (RMcGirr83)
* Nederlandse vertaling @ Solidjeuh <http://www.froddelpower.be>
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
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

$lang = array_merge($lang, array(
	'APPLICATION_SUBJECT'			=> 'Sollicitatie formulier %s',
	'APPLICATION_MESSAGE'			=> 'Gebruiker [b]%1$s[/b], heeft een sollicitatie gedaan via het sollicitatie formulier met de volgende informatie.' . "\n" . '[b]Echte naam[/b]: %2$s' . "\n" . '[b]IP:[/b] %3$s'. "\n" . '[b]Email:[/b] %4$s'. "\n" . '[b]Solliciteert voor[/b]: %5$s' . "\n" . '[b]Reden:[/b] %6$s',
	'APPLICATION_SEND'				=> 'Je sollicitatie is succesvol verzonden naar de beheerder. Je mag een antwoord verwachten binnen de 7 dagen.',
	'APPLICATION_PAGETITLE'			=> 'Sollicitatie formulier',
	'APPLICATION_WELCOME_MESSAGE'	=> 'Welkom op het sollicitatie formulier. We hebben posities openstaan waarvoor jij misschien geschikt bent. Gelieve het onderstaande formulier in te vullen voor de door jou gekozen positie. We wensen je veel geluk!<br><br><strong><em>Items gemarkeerd met een sterretje moeten ingevuld worden!</em></strong>',
	'APPLICATION_REALNAME'			=> 'Echte naam',
	'APPLICATION_EMAIL'				=> 'E-mail adres',
	'APPLICATION_POSITION'			=> 'Welke positie zou je graag willen',
	'APPLICATION_WHY'				=> 'Waarom zouden we jou kiezen voor deze positie?',
	'APP_NOT_COMPLETELY_FILLED'		=> 'Je moet alle velden invullen voor deze sollicitatie.',
	'APP_COMPLETE_NAME_WHY'			=> 'Je moet een naam opgeven en waarom we voor jou moeten kiezen.',
	'ADD_ATTACHMENT_EXPLAIN'		=> 'Voeg een bijlage toe om onze beslissing mogelijk te vergemakkelijken voor jou sollicitatie.',
	'ADD_ATTACHMENT_REQ'			=> '<strong>Je moet een bijlage toevoegen om in aanmerking te komen voor deze sollicitatie</strong>.',
	'APPLICATION_REQUIRES_ATTACHMENT'	=> 'Gelieve een bijlage toe toe voegen bij de positie waarvoor je solliciteert.',
));
