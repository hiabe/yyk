<!-- File: /app/View/Users/index.ctp -->

<h1>ユーザ一覧</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Created</th>
    </tr>

    <!-- ここから、$posts配列をループして、ユーザ一覧の情報を表示 -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $post['User']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['User']['name'],
array('controller' => 'users', 'action' => 'view', $post['User']['id'])); ?>
        </td>
        <td><?php echo $post['User']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($user); ?>
</table>