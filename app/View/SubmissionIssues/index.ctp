<div class="submissionIssues index">
	<h2><?php echo __('Submission Issues'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('submission_id'); ?></th>
			<th><?php echo $this->Paginator->sort('issue_type_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($submissionIssues as $submissionIssue): ?>
	<tr>
		<td><?php echo h($submissionIssue['SubmissionIssue']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($submissionIssue['Submission']['id'], array('controller' => 'submissions', 'action' => 'view', $submissionIssue['Submission']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($submissionIssue['IssueType']['name'], array('controller' => 'issue_types', 'action' => 'view', $submissionIssue['IssueType']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $submissionIssue['SubmissionIssue']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $submissionIssue['SubmissionIssue']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $submissionIssue['SubmissionIssue']['id']), null, __('Are you sure you want to delete # %s?', $submissionIssue['SubmissionIssue']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Submission Issue'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Issue Types'), array('controller' => 'issue_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Issue Type'), array('controller' => 'issue_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
