<div class="header-top">
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-offset-2 text-center">
            <h3 style="font-size: 36px;">Final Review</h3>
        </div>
    </div>
    </div>
</div>

<div style="padding: 102px 0;">
    <div class="container">
        <?php echo $this->Form->create('Submission'); ?>
        <div class="row">
        <div class="col-md-10 col-lg-offset-1">
            <p style="font-size: 15px;margin-bottom: 27px;">We have included your contact details and name in the information we are sending to "COMPANY_NAME" but you can change
                that below if you do not want to reveal that to the company. Only your "DISPLAY NAME" will be publicly available
                on this site.
            </p>
        <div class="row">
            <div class="col-md-8">
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
                            <?php if (count($emailAddresses)) { ?>
                                We will contact them using this information immediately
                            <?php } ?>
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
                                foreach ($submissionIssues as $issue) { ?>
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
                            <?php echo $this->Form->input('user_display_name', ['label' => false, 'class' => 'form-control']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Contact Email (Only shown to company)</td>
                        <td>
                            <?php echo $this->Form->input('user_email_address', ['label' => false, 'class' => 'form-control']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Contact Phone (Only shown to company)</td>
                        <td>
                            <?php echo $this->Form->input('user_phone_number', ['label' => false, 'class' => 'form-control']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            Your submission of this report implies that you agree to the Terms of the Submission as
                            displayed on this page
                        </td>
                    </tr>
                    <tr>
                      <td colspan="2" class="text-right">
                          <?php echo $this->Form->submit('Submit', ['class' => 'btn btn-primary']); ?>
                      </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4">
                <h3>Terms of Submission</h3>
                <div class="row">
                    <div class="col-md-12 text-justify">
                        <p>I certify that this Customer Review is my genuine opinion of this business and that I have no
                        personal or business affiliation with this business, and have not been offered or received any
                        incentive or compensation originating from the business to write this review.
                        </p>
                        <p>
                            By submitting this Customer Review, I am representing that it is a truthful account of my
                            experience with the business. I understand that I alone am legally responsible for the truth of
                            what I write.
                        </p>
                        <p>
                            I understand that:<br/>
                        </p>
                        <p>
                            This Customer Review, along with my contact information, will be sent to the business for
                            validation.
                        </p>
                        <p>
                            The text of my Customer Review will be publicly posted on this website for 2 years and
                            ConsumerVent (this website) reserves the right to not post in accordance with ConsumerVent
                            policy.
                        </p>
                        <p>
                            ConsumerVent may edit your Customer Review to protect privacy rights and to remove inappropriate
                            language. Please do not include any personally identifiable information in describing your
                            Customer Review. ConsumerVent will remove your review if you ask us in writing to do so.
                            ConsumerVent will also remove reviews it determines to be falsified or to not involve an actual
                            marketplace interaction.
                        </p>
                    </div>
                    <!--	 <div class="col-md-1"></div>-->
                </div>
            </div>
        </div>
        </div>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>