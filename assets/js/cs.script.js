/**
 * Look under your chair! console.log FOR EVERYONE!
 *
 * @see http://paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
 */
(function(b){function c(){}for(var d="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,timeStamp,profile,profileEnd,time,timeEnd,trace,warn".split(","),a;a=d.pop();){b[a]=b[a]||c}})((function(){try
{console.log();return window.console;}catch(err){return window.console={};}})());

/**
 * Page-specific call-backs
 * Called after dom has loaded.
 */

function qty(){	
	var dqty = $('.details-product #qty').val();			
	return dqty;
	console.log(dqty);
}
qty();

var GLOBAL = {
	common : {
		init: function(){
			$('.add_to_cart.btn-cart2').bind( 'click', addToCart2 );
			$('.add_to_cart').not( ".btn-cart2" ).bind( 'click', addToCart);
		}
	},

	templateIndex : {
		init: function(){

		}
	},

	templateProduct : {
		init: function(){

		}
	},

	templateCart : {
		init: function(){

		}
	}

}
var UTIL = {

	fire : function(func,funcname, args){
		var namespace = GLOBAL;
		funcname = (funcname === undefined) ? 'init' : funcname;
		if (func !== '' && namespace[func] && typeof namespace[func][funcname] == 'function'){
			namespace[func][funcname](args);
		}
	},

	loadEvents : function(){
		var bodyId = document.body.id;

		// hit up common first.
		UTIL.fire('common');

		// do all the classes too.
		$.each(document.body.className.split(/\s+/),function(i,classnm){
			UTIL.fire(classnm);
			UTIL.fire(classnm,bodyId);
		});
	}

};
$(document).ready(UTIL.loadEvents);



/**
 * Ajaxy add-to-cart
 */

function addToCart(e){
	if (typeof e !== 'undefined') e.preventDefault();
	var $this = $(this);

	console.log(this);
	var form = $this.parents('form');
	console.log(form);

	$.ajax({
		type: 'POST',
		url: '/cart/add.js',
		async: false,
		data: form.serialize(),
		dataType: 'json',
		error: addToCartFail,
		beforeSend: function() {  

			if(window.theme_load == "icon"){
				dqdt.showLoading('.btn-addToCart');
			} else{
				dqdt.showPopup('.loading');
			}
		},
		success: addToCartSuccess,
		cache: false
	});


}

/**
 * Ajaxy add-to-cart
 */

function addToCart2(e){
	if (typeof e !== 'undefined') e.preventDefault();
	var $this = $(this);


	var form = $this.parents('form');

	$.ajax({
		type: 'POST',
		url: '/cart/add.js',
		async: false,
		data: form.serialize(),
		dataType: 'json',
		error: addToCartFail,
		beforeSend: function() {  
			if(window.theme_load == "icon"){
				dqdt.showLoading('.btn-addToCart');
			} else{
				dqdt.showPopup('.loading');
			}
		},
		success: addToCartSuccess2,
		cache: false
	});


}



function addToCartSuccess2 (jqXHR, textStatus, errorThrown ,dqty){

	var link_img2 = Bizweb.resizeImage(jqXHR['image'], 'compact');if(link_img2=="null" || link_img2 =='' || link_img2 ==null){link_img2 = 'http://bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif';}  
	if(window.theme_load == "icon"){
		dqdt.hideLoading('.btn-addToCart');
	} else{
		$('.loading').addClass('loaded-content');         
	}

	switch (window.addcart_susscess) {
		case ('popup'):    
			alert(link_img2);
			$('.addcart-popup').find('.product-name').html(jqXHR['name']);
			$('.addcart-popup').find('.product-image img').attr('src', link_img2);

			dqdt.showPopup('.addcart-popup');

			break;
		case ('text'):
			dqdt.hidePopup('.loading'); 
			dqdt.hideLoading('.btn-addToCart');

			break;
		case ('noitice'):          
			dqdt.hidePopup('.loading'); 
			dqdt.hideLoading('.btn-addToCart');
			$('.product-noitice.susscess').find('.product-name').html(jqXHR['name']);
			$('.product-noitice.susscess').find('.product-image img').attr('src', link_img2);
			dqdt.showNoitice('.product-noitice.susscess');

			break;
		default: 

			//console.log(qty());
			$('.addcart-popup').find('.product-name').html(jqXHR['name']);
			$('.addcart-popup').find('.quantity').html('<span>Số lượng: </span> <b>'+ qty() +' </b>');
			$('.addcart-popup').find('.total-money').html('<span>Tổng tiền: </span> <b>'+ Bizweb.formatMoney(jqXHR['price']*qty(),"{{amount_no_decimals_with_comma_separator}}₫"+'</b>' ));


			$('.addcart-popup').find('.product-image img').attr('src', link_img2);
			dqdt.showPopup('.addcart-popup');

	}
	$.ajax({
		type: 'GET',
		url: '/cart.js',
		async: false,
		cache: false,
		dataType: 'json',
		success: updateCartDesc
	});


	// Let's get the cart and show what's in it in the cart box.	
	Bizweb.getCart(function(cart) {
		Bizweb.updateCartFromForm(cart, '.top-cart-content .mini-products-list');		
	});
}


function addToCartSuccess (jqXHR, textStatus, errorThrown){

	var link_img2 = Bizweb.resizeImage(jqXHR['image'], 'compact');if(link_img2=="null" || link_img2 =='' || link_img2 ==null){link_img2 = 'http://bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif';}  
	if(window.theme_load == "icon"){
		dqdt.hideLoading('.btn-addToCart');
	} else{
		$('.loading').addClass('loaded-content');         
	}

	switch (window.addcart_susscess) {
		case ('popup'):    
			alert(link_img2);
			$('.addcart-popup').find('.product-name').html(jqXHR['name']);
			$('.addcart-popup').find('.product-image img').attr('src', link_img2);
			console.log(jqXHR);
			dqdt.showPopup('.addcart-popup');

			break;
		case ('text'):
			dqdt.hidePopup('.loading'); 
			dqdt.hideLoading('.btn-addToCart');

			break;
		case ('noitice'):          
			dqdt.hidePopup('.loading'); 
			dqdt.hideLoading('.btn-addToCart');
			$('.product-noitice.susscess').find('.product-name').html(jqXHR['name']);
			$('.product-noitice.susscess').find('.product-image img').attr('src', link_img2);
			dqdt.showNoitice('.product-noitice.susscess');

			break;
		default: 

			console.log(qty());
			$('.addcart-popup').find('.product-name').html(jqXHR['name']);
			$('.addcart-popup').find('.quantity').html('<span>Số lượng: </span> <b>01</b> ');
			$('.addcart-popup').find('.total-money').html('<span>Tổng tiền: </span><b>'+ Bizweb.formatMoney(jqXHR['price'],"{{amount_no_decimals_with_comma_separator}}₫"+'</b>' ));


			$('.addcart-popup').find('.product-image img').attr('src', link_img2);
			dqdt.showPopup('.addcart-popup');

	}
	$.ajax({
		type: 'GET',
		url: '/cart.js',
		async: false,
		cache: false,
		dataType: 'json',
		success: updateCartDesc
	});


	// Let's get the cart and show what's in it in the cart box.	
	Bizweb.getCart(function(cart) {
		Bizweb.updateCartFromForm(cart, '.top-cart-content .mini-products-list');

	});
}

function addToCartFail(jqXHR, textStatus, errorThrown){
	var response = $.parseJSON(jqXHR.responseText);
	var $info = '<div class="error">'+ response.description +'</div>';
	notifyProduct($info);
}

$(document).on('click', ".items-count", function () {

	//$(this).parent().children('.items-count').prop('disabled', true);
	var thisBtn = $(this);
	var variantId = $(this).parent().find('.variantID').val();
	var qty =  $(this).parent().children('.number-sidebar').val();
	// updateQuantity(qty, variantId);
});
// $(document).on('change', ".number-sidebar", function () {
// 	var variantId = $(this).parent().children('.variantID').val();
// 	var qty =  $(this).val();
// 	updateQuantity(qty, variantId);
// });

// function updateQuantity (qty, variantId){
// 	var variantIdUpdate = variantId;
// 	$.ajax({
// 		type: "POST",
// 		url: "/cart/change.js",
// 		data: {"quantity": qty, "variantId": variantId},
// 		dataType: "json",
// 		success: function (cart, variantId) {
// 			Bizweb.onCartUpdateClick(cart, variantIdUpdate);
// 		},
// 		error: function (qty, variantId) {
// 			Bizweb.onError(qty, variantId)
// 		}
// 	})
// }