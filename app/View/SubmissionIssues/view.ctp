<div class="submissionIssues view">
<h2><?php echo __('Submission Issue'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($submissionIssue['SubmissionIssue']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Submission'); ?></dt>
		<dd>
			<?php echo $this->Html->link($submissionIssue['Submission']['id'], array('controller' => 'submissions', 'action' => 'view', $submissionIssue['Submission']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Issue Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($submissionIssue['IssueType']['name'], array('controller' => 'issue_types', 'action' => 'view', $submissionIssue['IssueType']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Submission Issue'), array('action' => 'edit', $submissionIssue['SubmissionIssue']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Submission Issue'), array('action' => 'delete', $submissionIssue['SubmissionIssue']['id']), null, __('Are you sure you want to delete # %s?', $submissionIssue['SubmissionIssue']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Submission Issues'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission Issue'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Issue Types'), array('controller' => 'issue_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Issue Type'), array('controller' => 'issue_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
