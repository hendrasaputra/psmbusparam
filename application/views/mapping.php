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
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	<?php 
		function get_value_field($array, $keyfield, $key, $valuefield){
			foreach($array as $item){
				if($item[$keyfield] == $key) return $item[$valuefield];
			}
			return null;
		}

		//$is_found = in_array_r($os_list, 'os_version', 'XP');
		function coba(){
		
		}
	?>
	<script>
		function func() {
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
			document.getElementById("paramcontent").innerHTML = "NodinID: "+paramid;
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
                    <li><a href="#home-sec"></a></li>
                    <li><a href="#template-sec"></a></li>
                    <!-- <li><a href="#contact-sec">CONTACT</a></li> -->
                </ul>
            </div>
           
        </div>
    </div>
     <!--END NAV SECTION -->

    <!--TEMPLATE SECTION-->
    <section  id="template-sec">
        <div class="container">
            <div class="row">
                <h1>Mapping</h1>
					<div class="col-md-12 g-pad-bottom">
					</div>
                <div class="col-md-6">
                    <form id="form" name="form" method="POST" action="#">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
								<div class="form-group">
									<b>Nodin Params *</b>
                                    <div class="form-group">
										<select class="form-control" name="channel" id="channel" required="required">
											<option value="UMB">UMB</option>
											<option value="MyTelkomsel">MyTelkomsel</option>
											<option value="Portal">Portal</option>
										</select>
									</div>
                                </div>
								<div class="form-group">
									<b>ContentID *</b>
                                    <select class="form-control" name="newtype" id="newtype" required="required">
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
            </div>
        </div>
    </section>
    <!--END CONTACT SECTION-->

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
