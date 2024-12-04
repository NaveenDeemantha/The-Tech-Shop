<?php
$file = 'members.json';
$id = $_POST['id'];
$members = json_decode(file_get_contents($file), true);
$members = array_filter($members, function ($member) use ($id) {
    return $member['id'] != $id;
});
file_put_contents($file, json_encode(array_values($members), JSON_PRETTY_PRINT));
echo json_encode(['message' => 'Member deleted successfully.']);
?>