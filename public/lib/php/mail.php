<?php
require dirname(dirname(dirname((__DIR__)))).'/vendor/autoload.php';
use Mailgun\Mailgun;

function contact_mail($name, $phone, $email, $address, $country, $postcode) {

    $from = 'noreply@mail.web997.com';
	$to = 'freebits1@gmail.com';
    $domain = 'mail.web997.com';
    $key = 'key-7a9bb86b317120698eecae4cf3e52143';

	$subject = 'CONTACT: '. $name;
	$body =
		'Name: '. $name.PHP_EOL.
		'Phone: '. $phone.PHP_EOL.
		'Email: '. $email.PHP_EOL.
		'Address: '. $address.PHP_EOL.
		'Country: '. $country.PHP_EOL.
		'Postcode: '. $postcode.PHP_EOL.

    $mg = Mailgun::create($key);
    $mg->messages()->send($domain, [
        'from' => $from,
        'to' => $to,
        'subject' => $subject,
        'text' => $body]);
}
?>
