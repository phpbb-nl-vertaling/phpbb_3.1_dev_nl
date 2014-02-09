<?php
/**
*
* acp_board [Dutch]
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Hier kan je de basis instellingen van je forum bepalen, geef het een passende naam en beschrijving en pas samen met andere instellingen de standaard waardes in voor bijvoorbeeld tijdzone en taal.',
	'BOARD_INDEX_TEXT'				=> 'Forum indextekst',
	'BOARD_INDEX_TEXT_EXPLAIN'		=> 'Deze tekst wordt weergegeven als forumindex in de broodkruimels. Indien niet gespecificeerd, dan zal dit standaard “Forumindex” zijn.',
	'CUSTOM_DATEFORMAT'				=> 'Eigen…',
	'DEFAULT_DATE_FORMAT'			=> 'Datumformaat',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'De datumformaat is hetzelfde als de PHP <code>date</code> functie.',
	'DEFAULT_LANGUAGE'				=> 'Standaard taal',
	'DEFAULT_STYLE'					=> 'Standaard stijl',
	'DISABLE_BOARD'					=> 'Forum uitschakelen',
	'DISABLE_BOARD_EXPLAIN'			=> 'Dit zal het forum niet beschikbaar maken voor gebruikers. Je kan ook een kort (255 karakters) bericht invoeren dat wordt weergegeven indien gewenst.',
	'DISPLAY_LAST_SUBJECT'			=> 'Geef onderwerp van laatst toegevoegde bericht weer op forumlijst',
	'DISPLAY_LAST_SUBJECT_EXPLAIN'	=> 'Het onderwerp van het laatst toegevoegde bericht zal weergegeven worden op de forumlijst met een koppeling naar het bericht. Onderwerpen van forums die met een wachtwoord zijn beveiligd en forums waarvan de gebruiker geen leesrechten heeft, zullen niet weergegeven worden.',
	'OVERRIDE_STYLE'				=> 'Overschrijf gebruikersstijl',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Vervangt de gebruikersstijl met de standaardstijl.',
	'SITE_DESC'						=> 'Site beschrijving',
	'SITE_HOME_TEXT'				=> 'Hoofd website tekst',
	'SITE_HOME_TEXT_EXPLAIN'		=> 'Deze tekst zal weergegeven worden als een link naar je homepage van je website in de broodkruimels. Indien niet gespecificeerd dan zal dit standaard “Thuis” zijn.',
	'SITE_HOME_URL'					=> 'Hoofd website URL',
	'SITE_HOME_URL_EXPLAIN'			=> 'Indien gespecificeerd, een koppeling naar deze URL zal voor je broodkruimels komen en het logo zal naar deze URL koppelen in plaats van het forum. Een absolute URL is vereist, bijv. <samp>http://www.phpbbservice.nl</samp>.',
	'SITE_NAME'						=> 'Sitenaam',
	'SYSTEM_TIMEZONE'				=> 'Gast tijdzone',
	'SYSTEM_TIMEZONE_EXPLAIN'			=> 'Tijdzone die gebruikt wordt voor het weergeven van tijden aan gebruikers die niet aangemeld zijn (gasten, bots). Aangemelde gebruikers stellen hun tijdzone in tijdens het registratieproces en kunnen dit veranderen in hun gebruikerspaneel.',
	'WARNINGS_EXPIRE'				=> 'Waarschuwingsduur',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Aantal dagen dat zal verstrijken voordat een waarschuwing automatisch zal verlopen van een gebruikers record. Door deze waarde in te stellen op 0, de waarschuwingen blijven dan permanent.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Hier kan je verschillende forumfuncties in of uitschakelen.',

	'ALLOW_ATTACHMENTS'			=> 'Bijlagen inschakelen',
	'ALLOW_BIRTHDAYS'			=> 'Verjaardagen inschakelen',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Sta toe om verjaardagen in te voeren en de leeftijd weer te geven in profielen. Let op dat de verjaardagslijst op de indexpagina gecontroleerd wordt door een aparte laadinstelling.',
	'ALLOW_BOOKMARKS'			=> 'Onderwerpen bladwijzeren inschakelen',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Gebruiker is in staat om persoonlijke bladwijzers op te slaan.',
	'ALLOW_BBCODE'				=> 'BBCode inschakelen',
	'ALLOW_FORUM_NOTIFY'		=> 'Abonneren op forums inschakelen',
	'ALLOW_NAME_CHANGE'			=> 'Veranderen gebruikersnaam inschakelen',
	'ALLOW_NO_CENSORS'			=> 'Uitschakelen woordcensuur inschakelen',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Gebruikers kunnen ervoor kiezen dat het automatisch censureren van berichten en privé berichten wordt uitgeschakeld.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Bijlagen in privé berichten inschakelen',
	'ALLOW_PM_REPORT'			=> 'Melden van privé berichten inschakelen',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'Als deze instelling is ingeschakeld, dan hebben gebruikers de optie om een privé bericht die zij hebben ontvangen te melden of om door te sturen naar de moderator. Deze privé berichten zullen dan zichtbaar zijn in de moderatorpaneel.',
	'ALLOW_QUICK_REPLY'			=> 'Snelle reactie inschakelen',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'Deze optie zorgt er voor dar de snelle reactie wordt uitgeschakeld in het hele forum. Wanneer ingeschakeld, zullen forum specifieke instellingen gebruikt worden om te bepalen of de snelle reactie wordt weergegeven bij individuele forums.',
	'ALLOW_QUICK_REPLY_BUTTON'	=> 'Verstuur en schakel snelle reacties in voor alle fora',
	'ALLOW_SIG'					=> 'Onderschriften inschakelen',
	'ALLOW_SIG_BBCODE'			=> 'BBCode in onderschriften inschakelen',
	'ALLOW_SIG_FLASH'			=> 'Gebruik van <code>[FLASH]</code> BBCode tag in onderschriften inschakelen',
	'ALLOW_SIG_IMG'				=> 'Gebruik van <code>[IMG]</code> BBCode tag in onderschriften inschakelen',
	'ALLOW_SIG_LINKS'			=> 'Gebruik van koppelingen in onderschriften inschakelen',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Indien uitgeschakeld, de <code>[URL]</code> BBCode tag en automatische / magische URLS zijn uitgeschakeld.',
	'ALLOW_SIG_SMILIES'			=> 'Gebruik van smilies in onderschriften inschakelen',
	'ALLOW_SMILIES'				=> 'Smilies inschakelen',
	'ALLOW_TOPIC_NOTIFY'		=> 'Abonneren op onderwerpen inschakelen',
	'BOARD_PM'					=> 'Privé berichten',
	'BOARD_PM_EXPLAIN'			=> 'Privé berichten voor alle gebruikers inschakelen.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Avatars zijn over het algemeen kleine unieke afbeeldignen waarmee een gebruiker zichzelf mee kan associëren. Afhankelijk van de stijl staan ze direct onder de gebruikersnaam wanneer je onderwerpen bekijkt. Hier kan je bepalen hoe gebruikers hun avatar kunnen kiezen. Let op dat om avatars te kunnen uploaden, dat je dan een map hebt aangemaakt die je hieronder benoemt en er voor zorgt dat deze beschreven kan worden door de webserver. Let er ook op de dat bestandsgrootte limieten alleen ingesteld zullen zijn voor geüploade avatars, ze worden dus niet toegepast op externe afbeeldingen van andere servers.',

	'ALLOW_AVATARS'					=> 'Avatars inschakelen',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Algemeen gebruik van avatars inschakelen;<br />Als je avatars in het algemeen uitschakeld of avatars van een bepaalde type, dat de uitgeschakelde avatars dan niet meer weergegeven worden op het forum, maar gebruikers kunnen nog steeds hun eigen avatar downloaden in het gebruikerspaneel.',
	'ALLOW_GRAVATAR'				=> 'Gravatar avatars inschakelen',
	'ALLOW_LOCAL'					=> 'Galerij avatars inschakelen',
	'ALLOW_REMOTE'					=> 'Externe avatars inschakelen',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Avatars gekoppeld van een andere website.',
	'ALLOW_REMOTE_UPLOAD'			=> 'Extern geüploade avatars inschakelen',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Uploaden van avatars van andere websites inschakelen.',
	'ALLOW_UPLOAD'					=> 'Uploaden avatar inschakelen',
	'AVATAR_GALLERY_PATH'			=> 'Avatar galerij pad',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Pad in je phpBB hoofdmap voor vooraf geladen afbeeldingen, bij. <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'			=> 'Avatar opslag pad',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Pad in je phpBB hoofdmap, bijv. <samp>images/avatars/upload</samp>.',
	'MAX_AVATAR_SIZE'				=> 'Maximum avatar dimensies',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Breedte x Hoogte in pixels.',
	'MAX_FILESIZE'					=> 'Maximum avatar bestandsgrootte',
	'MAX_FILESIZE_EXPLAIN'			=> 'Voor geüploade avatar bestanden. Als deze waarde 0 is, dan wordt de geüploade bestandsgrootte alleen gelimiteerd door je PHP configuratie.',
	'MIN_AVATAR_SIZE'				=> 'Minimum avatar dimensies',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Breedte x Hoogte in pixels.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Hier kan je alle standaard instellingen voor privé berichten instellen.',

	'ALLOW_BBCODE_PM'			=> 'BBCode in privé berichten inschakelen',
	'ALLOW_FLASH_PM'			=> 'Gebruik van <code>[FLASH]</code> BBCode tag inschakelen',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Let op dat het gebruik van flash in privé berichten, indien toegestaan hier, ook afhankelijk is van de permissies.',
	'ALLOW_FORWARD_PM'			=> 'Doorsturen van privé berichten inschakelen',
	'ALLOW_IMG_PM'				=> 'Gebruik van <code>[IMG]</code> BBCode tag inschakelen',
	'ALLOW_MASS_PM'				=> 'Het sturen van privé berichten naar meerdere gebruikers en groepen inschakelen',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'Het versturen naar groepen kan aangepast worden per groep in de groepsinstellingen pagina.',
	'ALLOW_PRINT_PM'			=> 'Print weergave van privé berichten inschakelen',
	'ALLOW_QUOTE_PM'			=> 'Quotes in privé berichten inschakelen',
	'ALLOW_SIG_PM'				=> 'Onderschriften in privé berichten inschakelen',
	'ALLOW_SMILIES_PM'			=> 'Smilies in privé berichten inschakelen',
	'BOXES_LIMIT'				=> 'Maximum privé berichten per box',
	'BOXES_LIMIT_EXPLAIN'		=> 'Gebruikers kunnen niet mer dan deze hoeveelheid ontvangen in ieder privé bericht box. Stel deze waarde in op 0 om ongelimiteerd aantal berichten toe te staan.',
	'BOXES_MAX'					=> 'Maximum privé berichtmappen',
	'BOXES_MAX_EXPLAIN'			=> 'Standaard kunnen gebruikers deze hoeveelheid persoonlijke mappen maken voor privé berichten.',
	'ENABLE_PM_ICONS'			=> 'Gebruik van onderwerpiconen in privé berichten inschakelen',
	'FULL_FOLDER_ACTION'		=> 'Volle map standaard actie',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Standaard actie die toegepast wordt als een gebruikersmap vol is, er van uitgaande dat de gebruikers map actie, indien ingesteld, niet uitgevoerd kan worden. De enigste uitzondering is voor de “Verstuurde berichten” map waar de standaard actie altijd het verwijderen van oude berichten is.',
	'HOLD_NEW_MESSAGES'			=> 'Tegenhouden nieuwe berichten',
	'PM_EDIT_TIME'				=> 'Limiteer wijzigingstijd',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Limiteert de tijd dat beschikbaar is om een privé bericht te wijzigen welke nog niet afgeleverd is. Het instellen van de waarde op 0, zal dit gedrag uitschakelen.',
	'PM_MAX_RECIPIENTS'			=> 'Maximum aantal toegestane ontvangers',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'Het maximum aantal toegestane ontvangers in een privé bericht. Indien 0 is ingevoerd, een ongelimiteerd aantal is toegestaan. Deze instelling kan voor iedere groep apart aangepast worden in de groepsinstellingen pagina.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Hier kan je alle standaard instellingen voor het plaatsen van berichten instellen.',
	'ALLOW_POST_LINKS'					=> 'Koppelingen in berichten/privé berichten toestaan',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Indien niet toegestaan, de <code>[URL]</code> BBCode tag en automatisch/magische URLs zijn uitgeschakeld.',
	'ALLOW_POST_FLASH'					=> 'Gebruik van <code>[FLASH]</code> BBCode tag in berichten toestaan',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Indien niet toegestaan, de <code>[FLASH]</code> BBCode tag is uitgeschakeld in berichten. Anders kan het permissiesysteem controleren welke gebruikers gebruik kunnen maken van de <code>[FLASH]</code> BBCode tag.',

	'BUMP_INTERVAL'					=> 'Bump interval',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Aantal minuten, uren of dagen tussen het laatste bericht in een onderwerp en de mogelijkheid om het onderwerp te bumpen. Het instellen van de waarde op 0, zal het bumpen compleet uitschakelen.',
	'CHAR_LIMIT'					=> 'Maximum karakters per bericht',
	'CHAR_LIMIT_EXPLAIN'			=> 'Het aantal karakters dat is toegestaan in een bericht/privé bericht. Stel in op 0 voor ongelimiteerd aantal karakters.',
	'DELETE_TIME'					=> 'Limiteer verwijderingstijd',
	'DELETE_TIME_EXPLAIN'			=> 'Limiteert de tijd beschikbaar om een nieuw bericht te verwijderen. Het instellen van de waarde op 0, zal dit gedrag compleet uitschakelen.',
	'DISPLAY_LAST_EDITED'			=> 'Geef laatst gewijzigd tijdsinformatie weer',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Kies of de laatst gewijzigd door informatie weergegeven moet worden bij berichten.',
	'EDIT_TIME'						=> 'Limiteer wijzigingstijd',
	'EDIT_TIME_EXPLAIN'				=> 'Limiteert de tijd beschikbaar om een nieuw bericht te wijzigen. Het instellen van de waarde op 0, zal dit gedrag compleet uitschakelen.',
	'FLOOD_INTERVAL'				=> 'Vloed interval',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Aantal secondes dat een gebruiker moet wachten tussen het plaatsen van nieuwe berichten. Om gebruikers toe te staan dit te negeren, dan moet je hun eigen permissies aanpassen.',
	'HOT_THRESHOLD'					=> 'Populair onderwerp drempel',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Berichten per onderwerp vereist voor de populair onderwerp aantekening. Stel in op 0 om populaire onderwerpen uit te schakelen.',
	'MAX_POLL_OPTIONS'				=> 'Maximum aantal peilingsopties',
	'MAX_POST_FONT_SIZE'			=> 'Maximum tekengrootte per bericht',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Maximum tekengrootte toegestaan in een bericht. Stel in op 0 voor ongelimiteerde tekengrootte.',
	'MAX_POST_IMG_HEIGHT'			=> 'Maximum afbeeldingshoogte per bericht',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Maximum hoogte van een afbeelding/flash bestand in berichten. Stel in op 0 voor ongelimiteerde grootte.',
	'MAX_POST_IMG_WIDTH'			=> 'Maximum afbeeldingsbreedte per bericht',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Maximum breedte van een afbeelding/flash bestand in berichten. Stel in op 0 voor onglimiteerde grootte.',
	'MAX_POST_URLS'					=> 'Maximum koppelingen per bericht',
	'MAX_POST_URLS_EXPLAIN'			=> 'Maximum aantal URLs in een bericht. Stel in op 0 voor ongelimiteerde koppelingen.',
	'MIN_CHAR_LIMIT'				=> 'Minimum karakters per bericht',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'Minimum aantal karakters dat een gebruiker in een bericht/privé bericht moet invoeren. Het minimum voor deze instelling is 1.',
	'POSTING'						=> 'Berichten',
	'POSTS_PER_PAGE'				=> 'Berichten per pagina',
	'QUOTE_DEPTH_LIMIT'				=> 'Maximum nestelingsdiepte voor quotes',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Maximum aantal quote nestelingsdiepte in een bericht. Stel in op 0 voor ongelimiteerde diepte.',
	'SMILIES_LIMIT'					=> 'Maximum smilies per bericht',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Maximum aantal smilies in een bericht. Stel in op 0 voor ongelimiteerde smilies.',
	'SMILIES_PER_PAGE'				=> 'Smilies per pagina',
	'TOPICS_PER_PAGE'				=> 'Onderwerpen per pagina',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Hier kan je alle standaard instellingen voor onderschriften instellen.',

	'MAX_SIG_FONT_SIZE'				=> 'Maximum onderschrift tekengrootte',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Maximum tekengrootte toegestaan in onderschriften. Stel in op 0 voor ongelimiteerde grootte.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Maximum onderschrift afbeeldingshoogte',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Maximum hoogte van een afbeelding/flash bestand in onderschriften. Stel in op 0 voor ongelimiteerde hoogte.',
	'MAX_SIG_IMG_WIDTH'				=> 'Maximum onderschrift afbeeldingsbreedte',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Maximum breedte van een afbeelding/flash bestand in onderschriften. Stel in op 0 voor ongelimiteerde breedte.',
	'MAX_SIG_LENGTH'				=> 'Maximum onderschrift lengte',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Maximum aantal karakters in onderschriften.',
	'MAX_SIG_SMILIES'				=> 'Maximum smilies per onderschrift',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Maximum smilies toegestaan in onderschriften. Stel in op 0 voor ongelimiteerde smilies.',
	'MAX_SIG_URLS'					=> 'Maximum onderschrift koppelingen',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Maximum aantal koppelingen in onderschriften. Stel in op 0 voor ongelimiteerde koppelingen.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Hier kan je registratie en profiel gerelateerde instellingen instellen.',

	'ACC_ACTIVATION'				=> 'Account activatie',
	'ACC_ACTIVATION_EXPLAIN'		=> 'Dit bepaalt of gebruikers meteen toegang hebben tot het forum of dat bevestiging vereist is. Je kan ook nieuwe registraties compleet uitschakelen. “Forum-wijde e-mails” moet ingeschakeld zijn om gebruiker of beheerdersactivatie te gebruiken.',
	'NEW_MEMBER_POST_LIMIT'			=> 'Nieuwe lid berichten limiet',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'Nieuwe leden blijven in de <em>Nieuw geregistreerde gebruikers</em> groep totdat ze dit aantal berichten bereikt. Je kan deze groep gebruiken om te voorkomen dat ze het PB systeem meteen kunnen gebruiken of om hun berichten na te kijken. <strong>Een waarde van 0 zal deze functie uitschakelen.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'Stel Nieuw Geregistreerde Gebruikers groep standaard in',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Indien ingesteld op ja, en een nieuw lid berichten limiet is ingesteld, nieuw geregistreerde gebruikers zullen dan niet alleen in de <em>Nieuw Geregistreerde Gebruikers</em> groep geplaatst worden, maar deze groep zal ook hun standaard groep zijn. Dit kan handig zijn als je een standaard groepsrang en/of avatar wilt toewijzen, welke de gebruiker dan krijgt.',

	'ACC_ADMIN'					=> 'Door beheerder',
	'ACC_DISABLE'				=> 'Uitschakelen registratie',
	'ACC_NONE'					=> 'Geen activatie (direct toegang)',
	'ACC_USER'					=> 'Door gebruiker (e-mailverificatie)',
//	'ACC_USER_ADMIN'			=> 'Gebruiker + Beheerder',
	'ALLOW_EMAIL_REUSE'			=> 'E-mailadres hergebruik toestaan',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Verschillende gebruikers kunnen registreren met hetzelfde e-mailadres.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA fax nummer',
	'COPPA_MAIL'				=> 'COPPA mailadres',
	'COPPA_MAIL_EXPLAIN'		=> 'Dit is het mailadres waar ouders de COPPA registratie formulieren heen kunnen sturen.',
	'ENABLE_COPPA'				=> 'COPPA inschakelen',
	'ENABLE_COPPA_EXPLAIN'		=> 'Dit vereist gebruikers om een verklaring dat ze ouder zijn dan 13 in na volging van de U.S. COPPA wetgeving. Als dit is uitgeschakeld, dan zal de COPPA specifieke groepen niet meer weergegeven worden.',
	'MAX_CHARS'					=> 'Max',
	'MIN_CHARS'					=> 'Min',
	'NO_AUTH_PLUGIN'			=> 'Geen geschikte auth plug-in gevonden.',
	'PASSWORD_LENGTH'			=> 'Wachtwoord lengte',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Minimum en maximum aantal karakters in wachtwoorden.',
	'REG_LIMIT'					=> 'Registratiepogingen',
	'REG_LIMIT_EXPLAIN'			=> 'Aantal pogingen die gebruikers hebben om de anti-spambot taak te kunnen maken voordat ze uitgesloten worden van die sessie.',
	'USERNAME_ALPHA_ONLY'		=> 'Alleen alfanumeriek',
	'USERNAME_ALPHA_SPACERS'	=> 'Alfanumeriek en spacers',
	'USERNAME_ASCII'			=> 'ASCII (geen internationale unicode)',
	'USERNAME_LETTER_NUM'		=> 'Elke letter en cijfer',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Elke letter, cijfer en spacers',
	'USERNAME_CHARS'			=> 'Limiteer gebruikersnaam karakters',
	'USERNAME_CHARS_ANY'		=> 'Elke karakter',
	'USERNAME_CHARS_EXPLAIN'	=> 'Beperk type karakter dat gebruikt kan worden in gebruikersnamen, spacers zijn: spatie, -, +, _, [ and ].',
	'USERNAME_LENGTH'			=> 'Gebruikersnaam lengte',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Minimum en maximum aantal karakters in gebruikersnamen.',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'Algemene syndicatie feeds instellingen',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'Deze module maakt verschillende ATOM feeds beschikbaar, verwerkt iedere BBCode in berichten om hen leesbaar te maken in externe feeds.',

	'ACP_FEED_GENERAL'					=> 'Algemene feed instellingen',
	'ACP_FEED_POST_BASED'				=> 'Bericht gebaseerde feed instellingen',
	'ACP_FEED_TOPIC_BASED'				=> 'Onderwerp gebaseerde feed instellingen',
	'ACP_FEED_SETTINGS_OTHER'			=> 'Andere feeds en instellingen',

	'ACP_FEED_ENABLE'					=> 'Feeds inschakelen',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'Zet de ATOM feeds voor het gehele forum aan of uit.<br />Door dit uit te schakelen, worden alle feeds ondanks de instellingen hieronder ook uitgeschakeld.',
	'ACP_FEED_LIMIT'					=> 'Aantal items',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'Het maximum aantal feed items om weer te geven.',

	'ACP_FEED_OVERALL'					=> 'Forum-wijde feed inschakelen',
	'ACP_FEED_OVERALL_EXPLAIN'			=> 'Forum-wijde nieuwe berichten.',
	'ACP_FEED_FORUM'					=> 'Per forum feeds inschakelen',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Enkele forum en subforums nieuwe berichten.',
	'ACP_FEED_TOPIC'					=> 'Per onderwerp feeds inschakelen',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Enkel onderwerp nieuwe berichten.',

	'ACP_FEED_TOPICS_NEW'				=> 'Nieuwe onderwerpen feeds inschakelen',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> 'Schakelt de “Nieuwe onderwerpen” feed in, welke de laatst aangemaakte onderwerpen inclusief het eerste bericht weergeeft.',
	'ACP_FEED_TOPICS_ACTIVE'			=> 'Actieve onderwerpen feed inschakelen',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> 'Schakelt de “Actieve Onderwerpen” feed in, welke de laatste actieve onderwerpen inclusief het laatste bericht weergeeft.',
	'ACP_FEED_NEWS'						=> 'Nieuws feed',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'Toont het eerste bericht van deze forums. Selecteer geen forums om de nieuws feed uit te schakelen.<br />Selecteer meerdere forums door <samp>CTRL</samp> ingedrukt te houden en met de muis op de forums te klikken.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Forums feed inschakelen',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Schakelt de “Alle forums” feed in, welke een lijst van forums weergeeft.',

	'ACP_FEED_HTTP_AUTH'				=> 'HTTP Authenticatie toestaan',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'Schakelt HTTP authenticatie in, welke toestaat gebruikers inhoud te ontvangen dat verborgen is voor gasten door het toevoegen van de <samp>auth=http</samp> parameter aan de feed URL. Let op dat sommige PHP setups extra veranderingen vereisen aan het .htaccess bestand. Instructies kunnen gevonden worden in dat bestand.',
	'ACP_FEED_ITEM_STATISTICS'			=> 'Item statistieken',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Geeft individuele statistieken weer onder de feed items<br />(bijv. geplaatst door, datum en tijd, reacties, weergaves)',
	'ACP_FEED_EXCLUDE_ID'				=> 'Deze forums uitsluiten',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'Inhoud van deze forums zal <strong>niet bijgevoegd worden in de feeds</strong>. Selecteer geen forums om data van alle forums te gebruiken.<br />Selecteer/Deselecteer meerdere forums door <samp>CTRL</samp> ingedrukt te houden en met de muis op e forums te klikken.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'				=> 'Hier kan je plug-ins selecteren en instellen, welke ontworpen zijn om geautomatiseerde formulier verzendingen te blokkeren. Deze plug-ins werken meestal door de gebruiker uit te dagen met een <em>CAPTCHA</em>, een test welke ontworpen is om te moeilijk te zijn voor een computer, maar een mens wel kan maken.',
	'AVAILABLE_CAPTCHAS'					=> 'Beschikbare plug-ins',
	'CAPTCHA_UNAVAILABLE'					=> 'De plug-in kan niet geselecteerd worden omdat de vereisten niet vervuld worden.',
	'CAPTCHA_GD'							=> 'GD afbeelding',
	'CAPTCHA_GD_3D'							=> 'GD 3D afbeelding',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'Voorgrond ruis',
	'CAPTCHA_GD_EXPLAIN'					=> 'Gebruikt GD om een meer geavanceerde anti-spambot afbeelding te maken.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Gebruik voorgrond ruis om de afbeelding moeilijker leesbaar te maken.',
	'CAPTCHA_GD_X_GRID'						=> 'Achtergrond ruis x-as',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Gebruik lagere waardes om de afbeelding moeilijker leesbaar te maken. 0 zal x-as achtergrond ruis uitschakelen.',
	'CAPTCHA_GD_Y_GRID'						=> 'Achtergrond ruis y-as',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Gebruik lagere waardes om de afbeelding moeilijker leesbaar te maken. 0 zal y-as achtergrond ruis uitschakelen.',
	'CAPTCHA_GD_WAVE'						=> 'Golf ruis',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'Dit geeft een golf ruis aan de afbeelding.',
	'CAPTCHA_GD_3D_NOISE'					=> '3D-ruis objecten toevoegen',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'Dit voegt extra objecten toe aan de afbeelding, over de letters.',
	'CAPTCHA_GD_FONTS'						=> 'Gebruik verschillende lettertypes',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'Deze instelling controleert hoeveel verschillende lettertypes gebruikt worden. Je kan de alleen de standaard vormen gebruiken of aangepaste letters introduceren. Toevoegen van kleine letters is ook mogelijk.',
	'CAPTCHA_FONT_DEFAULT'					=> 'Standaard',
	'CAPTCHA_FONT_NEW'						=> 'Nieuwe vormen',
	'CAPTCHA_FONT_LOWER'					=> 'Gebruik ook kleine letters',
	'CAPTCHA_NO_GD'							=> 'Makkelijke afbeelding',
	'CAPTCHA_PREVIEW_MSG'					=> 'Je veranderingen zijn niet opgeslagen, dit is alleen een voorbeeld.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'De plug-in zoals het er uit zou zien met de huidige instellingen.',

	'CAPTCHA_SELECT'						=> 'Geïnstalleerde plug-ins',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'De drop-down bevat de plug-ins die herkend worden door het forum. Grijze items zijn momenteel niet beschikbaar en kunnen extra instellingen nodig hebben voordat je ze kan gebruiken.',
	'CAPTCHA_CONFIGURE'						=> 'Plug-ins instellen',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'Verander de instellingen voor de geselecteerde plug-in.',
	'CONFIGURE'								=> 'Instellen',
	'CAPTCHA_NO_OPTIONS'					=> 'Deze plug-in heeft geen instellingsopties.',

	'VISUAL_CONFIRM_POST'					=> 'Spambot tegenmaatregelen voor gast plaatsingen inschakelen',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Vereist gastgebruikers om de anti-spambot taak uit te voeren om geautomatiseerde berichten te voorkomen.',
	'VISUAL_CONFIRM_REG'					=> 'Spambot tegenmaatregelen voor registraties inschakelen',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Vereist nieuwe gebruikers om de anti-spambot taak uit te voeren om geautomatiseerde registraties te voorkomen.',
	'VISUAL_CONFIRM_REFRESH'				=> 'Gebruikers toestaan om de anti-spambot taak te verversen',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Staat gebruikers toe om een nieuwe anti-spambot taak aan te vragen als ze de taak niet kunnen oplossen tijdens de registratie. Sommige plug-ins kunnen deze optie niet ondersteunen.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Deze details definiëren de data dat gebruikt wordt om cookies te versturen naar de browsers van je gebruikers. In de meeste gevallen moet de standaard waardes voor de cookie instellingen genoeg zijn. Als je wel veranderingen moet aanbrengen, doe dit dan voorzichtig, incorrecte instellingen kunnen voorkomen dat gebruiker zich kunnen aanmelden.',

	'COOKIE_DOMAIN'				=> 'Cookie domein',
	'COOKIE_NAME'				=> 'Cookie naam',
	'COOKIE_PATH'				=> 'Cookie pad',
	'COOKIE_SECURE'				=> 'Cookie beveiliging',
	'COOKIE_SECURE_EXPLAIN'		=> 'Als je server draait via SSL, stel dit dan ingeschakeld in, laat het anders uitgeschakeld. Als je dit ingeschakeld hebt en niet draait via SSL zal resulteren in server fouten tijdens doorsturingen.',
	'ONLINE_LENGTH'				=> 'Bekijk online tijdsduur',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Aantal minuten waarna inactieve gebruikers niet meer in de “Wie is online” lijst zal voorkomen. Hoe hoger deze waarde is, des te groter de verwerking vereist is om de lijst aan te maken.',
	'SESSION_LENGTH'			=> 'Sessie lengte',
	'SESSION_LENGTH_EXPLAIN'	=> 'Sessies zullen verlopen na deze tijd, in secondes.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Hier kan je bepaalde forumfuncties in of uitschakelen om de hoeveelheid processen die vereist zijn te verlagen. Bij de meeste servers is er geen noodzaak om functies uit te schakelen. Bij bepaalde systemen of gedeelde hosting omgevingen kan het voordelig zijn om bepaalde functies uit te schakelen die je niet echt nodig hebt. Je kan ook bepaalde limieten instellen voor de systeem laad zwaarte en actieve sessies waardoor als deze overschreden worden het forum offline gaat.',

	'ALLOW_CDN'						=> 'Gebruik van derde partij inhoud leveringsnetwerken toestaan',
	'ALLOW_CDN_EXPLAIN'				=> 'Als deze instelling is ingeschakeld, dan worden sommige bestanden van externe servers aangeboden in plaats van je server. Dit reduceert de netwerk bandbreedte vereist voor je server, maar kan een privacy probleem veroorzaken bij sommige forumbeheerders.',
	'CUSTOM_PROFILE_FIELDS'			=> 'Eigen profielvelden',
	'LIMIT_LOAD'					=> 'Limiteer systeem lading',
	'LIMIT_LOAD_EXPLAIN'			=> 'Als het systeem 1 minuut laad gemiddelde deze waarde overschrijd, dan zal het forum automatisch offline gaan. Een waarde van 1.0 staat gelijk aan ~100% gebruik van één processor. Dit werkt alleen op UNIX gebaseerde servers en waar deze informatie beschikbaar is. De waarde stelt zichzelf opnieuw in op 0 als phpBB het laadlimiet niet kan verkrijgen.',
	'LIMIT_SESSIONS'				=> 'Limiteer sessies',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Als het aantal sessies deze waarde overschrijd binnen een minuut, dan zal het forum offline gaan. Stel in op 0 voor ongelimiteerd aantal sessies.',
	'LOAD_CPF_MEMBERLIST'			=> 'Stijlen toestaan om eigen profielvelden weer te geven in ledenlijst',
	'LOAD_CPF_PM'					=> 'Eigen profielvelden weergeven in privé berichten',
	'LOAD_CPF_VIEWPROFILE'			=> 'Eigen profielvelden weergeven in gebruikers profielen',
	'LOAD_CPF_VIEWTOPIC'			=> 'Eigen profielvelden weergeven op onderwerp pagina’s',
	'LOAD_USER_ACTIVITY'			=> 'Gebruikers activiteit tonen',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Actieve onderwerp/forum weergeven in gebruikersprofiel en gebruikerspaneel. Het is aanbevolen om dit uit te schakelen op forums met meer dan één miljoen berichten.',
	'READ_NOTIFICATION_EXPIRE_DAYS'	=> 'Leesnotificatie Read Notification Vervaltijd',
	'READ_NOTIFICATION_EXPIRE_DAYS_EXPLAIN' => 'Aantal dagen nadat een leeasnotificatie automatisch zal worden verwijderd. Stel deze waarde op 0 in om notificaties permanent te maken.',
	'RECOMPILE_STYLES'				=> 'Hercompileer oude stijl componenten',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Controleert op gewijzigde stijl componenten op het bestandssysteem en hercompileert deze.',
	'YES_ANON_READ_MARKING'			=> 'Onderwerp markering voor gasten inschakelen',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Bewaart gelezen/ongelezen status informatie voor gasten. Indien uitgeschakeld zullen berichten altijd gelezen zijn voor gasten.',
	'YES_BIRTHDAYS'					=> 'Verjaardaglijst inschakelen',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Indien uitgeschakeld, zal de verjaardagslijst niet meer weergegeven worden. Om deze instelling effect te laten maken, dan moet de verjaardagfunctie ook ingeschakeld zijn.',
	'YES_JUMPBOX'					=> 'Weergave van de jumpbox inschakelen',
	'YES_MODERATORS'				=> 'Weergave van de moderators inschakelen',
	'YES_ONLINE'					=> 'Online gebruikerslijst inschakelen',
	'YES_ONLINE_EXPLAIN'			=> 'Toont online gebruikers informatie op de index, forum en onderwerppagina’s.',
	'YES_ONLINE_GUESTS'				=> 'Online gastlijst in viewonline inschakelen',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Staat het weergeven van gastgebruikersinformatie in viewonline toe.',
	'YES_ONLINE_TRACK'				=> 'Weergave gebruiker online/offline informatie inschakelen',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Weergave van online informatie voor gebruiker in profielen en onderwerppagina’s.',
	'YES_POST_MARKING'				=> 'Aangestipte onderwerpen inschakelen',
	'YES_POST_MARKING_EXPLAIN'		=> 'Geeft weer of gebruiker een bericht heeft geplaatst in een onderwerp.',
	'YES_READ_MARKING'				=> 'Server onderwerp markering inschakelen',
	'YES_READ_MARKING_EXPLAIN'		=> 'Bewaard gelezen/ongelezen statusinformatie in de database in plaats van een cookie.',
	'YES_UNREAD_SEARCH'				=> 'Zoeken naar ongelezen berichten inschakelen',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB ondersteunt authenticatie plug-ins, of modules. Deze staan je toe om te bepalen hoe gebruikers geauthenticeerd worden wanneer ze zich aanmelden op het forum. Standaard worden er vier plug-ins aangeleverd: DB, LDAP, Apache en OAuth. Niet alle methodes vereisen extra informatie, dus vul alleen de velden in die relevant zijn voor de geselecteerde methode.',

	'AUTH_METHOD'				=> 'Selecteer een authenticatie methode',

	'AUTH_PROVIDER_OAUTH_ERROR_ELEMENT_MISSING'	=> 'Both the key and secret of each enabled OAuth service provider must be provided. Only one was provided for an OAuth service provider.',
	'AUTH_PROVIDER_OAUTH_EXPLAIN'				=> 'Each OAuth provider requires a unique secret and key in order to authenticate with the external server.<br />These should be supplied by the OAuth service when you register your website with them and should be entered exactly as provided to you.<br />Any service that does not have both a key and a secret entered here will not be available for use by the forum users.',
	'AUTH_PROVIDER_OAUTH_KEY'					=> 'Key',
	'AUTH_PROVIDER_OAUTH_TITLE'					=> 'OAuth',
	'AUTH_PROVIDER_OAUTH_SECRET'				=> 'Secret',

	'APACHE_SETUP_BEFORE_USE'	=> 'You have to setup apache authentication before you switch phpBB to this authentication method. Keep in mind that the username you use for apache authentication has to be the same as your phpBB username. Apache authentication can only be used with mod_php (not with a CGI version) and safe_mode disabled.',

	'LDAP_DN'						=> 'LDAP base <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'This is the Distinguished Name, locating the user information, e.g. <samp>o=My Company,c=US</samp>.',
	'LDAP_EMAIL'					=> 'LDAP email attribute',
	'LDAP_EMAIL_EXPLAIN'			=> 'Set this to the name of your user entry email attribute (if one exists) in order to automatically set the email address for new users. Leaving this empty results in empty email address for users who log in for the first time.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Binding to LDAP server failed with specified user/password.',
	'LDAP_NO_EMAIL'					=> 'The specified email attribute does not exist.',
	'LDAP_NO_IDENTITY'				=> 'Could not find a login identity for %s.',
	'LDAP_PASSWORD'					=> 'LDAP password',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Leave blank to use anonymous binding, otherwise fill in the password for the above user. Required for Active Directory Servers.<br /><em><strong>Warning:</strong> This password will be stored as plain text in the database, visible to everybody who can access your database or who can view this configuration page.</em>',
	'LDAP_PORT'						=> 'LDAP server port',
	'LDAP_PORT_EXPLAIN'				=> 'Optionally you can specify a port which should be used to connect to the LDAP server instead of the default port 389.',
	'LDAP_SERVER'					=> 'LDAP server name',
	'LDAP_SERVER_EXPLAIN'			=> 'If using LDAP this is the hostname or IP address of the LDAP server. Alternatively you can specify an URL like ldap://hostname:port/',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'This is the key under which to search for a given login identity, e.g. <var>uid</var>, <var>sn</var>, etc.',
	'LDAP_USER'						=> 'LDAP user <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Leave blank to use anonymous binding. If filled in phpBB uses the specified distinguished name on login attempts to find the correct user, e.g. <samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>. Required for Active Directory Servers.',
	'LDAP_USER_FILTER'				=> 'LDAP user filter',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Optionally you can further limit the searched objects with additional filters. For example <samp>objectClass=posixGroup</samp> would result in the use of <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Here you define server and domain dependent settings. Please ensure the data you enter is accurate, errors will result in emails containing incorrect information. When entering the domain name remember it does include http:// or other protocol term. Only alter the port number if you know your server uses a different value, port 80 is correct in most cases.',

	'ENABLE_GZIP'				=> 'Enable GZip compression',
	'ENABLE_GZIP_EXPLAIN'		=> 'Generated content will be compressed prior to sending it to the user. This can reduce network traffic but will also increase CPU usage on both server and client side. Requires zlib PHP extension to be loaded.',
	'FORCE_SERVER_VARS'			=> 'Force server URL settings',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'If set to yes the server settings defined here will be used in favour of the automatically determined values.',
	'ICONS_PATH'				=> 'Post icons storage path',
	'ICONS_PATH_EXPLAIN'		=> 'Path under your phpBB root directory, e.g. <samp>images/icons</samp>.',
	'MOD_REWRITE_ENABLE'		=> 'Enable URL Rewriting',
	'MOD_REWRITE_ENABLE_EXPLAIN' => 'When enabled, URLs containing ’app.php’ will be rewritten to remove the filename (i.e. app.php/foo will become /foo). <strong>Apache server’s mod_rewrite module is required for this functionality to work; if this option is enabled without mod_rewrite support, URLs on your board may be broken.</strong>',
	'MOD_REWRITE_DISABLED'		=> 'The <strong>mod_rewrite</strong> module on your Apache web server is disabled. Enable the module or contact your web hosting provider if you wish to enable this feature.',
	'MOD_REWRITE_INFORMATION_UNAVAILABLE' => 'We are unable to determine whether or not this server supports URL rewriting. This setting may be enabled but if URL rewriting is not available, paths generated by this board (such as for use in links) may be broken. Contact your web hosting provider if you are unsure whether or not you can safely enable this feature.',
	'PATH_SETTINGS'				=> 'Path settings',
	'RANKS_PATH'				=> 'Rank image storage path',
	'RANKS_PATH_EXPLAIN'		=> 'Path under your phpBB root directory, e.g. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Script path',
	'SCRIPT_PATH_EXPLAIN'		=> 'The path where phpBB is located relative to the domain name, e.g. <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Domain name',
	'SERVER_NAME_EXPLAIN'		=> 'The domain name this board runs from (for example: <samp>www.example.com</samp>).',
	'SERVER_PORT'				=> 'Server port',
	'SERVER_PORT_EXPLAIN'		=> 'The port your server is running on, usually 80, only change if different.',
	'SERVER_PROTOCOL'			=> 'Server protocol',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'This is used as the server protocol if these settings are forced. If empty or not forced the protocol is determined by the cookie secure settings (<samp>http://</samp> or <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Server URL settings',
	'SMILIES_PATH'				=> 'Smilies storage path',
	'SMILIES_PATH_EXPLAIN'		=> 'Path under your phpBB root directory, e.g. <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Extension group icons storage path',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Path under your phpBB root directory, e.g. <samp>images/upload_icons</samp>.',
	'USE_SYSTEM_CRON'		=> 'Run periodic tasks from system cron',
	'USE_SYSTEM_CRON_EXPLAIN'		=> 'When off, phpBB will arrange for periodic tasks to be run automatically. When on, phpBB will not schedule any periodic tasks by itself; a system administrator must arrange for <code>cron.php</code> to be invoked by the system cron facility at regular intervals (e.g. every 5 minutes).',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Here you are able to define session and login related settings.',

	'ALL'							=> 'All',
	'ALLOW_AUTOLOGIN'				=> 'Allow "Remember Me" logins',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Determines whether users are given "Remember Me" option when they visit the board.',
	'ALLOW_PASSWORD_RESET'			=> 'Allow password reset ("Forgot Password")',
	'ALLOW_PASSWORD_RESET_EXPLAIN'	=> 'Determines whether or not users are able to use the "I forgot my password" link on the login page to recover their account. If you use an external authentication mechanism you may wish to disable this feature.',
	'AUTOLOGIN_LENGTH'				=> '"Remember Me" login key expiration length (in days)',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Number of days after which "Remember Me" login keys are removed or zero to disable.',
	'BROWSER_VALID'					=> 'Validate browser',
	'BROWSER_VALID_EXPLAIN'			=> 'Enables browser validation for each session improving security.',
	'CHECK_DNSBL'					=> 'Check IP against DNS Blackhole List',
	'CHECK_DNSBL_EXPLAIN'			=> 'If enabled the user’s IP address is checked against the following DNSBL services on registration and posting: <a href="http://spamcop.net">spamcop.net</a> and <a href="http://www.spamhaus.org">www.spamhaus.org</a>. This lookup may take a while, depending on the server’s configuration. If slowdowns are experienced or too many false positives reported it is recommended to disable this check.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Check email domain for valid MX record',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'If enabled, the email domain provided on registration and profile changes is checked for a valid MX record.',
	'FORCE_PASS_CHANGE'				=> 'Force password change',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Require user to change their password after a set number of days. Setting this value to 0 disables this behaviour.',
	'FORM_TIME_MAX'					=> 'Maximum time to submit forms',
	'FORM_TIME_MAX_EXPLAIN'			=> 'The time a user has to submit a form. Use -1 to disable. Note that a form might become invalid if the session expires, regardless of this setting.',
	'FORM_SID_GUESTS'				=> 'Tie forms to guest sessions',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'If enabled, the form token issued to guests will be session-exclusive. This can cause problems with some ISPs.',
	'FORWARDED_FOR_VALID'			=> 'Validate <var>X_FORWARDED_FOR</var> header',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Sessions will only be continued if the sent <var>X_FORWARDED_FOR</var> header equals the one sent with the previous request. Bans will be checked against IPs in <var>X_FORWARDED_FOR</var> too.',
	'IP_VALID'						=> 'Session IP validation',
	'IP_VALID_EXPLAIN'				=> 'Determines how much of the users IP is used to validate a session; <samp>All</samp> compares the complete address, <samp>A.B.C</samp> the first x.x.x, <samp>A.B</samp> the first x.x, <samp>None</samp> disables checking. On IPv6 addresses <samp>A.B.C</samp> compares the first 4 blocks and <samp>A.B</samp> the first 3 blocks.',
	'IP_LOGIN_LIMIT_MAX'			=> 'Maximum number of login attempts per IP address',
	'IP_LOGIN_LIMIT_MAX_EXPLAIN'	=> 'The threshold of login attempts allowed from a single IP address before an anti-spambot task is triggered. Enter 0 to prevent the anti-spambot task from being triggered by IP addresses.',
	'IP_LOGIN_LIMIT_TIME'			=> 'IP address login attempt expiration time',
	'IP_LOGIN_LIMIT_TIME_EXPLAIN'	=> 'Login attempts expire after this period.',
	'IP_LOGIN_LIMIT_USE_FORWARDED'	=> 'Limit login attempts by <var>X_FORWARDED_FOR</var> header',
	'IP_LOGIN_LIMIT_USE_FORWARDED_EXPLAIN'	=> 'Instead of limiting login attempts by IP address they are limited by <var>X_FORWARDED_FOR</var> values. <br /><em><strong>Warning:</strong> Only enable this if you are operating a proxy server that sets <var>X_FORWARDED_FOR</var> to trustworthy values.</em>',
	'MAX_LOGIN_ATTEMPTS'			=> 'Maximum number of login attempts per username',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'The number of login attempts allowed for a single account before the anti-spambot task is triggered. Enter 0 to prevent the anti-spambot task from being triggered for distinct user accounts.',
	'NO_IP_VALIDATION'				=> 'None',
	'NO_REF_VALIDATION'				=> 'None',
	'PASSWORD_TYPE'					=> 'Password complexity',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Determines how complex a password needs to be when set or altered, subsequent options include the previous ones.',
	'PASS_TYPE_ALPHA'				=> 'Must contain letters and numbers',
	'PASS_TYPE_ANY'					=> 'No requirements',
	'PASS_TYPE_CASE'				=> 'Must be mixed case',
	'PASS_TYPE_SYMBOL'				=> 'Must contain symbols',
	'REF_HOST'						=> 'Only validate host',
	'REF_PATH'						=> 'Also validate path',
	'REFERER_VALID'					=> 'Validate Referer',
	'REFERER_VALID_EXPLAIN'			=> 'If enabled, the referer of POST requests will be checked against the host/script path settings. This may cause issues with boards using several domains and or external logins.',
	'TPL_ALLOW_PHP'					=> 'Allow php in templates',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'If this option is enabled, <code>PHP</code> and <code>INCLUDEPHP</code> statements will be recognised and parsed in templates.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'This information is used when the board sends emails to your users. Please ensure the email address you specify is valid, any bounced or undeliverable messages will likely be sent to that address. If your host does not provide a native (PHP based) email service you can instead send messages directly using SMTP. This requires the address of an appropriate server (ask your provider if necessary). If the server requires authentication (and only if it does) enter the necessary username, password and authentication method.',

	'ADMIN_EMAIL'					=> 'Return email address',
	'ADMIN_EMAIL_EXPLAIN'			=> 'This will be used as the return address on all emails, the technical contact email address. It will always be used as the <samp>Return-Path</samp> and <samp>Sender</samp> address in emails.',
	'BOARD_EMAIL_FORM'				=> 'Users send email via board',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Instead of showing the users email address users are able to send emails via the board.',
	'BOARD_HIDE_EMAILS'				=> 'Hide email addresses',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'This function keeps email addresses completely private.',
	'CONTACT_EMAIL'					=> 'Contact email address',
	'CONTACT_EMAIL_EXPLAIN'			=> 'This address will be used whenever a specific contact point is needed, e.g. spam, error output, etc. It will always be used as the <samp>From</samp> and <samp>Reply-To</samp> address in emails.',
	'EMAIL_FUNCTION_NAME'			=> 'Email function name',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'The email function used to send mails through PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'Email package size',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'This is the number of maximum emails sent out in one package. This setting is applied to the internal message queue; set this value to 0 if you have problems with non-delivered notification emails.',
	'EMAIL_SIG'						=> 'Email signature',
	'EMAIL_SIG_EXPLAIN'				=> 'This text will be attached to all emails the board sends.',
	'ENABLE_EMAIL'					=> 'Enable board-wide emails',
	'ENABLE_EMAIL_EXPLAIN'			=> 'If this is set to disabled no emails will be sent by the board at all. <em>Note the user and admin account activation settings require this setting to be enabled. If currently using “user” or “admin” activation in the activation settings, disabling this setting will require no activation of new accounts.</em>',
	'SMTP_AUTH_METHOD'				=> 'Authentication method for SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Only used if a username/password is set, ask your provider if you are unsure which method to use.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'SMTP password',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Only enter a password if your SMTP server requires it.<br /><em><strong>Warning:</strong> This password will be stored as plain text in the database, visible to everybody who can access your database or who can view this configuration page.</em>',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'SMTP server port',
	'SMTP_PORT_EXPLAIN'				=> 'Only change this if you know your SMTP server is on a different port.',
	'SMTP_SERVER'					=> 'SMTP server address',
	'SMTP_SETTINGS'					=> 'SMTP settings',
	'SMTP_USERNAME'					=> 'SMTP username',
	'SMTP_USERNAME_EXPLAIN'			=> 'Only enter a username if your SMTP server requires it.',
	'USE_SMTP'						=> 'Use SMTP server for email',
	'USE_SMTP_EXPLAIN'				=> 'Select “Yes” if you want or have to send email via a named server instead of the local mail function.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Here you can enable and control the use of Jabber for instant messaging and board notifications. Jabber is an open source protocol and therefore available for use by anyone. Some Jabber servers include gateways or transports which allow you to contact users on other networks. Not all servers offer all transports and changes in protocols can prevent transports from operating. Please be sure to enter already registered account details - phpBB will use the details you enter here as is.',

	'JAB_ENABLE'				=> 'Enable Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Enables use of Jabber messaging and notifications.',
	'JAB_GTALK_NOTE'			=> 'Please note that GTalk will not work because the <samp>dns_get_record</samp> function could not be found. This function is not available in PHP4, and is not implemented on Windows platforms. It currently does not work on BSD-based systems, including Mac OS.',
	'JAB_PACKAGE_SIZE'			=> 'Jabber package size',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'This is the number of messages sent in one package. If set to 0 the message is sent immediately and will not be queued for later sending.',
	'JAB_PASSWORD'				=> 'Jabber password',
	'JAB_PASSWORD_EXPLAIN'		=> '<em><strong>Warning:</strong> This password will be stored as plain text in the database, visible to everybody who can access your database or who can view this configuration page.</em>',
	'JAB_PORT'					=> 'Jabber port',
	'JAB_PORT_EXPLAIN'			=> 'Leave blank unless you know it is not port 5222.',
	'JAB_SERVER'				=> 'Jabber server',
	'JAB_SERVER_EXPLAIN'		=> 'See %sjabber.org%s for a list of servers.',
	'JAB_SETTINGS_CHANGED'		=> 'Jabber settings changed successfully.',
	'JAB_USE_SSL'				=> 'Use SSL to connect',
	'JAB_USE_SSL_EXPLAIN'		=> 'If enabled a secure connection is tried to be established. The Jabber port will be modified to 5223 if port 5222 is specified.',
	'JAB_USERNAME'				=> 'Jabber username or JID',
	'JAB_USERNAME_EXPLAIN'		=> 'Specify a registered username or a valid JID. The username will not be checked for validity. If you only specify a username, then your JID will be the username and the server you specified above. Else, specify a valid JID, for example user@jabber.org.',
));
