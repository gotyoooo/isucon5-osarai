<h2>友だちリスト</h2>
<div class="row panel panel-primary" id="friends">
  <dl>
    <?php foreach ($friends as $user_id => $user) { ?>
    <?php $friend = $user['user'] ?>
    <?php $created_at = $user['created_at'] ?>
    <dt class="friend-date"><?php h($created_at) ?></dt><dd class="friend-friend"><a href="/profile/<?php h($friend['account_name']) ?>"><?php h($friend['nick_name']) ?></a></dd>
    <?php } ?>
  </dl>
</div>
