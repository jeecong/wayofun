<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<!--infoDict={'note':note,'publisher':publisher}
    infoArr.append(infoDict)
    context={'noteArr':infoArr} -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台管理</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!-- <link rel="icon" type="image/png" href="/databasework/Public/assets/img/logo.jpg"> -->
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <script src="/databasework/Public/assets/js/echarts.min.js"></script>
    <link rel="stylesheet" href="/databasework/Public/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/databasework/Public/assets/css/amazeui.datatables.min.css" />
    <link rel="stylesheet" href="/databasework/Public/assets/css/app.css">
    <script src="/databasework/Public/assets/js/jquery.min.js"></script>
    <script type="text/javascript">
    //删除帖子
        function deletenotes(element){
            //alert(element.id)
            var xhr = new XMLHttpRequest()
            xhr.onreadystatechange = function(e){
                if (xhr.readyState==4) {
                    if (xhr.status==200) {

                        //alert(xhr.responseText)
                        if (xhr.responseText=='ok') {
                            alert('删除成功')
                            //删除后刷新页面
                            window.location.reload()
                        };
                    };
                };

            }

            xhr.open('post','delete',true)

            xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded')
            xhr.send("notesid="+element.id)
        }

    </script>

</head>

<body data-type="widgets">
    <script src="/databasework/Public/assets/js/theme.js"></script>
    <div class="am-g tpl-g">
        <!-- 头部 -->
        <header>
            <!-- logo -->
            <div class="am-fl tpl-header-logo">
                <h1 style="color:#CCCC00;margin:auto">客云便签后台管理</h1>
            </div>
            <!-- 右侧内容 -->
            <div class="tpl-header-fluid">
                <!-- 侧边切换 -->
                <div class="am-fl tpl-header-switch-button am-icon-list">
                    <span>

                </span>
                </div>
                <!-- 其它功能-->
                <div class="am-fr tpl-header-navbar">
                    <ul>
                        <!-- 欢迎语 -->
                        <li class="am-text-sm tpl-header-navbar-welcome">
                            <a href="javascript:;">欢迎你, <span>admin</span> </a>
                        </li>

                        <!-- 退出 -->
                        <li class="am-text-sm">
                            <a href="">
                                <span class="am-icon-sign-out"></span> 退出
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </header>
        <!-- 风格切换 -->
        <div class="tpl-skiner">
            <div class="tpl-skiner-toggle am-icon-cog">
            </div>
            <div class="tpl-skiner-content">
                <div class="tpl-skiner-content-title">
                    选择主题
                </div>
                <div class="tpl-skiner-content-bar">
                    <span class="skiner-color skiner-white" data-color="theme-white"></span>
                    <span class="skiner-color skiner-black" data-color="theme-black"></span>
                </div>
            </div>
        </div>
        <!-- 侧边导航栏 -->
        <div class="left-sidebar">
            <!-- 用户信息 -->
            <div class="tpl-sidebar-user-panel">
                <div class="tpl-user-panel-slide-toggleable">
                    <div class="tpl-user-panel-profile-picture">
                        <img src="/databasework/Public/assets/img/22.jpg" alt="">
                    </div>
                    <span class="user-panel-logged-in-text">
              <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
            admin
          </span>
                    <a href="javascript:;" class="tpl-user-panel-action-link"> <span class="am-icon-pencil"></span> 账号设置</a>
                </div>
            </div>

            <!-- 菜单 -->
            <ul class="sidebar-nav">
                
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title active">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 管理
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico sidebar-nav-sub-ico-rotate"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub" style="display: block;">
                        <li class="sidebar-nav-link">
                            <a href="#" class="sub-active">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 帖子审核
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="<?php echo U('Index/userguanli');?>">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 用户审核
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>


        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">文章列表</div>


                            </div>
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <!-- <div class="am-btn-group am-btn-group-xs">
                                                <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                                <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-save"></span> 保存</button>
                                                <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                                                <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                        <thead>
                                            <tr>
                                                <th>文章标题</th>
                                                <th>作者</th>
                                                <th>时间</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr class="even gradeC">
                                                <td><?php echo ($vo['title']); ?></td>
                                                <td><?php echo ($vo['nickname']); ?></td>
                                                <td><?php echo ($vo['create_time']); ?></td>
                                                <td>
                                                    <div class="tpl-table-black-operation">
                                                        <a href="javascript:;">
                                                            <i class="am-icon-pencil"></i> 通过
                                                        </a>
                                                        <a href="javascript:;" class="tpl-table-black-operation-del" id="{{note.note.id}}" onclick="deletenotes(this)">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr><?php endforeach; endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="am-u-lg-12 am-cf">

                                    <div class="am-fr">
                                        <ul class="am-pagination tpl-pagination">
                                            <li class="am-disabled"><a href="#">«</a></li>
                                            <li class="am-active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="/databasework/Public/assets/js/amazeui.min.js"></script>
    <script src="/databasework/Public/assets/js/amazeui.datatables.min.js"></script>
    <script src="/databasework/Public/assets/js/dataTables.responsive.min.js"></script>
    <script src="/databasework/Public/assets/js/app.js"></script>

</body>
</html>