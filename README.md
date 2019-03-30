# Gadget(一些自己捅咕的小玩意儿)

## [1.Syntaxhighlighter-Utf8](Syntaxhighlighter-Utf8)

### 程序技术博客专用小模块

运用了syntaxhighlighter和utf8-php两个插件的结合实现了程序员博客需要的输入代码并在页面保持高亮不被运行的结合版控件。

## [2.printing](printing)

### CCPC国赛打印程序（IEActiveX控件）

CCPC国赛打印程序（提交代码连接打印机自动打印）（使用js+php+uedit制作）注：因为调用ie特有的控件才能实现对客户端程序的调用所以只能用ie进行打印操作 打印时启用浏览器的ActiveX控件，控制缓存刷新窗口清除。

## [3.admin](admin)

### 简单的后台管理页面（PDO版）

主要功能有对作品的，增加，删除，修改，批量删除，分页，以及一些基本的验证操作。
首次运用了PDO进行封装调用，使其更加安全。

## [4.map](map)

### 高德自定义云图API调用（百姓服务网检索附近商家模块）

通过python对高德地图的API调用进行创建云图和存储数据从而生成自定义云图，并且进行自主检索，通过记录建筑物经纬度和自身坐在位置经纬度实现合作商铺到自身位置的距离检索功能。
注：为了与前端更好的使用通过php对python调用来给JS传json数据（至今没想到办法通过js与python直接传json数据）

## [5.getweixin](getweixin)

### 关注微信公众号获取用户信息(北华后勤模块使用)

通过appid发送接口取全局access_token再根据全局access_token和openid查询用户信息json数据，再打印出来。

注:只在测试微信API接口后就被老师拿去用了，时间很赶，没做什么好的处理。

## [6.bh](bh)

### 北华大学后勤微信公众号登录模块

全JS完成的登录模块采用js中ajax的实现无刷新传输json数据验证，并通过注册绑定微信和找回密码，修改密码通过微信的appid实现安全保证。
（北华大学后勤微信公众号登录模块加入了上面的模块主要用来找回密码）

## [7.poster](poster)

### 自动将生成二维码和海报结合（外接小项目）

通过使用JS中的Canvas的使用来进行对海报图片和自动生成的二维码进行重新组合，从而实现二维码在海报上成为一张图片。
（网上学习的代码，自己改装了一下，也算学习了个新技能）

## [8.roll_call](roll_call)

### 点名系统（2小时完成的突发奇想小玩意，只为娱乐）

js的基础知识，运用了Math.random()随机数和setInterval周期定时器来制作的简单点名系统。
注：看见背景图就突发奇想，我的天啊我都不知道为什么就好奇心那么大的自己构想。

## [9.仿百度糯米部分功能的webAPP](仿百度糯米部分功能的webAPP)

### 类似猫眼电影功能（学校出去实习7天做的）

通过hublider编译器和雷电模拟器配合来写此项目，运用了mui框架和JavaScript的AJAX的技术来进行的一款webapp,主要功能有对猫眼电影的部分功能，还有部分功能未实现尚要改进。

## [10.ajax](ajax)

### AJAX 动态表格渲染--使用template模版引擎

通过对js原生的ajax封装成函数的调用以及template模版引擎的渲染，实现异步传输数据前端接收数据并展现在页面上。

