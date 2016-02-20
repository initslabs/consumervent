<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebookid'); ?></dt>
		<dd>
			<?php echo h($user['User']['facebookid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Googleid'); ?></dt>
		<dd>
			<?php echo h($user['User']['googleid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Twitterid'); ?></dt>
		<dd>
			<?php echo h($user['User']['twitterid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('From Facebook'); ?></dt>
		<dd>
			<?php echo h($user['User']['from_facebook']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('From Google'); ?></dt>
		<dd>
			<?php echo h($user['User']['from_google']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('From Twitter'); ?></dt>
		<dd>
			<?php echo h($user['User']['from_twitter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['display_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile Number'); ?></dt>
		<dd>
			<?php echo h($user['User']['mobile_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Avatar Url'); ?></dt>
		<dd>
			<?php echo h($user['User']['avatar_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($user['User']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comments'); ?></h3>
	<?php if (!empty($user['Comment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Company User Id'); ?></th>
		<th><?php echo __('Submission Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Comment Text'); ?></th>
		<th><?php echo __('Comment Type'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Comment'] as $comment): ?>
		<tr>
			<td><?php echo $comment['id']; ?></td>
			<td><?php echo $comment['company_user_id']; ?></td>
			<td><?php echo $comment['submission_id']; ?></td>
			<td><?php echo $comment['user_id']; ?></td>
			<td><?php echo $comment['created']; ?></td>
			<td><?php echo $comment['comment_text']; ?></td>
			<td><?php echo $comment['comment_type']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), null, __('Are you sure you want to delete # %s?', $comment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
