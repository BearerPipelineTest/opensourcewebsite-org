<b><?= $chat->title ?></b><br/>
<br/>
<?= Yii::t('bot', 'Membership') ?> - <?= Yii::t('bot', 'deletes messages from members who do not have premium membership after the specified dates') ?>. <?= Yii::t('bot', 'Ignores bots') ?>.<br/>
<?php if ($chat->membership_tag) : ?>
<br/>
<?= Yii::t('bot', 'Tag for members') ?>: <?= $chat->membership_tag ?><br/>
<?php endif; ?>
