<?php
/**
 *
 * MODX extension for the phpBB Forum Software package
 *
 * @copyright (c) 2021, Kailey Truscott, https://www.layer-3.org/
 * @license GNU General Public License, version 2 (GPL-2.0)
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
	$lang = [];
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, [
	'MODX_CMD'	=> 'MODX command',

	'BBCODE21_FIND'			=> '[b]Find[/b] [i][size=85]This may be a partial find and not the whole line[/size][/i]',
	'BBCODE21_AFTER'		=> '[b][color=#008000]Add after[/color][/b] [i][size=85]Add these lines on a new blank line after the preceding line(s) to find[/size][/i]',
	'BBCODE21_BEFORE'		=> '[b][color=#BF0080]Add before[/color][/b] [i][size=85]Add these lines on a new blank line before the preceding line(s) to find[/size][/i]',
	'BBCODE21_REPLACE'		=> '[b][color=#BF0000]Replace with[/b][/color] [i][size=85]Replace the preceding lines with the following[/size][/i]',
	'BBCODE21_DELETE'		=> '[b][color=#FF0000]Delete[/b][/color] [i][size=85]Remove the preceding line(s)[/size][/i]',
	'BBCODE21_INFIND'		=> '[b][color=#BF0080]In line find[/b][/color] [i][size=85]This is a partial match of a line for in-line operations[/size][/i]',
	'BBCODE21_INAFTER'		=> '[b][color=#BF0080]In line add after[/b][/color]',
	'BBCODE21_INBEFORE'		=> '[b][color=#BF0080]In line add before[/b][/color]',
	'BBCODE21_INREPLACE'	=> '[b][color=#BF0080]In line replace with[/b][/color]',

	'MODX_FIND'			=> 'Find',
	'MODX_AFTER'		=> 'Add after',
	'MODX_BEFORE'		=> 'Add before',
	'MODX_REPLACE'		=> 'Replace with',
	'MODX_DELETE'		=> 'Delete',
	'MODX_INFIND'		=> 'In line find',
	'MODX_INAFTER'		=> 'In line add after',
	'MODX_INBEFORE'		=> 'In line add before',
	'MODX_INREPLACE'	=> 'In line replace with',
]);
