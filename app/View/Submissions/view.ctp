<div class="submissions view">
<h2><?php echo __('Submission'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Users'); ?></dt>
		<dd>
			<?php echo $this->Html->link($submission['Users']['id'], array('controller' => 'users', 'action' => 'view', $submission['Users']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Submission Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($submission['SubmissionStatus']['name'], array('controller' => 'submission_statuses', 'action' => 'view', $submission['SubmissionStatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($submission['Company']['name'], array('controller' => 'companies', 'action' => 'view', $submission['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Experience Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($submission['ExperienceType']['name'], array('controller' => 'experience_types', 'action' => 'view', $submission['ExperienceType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Submission Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($submission['SubmissionType']['name'], array('controller' => 'submission_types', 'action' => 'view', $submission['SubmissionType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Display Name'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['user_display_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Email Address'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['user_email_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Phone Number'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['user_phone_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recommendation Level'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['recommendation_level']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Company Website'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['user_company_website']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detected Website'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['detected_website']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Incident Date'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['incident_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Incident Address'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['incident_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Company Contacted'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['user_company_contacted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Amount Involved'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['user_amount_involved']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Company Twitter Handle'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['user_company_twitter_handle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Company Email'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['user_company_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Company Name'); ?></dt>
		<dd>
			<?php echo h($submission['Submission']['user_company_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Submission'), array('action' => 'edit', $submission['Submission']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Submission'), array('action' => 'delete', $submission['Submission']['id']), null, __('Are you sure you want to delete # %s?', $submission['Submission']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submission Statuses'), array('controller' => 'submission_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission Status'), array('controller' => 'submission_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Experience Types'), array('controller' => 'experience_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Experience Type'), array('controller' => 'experience_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submission Types'), array('controller' => 'submission_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission Type'), array('controller' => 'submission_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comments'); ?></h3>
	<?php if (!empty($submission['Comment'])): ?>
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
	<?php foreach ($submission['Comment'] as $comment): ?>
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
