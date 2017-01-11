<div id="re_login" class="fwinmask" hidden initialized="true" style="position: fixed; z-index: 201; left: 650px; top: 42.5px;">
    <style type="text/css">object{visibility:hidden;}</style>
    <table cellpadding="0" cellspacing="0" class="fwin"><tbody><tr><td class="t_l">

            </td><td class="t_c" style="cursor:move"   ondblclick="hideWindow('login')">

            </td><td class="t_r"></td></tr><tr><td class="m_l" style="cursor:move"   ondblclick="hideWindow('login')" )"="">&nbsp;&nbsp;</td><td class="m_c" id="fwin_content_login" fwin="login">
                <div id="main_messaqge_LvKuW" fwin="login">
                    <div id="layer_login_LvKuW" fwin="login">
                        <h3 class="flb" id="fctrl_login" style="cursor: move;">
                            <em id="returnmessage_LvKuW" fwin="login">
                                用户注册</em>
                            <span><a href="javascript:;" class="flbc" onclick="hideWindow('login', 0, 1);" title="关闭">关闭</a></span>
                        </h3>
                        <form method="post"  class="cl"  action="{{url('/auth/register')}}" >

                            <div class="c cl">
                                <div class="rfm">
                                    <table>
                                        <tbody><tr>
                                            <th>
                                                <label for="username_LvKuW">账号:</label></th>
                                            <td><input type="text" name="name" id="name"  size="30" class="px p_fre" tabindex="1" value="" fwin="login"></td>
                                            <td class="tipcol"><a href="{{url('home/register')}}">立即登录</a></td>
                                        </tr>
                                        </tbody></table>
                                </div>

                                <div class="rfm">
                                    <table>
                                        <tbody><tr>
                                            <th>
                                                <label for="username_LvKuW">邮箱:</label></th>
                                            <td><input type="email" name="email" id="email"  size="30" class="px p_fre" tabindex="1" value="" fwin="login"></td>
                                            <td class="tipcol"></td>
                                        </tr>
                                        </tbody></table>
                                </div>
                                <div class="rfm">
                                    <table>
                                        <tbody><tr>
                                            <th><label for="password3_LvKuW">密码:</label></th>
                                            <td><input type="password" id="password" name="password" onfocus="clearpwd()" size="30" class="px p_fre" tabindex="1" fwin="login"></td>
                                            <td class="tipcol"><a href="javascript:;" title="">数字+英文</a></td>
                                        </tr>
                                        </tbody></table>
                                </div>
                                <div class="rfm">
                                    <table>
                                        <tbody><tr>
                                            <th><label for="password3_LvKuW">确认密码:</label></th>
                                            <td><input type="password" id="password" name="password_confirmation" onfocus="clearpwd()" size="30" class="px p_fre" tabindex="1" fwin="login"></td>
                                        </tr>
                                        </tbody></table>
                                </div>
                                <div class="rfm">
                                    <table>
                                        <tbody><tr>
                                            <th>分组:</th>
                                            <td><select id="group" width="213" name="group" onchange="if($('loginquestionid_LvKuW').value > 0) {$('loginanswer_row_LvKuW').style.display='';} else {$('loginanswer_row_LvKuW').style.display='none';}" fwin="login">
                                                    <option value="0">社区用户</option>
                                                    <option value="1">感情用户</option>
                                                    <option value="2">开发用户</option>
                                                    <option value="3">父亲出生的城市</option>
                                                    <option value="4">您其中一位老师的名字</option>
                                                    <option value="5">您个人计算机的型号</option>
                                                    <option value="6">您最喜欢的餐馆名称</option>
                                                    <option value="7">驾驶执照最后四位数字</option>
                                                </select></td>
                                        </tr>
                                        </tbody></table>
                                </div>



                                <div class="rfm  bw0">
                                    <table>
                                        <tbody><tr>
                                            <th></th>
                                            <td><label for="cookietime_LvKuW"><input type="checkbox" class="pc" name="cookietime" id="cookietime_LvKuW" tabindex="1" value="2592000" fwin="login">自动登录</label></td>
                                        </tr>
                                        </tbody></table>
                                </div>

                                <div class="rfm mbw bw0">
                                    <table width="100%">
                                        <tbody><tr>
                                            <th>&nbsp;</th>
                                            <td>
                                                <button class="pn pnc" type="submit" name="loginsubmit" value="true" tabindex="1"><strong>立即注册</strong></button>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        </tbody></table>
                                </div>

                            </div>
                        </form>
                    </div>

                    <div id="layer_lostpw_LvKuW" style="display: none;" fwin="login">
                        <h3 class="flb">
                            <em id="returnmessage3_LvKuW" fwin="login">找回密码</em>
                            <span><a href="javascript:;" class="flbc" onclick="hideWindow('login', 0, 1);" title="关闭">关闭</a></span>
                        </h3>
                        <form method="post" autocomplete="off" id="lostpwform_LvKuW" class="cl" onsubmit="ajaxpost('lostpwform_LvKuW', 'returnmessage3_LvKuW', 'returnmessage3_LvKuW', 'onerror');return false;" action="member.php?mod=lostpasswd&amp;lostpwsubmit=yes&amp;infloat=yes" fwin="login">
                            <div class="c cl">
                                <input type="hidden" name="formhash" value="495555ca">
                                <input type="hidden" name="handlekey" value="lostpwform">
                                <div class="rfm">
                                    <table>
                                        <tbody><tr>
                                            <th><span class="rq">*</span><label for="lostpw_email">Email:</label></th>
                                            <td><input type="text" name="email" id="lostpw_email" size="30" value="" tabindex="1" class="px p_fre" fwin="login"></td>
                                        </tr>
                                        </tbody></table>
                                </div>
                                <div class="rfm">
                                    <table>
                                        <tbody><tr>
                                            <th><label for="lostpw_username">用户名:</label></th>
                                            <td><input type="text" name="username" id="lostpw_username" size="30" value="" tabindex="1" class="px p_fre" fwin="login"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="rfm mbw bw0">
                                    <table>
                                        <tbody><tr>
                                            <th></th>
                                            <td><button class="pn pnc" type="submit" name="lostpwsubmit" value="true" tabindex="100"><span>提交</span></button></td>
                                        </tr>
                                        </tbody></table>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div id="layer_message_LvKuW" style="display: none;" fwin="login">
                    <h3 class="flb" id="layer_header_LvKuW" fwin="login">
                        <em>用户登录</em>
                        <span><a href="javascript:;" class="flbc" onclick="hideWindow('login')" title="关闭">关闭</a></span>
                    </h3>
                    <div class="c"><div class="alert_right">
                            <div id="messageleft_LvKuW" fwin="login"></div>
                            <p class="alert_btnleft" id="messageright_LvKuW" fwin="login"></p>
                        </div>
                    </div>

                    <script type="text/javascript" reload="1">
                        var pwdclear = 0;
                        function initinput_login() {
                            document.body.focus();
                            if($('#loginform_LvKuW')) {
                               // $('#loginform_LvKuW').username.focus();
                            }
                        }
                        initinput_login();

                        function clearpwd() {
                            if(pwdclear) {
                                $('#password3_LvKuW').value = '';
                            }
                            pwdclear = 0;
                        }
                    </script>
                </div></td><td class="m_r" style="cursor:move" onmousedown="dragMenu($('fwin_login'), event, 1)" ondblclick="hideWindow('login')" "=""></td></tr><tr>
            <td class="b_l"></td><td class="b_c" style="cursor:move" onmousedown="dragMenu($('fwin_login'), event, 1)" ondblclick="hideWindow('login')"></td>
            <td class="b_r"></td></tr>
        </tbody>
    </table>
</div>