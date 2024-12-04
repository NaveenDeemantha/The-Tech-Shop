<?php
$file = 'members.json';
$updatedMember = $_POST;
$members = json_decode(file_get_contents($file), true);
foreach ($members as &$member) {
    if ($member['id'] == $updatedMember['id']) {
        $member['name'] = $updatedMember['name'];
        $member['address'] = $updatedMember['address'];
        $member['mobile'] = $updatedMember['mobile'];
    }
}
file_put_contents($file, json_encode($members, JSON_PRETTY_PRINT));
echo json_encode(['message' => 'Member updated successfully.']);
?>