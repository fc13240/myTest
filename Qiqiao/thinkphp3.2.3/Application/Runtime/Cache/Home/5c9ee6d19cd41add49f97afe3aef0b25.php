<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>欢迎登陆、注册七巧网</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/thinkphp3.2.3/Public/Home/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/thinkphp3.2.3/Public/Home/css/login.css">
    <link rel="stylesheet" href="/thinkphp3.2.3/Public/Home/font-awesome/css/font-awesome.min.css">

    <style type="text/css">
        /* 错误提示信息样式 */
        #phoneForm label.error,
        #emailForm label.error {
            color: rgba(255, 0, 0, 1.0);
            font-weight: 500;
            font-size: 16px;
            font-family: "Microsoft YaHei";
        }
    </style>
</head>

<body>
    <div class="bodu-t">
        <!-- Top menu -->
        <nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo U('Index/index');?>">七巧网-欢迎您</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="top-navbar-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <span class="li-social">
								<a href="<?php echo U('Index/index');?>">首页</a><i>|</i>
								<a href="<?php echo U('User/login');?>" class="login-enter">登录</a><i>|</i> 
								<a target="_blank" class="reg-enter">注册</a>
							</span>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- 页面内容 -->
        <div class="reg-content">
            <div class="container">
                <!-- 登陆表单  -->
                <div class="row login-content">
                    <div class="col-lg-7 col-lg-offset-2">
                        <h1 style="text-align:center;color:white">欢迎登陆七巧网</h1>
                    </div>
                    <div class="col-lg-5 col-lg-offset-3 loginform-box">
                        <form role="form" action="<?php echo U('User/login');?>" name="loginForm" id="loginForm" method="post" class="loginForm">
                            <div class="form-group">
                                <label class="sr-only" for="phone">邮箱/手机号码：</label>
                                <input type="text" name="phone" placeholder="请输入邮箱/手机号码" class="username form-control" id="username" title="请输入邮箱或手机号码">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="password">请输入密码</label>
                                <input type="password" name="password" placeholder="请输入密码" class="loginpsw form-control" title="请输入密码" id="password">
                            </div>
                            <div class="form-group remember">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="agree" class="pswremember">记住密码
                                    </label>
                                </div>
                                <!-- <a href="#" class="forget-psw">忘记密码</a> -->
                            </div>
                            <div class="form-group loginbtn">
                                <button type="submit" class="btn col-lg-12">登 陆</button>
                            </div>
                            <div class="form-group toregister">
                                <a class="free-register" title="免费注册">免费注册</a>
                               <!--  <ul class="otherLogin">
                                    <li><a href="#" class="qqlogin" title="QQ登陆"><i class="fa fa-qq"></i></a></li>
                                    <li><a href="#" class="wechatlogin" title="微信登陆"><i class="fa fa-wechat"></i></a></li>
                                    <li><a href="#" class="weibologin" title="微博登陆"><i class="fa fa-weibo"></i></a></li>
                                </ul> -->
                            </div>
                        </form>
                    </div>
                </div>

                <!--  注册表单   -->
                <div class="row register-content" style="display:none">
                    <div class="col-lg-7 col-lg-offset-2">
                        <h1 style="text-align:center;color:white">欢迎注册七巧网</h1>
                    </div>
                    <div class="col-lg-5 col-lg-offset-3 form-box">
                        <div class="col-lg-12 form-top">
                            <ul id="myTab" class="nav nav-tabs">
                                <li class="active col-lg-6" title="手机号码注册">
                                    <a href="#phoneReg" data-toggle="tab" id="phone-btn" class="regp">手机号码注册</a>
                                </li>
                                <li class="col-lg-6" title="邮箱注册">
                                    <a href="#emailReg" data-toggle="tab" id="email-btn" class="mailReg" onclick="test()">邮箱注册</a>
                                </li>
                            </ul>
                        </div>

                        <div id="myTabContent" class="tab-content">
                            <!-- 手机号码注册页面 -->
                            <div class="tab-pane fade in active" id="phoneReg">
                                <form role="form" action="<?php echo U('User/phoneRegister');?>" name="phoneForm" id="phoneForm" method="post" class="phone-form">
                                    <div class="form-group">
                                        <label class="sr-only" for="phone">手机号码：</label>
                                        <input type="text" name="phoneNum" placeholder="请输入手机号码" class="phonenum form-control" id="phonenum">
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control phonecode" name="pCode" placeholder="请输入手机验证码">
                                            <span class="input-group-addon get-code phone">获取验证码</span>
                                        </div>
                                    </div>
                                    <span class="pcodePrompt"></span>

                                    <span class="pcodeinfor"></span>
                                    <div class="form-group">
                                        <label class="sr-only" for="password">请输入密码</label>
                                        <input type="password" name="password" placeholder="请输入密码" class="password form-control" id="ppassword">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="passwordConfirm">请输入确认密码</label>
                                        <input type="password" name="passwordConfirm" placeholder="请输入确认密码" class="form-last-name form-control" id="passwordConfirm">
                                    </div>
                                    <div class="form-group agree">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="agree" class="phoneagree">我已阅读并同意<a href="#">《七巧网用户协议》</a>
                                            </label>
                                        </div>
                                    </div>
                                    <span class="pagreePrompt"></span>
                                    <div class="form-group  regbtn">
                                        <div class="col-lg-12" style="padding:0px">
                                            <button type="submit" class="btn col-lg-12">注 册</button>
                                        </div>
                                    </div>
                                    <div class="tologin">
                                        <p>已有账号<a class="tologin-btn">直接登录</a></p>
                                        <ul class="otherLogin">
                                            <li><a href="#" class="qqlogin" title="QQ登陆"><i class="fa fa-qq"></i></a></li>
                                            <li><a href="#" class="wechatlogin" title="微信登陆"><i class="fa fa-wechat"></i></a></li>
                                            <li><a href="#" class="weibologin" title="微博登陆"><i class="fa fa-weibo"></i></a></li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                            <!--  邮箱注册页面 -->
                            <div class="tab-pane fade" id="emailReg">
                                <form role="form" action="<?php echo U('User/emailRegister');?>" name="emailForm" id="emailForm" method="post" class="email-form">
                                    <div class="form-group">
                                        <label class="sr-only" for="email">邮箱：</label>
                                        <input type="text" name="email" placeholder="请输入常用邮箱" class="email form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control emailcode" name="eCode" placeholder="请输入邮箱验证码">
                                            <span class="input-group-addon get-code mail">获取验证码</span>
                                        </div>
                                    </div>
                                    <span class="ecodePrompt"></span>

                                    <div class="form-group">
                                        <label class="sr-only" for="password">请输入密码</label>
                                        <input type="password" name="password" placeholder="请输入密码" class="password form-control" id="epassword">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="passwordConfirm">请输入确认密码</label>
                                        <input type="password" name="passwordConfirm" placeholder="请输入确认密码" class="passwordConfirm form-control" id="passwordConfirm">
                                    </div>
                                    <div class="form-group agree">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="agree" class="emailagree">我已阅读并同意<a href="#">《七巧网用户协议》</a>
                                            </label>
                                        </div>
                                    </div>
                                    <span class="eagreePrompt"></span>

                                    <div class="form-group  regbtn">
                                        <div class="col-lg-12" style="padding:0px;">
                                            <button type="submit" class="btn col-lg-12">注 册</button>
                                        </div>
                                    </div>
                                    <div class="tologin col-lg-12">
                                        <p>已有账号<a class="tologin-btn">直接登录</a></p>
                                        <ul class="otherLogin">
                                            <li><a href="#" class="qqlogin" title="QQ登陆"><i class="fa fa-qq"></i></a></li>
                                            <li><a href="#" class="wechatlogin" title="微信登陆"><i class="fa fa-wechat"></i></a></li>
                                            <li><a href="#" class="weibologin" title="微博登陆"><i class="fa fa-weibo"></i></a></li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  JavaScript  -->
    <script src="/thinkphp3.2.3/Public/Home/js/jquery-3.0.0.min.js"></script>
    <script src="/thinkphp3.2.3/Public/Home/js/bootstrap.min.js"></script>
    <script src="/thinkphp3.2.3/Public/Home/js/jquery.validate.min.js"></script>
    <script src="/thinkphp3.2.3/Public/Home/js/validate-messages_zh.min.js"></script>
	
	<!-- 点击“注册”后直接跳转到注册页面（登录页面和注册页面是同一个页面） -->
	<script type="text/javascript">
		$(function(){
        $('.reg-enter').click(function(){
            window.location.href="login.html?flag=true";
        });
    });
	</script>

    <script type="text/javascript">

    $(".mail").click(function(){
        alert('1111');
    });


    $(".phone").click(function(){
        var phone=$("#phonenum").val();
        if(phone==''){
            return;
        }
        else{
        var pattern = /^[\d]{5,20}$/; 
        if(pattern.test(phone)){
        $.ajax({
           url:'<?php echo U('Handle/message');?>',
           type:'post',
           dataType:'json',
           data:{"phone":phone},
           success:function(data){
            }
        });
        }
        else{
            return;
        }

        }
    });



    </script>
    
    <!-- 登陆注册相互切换 -->
    <script>
        $('.free-register').click(function () {
            $('.login-content').css('display', 'none');
            $('.register-content').css('display', 'block');
        })
        $('.tologin>p>a').click(function () {
            $('.login-content').css('display', 'block');
            $('.register-content').css('display', 'none');
        })
    </script>

    <!--    登录页面点击"注册"跳转到注册页面-->
    <script>
        $(".reg-enter").click(function () {
            $(".toregister a").trigger("click");
        });
    </script>

    <!--  主页面点击"注册"跳转到注册页面 -->
    <script>
        var url = window.location.href;
        var index = url.indexOf("flag");
        if (index != -1) {
            $('.toregister a').trigger("click");
        }
    </script>

    <!-- 手机号码注册表单验证 -->
    <script>
        $().ready(function () {

            //手机号码注册表单验证
            $("#phoneForm").validate({
                //验证规则
                rules: {
                    //手机号码
                    phoneNum: {
                        required: true,
                        checkPhone: true,
                        remote:{  
                        url: "/thinkphp3.2.3/index.php/Home/User/checkphone",
                        type:"post",
                        data: {
                        	ajaxphone: function(){
                        		return $('#phonenum').val(); }
                        		},
                        dataType:"html",
                        dataFilter: function(data, type){
                        if(data == true)
                        	return true;
                        else
                        	return false;
                    		},
                    	}
                    },
                    //密码
                    password: {
                        required: true,
                        checkPsw: true,
                    },
                    //确认密码
                    passwordConfirm: {
                        required: true,
                        equalTo: "#ppassword",
                    },
                    //同意协议
                    agree: 'required',
                    //手机短信验证码
                    pCode: 'required',
                },

                //提示信息
                messages: {
                    phoneNum: {
                        required: '*请输入手机号码',
                        remote: '*该手机号码已经注册',
                    },
                    password: {
                        required: '*请输入密码',
                    },
                    passwordConfirm: {
                        required: '*请输入确认密码',
                        equalTo: '*两次输入的密码不一致',
                    },
                    agree: '*请同意我们《七巧网用户协议》',
                    pCode: '*请输入手机验证码',
                },

                //错误提示位置
                errorPlacement: function (error, element) {
                    if (element.hasClass("phonecode")) {
                        error.appendTo(".pcodePrompt");
                    } else if (element.hasClass("phoneagree")) {
                        error.appendTo(".pagreePrompt")
                    } else {
                        error.insertAfter(element);
                    }
                },
            });
            //自定义正则表达式验证方法
            //手机号码正则表达式验证
            $.validator.addMethod("checkPhone", function (value, element, params) {
                var checkPhone = /^1[3|4|5|7|8][0-9]{9}$/;
                return this.optional(element) || (checkPhone.test(value));
            }, "*请输入正确的手机号码");
            //密码正则表达式验证：/^\w{6,16}$/(只允许6-16位英文字母、数字和下画线)
            $.validator.addMethod("checkPsw", function (value, element, params) {
                var checkPsw = /^\w{6,16}$/;
                return this.optional(element) || (checkPsw.test(value));
            }, "*密码只允许6-16位英文字母、数字和下画线");

        });
    </script>
    <!-- 邮箱注册表单验证 -->
    <script>
        $().ready(function () {
            //邮箱注册表单验证
            $("#emailForm").validate({
                //验证规则
                rules: {
                    //邮箱
                    email: {
                        required: true,
                        remote:{  
                        url: "/thinkphp3.2.3/index.php/Home/User/checkemail",
                        type:"post",
                        data: {
                        	ajaxemail: function(){
                        		return $('#email').val(); }
                        		},
                        dataType:"html",
                        dataFilter: function(data, type){
                        if(data == true)
                        	return true;
                        else
                        	return false;
                    		},
                    	}
                    },
                    //密码
                    password: {
                        required: true,
                        checkPsw: true,
                    },
                    //确认密码
                    passwordConfirm: {
                        required: true,
                        equalTo: "#epassword",
                    },
                    //同意协议
                    agree: 'required',
                    //邮箱验证码
                    eCode: 'required',
                    
                },
                //提示信息
                messages: {
                    email: {
                        required: '*请输入常用邮箱',
                        remote: '*该邮箱已经注册',
                    },
                    password: {
                        required: '*请输入密码',
                    },
                    passwordConfirm: {
                        required: '*请输入确认密码',
                        equalTo: '*两次输入的密码不一致',
                    },
                    agree: '*请同意我们《七巧网用户协议》',
                    eCode: '*请输入邮箱验证码',
                },

                //错误提示位置
                errorPlacement: function (error, element) {
                    if (element.hasClass("emailcode")) {
                        error.appendTo(".ecodePrompt");
                    } else if (element.hasClass("emailagree")) {
                        error.appendTo(".eagreePrompt")
                    } else {
                        error.insertAfter(element);
                    }
                },
            });
            //自定义正则表达式验证方法
            //密码正则表达式验证：/^\w{6,16}$/(只允许6-16位英文字母、数字和下画线)
            $.validator.addMethod("checkPsw", function (value, element, params) {
                var checkPsw = /^\w{6,16}$/;
                return this.optional(element) || (checkPsw.test(value));
            }, "*密码只允许6-16位英文字母、数字和下画线");
        });
    </script>
</body>

</html>