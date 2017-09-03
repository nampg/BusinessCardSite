(function($) {
	$(function() {
		$(document).on('change', 'input[name="customer-accept"]', function() {
			$('.show-on-accepted').show();
		});
		
		$('#mainNav li.submenu').on('click', function(e) {
			e.preventDefault();
			$(this).find('ul').toggle();
		});
		$('#mainNav ul li a').on('click', function(e) {
			e.stopPropagation();
		});
		
		$('.package-quantity').on('change', function(e) {
			price = $(this).closest('td').prev('td').text().trim();
			subtotal = parseInt($(this).val()) * parseInt(price.slice(1, price.length));	
			$(this).closest('td').next('td').find('.package-subtotal').val(subtotal);
			$(this).closest('td').next('td').find('.package-subtotal-text').text(subtotal);
		});
		
		/* Validate order form */
		var validator = new FormValidator('form-order', 
	        [{
	            name: 'first-name',
	            display: '名',
	            rules: 'required|alpha',  
	        },
	        {
	            name: 'last-name|alpha',
	            display: '姓',
	            rules: 'required',  
	        },
	        {
	            name: 'email',
	            display: '連絡用メールアドレス',
	            rules: 'valid_email',
	            depends: function() {
	                return Math.random() > .5;
	            }
	        },
	        {
	        	name: 'phone',
	        	display: '連絡用電話番号',
	        	rules: 'required|numeric'
	        },
	        {
                name: 'transfer-name',
                display: '振込人名称',
                rules: 'required'
            },
            {
                name: 'destination-phone',
                display: '送付先電話番号',
                rules: 'required'
            },
            {
                name: 'destination-postal-code',
                display: '送付先郵便番号',
                rules: 'required'
            },
            {
                name: 'address-1',
                display: '送付先住所１',
                rules: 'required'
            },
            {
                name: 'address-2',
                display: '送付先住所２',
                rules: 'required'
            },
            {
                name: 'destination-company',
                display: '送付先会社名',
                rules: 'required'
            },
            {
                name: 'destination-name',
                display: '送付先氏名',
                rules: 'required'
            },
            {
                name: 'bc-name',
                display: '氏名',
                rules: 'required'
            },
			{
                name: 'quantity-1',
                display: '注文数',
                rules: 'numeric'
            },
			{
                name: 'quantity-2',
                display: '注文数',
                rules: 'numeric'
            },
			{
                name: 'quantity-3',
                display: '注文数',
                rules: 'numeric'
            },
			{
                name: 'quantity-4',
                display: '注文数',
                rules: 'numeric'
            },
	        ],
	        function(errors, evt) {
	            var SELECTOR_ERRORS = $('.error_box');

	            if (errors.length > 0) {
	                SELECTOR_ERRORS.empty();
	                for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
	                    SELECTOR_ERRORS.append(errors[i].message + '<br />');
	                }
	                $('.success_box').hide();
	                SELECTOR_ERRORS.fadeIn(200);
	            } else {
	                SELECTOR_ERRORS.css({ display: 'none' });
//	 	                evt.preventDefault();
	            }
	        }
	    );
	    validator.setMessage('required', '%sをご記入ください。');
	    validator.setMessage('valid_email', '%sに正しいメール書式を入力してください。');
	});                    
})(jQuery);
