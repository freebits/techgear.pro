<?php
function add_account(string $name, string $password_hash) {
    $dbh = new PDO("pgsql:dbname=web997.com", "ubuntu");
    $sth = $dbh->prepare(
      'INSERT INTO account(name, password_hash)
             VALUES (:name, :password_hash)'
    );
    $sth->bindParam(':name', $name, PDO::PARAM_STR);
    $sth->bindParam(':password_hash', $password_hash, PDO::PARAM_STR);
    $sth->execute();
    $dbh = null;
}

