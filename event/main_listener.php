<?php
/**
 *
 * MODX extension for the phpBB Forum Software package
 *
 * @copyright (c) 2021, Kailey Snay, https://www.layer-3.org/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace kaileysnay\modx\event;

/**
 * @ignore
 */
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * MODX event listener
 */
class main_listener implements EventSubscriberInterface
{
	public static function getSubscribedEvents()
	{
		return [
			'core.user_setup'	=> 'user_setup',
		];
	}

	public function user_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = [
			'ext_name' => 'kaileysnay/modx',
			'lang_set' => 'common',
		];
		$event['lang_set_ext'] = $lang_set_ext;
	}
}
