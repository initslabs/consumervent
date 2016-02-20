<div class="comments view">
<h2><?php echo __('Comment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comment['CompanyUser']['display_name'], array('controller' => 'company_users', 'action' => 'view', $comment['CompanyUser']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Submission'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comment['Submission']['id'], array('controller' => 'submissions', 'action' => 'view', $comment['Submission']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comment['User']['display_name'], array('controller' => 'users', 'action' => 'view', $comment['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Text'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['comment_text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Type'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['comment_type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comment'), array('action' => 'edit', $comment['Comment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Comment'), array('action' => 'delete', $comment['Comment']['id']), null, __('Are you sure you want to delete # %s?', $comment['Comment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Users'), array('controller' => 'company_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company User'), array('controller' => 'company_users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
