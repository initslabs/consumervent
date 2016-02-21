<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="container">
	 <?php foreach($submissions as $submission){ ?>
	<div class="media">
  
  <div class="media-body">
    <h4 class="media-heading"><?php echo $submission['Company']['name']; ?></h4>
    <?php echo $submission['Submission']['review']; ?> | 
	 <?php echo $this->Html->link('View Details',"viewSubmission/{$submission['Submission']['id']}"); ?>
	 <br />
	 <?php echo $submission['Submission']['user_display_name']; ?> | 
	 <?php echo isset($submission['User']['id'])? $submission['User']['display_name']:''; ?>
	 
	 <?php echo $submission['Submission']['recommendation_level']; ?>
	 <?php echo $submission['ExperienceType']['name']; ?>
  </div>
</div>
	 <?php } ?>
	 
<p>&nbsp;</p>
<p>&nbsp;</p>
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
<?php
echo $this->Html->link('Submit Review','submitReview',['class'=>'btn btn-lg btn-danger']);

?>

</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
