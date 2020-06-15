/**
 * js网页雪花效果jquery插件 
 * 懒人建站 www.51xuediannao.com   整理
 * @see http://workshop.rs
 */

$(function(){
	fun1();	
	
	
})
function fun1(){
	$("#zu1").animate({backgroundPosition:'+=1px'},120);
	window.setTimeout("fun1()",120);
}

