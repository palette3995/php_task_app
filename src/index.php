<?php require_once('TopPageController.php'); ?>

<div class="task-index">
    <table class="table text-center" border=1>
        <tr>   
            <th id="id">ID</th>
            <th>名前</th>
            <th>説明</th>
            <th>優先度</th>
            <th>期限</th>
            <th>作成日</th>
            <th>操作</th>
        </tr>
        <?php foreach($tasks as $task){ ?>
        <tr>   
            <td><?= $task['id']?></td>
            <td><?= $task['name']?></td>
            <td><?= $task['description']?></td>
            <td><?= $task['priority']?></td>
            <td><?= $task['deadline']?></td>
            <td><?= $task['created_at']?></td>
            <td>
                <button id="btn-edit-<?= $task['id'] ?>" class="btn btn-secondary">編集</button>
                <button id="btn-delete-<?= $task['id'] ?>" class="btn btn-danger">削除</button>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

<div class="task-create">
    <input id="btn-create" type="button" value="タスクを新規作成" class="btn btn-primary">
</div>

<div class="task-create-modal w-25 h-25">
    <button id="btn-close" class="btn fs-4">×</button>
    <form action="TopPageController.php" method="post" class="form-control text-center">
        <h3>新規登録</h3>
        <div class="form-input">
            <div>タスク名</div>
            <input type="text" name="name">
        </div>
        <div class="form-input">
            <div>タスク詳細</div>
            <input type="text" name="descripton">
        </div>
        
        <div class="form-input">
            <div>期限</div>
            <input type="date" name="deadline">
        </div>
        <div class="form-input my-5">
            <input type="submit" value="登録" class="btn btn-success">
        </div>   
    </form>
</div>

<?php include('Views/footer.php'); ?>

