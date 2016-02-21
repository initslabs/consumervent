<div class="submissionIssues form">
<?php echo $this->Form->create('SubmissionIssue'); ?>
	<fieldset>
		<legend><?php echo __('Edit Submission Issue'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('submission_id');
		echo $this->Form->input('issue_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SubmissionIssue.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SubmissionIssue.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Submission Issues'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Issue Types'), array('controller' => 'issue_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Issue Type'), array('controller' => 'issue_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
