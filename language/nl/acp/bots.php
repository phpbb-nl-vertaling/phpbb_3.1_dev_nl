<?php
/**
*
* acp_bots [Dutch]
*
* @package language
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Beheer bots',
	'BOTS_EXPLAIN'		=> '“Bots”, “spiders” of “crawlers” zijn geautomatiseerde programma’s die meestal gebruikt worden door zoekmachines om hun database bij te werken. Sinds ze bijna nooit goed gebruik maken van sessies, kunnen ze bezoekersaantallen misvormen, serverlaadtijd verhogen en soms falen om sites goed te indexeren. Hier kan je een speciaal type gebruiker definiëren om deze problemen te overkomen.',
	'BOT_ACTIVATE'		=> 'Activeer',
	'BOT_ACTIVE'		=> 'Bot actief',
	'BOT_ADD'			=> 'Bot toevoegen',
	'BOT_ADDED'			=> 'Nieuwe bot is succesvol toegevoegd.',
	'BOT_AGENT'			=> 'Agent overeenkomst',
	'BOT_AGENT_EXPLAIN'	=> 'Een string die overeenkomt met de bots browser-agent, gedeeltelijke overeenkomsten zijn toegestaan.',
	'BOT_DEACTIVATE'	=> 'Deactiveer',
	'BOT_DELETED'		=> 'Bot is succesvol verwijderd.',
	'BOT_EDIT'			=> 'Bots wijzigen',
	'BOT_EDIT_EXPLAIN'	=> 'Hier kan je bots toevoegen of wijzigen. Je kan een agent-sting en/of één of meerdere IP-adressen (of een bereik van adressen) opgeven die kunnen overeenkomen. Wees voorzichtig tijdens het opgeven van overeenkomstige agent-strings of adressen. Je kan ook een stijl en taal opgeven die de bot zal gebruiken tijdens het bezoeken van het forum. Dit staat je toe om bandbreedte te reduceren door het instellen van een simpele stijl voor bots. Vergeet niet om de juiste permissies in te stellen voor de speciale Bot-gebruikersgroep.',
	'BOT_LANG'			=> 'Bot taal',
	'BOT_LANG_EXPLAIN'	=> 'De taal die de bot ziet tijdens zijn bezoek.',
	'BOT_LAST_VISIT'	=> 'Laatste bezoek',
	'BOT_IP'			=> 'Bot IP-adres',
	'BOT_IP_EXPLAIN'	=> 'Gedeeltelijke overeenkomsten zijn toegestaan, scheid adressen met een komma.',
	'BOT_NAME'			=> 'Bot naam',
	'BOT_NAME_EXPLAIN'	=> 'Dit wordt alleen voor je eigen informatie gebruikt.',
	'BOT_NAME_TAKEN'	=> 'De naam is al in gebruik op je forum en kan niet gebruikt worden voor de bot.',
	'BOT_NEVER'			=> 'Nooit',
	'BOT_STYLE'			=> 'Bot stijl',
	'BOT_STYLE_EXPLAIN'	=> 'De stijl die gebruikt wordt op het forum door de bot.',
	'BOT_UPDATED'		=> 'Bestaande bot is succesvol bijgewerkt.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'De bot-agent die je hebt opgegeven is gelijk aan degene die je momenteel gebruikt. Pas de agent voor deze bot aan.',
	'ERR_BOT_NO_IP'				=> 'De IP-adressen die je hebt opgegeven is ongeldig of de hostnaam kan niet opgelost worden.',
	'ERR_BOT_NO_MATCHES'		=> 'Je moet tenminste één agent of IP opgeven voor deze bot overeenkomst.',

	'NO_BOT'		=> 'Geen bot gevonden met de opgegeven ID.',
	'NO_BOT_GROUP'	=> 'Kan de speciale botgroep niet vinden.',
));
