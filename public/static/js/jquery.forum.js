jQuery(function($) {


	//内容列滚动
	if ($(".nano").length > 0) {
		$.getScript("template/iscwo_zuk/iscwo/js/jquery.nanoscroller.min.js");
		setTimeout(function() {
			$(".nano").nanoScroller();
		}, 1000);

	}


	//下一页翻页
	if ($(".nextpage").length > 0) {
		$(".nextpage a").click( function () {
			if (discuz_uid > 0) {
				if ($(".pg a.nxt").length > 0) {
					location.href = SITEURL+$(".pg a.nxt").attr('href');
				}else{
					showError('已经到达最后一页了');
				}
				return false;
			}else{
				showWindow('login', SITEURL+'member.php?mod=logging&action=login');
				return false;
			}
		});
	}



	/*个人下拉框*/
	if($('.js_grid').length>0){
		var userloaded = false;
		$('.js_dibavatar').bind('mouseover',function() {
			$(this).children('.js_grid').slideDown(0);
		}).bind('mouseout',function(){
			$(this).children('.js_grid').slideUp(0);
		});
	}

	$.fn.slide = function(options) {
		var settings = {
			'display' : '._slidepic',
			'pointer' : '._slidetit',
			'onclass' : 'current',
			'position' : '',
			'speed' : 7000
		};
		if (options) {
			$.extend(settings, options)
		}
		var _this = this;

		var displayobj, pointerobj, i=0, num=0, timer;
		var timesc = function(){
			if (settings.speed == 0) {
				return;
			};
			var _this = this;
			clearTimeout(timer);
			timer = setTimeout(function() {
				next();
			}, settings.speed);
		}
		var next = function(p){
			if(p===undefined){
				var ni = (i+1>=num)?0:i+1;
			}else{
				var ni = (p>=num)?0:p;
			}
			pointerobj.removeClass(settings.onclass).eq(ni).addClass(settings.onclass);
			displayobj.eq(ni).fadeIn(0).siblings().fadeOut(0);
			i = ni;
			timesc();
		}
		var init = function(){
			displayobj	= $(_this).find(settings.display).children();
			pointerobj	= $(_this).find(settings.pointer).children();
			num = pointerobj.length;
			if (settings.position) {
				displayobj.css('position',settings.position);
			};

			displayobj.hide().eq(i).show();
			pointerobj.removeClass(settings.onclass).eq(i).addClass(settings.onclass);
			pointerobj.mouseover(function(){
				next(pointerobj.index($(this)));
			});
			timesc();
		}
		init();
	}



	$('._slide').slide();
	$('._mmslide').slide({display:'._mmslidepic',pointer:'._mmslidetit'});
	$('._appslide').slide({display:'._appslidelist',pointer:'._appslidetit',speed:0});
	$('._helplide').slide({display:'._helplidelist',pointer:'._helplidetit',speed:0});
	$('._mcslide').slide({display:'._mcslidepic',pointer:'._mcslidetit'});
	$('._flslide').slide({display:'._flslidelist',pointer:'._flslidetit'});


	/*返回到顶部*/
	if($('.js_scrolltop').length>0){
		$(window).scroll(function(){
			showTopLink();
			flytop($('.js_scrolltop'));
		});

		showTopLink();
		flytop($('.js_scrolltop'));
		var t;
		$('.js_scrolltop').bind('mouseover',function(){
			timedCount();
		}).bind('mouseout',function(){
			stopCount();
			$(this).children().children('.scrolltopb').children('img').stop().animate({'height':'14px'},0);
		}).bind('click',function(){
			$('html, body').animate({scrollTop:0},'500');
			$(this).animate({'bottom':$(this).innerHeight()+$(window).innerHeight()+20,'opacity':'0'},500,function(){
				$(this).css('bottom','-100px');
			});
		});

	}




	if($('#_js_nologin').length>0 && discuz_uid){
		var AnimationPlay = false;
		var LayerDisplay = true;
		var Win_scrollTop = jQuery(window).scrollTop();
		$(window).scroll(function(){
			if (AnimationPlay) {
				return;
			}

			var Win_scrollTop2 = jQuery(window).scrollTop();
			if (Win_scrollTop2>Win_scrollTop) {
				if (LayerDisplay) {
					LayerDisplay = false;
					AnimationPlay = true;

					$('#_js_nologin').stop().animate({'bottom':'-130px','opacity':'0','visibility':'hidden'},500,function(){
						AnimationPlay = false;
					});
				}

			}else if(Win_scrollTop2<=Win_scrollTop) {
				if (!LayerDisplay) {
					LayerDisplay = true;
					AnimationPlay = true;

					$('#_js_nologin').stop().animate({'bottom':'0px','opacity':'1','visibility':'visible'},300 ,function(){
						AnimationPlay = false;
					});
				}
			}
			Win_scrollTop = Win_scrollTop2;
		});
	}





});


//关闭登录
function hideWindowLogin(){

	$('#fwin_login').hide();
}function hideWindow(){

	$('#re_login').hide();
}
//开启登录
function showWindow(){
	$('#fwin_login').show();
}

//开启注册
function showRequestWindow(){
	$('#re_login').show();
}
//图文切换COOKIE保存
function changethreadthumb(){
	var $=jQuery;
	var hide = 1;
	if ($('#threadthumb').hasClass("threadthumb_yes")) {
		hide = 1;
	}else{
		hide = 0;
	}

	$('#threadthumb').removeClass();
	$('.threadthumbbtn').removeClass('expand shrink');

	if (hide) {
		$('.threadthumbbtn').addClass('expand');
		$('#threadthumb').addClass('threadthumb_no');
		$('.threadlist_imglist').addClass('dn');
	}else{
		$('.threadthumbbtn').addClass('shrink');
		$('#threadthumb').addClass('threadthumb_yes');
		$('.threadlist_imglist').removeClass('dn');
	}
	setcookie('threadthumbhide', hide, 2592000);
}



//返回顶部显示或出现
function flytop(operationObj){
	var $ = jQuery;
	if($(window).scrollTop()>100){
		if( operationObj.css('bottom')==="-100px"){
			operationObj.animate({'bottom':'100px','opacity':'1'},100);
		}
	}else{
		operationObj.animate({'bottom':'-100px','opacity':'0'},100);
	}
}

//返回顶部鼠标放上火箭动画效果
var t;
function timedCount(){
	var $=jQuery;
	var thisobj=$('.js_scrolltop');
	thisobj.children().children('.scrolltopb').children('img').animate({'height':'21px'},200,function(){
		$(this).animate({'height':'14px'},300,function(){
			$(this).animate({'height':'21px'},200,function(){
				$(this).animate({'height':'28px'},100,function(){
					$(this).animate({'height':'21px'},200,function(){
						$(this).animate({'height':'14px'},300);
					});
				});
			});
		});
	});
	t=setTimeout("timedCount()",1500);
}
function setatarget(id){

	//$('#atarget').addClass('atarget_'+id);

	$(".gr").attr({

		"title" : "W3School jQuery Tutorial",
		"target":"_blank"
	});


}

