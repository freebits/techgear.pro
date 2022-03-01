<?php

function add_contact(string $name, string $phone, string $email, string $address_line_1, string $address_line_2, string $city, string $state, string $country, string $postcode) {
  $dbh = new PDO("pgsql:dbname=techgear.pro", "user");
  $sth = $dbh->prepare(
    'INSERT INTO contact(name, phone, email, address_line_1, address_line_2, city, state, country, postcode)
    VALUES (:name, :phone, :email, :address_line_1, :address_line_2, :city, :state, :country, :postcode)' 
  );
  $sth->bindParam(':name', $name, PDO::PARAM_STR);
  $sth->bindParam(':phone', $phone, PDO::PARAM_STR);
  $sth->bindParam(':email', $email, PDO::PARAM_STR);
  $sth->bindParam(':address_line_1', $address_line_1, PDO::PARAM_STR);
  $sth->bindParam(':address_line_2', $address_line_2, PDO::PARAM_STR);
  $sth->bindParam(':city', $city, PDO::PARAM_STR);
  $sth->bindParam(':state', $state, PDO::PARAM_STR);
  $sth->bindParam(':country', $country, PDO::PARAM_STR);
  $sth->bindParam(':postcode', $postcode, PDO::PARAM_STR);
  $sth->execute();
  $dbh = null;
  return;
}
?>
