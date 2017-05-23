<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Mockup Nodin</title>
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--ANIMATED FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
       <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	
	<!-- Latest compiled and minified CSS -->
	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

	<!-- (Optional) Latest compiled and minified JavaScript translation files -->
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/i18n/defaults-*.min.js"></script> -->
  
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	
	<script>
		//var paramid = '';
		function getparamid(paramid){
			var split = document.getElementById('split').value;
			var channelid = document.getElementById('channel');
			var channel = channelid.options[channelid.selectedIndex].text;
			var typeid = document.getElementById('newtype');
			var type = typeid.options[typeid.selectedIndex].text;
			var serviceid = document.getElementById('newservice');
			var service = serviceid.options[serviceid.selectedIndex].text;
			var categoryid = document.getElementById('category');
			var category = categoryid.options[categoryid.selectedIndex].text;
			var l1mid = document.getElementById('l1_m');
			var l1m = l1mid.options[l1mid.selectedIndex].value;
			var l2mid = document.getElementById('l2_m');
			var l2m = l2mid.options[l2mid.selectedIndex].text;
			var l3mid = document.getElementById('l3_m');
			var l3m = l3mid.options[l1mid.selectedIndex].text;
			var l4mid = document.getElementById('l4_m');
			var l4m = l4mid.options[l4mid.selectedIndex].text;
			var zoneid = document.getElementById('zone');
			var zone = zoneid.options[zoneid.selectedIndex].text;
			var paramid = split+"|"+channel+"|"+type+"|"+service+"|"+category+"|"
						+l1m+"|"+l2m+"|"+l3m+"|"+l4m+"|"+zone;
			return paramid;
		}
		function func() {
			var nodinid = document.getElementById('nodinid').value;
			var paramid = getparamid();
			
			document.getElementById("paramcontent").innerHTML = "<b>NodinID: </b>" + nodinid + "<br> <b>Params: </b>" + paramid;
			disableInputForms();
			// $.ajax({
			// type: "POST",
			// url: "ajaxjs.php",
			// data: dataString,
			// cache: false,
			// success: function(html) {
			// alert(html);
			// }
			// });
		}
		
		function disableInputForms(){
			document.getElementById("nodinid").disabled = true;
			document.getElementById("split").disabled = true;
			document.getElementById("split").disabled = true;
			document.getElementById("channel").disabled = true;
			document.getElementById("newtype").disabled = true;
			document.getElementById("newservice").disabled = true;
			document.getElementById("category").disabled = true;
			document.getElementById("l1_m").disabled = true;
			document.getElementById("l2_m").disabled = true;
			document.getElementById("l3_m").disabled = true;
			document.getElementById("l4_m").disabled = true;
			document.getElementById("zone").disabled = true; 
		}
		
		function selectNodinID(){
			var nodinidmapping = document.getElementById('nodinidmapping');
			var nodinidmap = nodinidmapping.options[nodinidmapping.selectedIndex].value;
			// alert(nodinidmap);
			if (nodinidmap == "NodinID_1"){
				document.getElementById("nodinIDParamContent").innerHTML = '<br><b>Params: </b>50|UMB|Akuisisi|Recharge Bonus|3G Champ 1 GB|Broadband|APN/PAYU|APN Internet|G_GPRS Internet|0';
			} else if (nodinidmap == "NodinID_2"){
				document.getElementById("nodinIDParamContent").innerHTML = '<br><b>Params: </b>30|UMB|Akuisisi|Recharge Bonus|3G Champ 1 GB|Broadband|APN/PAYU|APN Internet|G_GPRS Internet|0';
			} else {
				document.getElementById("nodinIDParamContent").innerHTML = '<br><b>Params: </b>10|UMB|Akuisisi|Recharge Bonus|3G Champ 1 GB|Broadband|APN/PAYU|APN Internet|G_GPRS Internet|0';
			}
		}	

		function onSubmitMapping(){
			var res = '';
			var nodinidmapping = document.getElementById('nodinidmapping');
			var nodinidmap = nodinidmapping.options[nodinidmapping.selectedIndex].value;
			var myTable = "<br><br><table border='1'><tr><th>NodinID</th><th>ContentID</th></tr>";
			for ( var i = 0; i < contentid.selectedOptions.length; i++) {
			  // console.log( contentid.selectedOptions[i].value);
			  //res += contentid.selectedOptions[i].value + '-';
			  myTable += "<tr><td>"+nodinidmap+"</td><td>"+contentid.selectedOptions[i].value+"</td></tr>";
			}
			// alert(res);
			
			
			
			myTable += "</table>";
			document.getElementById('ContentIDList').innerHTML = myTable;
   		}
	</script>
</head>
<body >
	
	<!-- NAV SECTION -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">MockUp</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#nodin-sec">Nodin</a></li>
                    <li><a href="#mapping-sec">Mapping</a></li>
                </ul>
            </div>
           
        </div>
    </div>
     <!--END NAV SECTION -->

    <!--NODIN SECTION-->
    <section  id="nodin-sec">
        <div class="container">
            <div class="row">
                <h1>Nodin Input</h1>
					<div class="col-md-12 g-pad-bottom">
					</div>
                <div class="col-md-6">
                    <form id="form" name="form" method="POST" action="controllers/routes.php">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
								<div class="form-group">
									<b>Nodin ID *</b>
                                    <div class="form-group">
										<input name="nodinid" id="nodinid" required="required" class="form-control" placeholder=""></input>
									</div>
                                </div>
                                <div class="form-group">
									<b>Price Split *</b>
                                    <div class="form-group">
										<input name="split" id="split" required="required" class="form-control" placeholder=""></input>
									</div>
                                </div>
								<div class="form-group">
									<b>Channel *</b>
                                    <div class="form-group">
										<select class="form-control" name="channel" id="channel" required="required">
											<option value="UMB">UMB</option>
											<option value="MyTelkomsel">MyTelkomsel</option>
											<option value="Portal">Portal</option>
										</select>
									</div>
                                </div>
								<div class="form-group">
									<b>New Type *</b>
                                    <select class="form-control" name="newtype" id="newtype" required="required">
										<option value="Akuisisi">Akuisisi</option>
										<option value="Akuisisi Others">Akuisisi Others</option>
										<option value="Blackberry">Blackberry</option>
										<option value="BTL">BTL</option>
										<option value="Bundling">Bundling</option>
										<option value="LOOP">LOOP</option>
										<option value="MKIOS">MKIOS</option>
										<option value="Rame">Rame</option>
										<option value="Regular Massive">Regular Massive</option>
										<option value="Regular Segmented">Regular Segmented</option>
										<option value="WLC">WLC</option>
									</select>
                                </div>
								<div class="form-group">
									<b>New Service *</b>
                                    <select class="form-control" name="newservice" id="newservice" required="required"> 
										<?php if(!empty($services)): foreach($services as $service): ?>
											<option value="<?php echo $service['Service'] ?>">
												<?php echo $service['Service'] ?>
											</option>
										<?php endforeach; endif; ?>
									</select>
                                </div>
								<div class="form-group">
									<b>Category</b>
									<select class="form-control" name="category" id="category" required="required">
										<?php if(!empty($categories)): foreach($categories as $category): ?>
											<option value="<?php echo $category['Category'] ?>">
												<?php echo $category['Category'] ?>
											</option>
										<?php endforeach; endif; ?>
									</select>
                                    <!-- <input type="text" class="form-control" name="packetName" required="required" placeholder="Packet Name"> -->
                                </div>
                            </div>
							<div class="col-md-6 col-sm-6">
                                <div class="form-group">
									<b>L1_M *</b>
									<select class="form-control" name="l1_m" id="l1_m" required="required">
										<option value="Broadband">Broadband</option>
										<option value="Digital Services">Digital Services</option>
										<option value="International Roaming">International Roaming</option>
										<option value="Others">Others</option>
										<option value="SMS P2P">SMS P2P</option>
										<option value="Voice P2P">Voice P2P</option>
									</select>
                                </div>
								<div class="form-group">
									<b>L2_M *</b>
									<select class="form-control" name="l2_m" id="l2_m" required="required">
										<option value="APN/PAYU">APN/PAYU</option>
										<option value="Blackberry">Blackberry</option>
										<option value="Telkomsel Flash">Telkomsel Flash</option>
										<option value="VOIP">VOIP</option>
										<option value="Voucher">Voucher</option>
										<option value="WIFI">WIFI</option>
									</select>
                                </div>
								<div class="form-group">
									<b>L3_M *</b>
									<select class="form-control" name="l3_m" id="l3_m" required="required">
										<?php if(!empty($l3ms)): foreach($l3ms as $l3m): ?>
											<option value="<?php echo $l3m['PRDCT_DTL_L3_NME'] ?>">
												<?php echo $l3m['PRDCT_DTL_L3_NME'] ?>
											</option>
										<?php endforeach; endif; ?>
									</select>
                                </div>
								<div class="form-group">
									<b>L4_M *</b>
									<select class="form-control" name="l4_m" id="l4_m" required="required">
										<?php if(!empty($l4ms)): foreach($l4ms as $l4m): ?>
											<option value="<?php echo $l4m['PRDCT_LN_L4_NME'] ?>">
												<?php echo $l4m['PRDCT_LN_L4_NME'] ?>
											</option>
										<?php endforeach; endif; ?>
									</select>
                                </div>
								<div class="form-group">
									<b>Zone *</b>
									<select class="form-control" name="zone" id="zone" required="required">
										<?php if(!empty($zones)): foreach($zones as $zone): ?>
											<option value="<?php echo $zone['Zone'] ?>">
												<?php echo $zone['Zone'] ?>
											</option>
										<?php endforeach; endif; ?>
									</select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <!--<div class="form-group">
                                    <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                                </div>-->
                                <div class="form-group">
                                    <button type="button" id="submit" onclick="func()" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
				<div class="col-md-6">
					<div id="paramcontent" class="col-md-12 col-sm-12">
						<!-- <div class="form-group">
							<b>Template</b>
							<textarea name="message" id="message" class="form-control" rows="10" placeholder="Message Template"></textarea>
						</div> -->
					</div>
				</div>
            </div>
        </div>
    </section>
    <!--END CONTACT SECTION-->

	 <!--MAPPING SECTION-->
    <section  id="mapping-sec">
        <div class="container">
            <div class="row">
                <h1>Mapping</h1>
					<div class="col-md-12 g-pad-bottom">
					</div>
                <div class="col-md-12">
				<form id="form" name="form" method="POST" action="#">
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<b>Nodin ID *</b>
                                    <div class="form-group">
										<select class="form-control" name="nodinidmapping" id="nodinidmapping" required="required" onchange="selectNodinID()">
											<option value="NodinID_1">NodinID_1</option>
											<option value="NodinID_2">NodinID_2</option>
											<option value="NodinID_3">NodinID_3</option>
										</select>
									</div>
                                </div>
								<div class="form-group">
									<b>ContentID *</b>
                                    <select class="form-control" name="contentid" id="contentid" multiple>
										<option value="ContentID_1">ContentID_1</option>
										<option value="ContentID_2">ContentID_2</option>
										<option value="ContentID_3">ContentID_3</option>
										<option value="ContentID_4">ContentID_4</option>
										<option value="ContentID_5">ContentID_5</option>
										<option value="ContentID_6">ContentID_6</option>
										<option value="ContentID_7">ContentID_7</option>
										<option value="ContentID_8">ContentID_8</option>
										<option value="ContentID_9">ContentID_9</option>
										<option value="ContentID_10">ContentID_10</option>
									</select>
                                </div>
                            </div>
							<div id="mappingContent" class="col-md-8 col-sm-8">
								<div id="nodinIDParamContent" class="col-md-12 col-sm-12">
								</div>
								<div id="ContentIDList" class="col-md-8 col-sm-8">
								</div>
							</div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <!--<div class="form-group">
                                    <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                                </div>-->
                                <div class="form-group">
                                    <button type="button" id="mappingSubmit" onclick="onSubmitMapping()" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</section>
	<!--END MAPPING SECTION-->
	
    <!-- SOCIAL STATS SECTION-->
    <section>
        <div class="container">
            
        </div>
    </section>
    <!-- END SOCIAL STATS SECTION-->

    <!--FOOTER SECTION -->
    <div id="footer">
        2017 | CESE - PSM 
         
    </div>
    <!-- END FOOTER SECTION -->

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/plugins/bootstrap.js"></script>
  
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
