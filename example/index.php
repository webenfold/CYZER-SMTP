<?php

require __DIR__.'/smtp.php';

// $emailer = new cyz_smtp_base('REVOtic Engineering', 'info@revoticengineering.com', __DIR__.'/template', 'SendGrid', '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');

$emailer = new cyz_smtp_base('REVOtic Engineering', 'info@revoticengineering.com', __DIR__.'/template');

$data_set = array(
  "heading"   => "Verify Email",
  "content"   => "Just click the link below to verify your email. You need to verify your email in order to access your account and to enjoy <strong>Lazarus Networks</strong> services.",
  "link"      => "https://revoticengineering.com",
  "link_name" => "visit website"
);

$emailer->send_email("developergkindia@gmail.com", "Verify Your Email - Test Mail", $data_set, 'simple.php');
