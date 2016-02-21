<div class="issueTypes view">
<h2><?php echo __('Issue Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($issueType['IssueType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($issueType['IssueType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sort Order'); ?></dt>
		<dd>
			<?php echo h($issueType['IssueType']['sort_order']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Issue Type'), array('action' => 'edit', $issueType['IssueType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Issue Type'), array('action' => 'delete', $issueType['IssueType']['id']), null, __('Are you sure you want to delete # %s?', $issueType['IssueType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Issue Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Issue Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Submissions'); ?></h3>
	<?php if (!empty($issueType['Submission'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Users Id'); ?></th>
		<th><?php echo __('Submission Status Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Experience Type Id'); ?></th>
		<th><?php echo __('Submission Type Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('User Display Name'); ?></th>
		<th><?php echo __('User Email Address'); ?></th>
		<th><?php echo __('User Phone Number'); ?></th>
		<th><?php echo __('Recommendation Level'); ?></th>
		<th><?php echo __('User Company Website'); ?></th>
		<th><?php echo __('Detected Website'); ?></th>
		<th><?php echo __('Incident Date'); ?></th>
		<th><?php echo __('Incident Address'); ?></th>
		<th><?php echo __('User Company Contacted'); ?></th>
		<th><?php echo __('User Amount Involved'); ?></th>
		<th><?php echo __('User Company Twitter Handle'); ?></th>
		<th><?php echo __('User Company Email'); ?></th>
		<th><?php echo __('User Company Name'); ?></th>
		<th><?php echo __('Review'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($issueType['Submission'] as $submission): ?>
		<tr>
			<td><?php echo $submission['id']; ?></td>
			<td><?php echo $submission['users_id']; ?></td>
			<td><?php echo $submission['submission_status_id']; ?></td>
			<td><?php echo $submission['company_id']; ?></td>
			<td><?php echo $submission['experience_type_id']; ?></td>
			<td><?php echo $submission['submission_type_id']; ?></td>
			<td><?php echo $submission['created']; ?></td>
			<td><?php echo $submission['modified']; ?></td>
			<td><?php echo $submission['user_display_name']; ?></td>
			<td><?php echo $submission['user_email_address']; ?></td>
			<td><?php echo $submission['user_phone_number']; ?></td>
			<td><?php echo $submission['recommendation_level']; ?></td>
			<td><?php echo $submission['user_company_website']; ?></td>
			<td><?php echo $submission['detected_website']; ?></td>
			<td><?php echo $submission['incident_date']; ?></td>
			<td><?php echo $submission['incident_address']; ?></td>
			<td><?php echo $submission['user_company_contacted']; ?></td>
			<td><?php echo $submission['user_amount_involved']; ?></td>
			<td><?php echo $submission['user_company_twitter_handle']; ?></td>
			<td><?php echo $submission['user_company_email']; ?></td>
			<td><?php echo $submission['user_company_name']; ?></td>
			<td><?php echo $submission['review']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'submissions', 'action' => 'view', $submission['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'submissions', 'action' => 'edit', $submission['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'submissions', 'action' => 'delete', $submission['id']), null, __('Are you sure you want to delete # %s?', $submission['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
