<div class="wrap">
    <h2>آمار بازدید کاربران</h2>

    <div class="dashboard-widgets-wrap">
        <div id="dashboard-widgets" class="metabox-holder">
            <div id="postbox-container-1" class="postbox-container">
                <div id="normal-sortables" class="meta-box-sortables ui-sortable">
                    <div id="dashboard_right_now" class="postbox">
                        <div class="postbox-header"><h2 class="hndle ui-sortable-handle">خلاصه آمار بازدید</h2>
                        </div>
                        <div class="inside">
                            <div class="main">
                                <p>
                                    <span>بازدید کل: </span>
                                    <span><?php echo $totalVisits->total_visits;?></span>
                                </p>
                                <p>
                                    <span>بازدید یکتای کل: </span>
                                    <span><?php echo $totalVisits->totla_unique_visits;?></span>
                                </p>
                                <p>
                                    <span>بازدید کل امروز: </span>
                                    <span><?php echo $todayStatitics->total_visits;?></span>
                                </p>
                                <p>
                                    <span>بازدید یکتای امروز: </span>
                                    <span><?php echo $todayStatitics->unique_visits;?></span>
                                </p>
<!--                                <p>-->
<!--                                    <span>بازدید کل دیروز: </span>-->
<!--                                    <span>--><?php //echo intval($yesterdayStatitics->total_visits);?><!--</span>-->
<!--                                </p>-->
<!--                                <p>-->
<!--                                    <span>بازدید یکتای دیروز: </span>-->
<!--                                    <span>--><?php //echo intval($yesterdayStatitics->unique_visits);?><!--</span>-->
<!--                                </p>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>