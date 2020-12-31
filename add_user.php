<?php
$user = new User;
$user->name = 'Αθηνά';
$user->surname = 'Σιαφαρίκα';
$user->username = 'admin';
$user->password = md5('admin');
$user->save();
echo $user->password; # => BOB

 ?>