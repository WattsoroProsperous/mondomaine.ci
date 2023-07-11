<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>pageWebTest</title>
		<script src=https://touchpay.gutouch.com/touchpay/script/prod_touchpay-0.0.1.js  type="text/javascript"></script>
		<script type="text/javascript">
			function calltouchpay(){
				sendPaymentInfos(new Date().getTime(),
								 'MTTCI9275','Mr1t5RXShfjp5qb1kTZPsOizFLMa1TZxd6DF6VAsfTxAp8a1ma',
                                 'mtinvestment.com',  'url_redirection_success',
                                 'url_redirection_failed', 1000,
                                 'dakar', '','', '',  '');
			}
		</script>
    </head>

    <body>


		<input type=button onclick='calltouchpay()' value=continuer />
	</body>
</html>
