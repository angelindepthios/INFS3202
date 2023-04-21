<?php 
$nomor = 0;
foreach($dataMahasiswa as $data) {
    $nomor++;
?>
<tr>
    <td><?= $nomor?></td>
    <td><?= $data->first_name; ?></td>
    <td><?= $data->last_name; ?></td>
    <td><?= $data->email; ?></td>
    <td><?= $data->university; ?></td>
</tr>
<?php
}
?>