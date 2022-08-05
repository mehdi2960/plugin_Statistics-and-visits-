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

            <div id="postbox-container-2" class="postbox-container">
                <div id="normal-sortables" class="meta-box-sortables ui-sortable">
                    <div id="dashboard_right_now" class="postbox">
                        <div class="postbox-header">
                            <h2 class="hndle ui-sortable-handle">نمودار آمار بازدید براساس بازدید کل</h2>
                        </div>
                        <div class="inside">
                            <div class="main">
                                <canvas id="wpsChart" width="400" height="400"></canvas>
                                <script>
                                    const ctx = document.getElementById('wpsChart');
                                    const myChart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: <?php echo json_encode($visitsDates);?>,
                                            datasets: [{
                                                label: '# تعداد بازدید',
                                                data:  <?php echo json_encode($totalVisits);?>,
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgba(255, 99, 132, 1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(75, 192, 192, 1)',
                                                    'rgba(153, 102, 255, 1)',
                                                    'rgba(255, 159, 64, 1)'
                                                ],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>