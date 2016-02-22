<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h3 style="font-size: 36px;"> Submissions </h3>
            </div>
        </div>
    </div>
</div>


<div style="padding: 102px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <div class="text-left">
                        <?php echo $this->Html->link(' Submit Submissions ', 'submitReview', ['class' => 'btn btn-lg submit']); ?>
                    </div>
                    <p class="text-right">
                        <?php echo $this->Paginator->counter(array(
                            'format' => __('Showing {:current} submission out of {:count} total')
                        ));
                        ?>
                    </p>
                </div>
                <?php foreach ($submissions as $submission) { ?>
                    <div class="row">
<!--                        <div class="col-md-2">-->
<!---->
<!--                        </div>-->
                        <div class="col-md-12">
                            <div>
                                <p class="more name_style"><?php echo $submission['Submission']['user_display_name']; ?></p>
                            </div>

                            <div>
                                <h4 class="media-heading"
                                    style="    margin-bottom: 10px;"><?php echo $submission['Company']['name']; ?></h4>
                                <div>
                                    <p class="ft_style">
                                        <i class="fa fa-sticky-note"></i>
                                        <?php echo $submission['Submission']['recommendation_level']; ?>

                                        &nbsp;&nbsp;&nbsp;

                                        <i class="fa fa-tasks"></i>
                                        <?php echo $submission['ExperienceType']['name']; ?>

                                        &nbsp;&nbsp;&nbsp;

                                        <i class="fa fa-calendar"></i>
                                        <?php echo date("F j, Y, g:i a", strtotime($submission['Submission']['created'])); ?>
                                    </p>
                                    <!--								<div class="devider1" style="    margin-bottom: 10px;"></div>-->
                                    <div style="margin-bottom: 30px;">
                                        <p><?php echo $this->Text->truncate($submission['Submission']['review'], 340,
                                                array(
                                                    'ellipsis' => '...',
                                                    'exact' => false
                                                )
                                            ); ?></p>
                                        <div>
                                            <p class="more pull-left"><?php echo $this->Html->link('Read More ', "viewSubmission/{$submission['Submission']['id']}"); ?></p>
                                            <p class="more pull-right"><i class="fa fa-comments"></i> 2 comments</p>
                                            <div style="clear: both"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="text-center">
            <p>
                <?php echo $this->Paginator->counter(array(
                    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
                ));
                ?>    </p>
            <ul class="pagination pagination-sm">
                <?php
                echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
                echo $this->Paginator->numbers(array('separator' => ''));
                echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
                ?>
            </ul>
        </div>

    </div>
</div>