<?php
require_once(dirname(__FILE__).'/lib/php/contact_db.php');
require_once(dirname(__FILE__).'/lib/php/mail.php');

$name = '';
$name_error = '';
$phone = '';
$phone_error = '';
$email = '';
$email_error = '';
$address = '';
$address_error = '';
$country = '';
$country_error = '';
$postcode = '';
$postcode_error = '';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $postcode = $_POST['postcode'];

    if(strlen($name) === 0) {
      $name_error = 'Name is required.';
    }
    elseif(strlen($name) > 128) {
      $name_error = 'Name must be less than 128 characters.';
    }

    if(strlen($phone) === 0) {
      $phone_error = 'Phone is required.';
    }
    elseif(strlen($phone) > 32) {
      $phone_error = 'Phone must be less than 32 characters.';
    }

    if(strlen($email) === 0) {
      $email_error = 'Email is required.';
    }
    elseif(strlen($email) > 128) {
      $email_error = 'Email must be less than 128 characters.';
    }

    if(strlen($address) === 0) {
      $address_error = 'Address is required.';
    }
    elseif(strlen($address) > 128) {
      $address_error = 'Address must be less than 128 characters.';
    }

    if(strlen($country) === 0) {
      $country_error = 'Country is required.';
    }
    elseif(strlen($country) > 128) {
      $country_error = 'Country must be less than 128 characters.';
    }

    if(strlen($postcode) === 0) {
      $postcode_error = 'postcode is required.';
    }
    elseif(strlen($postcode) > 128) {
      $postcode_error = 'Postcode must be less than 128 characters.';
    }

    if(empty($name_error) &&
      empty($phone_error) &&
      empty($email_error) &&
      empty($address_error) &&
      empty($country_error) &&
      empty($postcode_error)) {
		  add_contact($name, $phone, $email, $address, $country, $postcode);
		  contact_mail($name, $phone, $email, $address, $country, $postcode);
          header('Location: /success.html');
      }
}
require_once(dirname(__FILE__).'/lib/php/views/contact_template.php');

