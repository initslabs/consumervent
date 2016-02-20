<div class="submissions index">
	<h2><?php echo __('Submissions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('users_id'); ?></th>
			<th><?php echo $this->Paginator->sort('submission_status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('experience_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('submission_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('user_display_name'); ?></th>
			<th><?php echo $this->Paginator->sort('user_email_address'); ?></th>
			<th><?php echo $this->Paginator->sort('user_phone_number'); ?></th>
			<th><?php echo $this->Paginator->sort('recommendation_level'); ?></th>
			<th><?php echo $this->Paginator->sort('user_company_website'); ?></th>
			<th><?php echo $this->Paginator->sort('detected_website'); ?></th>
			<th><?php echo $this->Paginator->sort('incident_date'); ?></th>
			<th><?php echo $this->Paginator->sort('incident_address'); ?></th>
			<th><?php echo $this->Paginator->sort('user_company_contacted'); ?></th>
			<th><?php echo $this->Paginator->sort('user_amount_involved'); ?></th>
			<th><?php echo $this->Paginator->sort('user_company_twitter_handle'); ?></th>
			<th><?php echo $this->Paginator->sort('user_company_email'); ?></th>
			<th><?php echo $this->Paginator->sort('user_company_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($submissions as $submission): ?>
	<tr>
		<td><?php echo h($submission['Submission']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($submission['Users']['id'], array('controller' => 'users', 'action' => 'view', $submission['Users']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($submission['SubmissionStatus']['name'], array('controller' => 'submission_statuses', 'action' => 'view', $submission['SubmissionStatus']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($submission['Company']['name'], array('controller' => 'companies', 'action' => 'view', $submission['Company']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($submission['ExperienceType']['name'], array('controller' => 'experience_types', 'action' => 'view', $submission['ExperienceType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($submission['SubmissionType']['name'], array('controller' => 'submission_types', 'action' => 'view', $submission['SubmissionType']['id'])); ?>
		</td>
		<td><?php echo h($submission['Submission']['created']); ?>&nbsp;</td>
		<td><?php echo h($submission['Submission']['modified']); ?>&nbsp;</td>
		<td><?php echo h($submission['Submission']['user_display_name']); ?>&nbsp;</td>
		<td><?php echo h($submission['Submission']['user_email_address']); ?>&nbsp;</td>
		<td><?php echo h($submission['Submission']['user_phone_number']); ?>&nbsp;</td>
		<td><?php echo h($submission['Submission']['recommendation_level']); ?>&nbsp;</td>
		<td><?php echo h($submission['Submission']['user_company_website']); ?>&nbsp;</td>
		<td><?php echo h($submission['Submission']['detected_website']); ?>&nbsp;</td>
		<td><?php echo h($submission['Submission']['incident_date']); ?>&nbsp;</td>
		<td><?php echo h($submission['Submission']['incident_address']); ?>&nbsp;</td>
		<td><?php echo h($submission['Submission']['user_company_contacted']); ?>&nbsp;</td>
		<td><?php echo h($submission['Submission']['user_amount_involved']); ?>&nbsp;</td>
		<td><?php echo h($submission['Submission']['user_company_twitter_handle']); ?>&nbsp;</td>
		<td><?php echo h($submission['Submission']['user_company_email']); ?>&nbsp;</td>
		<td><?php echo h($submission['Submission']['user_company_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $submission['Submission']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $submission['Submission']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $submission['Submission']['id']), null, __('Are you sure you want to delete # %s?', $submission['Submission']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Submission'), array('action' => 'add')); ?></li>
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
