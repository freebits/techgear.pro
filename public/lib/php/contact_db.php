<?php

function add_contact(string $name, string $phone, string $email, string $message) {
  $dbh = new PDO("pgsql:dbname=techgear.pro", "ubuntu");
  $sth = $dbh->prepare(
    'INSERT INTO contact(name, phone, email, address, country, postcode)
    VALUES (:name, :phone, :email, :address, :country, :postcode)' 
  );
  $sth->bindParam(':name', $name, PDO::PARAM_STR);
  $sth->bindParam(':phone', $phone, PDO::PARAM_STR);
  $sth->bindParam(':email', $email, PDO::PARAM_STR);
  $sth->bindParam(':address', $address, PDO::PARAM_STR);
  $sth->bindParam(':country', $country, PDO::PARAM_STR);
  $sth->bindParam(':postcode', $postcode, PDO::PARAM_STR);
  $sth->execute();
  $dbh = null;
  return;
}
?>
