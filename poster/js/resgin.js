

/*-------注册验证-----------*/
$().ready(function() {
	 $("#signupForm").validate({
		rules: {
			telphone:{
				required: true,
				rangelength:[11,11],
				digits: "只能输入整数"
				},
			b1_password: {
				required: true,
				rangelength:[4,30]
				},
			b2_password: {
				required: true,
				rangelength:[4,80]
				},
			password: {
				required: true,
				rangelength:[8,20]
				},
			xm_password: {
				required: true,
				rangelength:[8,20]
				},
			confirm_password: {
				required: true,
				equalTo: "#password",   
				rangelength:[8,20]
				}
			},
			messages: {
				telphone:{
					required: "请输入手机号",
					rangelength: jQuery.format("请输入正确的手机号"),
				},
				b1_password: {
					required: "请输入账号名称",
					rangelength: jQuery.format("4-30个字母或数字"),
				},
				b2_password: {
					required: "请输入币种地址",
					rangelength: jQuery.format("请输入正确的币种地址"),
				},
				password: {
					required: "请输入密码",
					rangelength: jQuery.format("密码在8~20个字符之间"),
				},
				xm_password: {
					required: "请输入原密码",
					rangelength: jQuery.format("密码在8~20个字符之间"),
				},
				confirm_password: {
				required: "请再次输入密码",
				rangelength: jQuery.format("密码在8~20个字符之间"),
				equalTo: "两次输入密码不一致"
			}
		}
	});
});


$(function  () {
	//获取短信验证码
	var validCode=true;
	$(".ms1").click (function  () {
		var time=30;
		var code=$(this);
		if (validCode) {
			validCode=false;
			code.addClass("ms2");
		var t=setInterval(function  () {
			time--;
			code.html(time+"秒");
			if (time==0) {
				clearInterval(t);
			code.html("重新获取");
				validCode=true;
			code.removeClass("ms2");

			}
		},1000)
		}
	})
})
