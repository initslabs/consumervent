

<div class="header-top">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<h3 style="font-size: 36px;">  <?php echo $submissionInfo['Company']['name']; ?> </h3>
			</div>
		</div>
	</div>
</div>

<div style="padding: 102px 0;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
				<table class="table table-bordered table-striped">
					<tr>
						<td>Business</td>
						<td><?php echo $submissionInfo['Company']['name']; ?></td>
					</tr>
					<tr>
						<td>
							Business Website
						</td>
						<td>
							<?php echo $this->Html->link($submissionInfo['Company']['website'], $submissionInfo['Company']['website'], ['target' => '_blank']); ?>
						</td>
					</tr>
					<tr>
						<td>
							Contact Email
						</td>
						<td>
							We found
								<span class="label label-info">
									 <?php
									 $emailAddresses = explode(",", $submissionInfo['Company']['email_address']);
									 echo count($emailAddresses);
									 ?>
								</span> &nbsp;
							email address<?php echo count($emailAddresses) == 1 ? '' : 'es'; ?> on file for this
							company.<br/>
							<?php print_r($emailAddresses); ?>
						</td>
					</tr>
					<tr>
						<td>
							How would you rate your experience with this business or service?
						</td>
						<td>
							<?php echo $submissionInfo['ExperienceType']['name']; ?>
						</td>
					</tr>

					<tr>
						<td>
							Do you have issues with the service/business you want to report?
						</td>
						<td>
							<?php if (!$submissionIssues) { ?>
								- None -
							<?php } else {
								foreach ($submissionIssues as $issue) {
									?>
									<li><?php echo $issue['IssueType']['name']; ?></li>
								<?php } ?>
							<?php } ?>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							Your Review<br/>
							<hr/>
							<div class="container-fluid">
								<?php echo $submissionInfo['Submission']['review']; ?>
							</div>
						</td>
					</tr>

					<tr>
						<th colspan="2">
							Submitted By
						</th>
					</tr>
					<tr>
						<td width="45%">Name Displayed</td>
						<td>
							<?php echo $submissionInfo['Submission']['user_display_name']; ?>
						</td>
					</tr>


				</table>
			</div>
		</div>
	</div>
</div>