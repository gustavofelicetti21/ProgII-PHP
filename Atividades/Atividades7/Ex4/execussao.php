<?php
require_once "Email.php";

use Atividades7\Ex4\Email;

$email = new Email();
$email->enviar("Se leu mamou", "g@g.com", "r@r.com");