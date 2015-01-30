<?php $view->layout('ui/layout.php') ?>

<link rel="stylesheet" href="<?= $appAsset([
    'plugins/ui/assets/border.css',
    'plugins/ui/assets/modal.css',
    'plugins/ui/assets/loading.css',
    'plugins/ui/assets/tab.css',
    'plugins/ui/assets/form.css',
    'plugins/ui/assets/list.css',
    'plugins/ui/assets/switch.css',
    'assets/components/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css',
    'plugins/ui/assets/example.css'
]) ?>">
<script src="<?= $appAsset([
    'plugins/ui/assets/base.js',
    'plugins/ui/assets/data.js',
    'plugins/ui/assets/modal.js',
    'plugins/ui/assets/loading.js',
    'plugins/ui/assets/form.js',
    'plugins/ui/assets/bootstrap/js/bootstrap.js',
    'assets/bootstrapPopup.js',
]) ?>"></script>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-8 col-md-offset-2 example-list">

            <div class="example-nav">
                <div class="btn-group btn-group-justified tab-btn-group">
                    <a class="btn btn-default active" href="#example-list">
                        列表
                    </a>

                    <a class="btn btn-default" href="#example-form">
                        表单
                    </a>

                    <a class="btn btn-default" href="#example-loading">
                        加载中
                    </a>

                    <a class="btn btn-default" href="#example-tab">
                        选项卡
                    </a>

                    <a class="btn btn-default" href="#example-text">
                        文本
                    </a>

                    <a class="btn btn-default" href="#example-btn">
                        按钮
                    </a>

                    <a class="btn btn-default" href="#example-modal">
                        对话框
                    </a>
                </div>
            </div>

            <!--<style type="text/css">
                .click-handlers a {
                    display: inline-block;
                    padding: 12px 16px;
                    margin: 4px;
                }
            </style>

            <div class="click-handlers">
                <a href="#" id="click" class="bg-warning">$().click()</a>
                <a href="#" id="bind-click" class="bg-warning">$().bind('click')</a>
                <a href="#" id="on-click" class="bg-warning">$().on('click')</a>
                <a href="#" id="trigger-click" class="bg-warning">$().trigger('click')</a>
            </div>

            <script>
                // 将Click
                if (1) {
                    var oldBind = $.fn.bind,
                        oldUnbind = $.fn.unbind;
                    $.fn.bind = function( evt ){
                        if( /(^| )click( |$)/.test( evt ) ){
                            evt = evt.replace('click', 'tap');
                        }
                        return oldBind.apply( this, arguments );
                    };
                    $.fn.unbind = function( evt ){
                        if( /(^| )tap( |$)/.test( evt ) ){
                            evt = evt.replace('click', 'tap');
                        }
                        return oldUnbind.apply( this, arguments );
                    };
                }

                $('#click').click(function () {
                    alert(1);
                });
                $('#bind-click').bind('click', function () {
                    alert(2);
                });
                $('#on-click').on('click', function () {
                    alert(3);
                });
                $('#trigger-click').click(function () {
                    $('#on-click').trigger('click');
                });
            </script>-->

            <h3 id="example-list">列表</h3>

            <p>文字列表</p>
            <div class="example">
                <ul class="list">
                    <li class="list-item">
                        <h4 class="list-heading">
                            标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题
                        </h4>
                    </li>
                    <li class="list-item">
                        <h4 class="list-heading">
                            标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题
                        </h4>
                    </li>
                </ul>
            </div>

            <p>链接列表</p>
            <div class="example">
                <ul class="list">
                    <li>
                        <a href="javascript:;" class="list-item">
                            <h4 class="list-heading">
                                标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题
                            </h4>
                            <i class="fa fa-angle-right list-icon"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="list-item">
                            <h4 class="list-heading">
                                标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题
                            </h4>
                            <i class="fa fa-angle-right list-icon"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <p>右边显示自定义图标</p>
            <div class="example">
                <ul class="list">
                    <li>
                        <a href="javascript:;" class="list-item text-primary">
                            <h4 class="list-heading">
                                标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题
                            </h4>
                            <i class="fa fa-check list-icon"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="list-item">
                            <h4 class="list-heading">
                                标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题
                            </h4>
                        </a>
                    </li>
                </ul>
            </div>

            <p>右边显示badge</p>
            <p>注意: Bootstrap badge用作未读消息数量,暂时只有一种颜色</p>
            <div class="example">
                <ul class="list">
                    <li>
                        <a  href="javascript:;" class="list-item">
                            <h4 class="list-heading">
                                标题标题标题标题标题标
                                <span class="badge pull-right">14</span>
                            </h4>
                        </a>
                    </li>
                    <li>
                        <a  href="javascript:;" class="list-item">
                            <h4 class="list-heading">
                                标题标题标题标题标题标
                                <span class="badge pull-right">5</span>
                            </h4>
                        </a>
                    </li>
                </ul>
            </div>

            <p>li标签,但是可以点击</p>
            <!-- TODO高度变45px了 -->
            <div class="example">
                <ul class="list">
                    <li class="list-item list-link">
                        <h4 class="list-heading">
                            标题标题标题标题标题标
                        </h4>
                    </li>
                    <li class="list-item list-link">
                        <h4 class="list-heading">
                            标题标题标题标题标题标
                        </h4>
                    </li>
                </ul>
            </div>

            <p>标题和内容</p>
            <div class="example">
                <ul class="list">
                    <li>
                        <a class="list-item" href="javascript:;">
                            <div class="list-col">
                                <h4 class="list-heading">
                                    标题标题标题标题标题标题标题标题标题
                                </h4>
                                <div class="list-body">
                                    内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容
                                </div>
                            </div>
                            <i class="fa fa-angle-right list-icon"></i>
                        </a>
                    </li>
                    <li>
                        <a class="list-item" href="javascript:;">
                            <div class="list-col">
                                <h4 class="list-heading">
                                    标题标题标题标题标题标题标题标题标题
                                </h4>
                                <div class="list-body">
                                    内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容
                                </div>
                            </div>
                            <i class="fa fa-angle-right list-icon"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <p>标题和左边图片</p>
            <p>注意: 需指定图片父元素宽度</p>
            <div class="example">
                <ul class="list">
                    <li>
                        <a class="list-item" href="javascript:;">
                            <div class="list-col list-col-left" style="width: 28px">
                                <img class="" src="http://i.gtimg.cn/vipstyle/frozenui/1.0.0/img/default.png" alt="标题标题标题标题标题标题标题标题标题" />
                            </div>
                            <div class="list-col list-middle">
                                <h4 class="list-heading">
                                    标题标题标题标题标题标题标题标题标题
                                </h4>
                            </div>
                            <i class="fa fa-angle-right list-icon"></i>
                        </a>
                    </li>
                    <li>
                        <a class="list-item" href="javascript:;">
                            <div class="list-col list-col-left" style="width: 28px">
                                <img class="" src="http://i.gtimg.cn/vipstyle/frozenui/1.0.0/img/default.png" alt="标题标题标题标题标题标题标题标题标题" />
                            </div>
                            <div class="list-col list-middle">
                                <h4 class="list-heading">
                                    标题标题标题标题标题标题标题标题标题
                                </h4>
                            </div>
                            <i class="fa fa-angle-right list-icon"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <p>标题和左边大图</p>
            <div class="example">
                <ul class="list">
                    <li>
                        <a class="list-item" href="javascript:;">
                            <div class="list-col list-col-left" style="width: 100px">
                                <img class="" src="http://i.gtimg.cn/vipstyle/frozenui/1.0.0/img/default.png" alt="标题标题标题标题标题标题标题标题标题" />
                            </div>
                            <div class="list-col list-middle">
                                <h4 class="list-heading">
                                    标题标题标题标题标题标题标题标题标题
                                </h4>
                            </div>
                            <i class="fa fa-angle-right list-icon"></i>
                        </a>
                    </li>
                    <li>
                        <a class="list-item" href="javascript:;">
                            <div class="list-col list-col-left" style="width: 100px">
                                <img class="" src="http://i.gtimg.cn/vipstyle/frozenui/1.0.0/img/default.png" alt="标题标题标题标题标题标题标题标题标题" />
                            </div>
                            <div class="list-col list-middle">
                                <h4 class="list-heading">
                                    标题标题标题标题标题标题标题标题标题
                                </h4>
                            </div>
                            <i class="fa fa-angle-right list-icon"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <p>标题和右边图</p>
            <div class="example">
                <ul class="list">
                    <li>
                        <a class="list-item" href="javascript:;">
                            <div class="list-col list-middle">
                                <h4 class="list-heading">
                                    标题标题标题标题标题标题标题标题标题
                                </h4>
                            </div>
                            <div class="list-col" style="width: 79px">
                                <img class="" src="http://i.gtimg.cn/vipstyle/frozenui/1.0.0/img/default.png" alt="标题标题标题标题标题标题标题标题标题" />
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="list-item" href="javascript:;">
                            <div class="list-col list-middle">
                                <h4 class="list-heading">
                                    标题标题标题标题标题标题标题标题标题
                                </h4>
                            </div>
                            <div class="list-col" style="width: 79px">
                                <img class="" src="http://i.gtimg.cn/vipstyle/frozenui/1.0.0/img/default.png" alt="标题标题标题标题标题标题标题标题标题" />
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <p>标题和圆形图片</p>
            <p>注意: 需指定图片父元素宽度</p>
            <div class="example">
                <ul class="list">
                    <li>
                        <a class="list-item" href="javascript:;">
                            <div class="list-col list-col-left" style="width: 28px">
                                <img class="img-circle" src="http://i.gtimg.cn/vipstyle/frozenui/1.0.0/img/default.png" alt="标题标题标题标题标题标题标题标题标题" />
                            </div>
                            <div class="list-col list-middle">
                                <h4 class="list-heading">
                                    标题标题标题标题标题标题标题标题标题
                                </h4>
                            </div>
                            <i class="fa fa-angle-right list-icon"></i>
                        </a>
                    </li>
                    <li>
                        <a class="list-item" href="javascript:;">
                            <div class="list-col list-col-left" style="width: 28px">
                                <img class="img-circle" src="http://i.gtimg.cn/vipstyle/frozenui/1.0.0/img/default.png" alt="标题标题标题标题标题标题标题标题标题" />
                            </div>
                            <div class="list-col list-middle">
                                <h4 class="list-heading">
                                    标题标题标题标题标题标题标题标题标题
                                </h4>
                            </div>
                            <i class="fa fa-angle-right list-icon"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <p>标题,内容和图片</p>
            <div class="example">
                <ul class="list">
                    <li>
                        <a class="list-item" href="javascript:;">
                            <div class="list-col" style="width: 65px">
                                <img src="http://i.gtimg.cn/vipstyle/frozenui/1.0.0/img/default.png" alt="标题标题标题标题标题标题标题标题标题" />
                            </div>
                            <div class="list-col">
                                <h4 class="list-heading">
                                    标题标题标题标题标题标题标题标题标题
                                </h4>
                                <div class="list-body">
                                    内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容
                                </div>
                            </div>
                            <i class="fa fa-angle-right list-icon"></i>
                        </a>
                    </li>
                    <li>
                        <a class="list-item" href="javascript:;">
                            <div class="list-col" style="width: 65px">
                                <img src="http://i.gtimg.cn/vipstyle/frozenui/1.0.0/img/default.png" alt="标题标题标题标题标题标题标题标题标题" />
                            </div>
                            <div class="list-col">
                                <h4 class="list-heading">
                                    标题标题标题标题标题标题标题标题标题
                                </h4>
                                <div class="list-body">
                                    内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容
                                </div>
                            </div>
                            <i class="fa fa-angle-right list-icon"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <p>控制只有标题和图片可点击</p>
            <div class="example">
                <ul class="list">
                    <li class="list-item">
                        <div class="list-col">
                            <h4 class="list-heading">
                                <a href="javascript:;">只有标题和图片可以点击</a>
                            </h4>
                            <div class="list-body">
                                内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容
                            </div>
                        </div>
                        <div class="list-col" style="width: 79px">
                            <a href="javascript:;"><img class="" src="http://i.gtimg.cn/vipstyle/frozenui/1.0.0/img/default.png" alt="标题标题标题标题标题标题标题标题标题" /></a>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="list-col">
                            <h4 class="list-heading">
                                <a href="javascript:;">只有标题和图片可以点击</a>
                            </h4>
                            <div class="list-body">
                                内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容
                            </div>
                        </div>
                        <div class="list-col" style="width: 79px">
                            <a href="javascript:;"><img class="" src="http://i.gtimg.cn/vipstyle/frozenui/1.0.0/img/default.png" alt="标题标题标题标题标题标题标题标题标题" /></a>
                        </div>
                    </li>
                </ul>
            </div>

            <p>各类样式汇总</p>
            <div class="example">
                <ul class="list" id="list-1">
                    <li>
                        <a class="list-item" href="javascript:;">
                            <div class="list-row">
                                <img src="http://i.gtimg.cn/vipstyle/frozenui/1.0.0/img/default.png" alt="标题标题标题标题标题标题标题标题标题" />
                            </div>
                            <div class="list-row">
                                <h4 class="list-heading">
                                    标题标题标题标题标题标题标题标题标题
                                </h4>
                                <div class="list-body">
                                    内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容
                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a class="list-item" href="javascript:;">
                            <div class="list-col" style="width: 100px">
                                <img class="" src="http://i.gtimg.cn/vipstyle/frozenui/1.0.0/img/default.png" alt="标题标题标题标题标题标题标题标题标题" />
                            </div>
                            <div class="list-col">
                                <h4 class="list-heading">
                                    标题标题标题标题标题标题标题标题标题
                                </h4>
                                <div class="list-body">
                                    内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容
                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a class="list-item" href="javascript:;">
                            <div class="list-col">
                                <h4 class="list-heading">
                                    标题标题标题标题标题标题标题标题标题
                                </h4>
                                <div class="list-body">
                                    内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容
                                </div>
                            </div>
                            <div class="list-col" style="width: 79px">
                                <img class="" src="http://i.gtimg.cn/vipstyle/frozenui/1.0.0/img/default.png" alt="标题标题标题标题标题标题标题标题标题" />
                            </div>
                        </a>
                    </li>

                    <li class="list-item">
                        <div class="list-col">
                            <h4 class="list-heading">
                                <a href="javascript:;">只有标题和图片可以点击</a>
                            </h4>
                            <div class="list-body">
                                内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容
                            </div>
                        </div>
                        <div class="list-col" style="width: 79px">
                            <a href="javascript:;"><img class="" src="http://i.gtimg.cn/vipstyle/frozenui/1.0.0/img/default.png" alt="标题标题标题标题标题标题标题标题标题" /></a>
                        </div>
                    </li>

                    <li>
                        <a class="list-item" href="javascript:;">
                            <div class="list-col" style="width: 65px">
                                <img class="img-circle" src="http://i.gtimg.cn/vipstyle/frozenui/1.0.0/img/default.png" alt="标题标题标题标题标题标题标题标题标题" />
                            </div>
                            <div class="list-col">
                                <h4 class="list-heading">
                                    标题标题标题标题标题标题标题标题标题
                                </h4>
                                <div class="list-body">
                                    内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容
                                </div>
                            </div>
                            <i class="fa fa-angle-right list-icon"></i>
                        </a>
                    </li>

                    <li>
                        <a class="list-item" href="javascript:;">
                            <div class="list-col" style="width: 65px">
                                <img src="http://i.gtimg.cn/vipstyle/frozenui/1.0.0/img/default.png" alt="标题标题标题标题标题标题标题标题标题" />
                            </div>
                            <div class="list-col">
                                <h4 class="list-heading">
                                    标题标题标题标题标题标题标题标题标题
                                </h4>
                            </div>
                            <i class="fa fa-angle-right list-icon"></i>
                        </a>
                    </li>

                    <li>
                        <a class="list-item" href="javascript:;">
                            <div class="list-col list-col-left" style="width: 44px">
                                <img class="" src="http://i.gtimg.cn/vipstyle/frozenui/1.0.0/img/default.png" alt="标题标题标题标题标题标题标题标题标题" />
                            </div>
                            <div class="list-col list-middle">
                                <h4 class="list-heading">
                                    标题标题标题标题标题标题标题标题标题
                                </h4>
                            </div>
                            <i class="fa fa-angle-right list-icon"></i>
                        </a>
                    </li>

                    <li>
                        <a class="list-item" href="javascript:;">
                            <div class="list-col">
                                <h4 class="list-heading">
                                    标题标题标题标题标题标题标题标题标题
                                </h4>
                                <div class="list-body">
                                    内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容
                                </div>
                            </div>
                            <i class="fa fa-angle-right list-icon"></i>
                        </a>
                    </li>

                    <li>
                        <a class="list-item" href="javascript:;">
                            <div class="list-col">
                                <h4 class="list-heading">
                                    标题标题标题标题标题标题标题标题标题
                                </h4>
                            </div>
                            <i class="fa fa-angle-right list-icon"></i>
                        </a>
                    </li>

                    <li class="list-item">
                        <div class="list-col">
                            <h4 class="list-heading">
                                没有a标签,不可以点击
                            </h4>
                        </div>
                    </li>

                    <li class="list-item list-link">
                        <div class="list-col">
                            <h4 class="list-heading">
                                可点击的li标签
                            </h4>
                        </div>
                    </li>

                    <li>
                        <a  href="javascript:;" class="list-item">
                            <h4 class="list-heading">
                                标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题
                            </h4>
                            <i class="fa fa-angle-right list-icon"></i>
                        </a>
                    </li>

                    <li class="list-item">
                        <h4 class="list-heading">
                            标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题
                        </h4>
                    </li>

                    <li>
                        <a  href="javascript:;" class="list-item">
                            <h4 class="list-heading">
                                标题标题标题标题标题标
                                <span class="badge pull-right">14</span>
                            </h4>
                        </a>
                    </li>
                </ul>

                <div id="list-styles" style="padding:15px">
                    <button type="button" id="list-indented" class="btn btn-default">.list-indented</button>
                    <button type="button" id="list-inset" class="btn btn-default">.list-inset</button>
                    <button type="button" id="list-bordered" class="btn btn-default">.list-bordered</button>
                    <button type="button" id="list-striped" class="btn btn-default">.list-striped</button>
                    <button type="button" id="list-hover" class="btn btn-default">.list-hover</button>
                </div>

                <script>
                    $('#list-styles button').click(function(){
                        $('#list-1').toggleClass(this.id);
                        $(this).toggleClass('active');
                    });
                </script>
            </div>

            <p>小缩略图+链接+简介列表</p>
            <div class="example">
                <style type="text/css">
                    /* FIXME */
                    #list-2 .list-heading small {
                        line-height: 18px;
                    }

                    #list-2 .list-col img {
                        width: 100px;
                        height: 80px;
                        border-radius: 3px;
                    }

                    #list-2 .list-heading {
                        white-space: normal;
                        line-height: normal;
                    }

                    #list-2 .price {
                        font-size: 18px;
                        color: #ff3a00
                    }

                    #list-2 .orig-price {
                        text-decoration: line-through;
                        color: #999;
                    }

                    #list-2 .promotion {
                        border: 1px solid #FF764E;
                        border-radius: 3px;
                        display: inline-block;
                        color: #FF764E;
                        padding: 0 2px;
                    }
                </style>
                <ul class="list list-indented" id="list-2">
                    <li class="list-item">
                        <h4 class="list-heading">
                            千味涮(广富百货店)
                            <small class="pull-right">650m</small>
                        </h4>
                    </li>
                    <li>
                        <a href="javascript:;" class="list-item">
                            <div class="list-col" style="width: 100px">
                                <img src="http://i1.s2.dpfile.com/pc/mc/6442aa66be8fd42b66e555eb92ff15c8(246c184)/thumb.jpg">
                            </div>
                            <div class="list-col list-middle">
                                <h4 class="list-heading">代金券，不限时段通用，可累积使用</h4>
                                <div class="list-body">
                                    <span class="price">￥78</span>
                                    <span class="orig-price">￥100</span>
                                    <span class="promotion">返现1%</span>
                                    <span class="like pull-right text-muted">
                                        <i class="fa fa-thumbs-up"></i>1199
                                    </span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="list-item">
                            <div class="list-col" style="width: 100px">
                                <img src="http://i1.s2.dpfile.com/pc/mc/6442aa66be8fd42b66e555eb92ff15c8(246c184)/thumb.jpg">
                            </div>
                            <div class="list-col list-middle">
                                <h4 class="list-heading">代金券，不限时段通用，可累积使用</h4>
                                <div class="list-body">
                                    <span class="price">￥78</span>
                                    <span class="orig-price">￥100</span>
                                    <span class="promotion">返现1%</span>
                                    <span class="like pull-right text-muted">
                                        <i class="fa fa-thumbs-up"></i>1199
                                    </span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <h3 id="example-form">表单</h3>

            <p>支持控件概览</p>
            <div class="example">
                <form action="#" class="form-combined">
                    <div class="form-legend">基础设置</div>

                    <div class="form-group">
                        <label for="email" class="control-label">
                            邮箱
                        </label>

                        <div class="col-control">
                            <input type="text" id="email" class="form-control" placeholder="请输入邮箱">
                        </div>
                    </div>

                    <fieldset>
                        <legend>基础设置</legend>

                        <div class="form-group">
                            <label for="email-readonly" class="control-label">
                                邮箱(只读)
                            </label>

                            <div class="col-control">
                                <input type="text" id="email-readonly" value="twinhuang@qq.com" class="form-control" readonly>
                            </div>
                        </div>

                        <div class="form-group has-feedback has-clear">
                            <label for="idCard" class="control-label">
                                身份证号码
                            </label>

                            <div class="col-control">
                                <input type="text" id="idCard" class="form-control" placeholder="18位身份证号码" value="123456789">
                                <a href="javascript:;" class="fa fa-times-circle form-control-feedback"></a>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend class="border-bottom">详细设置</legend>

                        <div class="form-group">
                            <label for="sex2" class="control-label">
                                性别
                            </label>

                            <div class="col-control">
                                <select class="form-control" id="sex2">
                                    <option>男</option>
                                    <option>女</option>
                                </select>
                                <a href="javascript:;" class="fa fa-angle-right form-control-feedback"></a>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">
                                性别
                            </label>

                            <div class="col-control">
                                <div class="radio radio-info border-bottom">
                                    <input id="radio3" type="radio" name="radio3" checked>
                                    <label for="radio3">
                                        男
                                    </label>
                                </div>
                                <div class="radio radio-info">
                                    <input id="radio4" type="radio" name="radio3">
                                    <label for="radio4">
                                        女
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="#" class="control-label">
                                详细地址
                            </label>

                            <div class="col-control">
                                <textarea placeholder="街道等详细地址" class="form-control" rows="2"></textarea>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group">
                        <div class="col-control">
                            <input type="password" class="form-control" placeholder="密码">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label text-primary text-center border-right" for="phone">中国 +86</label>

                        <div class="col-control">
                            <input type="text" class="form-control" id="phone" placeholder="请输入手机号码">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-control">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="请输入验证码">
                                <span class="input-group-btn border-left">
                                    <button class="text-primary btn btn-default activatable" type="button">重新发送</button>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-control">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="请输入验证码">
                                    <span class="input-group-btn border-left">
                                      <button class="text-primary btn btn-default activatable disabled" type="button">重新发送</button>
                                    </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="checkbox1" style="width: auto">对附近的人可见</label>

                        <div class="col-control">
                            <label for="#" class="switch">
                                <input type="checkbox" id="checkbox1" checked/>
                            </label>
                        </div>
                    </div>

                    <div class="form-group activatable">
                        <div class="col-control">
                            <a href="javascript:;">清空消息列表</a>
                        </div>
                    </div>

                    <div class="form-group activatable">
                        <label for="#" class="control-label">账号</label>

                        <div class="col-control">
                            <input type="text" class="form-control" value="421205351" readonly>
                        </div>
                    </div>

                    <div class="form-group form-actions">
                        <button type="submit" class="btn btn-primary btn-block">保存</button>
                    </div>
                </form>
            </div>

            <p>Radio</p>
            <div class="example">
                <form action="#" class="form-combined">
                    <div class="form-legend">性别</div>
                    <div class="form-group">
                        <div class="col-control">
                            <div class="radio radio-info border-bottom">
                                <input id="radio5" type="radio" name="radio5" checked>
                                <label for="radio5">
                                    男
                                </label>
                            </div>
                            <div class="radio radio-info">
                                <input id="radio6" type="radio" name="radio5">
                                <label for="radio6">
                                    女
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-control">
                            <div class="radio radio-danger">
                                <input id="radio2" type="radio" name="radio1" checked>
                                <label for="radio2">
                                    用于一般单选或多选普通操作
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-control">
                            <div class="radio radio-danger">
                                <input id="radio1" type="radio" name="radio1">
                                <label for="radio1">
                                    内容内容内容内容内容内容内容内容内容内容内容内容内容内容
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <p>Checkbox,每个一行</p>
            <div class="example">
                <form class="form-combined">
                    <fieldset>
                        <legend>爱好</legend>

                        <div class="form-group">
                            <div class="col-control">
                                <div class="checkbox checkbox-circle checkbox-info">
                                    <input id="checkbox5" type="checkbox" name="checkbox5" checked>
                                    <label for="checkbox5">
                                        运动
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-control">
                                <div class="checkbox checkbox-circle checkbox-info">
                                    <input id="checkbox6" type="checkbox" name="checkbox6">
                                    <label for="checkbox6">
                                        唱歌
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-control">
                                <div class="checkbox checkbox-circle checkbox-info">
                                    <input id="checkbox7" type="checkbox" name="checkbox7">
                                    <label for="checkbox7">
                                        吃吃吃
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>

            <p>Checkbox带左边label</p>
            <div class="example">
                <form class="form-combined">
                    <div class="form-group">
                        <label class="control-label">爱好</label>
                        <div class="col-control">
                            <div class="checkbox checkbox-circle checkbox-info border-bottom">
                                <input id="checkbox8" type="checkbox" name="checkbox5" checked>
                                <label for="checkbox8">
                                    运动
                                </label>
                            </div>
                            <div class="checkbox checkbox-circle checkbox-info border-bottom">
                                <input id="checkbox9" type="checkbox" name="checkbox5">
                                <label for="checkbox9">
                                    唱歌
                                </label>
                            </div>
                            <div class="checkbox checkbox-circle checkbox-info">
                                <input id="checkbox10" type="checkbox" name="checkbox10">
                                <label for="checkbox10">
                                    吃吃吃
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <p>Checkbox</p>
            <div class="example">
                <form class="form-combined">
                    <div class="form-group">
                        <label for="inputEmail3" class="control-label">账号</label>
                        <div class="col-control">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="control-label">密码</label>
                        <div class="col-control">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-control">
                            <div class="checkbox checkbox-circle checkbox-info checkbox-sm">
                                <input id="checkbox11" type="checkbox" name="checkbox5" checked>
                                <label for="checkbox11">
                                    记住账号
                                </label>
                            </div>
                        </div>
                        <label class="control-label">
                            <a href="javascript:;">无法登录?</a>
                        </label>
                    </div>
                </form>
            </div>

            <p>开关</p>
            <div class="example">
                <form class="form-combined">
                    <div class="form-group">
                        <label class="control-label" for="checkbox2" style="width: auto">对附近的人可见</label>
                        <div class="col-control">
                            <label for="#" class="switch">
                                <input type="checkbox" id="checkbox2"/>
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="checkbox3" style="width: auto">对附近的人可见</label>
                        <div class="col-control">
                            <label for="#" class="switch">
                                <input type="checkbox" id="checkbox3" checked/>
                            </label>
                        </div>
                    </div>
                </form>
            </div>

            <p>表单命令项</p>
            <div class="example">
                <form action="#" class="form-combined">
                    <div class="form-group activatable">
                        <div class="col-control">
                            <a href="javascript:;">清空消息列表</a>
                        </div>
                    </div>

                    <div class="form-group activatable">
                        <div class="col-control">
                            <a href="javascript:;">清空所有聊天记录</a>
                        </div>
                    </div>

                    <div class="form-group activatable">
                        <div class="col-control">
                            <a href="javascript:;">清空缓存数据</a>
                        </div>
                    </div>
                </form>
            </div>

            <p>表单输入项</p>
            <div class="example">
                <form action="#" class="form-combined">
                    <div class="form-group has-feedback has-clear">
                        <label for="idCard" class="control-label">
                            身份证号码
                        </label>

                        <div class="col-control">
                            <input type="text" id="idCard" class="form-control" placeholder="18位身份证号码" value="123456789">
                            <a href="javascript:;" class="fa fa-times-circle form-control-feedback"></a>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="#" class="control-label">
                            详细地址
                        </label>

                        <div class="col-control">
                            <textarea placeholder="街道等详细地址" class="form-control" rows="2"></textarea>
                        </div>
                    </div>
                </form>
            </div>

            <p>表单输入项2</p>
            <div class="example">
                <form action="#" class="form-combined">
                    <div class="form-group has-feedback has-clear">
                        <div class="col-control">
                            <input type="text" class="form-control" placeholder="QQ号/手机号/邮箱">
                            <a href="javascript:;" class="fa fa-times-circle form-control-feedback"></a>
                        </div>
                    </div>
                    <div class="form-group has-feedback has-clear">
                        <div class="col-control">
                            <input type="password" class="form-control" placeholder="密码">
                            <a href="javascript:;" class="fa fa-times-circle form-control-feedback"></a>
                        </div>
                    </div>
                </form>
            </div>

            <p>表单输入项3</p>
            <div class="example">
                <form action="#" class="form-combined">
                    <div class="form-group">
                        <label class="control-label text-primary text-center border-right" for="phone">中国 +86</label>

                        <div class="col-control">
                            <input type="text" class="form-control" id="phone" placeholder="请输入手机号码">
                        </div>
                    </div>
                </form>
            </div>

            <p>右边按钮</p>
            <div class="example">
                <form action="#" class="form-combined">
                    <div class="form-group">
                        <div class="col-control">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="请输入验证码">
                                <span class="input-group-btn border-left">
                                    <button class="text-primary btn btn-default activatable" type="button">重新发送</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <p>只读</p>
            <div class="example">
                <form class="form-combined">
                    <div class="form-group">
                        <label for="#" class="control-label">账号</label>

                        <div class="col-control">
                            <input type="text" value="421205351" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="#" class="control-label">身份证号码</label>

                        <div class="col-control">
                            <input type="text" value="445331199401055317" class="form-control" readonly>
                        </div>
                    </div>
                </form>
            </div>

            <h3 id="example-loading">加载中</h3>

            <div class="example">
                <!-- 区块 -->
                <div class="loading-block loading-wrap">
                    <p>加载中</p>
                    <i class="loading-spinner"></i>
                </div>

                <button class="btn btn-primary" id="loading">显示loading</button>

                <button class="btn btn-primary" id="loading-with-content">显示自定义文案loading</button>

                <script>
                    $('#loading').click(function () {
                        $.loading('show');
                        setTimeout(function () {
                            $.loading('hide');
                        }, 2000);
                    });

                    $('#loading-with-content').click(function () {
                        $.loading({content: '当前时间是' + new Date()}).loading('show');
                        setTimeout(function () {
                            $.loading('hide');
                        }, 2000);
                    });
                </script>
            </div>

            <h3 id="example-tab">选项卡</h3>

            <div class="example">
                <ul class="nav tab-underline border-bottom">
                    <li class="active">
                        <a href="javascript:;">热门推荐</a>
                    </li>
                    <li>
                        <a href="javascript:;">限时免费</a>
                    </li>
                </ul>

                <br>

                <ul class="nav tab-underline border-bottom">
                    <li class="active">
                        <a href="javascript:;">热门推荐</a>
                    </li>
                    <li>
                        <a href="javascript:;">限时免费</a>
                    </li>
                    <li>
                        <a href="javascript:;">全部表情</a>
                    </li>
                </ul>

                <br>

                <div class="btn-group btn-group-justified tab-btn-group">
                    <a class="btn btn-default active" href="#Tab1">Tab 1
                    </a>

                    <a class="btn btn-default" href="#Tab2">Tab 2
                    </a>

                    <a class="btn btn-default" href="#Tab3">Tab 3
                    </a>
                </div>

                <script>
                    $(document).on('click', '.tab-underline a', function () {
                        $(this).parent().addClass('active').siblings().removeClass('active');
                    });
                    $(document).on('click', '.btn-group-justified a', function () {
                        $(this).addClass('active').siblings().removeClass('active');
                    });
                </script>
            </div>

            <h3 id="example-text">文本</h3>

            <div class="example">
                <p class="text-muted">Fusce dapibus, tellus ac cursus.</p>
                <p class="text-primary">Nullam id dolor id nibh.</p>
                <p class="text-success">Duis mollis, est non commodo.</p>
                <p class="text-info">Maecenas sed diam eget risus.</p>
                <p class="text-warning">Etiam porta sem malesuada.</p>
                <p class="text-danger">Donec ullamcorper nulla non.</p>
            </div>

            <h3 id="example-btn">按钮</h3>

            <div class="example">
                <!-- Standard button -->
                <button type="button" class="btn btn-default btn-sm">Default</button>

                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <button type="button" class="btn btn-primary btn-sm">Primary</button>

                <!-- Indicates a successful or positive action -->
                <button type="button" class="btn btn-success btn-sm">Success</button>

                <!-- Contextual button for informational alert messages -->
                <button type="button" class="btn btn-info btn-sm">Info</button>

                <!-- Indicates caution should be taken with this action -->
                <button type="button" class="btn btn-warning btn-sm">Warning</button>

                <!-- Indicates a dangerous or potentially negative action -->
                <button type="button" class="btn btn-danger btn-sm">Danger</button>

                <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
                <button type="button" class="btn btn-link btn-sm">Link</button>
            </div>

            <h3 id="example-modal">对话框</h3>

            <p>$.alert</p>

            <div class="example">
                <button type="button" class="btn btn-primary btn-sm" id="js-alert">
                    $.alert
                </button>


                <script type="text/javascript">
                    $('#js-alert').on('click', function() {
                        $.alert('xxx');
                    });
                </script>
            </div>

            <p>$.confirm</p>

            <div class="example">
                <button type="button" class="btn btn-primary btn-sm" id="js-confirm">
                    $.confirm
                </button>


                <script type="text/javascript">
                    $('#js-confirm').on('click', function() {
                        $.confirm('xxx', function (result) {
                            alert(result)
                        });
                    });
                </script>
            </div>

            <p>alert</p>

            <div class="example">
                <button type="button" class="btn btn-primary btn-sm" id="alert">
                    打开对话框
                </button>

                <!-- Modal -->
                <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                开通年费QQ会员即可领取欢乐斗地主感恩节回馈礼包！
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">确定</button>
                            </div>
                        </div>
                    </div>
                </div>

                <script type="text/javascript">
                    $('#alert').on('click', function(){
                        $('#myModal').modal();
                    });
                </script>
            </div>

            <p>confirm</p>

            <div class="example">
                <button type="button" class="btn btn-primary btn-sm" id="confirm">
                    打开对话框
                </button>

                <!-- Modal -->
                <div class="modal" id="confirm-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                开通年费QQ会员即可领取欢乐斗地主感恩节回馈礼包！
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                                <button type="button" class="btn btn-primary">开通</button>
                            </div>
                        </div>
                    </div>
                </div>

                <script type="text/javascript">
                    $('#confirm').on('click', function(){
                        $('#confirm-modal').modal();
                    });
                </script>
            </div>

            <p>带标题</p>

            <div class="example">
                <button type="button" class="btn btn-primary btn-sm" id="titled">
                    打开对话框
                </button>

                <!-- Modal -->
                <div class="modal" id="titled-modal" tabindex="-1" role="dialog" aria-labelledby="titled-modal-label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="titled-modal-label">温馨提示</h4>
                            </div>
                            <div class="modal-body">
                                开通年费QQ会员即可领取欢乐斗地主感恩节回馈礼包！
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                                <button type="button" class="btn btn-primary">开通</button>
                            </div>
                        </div>
                    </div>
                </div>

                <script type="text/javascript">
                    $('#titled').on('click', function(){
                        $('#titled-modal').modal();
                    });
                </script>
            </div>

            <a href="#" class="top bg-info">TOP</a>
        </div>
    </div>
</div>
<script>
    $('.example').each(function (i) {
        var lines = $(this).html().split("\n");
        // 移除前后的空行
        lines.shift();
        lines.pop();

        // 移除剩下行前面的空白
        var spaceLength = lines[0].length - $.trim(lines[0]).length;
        for (var i in lines) {
            lines[i] = lines[i].substr(spaceLength);
        }

        var el = this;
        var code = $('<pre class="highlight"></pre>');
        code.text(lines.join("\n")).insertAfter(el);
    });
</script>
