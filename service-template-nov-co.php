<?php
	/* Server basic information; no need to modify these */
	$site['protocol'] = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? 'https://' : 'http://';
	$site['url'] = $site['protocol'] . $_SERVER['HTTP_HOST'] . '/';

	/*Let's Party*/

	/*Set up the colors*/
	$color['theme'] = 'ee7c3d'; // Light Orange
	$color['theme-alt'] = '303234'; // Dark-gray
	$color['body-background'] = 'ffffff'; // White
	$color['email-background'] = 'e9eef3'; // Very light-gray
	$color['font'] = '303234'; // Dark-gray
	$color['font-alt'] = '68451f'; // Dark Brown
	$color['phone'] = 'B35724'; //light brown
	$color['button-background'] = 'dadfe4'; // Light-gray
	$color['button-font'] = '303234'; // Dark-gray
	$color['button-offers-bkg'] = 'ea8300'; // Orange
	$color['coupon-top'] = 'ee7c3d'; //Light Orange
	
	/*Client Logos*/
	$client['logo'] = '';
	$client['logo-small'] ='';
	
	/*Banner Link*/
	$client['banner'] = 'http://images.skem1.com/client_id_29799/service-tip-nov.jpg';
	
	/* Client basic information */
	$client['name'] = '';
	$client['phone-sales'] = '';
	$client['phone-service'] = '';
	$client['street-address'] = '';
	$client['city'] = '';
	$client['state'] = '';
	$client['zip'] = '';
	$client['website'] = 'www.website.com';
	
	/*Preview Text*/
	$client['preview-text'] = '';
	
	/*Email Copy*/
	$client['copy'] = '';
	
	/*Video Image and Link*/
	$client['video-link'] = '';
	$client['video-image'] = '';
	
	/*Coupon Information*/
	$coupon['headline'] = '';
	$coupon['price'] = '';
	$coupon['details-1'] = '';
	$coupon['details-2'] = '';
	$coupon['disclaimer'] = '';
	
	/*Coupon Links*/
	$client['coupon-link'] = '';
	$client['coupon-page'] = '';
	
	/*Footer Information*/
	$client['dealer-info'] = '';
	
	/*Links*/

	$client['link-1-text'] = '';
	$client['link-1-url'] = '';
	
	$client['link-2-text'] = '';
	$client['link-2-url'] = '';
	
	$client['link-3-text'] = '';
	$client['link-3-url'] = '';
	
	$client['link-4-text'] = '';
	$client['link-4-url'] = '';
	
	/* Leave these values empty if client only has 4 dealer links/buttons */
	$client['link-5-text'] = '';
	$client['link-5-url'] = '';
	
	/*Unsubscribe Links*/
	
	$client['unsub-link'] = '{UnsubscribeURL}';
	$client['view-online'] = '{PreviewURL}';
	
	/* No need to modify these client variables; they're be dynamic */
	$client['website-full'] = 'http://' . $client['website'] . '/'; // No need to modify this
	$client['dir'] = substr($_SERVER['PHP_SELF'], 1, stripos( substr($_SERVER['PHP_SELF'], 1), '/')); // No need to modify this
	$client['url'] = $site['url'] . $client['dir'] . '/';
	//$client['street-address'] = str_replace(' ', '&nbsp;', $client['street-address']);
	//$client['city'] = str_replace(' ', '&nbsp;', $client['city']);
	$client['link-1-text-mod'] = ($client['link-1-text'] != '' && strpos($client['link-1-text'], ' ')) ? preg_replace('/\s/', '<br />', $client['link-1-text'], 1) : $client['link-1-text'];
	$client['link-2-text-mod'] = ($client['link-2-text'] != '' && strpos($client['link-2-text'], ' ')) ? preg_replace('/\s/', '<br />', $client['link-2-text'], 1) : $client['link-2-text'];
	$client['link-3-text-mod'] = ($client['link-3-text'] != '' && strpos($client['link-3-text'], ' ')) ? preg_replace('/\s/', '<br />', $client['link-3-text'], 1) : $client['link-3-text'];
	$client['link-4-text-mod'] = ($client['link-4-text'] != '' && strpos($client['link-4-text'], ' ')) ? preg_replace('/\s/', '<br />', $client['link-4-text'], 1) : $client['link-4-text'];
	$client['link-5-text-mod'] = ($client['link-5-text'] != '' && strpos($client['link-5-text'], ' ')) ? preg_replace('/\s/', '<br />', $client['link-5-text'], 1) : $client['link-5-text'];
	
	// REFORMAT PHONE NUMBERS INTO READABLE SYNTAX: (XXX) XXX-XXXX
	$client['phone-sales-display'] = '('.substr($client['phone-sales'], 0, 3).') '.substr($client['phone-sales'], 3, 3).'-'.substr($client['phone-sales'], 6);
	$client['phone-service-display'] = '('.substr($client['phone-service'], 0, 3).') '.substr($client['phone-service'], 3, 3).'-'.substr($client['phone-service'], 6);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns:v="urn:schemas-microsoft-com:vml">
<head>
<title><?=$client['name'];?></title>
<style type="text/css">
	.ExternalClass,
	.ExternalClass p,
	.ExternalClass span,
	.ExternalClass font,
	.ExternalClass td,
	.ExternalClass div {line-height:100%;}
	.ExternalClass {display:block; margin:0 auto; width:100%;}
	
	table {mso-table-lspace:0pt; mso-table-rspace:0pt;}
	body {-webkit-text-size-adjust:100%; margin:0; padding:0;}
	
	.ReadMsgBody {width:100%;}
	
	.apple-link a {color:#<?=$color['font'];?>; text-decoration:none;}
	.apple-link-alt a {color:#<?=$color['font-alt'];?>; text-decoration:none;}
	.apple-link-color a {color:#<?=$color['theme'];?>; text-decoration:none;}
	.apple-link-white a {color:#ffffff; text-decoration:none;}
	
	@media only screen and (max-width:480px) {
		tr[class=padding-outside] {display:none !important;}
		tr[class=top-links] {display:none !important;}
		
		table[class=main] {width:100% !important;}
		table[class=coupon] {width:100% !important;}
		table[class=button] {width: 300px !important;}
		
		img[class=logo] {margin:0 auto !important;}
		img[class=banner-top-img] {height:auto !important; width:100% !important;}
		
		td[class=spacer-horizontal] {display:block !important; height:20px !important; width:100% !important;}
		td[class=spacer-horizontal-small] {display:block !important; height:2px !important; width:100% !important;}
		td[class=stack] {display:block !important; padding-top:20px !important; width:100% !important;}
		td[class=stack-nopad] {display:block !important; width:100% !important;}
		td[class=stack-center] {display:block !important; padding-top:20px !important; text-align:center !important; width:100% !important;}
		td[class=stack-center-nopad] {display:block !important; text-align:center !important; width:100% !important;}
		
		td[class=stack-center-nopad-details] {display:block !important; text-align:center !important; width:98% !important;}
		
		td[class=header] {border-top:3px solid #<?=$color['theme'];?> !important;}
		td[class=dealer-link] {background-color:#<?=$color['theme'];?> !important; display:block !important; width:100% !important;}
		a[class=dealer-link-tag] {display:none !important;}
		a[class=dealer-link-tag-mobile] {display:inline-block !important; font-size:15px !important; line-height:20px !important; max-height:none !important;}
		
		td[class=outside-hide] {width: 20px !important; display: block !important;}
		td[class=buttons] {display:inline-block !important; width: 100% !important; height: 42px;line-height: 42px !important; }
	}
</style>
<meta name="format-detection" content="telephone=no" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body style="background-color:#<?=$color['body-background'];?>;">
	
		<div class="preview-text" style="color:#<?=$color['body-background'];?>; display:none; font-size:1px; height:1px; mso-hide:all; text-align:center;">
			<?=$client['preview-text'];?>
		</div>
		
		<table class="main" align="center" border="0" cellpadding="0" cellspacing="0" style="background-color:#<?=$color['email-background'];?>;width: 600px;">
	<tbody>
		<tr class="padding-outside">
				<td style="background-color:#<?=$color['body-background'];?>; height:20px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
			</tr>
		<tr class="top-links">
				<td>
					<table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%">
						<tr style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px; text-align:center;">
							<td style="background-color:#<?=$color['theme'];?>; padding-bottom:10px; padding-top:10px; width:198px;"><a href="<?=$client['view-online'];?>" title="Click/tap here to view this e-mail in your default web browser." style="color:#<?=$color['font-alt'];?>; text-decoration:none;">View In Browser</a></td>
							<td style="width:2px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
							<td style="background-color:#<?=$color['theme'];?>; padding-bottom:10px; padding-top:10px; width:200px;"><a href="<?=$client['website-full'];?>" title="Click/tap here to visit our website homepage." style="color:#<?=$color['font-alt'];?>; text-decoration:none;">Visit Our Homepage</a></td>
							<td style="width:2px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
							<td style="background-color:#<?=$color['theme'];?>; padding-bottom:10px; padding-top:10px; width:198px;"><a href="<?=$client['unsub-link'];?>" title="Click/tap here to unsubscribe from future mailings." style="color:#<?=$color['font-alt'];?>; text-decoration:none;">Unsubscribe</a></td>
						</tr>
					</table>
				</td>
			</tr>
			
			<tr>
				<td class="header">
					
					<table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%">
						<tr>
							<td colspan="5" style="height:20px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
						</tr>
						<tr style="color:#<?=$color['font'];?>; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:18px; font-weight:200;">
							<td style="width:20px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
							<td class="stack-center-nopad" valign="middle" style="text-align:left;">
								<a href="<?=$client['website-full'];?>" title="Click/tap here to visit our website homepage."><img class="logo" src="<?=$client['logo']?>" alt="Logo" border="0" style="display:block;" /></a>
							</td>
							<td class="spacer-horizontal" style="width:20px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
							<td class="stack-center-nopad" valign="middle" style="line-height:28px; text-align:right;">
								{!IF: Phone_Insert=gmail!}
								<span style="color:#<?=$color['phone'];?>;">Serving</span> <span class="apple-link"><?=$client['city'];?>, <?=$client['state'];?></span>
								{!ELSE:!} 
								<?php if ($client['phone-sales'] != '') { ?>
								<span style="color:#<?=$color['phone'];?>;">Sales</span> <span class="apple-link" style="color:#<?=$color['font'];?>; text-decoration:none;"><?=$client['phone-sales-display'];?></span><br />
								<?php } ?>
								<?php if ($client['phone-service'] != '') { ?>
								<span style="color:#<?=$color['phone'];?>;">Service</span> <span class="apple-link" style="color:#<?=$color['font'];?>; text-decoration:none;"><?=$client['phone-service-display'];?></span>
								<?php } ?>{!END:IF!}
							</td>
							<td style="width:20px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
						</tr>
						<tr>
							<td colspan="5" style="height:20px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
						</tr>
					</table>
					
				</td>
			</tr>
			
			<tr>
				<td class="dealer-links">
					
					<table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%">
						<tr style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:15px; font-weight:400; text-align:center;">
							<?php if ($client['link-5-text'] == '' || $client['link-5-url'] == '') { ?>
							<td class="dealer-link" valign="middle" style="background-color:#<?=$color['button-background'];?>; border-top:3px solid #<?=$color['theme'];?>; padding-bottom:10px; padding-top:10px; width:149px;">
								<a class="dealer-link-tag" href="<?=$client['link-1-url'];?>" title="<?=$client['link-1-text'];?>" style="color:#<?=$color['font'];?>; text-decoration:none;"><?=$client['link-1-text-mod'];?></a>
								<a class="dealer-link-tag-mobile" href="<?=$client['link-1-url'];?>" title="<?=$client['link-1-text'];?>" style="color:#<?=$color['font-alt'];?>; display:none; font-size:0; max-height:0; line-height:0; mso-hide:all; text-decoration:none; width:100%;"><?=$client['link-1-text'];?></a>
							</td>
							<td class="spacer-horizontal-small" style="width:2px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
							<td class="dealer-link" valign="middle" style="background-color:#<?=$color['button-background'];?>; border-top:3px solid #<?=$color['theme'];?>; padding-bottom:10px; padding-top:10px; width:149px;">
								<a class="dealer-link-tag" href="<?=$client['link-2-url'];?>" title="<?=$client['link-2-text'];?>" style="color:#<?=$color['font'];?>; text-decoration:none;"><?=$client['link-2-text-mod'];?></a>
								<a class="dealer-link-tag-mobile" href="<?=$client['link-2-url'];?>" title="<?=$client['link-2-text'];?>" style="color:#<?=$color['font-alt'];?>; display:none; font-size:0; max-height:0; line-height:0; mso-hide:all; text-decoration:none; width:100%;"><?=$client['link-2-text'];?></a>
							</td>
							<td class="spacer-horizontal-small" style="width:2px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
							<td class="dealer-link" valign="middle" style="background-color:#<?=$color['button-background'];?>; border-top:3px solid #<?=$color['theme'];?>; padding-bottom:10px; padding-top:10px; width:149px;">
								<a class="dealer-link-tag" href="<?=$client['link-3-url'];?>" title="<?=$client['link-3-text'];?>" style="color:#<?=$color['font'];?>; text-decoration:none;"><?=$client['link-3-text-mod'];?></a>
								<a class="dealer-link-tag-mobile" href="<?=$client['link-3-url'];?>" title="<?=$client['link-3-text'];?>" style="color:#<?=$color['font-alt'];?>; display:none; font-size:0; max-height:0; line-height:0; mso-hide:all; text-decoration:none; width:100%;"><?=$client['link-3-text'];?></a>
							</td>
							<td class="spacer-horizontal-small" style="width:2px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
							<td class="dealer-link" valign="middle" style="background-color:#<?=$color['button-background'];?>; border-top:3px solid #<?=$color['theme'];?>; padding-bottom:10px; padding-top:10px; width:149px;">
								<a class="dealer-link-tag" href="<?=$client['link-4-url'];?>" title="<?=$client['link-4-text'];?>" style="color:#<?=$color['font'];?>; text-decoration:none;"><?=$client['link-4-text-mod'];?></a>
								<a class="dealer-link-tag-mobile" href="<?=$client['link-4-url'];?>" title="<?=$client['link-4-text'];?>" style="color:#<?=$color['font-alt'];?>; display:none; font-size:0; max-height:0; line-height:0; mso-hide:all; text-decoration:none; width:100%;"><?=$client['link-4-text'];?></a>
							</td>
							<?php } else { ?>
							<td class="dealer-link" valign="middle" style="background-color:#<?=$color['button-background'];?>; border-top:3px solid #<?=$color['theme'];?>; padding-bottom:10px; padding-top:10px; width:118px;">
								<a class="dealer-link-tag" href="<?=$client['link-1-url'];?>" title="<?=$client['link-1-text'];?>" style="color:#<?=$color['font'];?>; text-decoration:none;"><?=$client['link-1-text-mod'];?></a>
								<a class="dealer-link-tag-mobile" href="<?=$client['link-1-url'];?>" title="<?=$client['link-1-text'];?>" style="color:#<?=$color['font-alt'];?>; display:none; font-size:0; max-height:0; line-height:0; mso-hide:all; text-decoration:none; width:100%;"><?=$client['link-1-text'];?></a>
							</td>
							<td class="spacer-horizontal-small" style="width:2px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
							<td class="dealer-link" valign="middle" style="background-color:#<?=$color['button-background'];?>; border-top:3px solid #<?=$color['theme'];?>; padding-bottom:10px; padding-top:10px; width:118px;">
								<a class="dealer-link-tag" href="<?=$client['link-2-url'];?>" title="<?=$client['link-2-text'];?>" style="color:#<?=$color['font'];?>; text-decoration:none;"><?=$client['link-2-text-mod'];?></a>
								<a class="dealer-link-tag-mobile" href="<?=$client['link-2-url'];?>" title="<?=$client['link-2-text'];?>" style="color:#<?=$color['font-alt'];?>; display:none; font-size:0; max-height:0; line-height:0; mso-hide:all; text-decoration:none; width:100%;"><?=$client['link-2-text'];?></a>
							</td>
							<td class="spacer-horizontal-small" style="width:2px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
							<td class="dealer-link" valign="middle" style="background-color:#<?=$color['button-background'];?>; border-top:3px solid #<?=$color['theme'];?>; padding-bottom:10px; padding-top:10px; width:120px;">
								<a class="dealer-link-tag" href="<?=$client['link-3-url'];?>" title="<?=$client['link-3-text'];?>" style="color:#<?=$color['font'];?>; text-decoration:none;"><?=$client['link-3-text-mod'];?></a>
								<a class="dealer-link-tag-mobile" href="<?=$client['link-3-url'];?>" title="<?=$client['link-3-text'];?>" style="color:#<?=$color['font-alt'];?>; display:none; font-size:0; max-height:0; line-height:0; mso-hide:all; text-decoration:none; width:100%;"><?=$client['link-3-text'];?></a>
							</td>
							<td class="spacer-horizontal-small" style="width:2px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
							<td class="dealer-link" valign="middle" style="background-color:#<?=$color['button-background'];?>; border-top:3px solid #<?=$color['theme'];?>; padding-bottom:10px; padding-top:10px; width:118px;">
								<a class="dealer-link-tag" href="<?=$client['link-4-url'];?>" title="<?=$client['link-4-text'];?>" style="color:#<?=$color['font'];?>; text-decoration:none;"><?=$client['link-4-text-mod'];?></a>
								<a class="dealer-link-tag-mobile" href="<?=$client['link-4-url'];?>" title="<?=$client['link-4-text'];?>" style="color:#<?=$color['font-alt'];?>; display:none; font-size:0; max-height:0; line-height:0; mso-hide:all; text-decoration:none; width:100%;"><?=$client['link-4-text'];?></a>
							</td>
							<td class="spacer-horizontal-small" style="width:2px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
							<td class="dealer-link" valign="middle" style="background-color:#<?=$color['button-background'];?>; border-top:3px solid #<?=$color['theme'];?>; padding-bottom:10px; padding-top:10px; width:118px;">
								<a class="dealer-link-tag" href="<?=$client['link-5-url'];?>" title="<?=$client['link-5-text'];?>" style="color:#<?=$color['font'];?>; text-decoration:none;"><?=$client['link-5-text-mod'];?></a>
								<a class="dealer-link-tag-mobile" href="<?=$client['link-5-url'];?>" title="<?=$client['link-5-text'];?>" style="color:#<?=$color['font-alt'];?>; display:none; font-size:0; max-height:0; line-height:0; mso-hide:all; text-decoration:none; width:100%;"><?=$client['link-5-text'];?></a>
							</td>
							<? } ?>
						</tr>
					</table>
					
				</td>
			</tr>
		<tr>
				<td class="banner-top">
					<img class="banner-top-img" src="<?=$client['banner'];?>" alt="Banner" border="0" style="display:block; height:auto; width:100%;" />
				</td>
			</tr>
<tr>
			<td class="copy-main">
					<table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%">
						<tr>
							<td colspan="4" style="height:20px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
						</tr>
						<tr style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:16px; font-weight:200; line-height:24px; text-align:justify;">
							<td style="width:20px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
							<td style="padding-bottom: 20px;">
								<?=$client['copy'];?>
<br /><br />
 <strong>If you no longer wish to receive these coupons and offers, please unsubscribe by replying to this email and put "unsubscribe" in the message and we will remove you from our list within 48 hours.</strong>
								 <br /><br />
<a href="<?=$client['video-link'];?>" title="Watch This Video To Learn How" target="_blank">Watch This Video To Learn How</a>
<br /><br />
<table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%;">
									<tr>
										<td class="stack-center-nopad" style="text-align:center;" align="center">
											<center><a href="<?=$client['video-link'];?>" title="Click/tap here to watch our video!"><img src="<?=$client['video-image'];?>" alt="" style="border:0; width:250px; height:162px;" width="250" /></a></center>
										</td>
										<td class="mobile-hide" style="width:20px; padding:0 !important;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
										<td class="mobile-hide" style="text-align:right;">
											<img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" />
										</td>
									</tr>
								</table>
							</td>
							
							<td style="width:20px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
						</tr>
					</table>
				</td>
		</tr>

		<tr style="text-align:center;">
					<td>
							<a href="<?=$client['coupon-link'];?>" title="" style="color:#<?=$color['font-alt'];?>; text-decoration:none;"><table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
								<tr style="color:#<?=$color['font'];?>; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; text-align:center;">
										<td style="width:100px;" class="outside-hide"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
										<td style="border:1px dashed #<?=$color['theme-alt'];?>; background-color:#f4f7f9;font-size: 14px;">
													<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;">
														<tr>
															<td style="color:#ffffff; font-size:25px; font-weight:600;background-color: #<?=$color['coupon-top'];?>; height:40px; width: 100%;text-align: center;">
															<?=$coupon['headline'];?>
															</td>
														</tr>
														<tr>
															<td>
																<table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
																	<tr style="color:#<?=$color['coupon-top'];?>; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; text-align:center;font-size:35px; font-weight:600;padding-top:5px;">
																		<td class="stack-center-nopad" style="color:#<?=$color['coupon-top'];?>; font-size:35px; font-weight:600;text-align: center;padding-top:5px;" width="40%">
																		<?=$coupon['price'];?>
																		</td>
																		<td class="spacer-horizontal-small" style="width:10px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
																		<td class="stack-center-nopad" style="text-align: right;line-height: 16px;padding:5px">
																		<table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
																	<tr style="color:#<?=$color['coupon-top'];?>; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; text-align:center;font-size:15px; font-weight:400;padding-top:5px;">
																	<td class="stack-center-nopad-details" style="text-align: left;line-height: 16px;padding:5px" >
																		<?=$coupon['details-1'];?>
																		</td>
																		</tr>
																		</table>
																		</td>
																	</tr>
																</table>
															</td>
														</tr>
														<tr>
															<td style="text-align: center;line-height: 16px;padding-top: 5px;">
															<?=$coupon['details-2'];?>
															</td>
														</tr>
														<tr>
															<td style="text-align: center;font-size: 8px;padding: 10px;">
															*<?=$coupon['disclaimer'];?>
															</td>
														</tr>
													</table>
													
														<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:90%;">
															<tr>
																<td class="" style="text-align:center;"><img src="<?=$client['logo-small'];?>" alt="Logo" style="height:auto; width:100px;" /></td>
																<td class="" style="text-align:center;"><img src="http://images.skem1.com/client_id_29799/csc.png" alt="Powered by CSC" style="height:auto; width:57px;" /></td>
															</tr>
														</table>
														
													</td>
										<td style="width:100px;" class="outside-hide"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
									</tr>
								</table></a>
						</td>
		</tr>

		<tr>
				<td style="height:20px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
		</tr>
		<tr style="text-align:center;">
					<td>
							<table border="0" class="button" cellpadding="0" cellspacing="0" style="width:400px;" align="center">
								<tr style="color:#<?=$color['font'];?>; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; text-align:center;">
										
										<td style="font-size: 14px;text-align: center;">
													<table border="0" cellspacing="0" cellpadding="0" align="center" style="width:100%;text-align: center;">
													<tbody>
														<tr style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:15px; font-weight:400; text-align:center;">
														<td valign="middle" align="center" class="buttons">
															<a href="<?=$client['coupon-link'];?>" title="" style="text-decoration:none; color:#ffffff;line-height: 40px;"><table border="0" cellpadding="0" cellspacing="0" style="width:100%;" align="center">
																<tr>
															<td class="buttons"  align="center" valign="middle" height="45" style="color: #ffffff;border:#ea8300 thin solid; border-radius:8px; -moz-border-radius:8px; -webkit-border-radius:8px; text-shadow:1px 1px 1px #000000; filter:dropshadow(color=#000000, offx=1, offy=1);" bgcolor="#ea8300" background="http://images.skem1.com/client_id_29799/orange-button-bkg.png">Print Coupon</td></tr>
														</table></a>
															</td>
															<td class="stack" style="width:20px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
															<td valign="middle" align="center" class="buttons">
															<a href="<?=$client['coupon-page'];?>" title="" style="text-decoration:none; color:#ffffff;line-height: 40px;"><table border="0" cellpadding="0" cellspacing="0" style="width:100%;" align="center">
																<tr>
															<td class="buttons" align="center" valign="middle" height="45" style="color: #ffffff;border:#ea8300 thin solid; border-radius:8px; -moz-border-radius:8px; -webkit-border-radius:8px; text-shadow:1px 1px 1px #000000; filter:dropshadow(color=#000000, offx=1, offy=1);" bgcolor="#ea8300" background="http://images.skem1.com/client_id_29799/orange-button-bkg.png">Browse Specials</td>
															</tr>
														</table></a>
															</td>
														</tr>
														</tbody>
													</table>
											</td>
																		
								</tr>
							</table>
					</td>
			</tr>
			
		
		
		<tr>
			<td style="height:20px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
		</tr>
		<tr>
			<td class="footer" style="background-color:#8B9096;">
					<table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%">
						<tr>
							<td colspan="3" style="height:20px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
						</tr>
						<tr>
							<td style="width:20px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
							<td>
								<table align="center" border="0" cellpadding="0" cellspacing="0" style="width:100%">
									<tr style="color:#<?=$color['font-alt'];?>; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; font-weight:200; line-height:18px; text-align:center;">
										<td class="stack-center-nopad" valign="top">
											<strong><?=$client['name'];?></strong>
											<br /><a href="<?=$client['website-full'];?>" title="Click/tap here to visit our website homepage." style="color:#<?=$color['font-alt'];?>; text-decoration:none;"><?=$client['website'];?></a>
										</td>
									</tr>
									<tr style="color:#<?=$color['font-alt'];?>; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:9px; font-weight:200; text-align:center;">
										<td class="stack-center-nopad" valign="bottom" style="padding-top: 10px;">
										<?=$client['dealer-info'];?>	
										</td>
									</tr>
								</table>
							</td>
							<td style="width:20px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
						</tr>
						<tr>
							<td colspan="3" style="height:20px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
						</tr>
					</table>
				</td>
			</tr>
						
			<tr class="padding-outside">
				<td style="background-color:#<?=$color['body-background'];?>; height:20px;"><img src="http://images.skem1.com/client_id_29799/1px.png" alt="" style="border:0; display:block; height:1px; padding:0 !important; width:1px;" /></td>
			</tr>
		</table>
	</tbody>
</table>
</body>
</html>
