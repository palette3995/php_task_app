<?php
require_once('TopPageController.php');
?>

<?php include('Views/head.php'); ?>

<table border=1>
    <tr>   
        <th id="id">ID</th>
        <th>名前</th>
        <th>説明</th>
        <th>優先度</th>
        <th>期限</th>
        <th>繰り返し</th>
        <th>作成日</th>
    </tr>
    <?php foreach($tasks as $task){ ?>
    <tr>   
        <td><?= $task['id']?></td>
        <td><?= $task['name']?></td>
        <td><?= $task['description']?></td>
        <td><?= $task['priority']?></td>
        <td><?= $task['created_at']?></td>
        <td><?= $task['deadline']?></td>
        <td><?= $task['created_at']?></td>
    </tr>
    <?php } ?>
</table>

<?php include('Views/footer.php'); ?>

