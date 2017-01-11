<?php echo $__env->make('admin.public.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <div class="wrapper wrapper-content">
<div class="col-sm-10">

    <div class="row">
        <div class="col-sm-4">
            <div class="row row-sm text-center">
                <div class="col-xs-6">
                    <div class="panel padder-v item">
                        <div class="h1 text-info font-thin h1">521</div>
                        <span class="text-muted text-xs">同比增长</span>
                        <div class="top text-right w-full">
                            <i class="fa fa-caret-down text-warning m-r-sm"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="panel padder-v item bg-info">
                        <div class="h1 text-fff font-thin h1">521</div>
                        <span class="text-muted text-xs">今日访问</span>
                        <div class="top text-right w-full">
                            <i class="fa fa-caret-down text-warning m-r-sm"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="panel padder-v item bg-primary">
                        <div class="h1 text-fff font-thin h1">521</div>
                        <span class="text-muted text-xs">销售数量</span>
                        <div class="top text-right w-full">
                            <i class="fa fa-caret-down text-warning m-r-sm"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="panel padder-v item">
                        <div class="font-thin h1">$129</div>
                        <span class="text-muted text-xs">近日盈利</span>
                        <div class="bottom text-left">
                            <i class="fa fa-caret-up text-warning m-l-sm"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="ibox float-e-margins">
                <div class="ibox-title" style="border-bottom:none;background:#fff;">
                    <h5>服务器状态</h5>
                </div>
                <div class="ibox-content" style="border-top:none;">
                    <div id="flot-line-chart-moving" style="height: 217px; padding: 0px; position: relative;"><canvas class="base" width="860" height="217"></canvas><canvas class="overlay" width="860" height="217" style="position: absolute; left: 0px; top: 0px;"></canvas><div class="tickLabels" style="font-size:smaller"><div class="xAxis x1Axis" style="color:#999999"></div><div class="yAxis y1Axis" style="color:#999999"><div class="tickLabel" style="position:absolute;text-align:right;top:189px;right:839px;width:21px">0</div><div class="tickLabel" style="position:absolute;text-align:right;top:148px;right:839px;width:21px">25</div><div class="tickLabel" style="position:absolute;text-align:right;top:108px;right:839px;width:21px">50</div><div class="tickLabel" style="position:absolute;text-align:right;top:68px;right:839px;width:21px">75</div><div class="tickLabel" style="position:absolute;text-align:right;top:28px;right:839px;width:21px">100</div></div></div></div>
                </div>
            </div>
        </div>
    </div>

</div>
      <div class="col-sm-2">
          <div class="ibox float-e-margins">
              <div class="ibox-title">
                  <h5>任务列表</h5>
              </div>
              <div class="ibox-content">
                  <ul class="todo-list m-t small-list ui-sortable">
                      <li>
                          <a href="widgets.html#" class="check-link"><i class="fa fa-check-square"></i> </a>
                          <span class="m-l-xs todo-completed">吃饭</span>

                      </li>
                      <li>
                          <a href="widgets.html#" class="check-link"><i class="fa fa-check-square"></i> </a>
                          <span class="m-l-xs  todo-completed">多吃饭</span>

                      </li>
                      <li>
                          <a href="widgets.html#" class="check-link"><i class="fa fa-square-o"></i> </a>
                          <span class="m-l-xs">睡觉</span>
                          <small class="label label-primary"><i class="fa fa-clock-o"></i> 1小时</small>
                      </li>
                      <li>
                          <a href="widgets.html#" class="check-link"><i class="fa fa-square-o"></i> </a>
                          <span class="m-l-xs">睡觉</span>
                          <small class="label label-primary"><i class="fa fa-clock-o"></i> 1小时</small>
                      </li>
                      <li>
                          <a href="widgets.html#" class="check-link"><i class="fa fa-square-o"></i> </a>
                          <span class="m-l-xs">睡觉</span>
                          <small class="label label-primary"><i class="fa fa-clock-o"></i> 1小时</small>
                      </li>

                  </ul>
              </div>
          </div>
      </div>
  </div>


<?php echo $__env->make('admin.public.tail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>