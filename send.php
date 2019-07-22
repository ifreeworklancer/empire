<?php

use \AmoCRM\Handler;
use \AmoCRM\Request;
use \AmoCRM\Lead;
use \AmoCRM\Contact;

require(__DIR__ . '/vendor/autoload.php');

if (isset($_POST['name']) && isset($_POST['phone'])) {
	$title = $_POST['title'];
	$name = $_POST['name'];
	$phone = str_replace([' ', '-', '(', ')'], '', $_POST['phone']);

	try {
		$api = new Handler('carleoneusa', 'zungng7@gmail.com');

		$lead = new Lead();
		$lead
			->setName($title)
			->setResponsibleUserId($api->config['ResponsibleUserId'])
			->setCustomField(464037, '825175')
			->setStatusId($api->config['LeadStatusId']);

		if (isset($_POST['car'])) {
			$lead = $lead->setTags($_POST['car']);
		}

		if (isset($_POST['utm'])) {
			$lead = $lead->setCustomField(490681, $_POST['utm']);
		}

		$api->request(new Request(Request::SET, $lead));
		$lead = $api->last_insert_id;

		$contact = new Contact();
		$contact
			->setName($name)
			->setResponsibleUserId($api->config['ResponsibleUserId'])
			->setLinkedLeadsId($lead)
			->setCustomField(
				$api->config['ContactFieldPhone'],
				$phone,
				'WORK'
			)
			->setTags($title);

		$api->request(new Request(Request::GET, ['query' => $phone], ['contacts', 'list']));
		$contact_exists = ($api->result) ? $api->result->contacts[0] : false;

		if ($contact_exists) {
			$contact
				->setUpdate($contact_exists->id, $contact_exists->last_modified + 1)
				->setResponsibleUserId($contact_exists->responsible_user_id)
				->setLinkedLeadsId($contact_exists->linked_leads_id);
		}

		$api->request(new Request(Request::SET, $contact));
	} catch (\Exception $e) {
		echo $e->getMessage();
	}
}

header('Location: /thanks');