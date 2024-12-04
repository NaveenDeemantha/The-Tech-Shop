<?php
$file = 'members.json';
$newMember = $_POST;
$members = json_decode(file_get_contents($file), true);
$members[] = $newMember;
file_put_contents($file, json_encode($members, JSON_PRETTY_PRINT));
echo json_encode(['message' => 'Member added successfully.']);
?>