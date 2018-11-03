<?php
include_once 'admin/online.php';
include_once 'admin/go_out.php';
include_once 'admin/feye.php';
include_once 'includes/global.func.php';
include_once 'conn/pdo.php';
    $test = new DBPDO; 
    $num=3;
    $sql = "SELECT * FROM `works`";
    $rs = $test->select($sql);
    $sl=count($rs);
    $page = new Page($sl,$num);      
    $sql1="select * from works order by id asc {$page->limit}";
    $rsw = $test->select($sql1);
    if(isset($_POST['submit'])){
      $keywords=$_POST['keywords'];
      $coid=$_POST['coid'];
        if (!$coid && strlen($keywords)==0) {  
        }
        else{     
           if ($coid) {
                 $cx=" where title like '%{$keywords}%'and type='$coid'";
                
            }else{
                 $cx=" where title like '%{$keywords}%'";
            }
             $sql7="select * from works".$cx;
                 $rsq = $test->select($sql7);
                 $sl=count($rsq);
                 $page = new Page($sl,$num);
                 $sql8="select * from works".$cx." order by id asc {$page->limit}";
                 $rsw = $test->select($sql8);

        }
    }
       
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <script type="text/javascript" src="js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#"><?php echo $username;?></a></li>
                <li><a href="changepassword.php">修改密码</a></li>
                <?php echo "
              <li><a href=\"index.php?action=logout\">退出</a></li>
              ";?>

            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="design.html"><i class="icon-font">&#xe008;</i>作品管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe005;</i>博文管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe006;</i>分类管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe004;</i>留言管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe012;</i>评论管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe033;</i>广告管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="system.html"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">作品管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择分类:</th>
                            <td>
                                <select name="coid" id="">
                                    <option value="">全部</option>
                                    <option value="精品界面">精品界面</option>
                                    <option value="推荐界面">推荐界面</option>
                                </select>
                            </td>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="submit" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
           <form id="subform" name="subform" method="post" action="admin/alldelete.php" onsubmit="return InputCheck(this)">
                <div class="result-title">
                    <div class="result-list">
                        <a href="insert.php"><i class="icon-font"></i>新增作品</a>
                     <a class="zhuce" href="javascript:void(0)" name="submit" onclick="document.getElementById('subform').submit();" >批量删除</a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>ID</th>
                            <th>分类</th>
                            <th>标题</th>
                            <th>作者</th>
                            <th>缩略图</th>
                            <th>内容</th>
                            <th>操作</th>
                        </tr>
                       <?php 
                            $i=0;
                          while (1) {
                            if (count($rsw)<=$i) {
                          break;
                       }
                     ?>
                        <tr>
                           <td class="tc"><input name="id[]" value= <?php echo$rsw[$i]['id'];?> type="checkbox"></td>
                            <td>
                            <?php echo$rsw[$i]['id'];?>
                            </td>
                            <td><?php echo$rsw[$i]['type'];?></td>
                            <td title=<?php echo$rsw[$i]['title'];?>><a target="_blank" href="#" title=<?php echo$rsw[$i]['title'];?>><?php echo$rsw[$i]['title'];?></a> …
                            </td>
                            <td><?php echo$rsw[$i]['author'];?></td>
                            <td><?php echo$rsw[$i]['image'];?></td>
                            <td><?php echo$rsw[$i]['content'];?></td>
                            <td>
                               
                               <?php
                               $id=$rsw[$i]['id'];
                                 echo "<a href='change.php?id=$id'>修改</a>";
                                 echo "<a href='admin/del.php?id=$id'>删除</a>";?>

                            </td>
                        </tr>
                       <?php
                      
                       $i++;
                       
                        }?>
                    </table>
                      <div style="margin-left: 355px">
                <?php
                echo '<form action="shoucang.php?action=del&page='.$page->page.'">';
                echo '<table border="0" width="900">';
                echo '<tr><td colspan="9" align="left" >'.$page->fpage().'</td></tr>';
                echo '</table>';
                echo '</form>';
                ?>
                </div>
            </form>
        </div>
    </div>
   
    <!--/main-->
</div>
</body>
</html>