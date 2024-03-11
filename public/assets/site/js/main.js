// console.log('123')
// const iconMenu = document.querySelector('.header__icon_toggle');
// if(iconMenu){
//     console.log('123')
// const menuMobile = document.querySelector('.header__menu');
// // const header = document.querySelector('.header');

// iconMenu.addEventListener("click", function(e){
//     iconMenu.classList.toggle('header__icon_active');
//     // menuCom.classList.toggle('active');
//     // header.classList.toggle('active');
//     menuMobile.classList.toggle('header__menu_active')
// })
// }

$(function() {
	var $menu_popup = $('.header__menu');
	
	$(".header__icon_toggle").click(function(){
		$menu_popup.slideToggle(300);  
		return false;
	});			
	
});