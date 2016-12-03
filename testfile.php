<html>
<head>
	<style>
		ul#loadbar {
			list-style: none;
			width: 140px;
			margin: 0 auto;
			padding-top: 50px;
			padding-bottom: 75px;
		}
		ul#loadbar li {
			float: left;
			position: relative;
			width: 11px;
			height: 26px;
			margin-left: 1px;
			border-left: 1px solid #111;
			border-top: 1px solid #111;
			border-right: 1px solid #333;
			border-bottom: 1px solid #333;
			background: #000;
		}
		ul#loadbar li:first-child { margin-left: 0 }
			.bar {
			background-color: #2187e7;
			background-image: -moz-linear-gradient(45deg, #2187e7 25%, #a0eaff);
			background-image: -webkit-linear-gradient(45deg, #2187e7 25%, #a0eaff);
			background-image: -ms-linear-gradient(45deg, #2187e7 25%, #a0eaff);
			background-image: -o-linear-gradient(45deg, #2187e7 25%, #a0eaff);
			background-image: linear-gradient(45deg, #2187e7 25%, #a0eaff);
			width: 11px;
			height: 26px;
			opacity: 0;
			-webkit-animation: fill .5s linear forwards;
			-moz-animation: fill .5s linear forwards;
			-ms-animation: fill .5s linear forwards;
			animation: fill .5s linear forwards;
		}
		#layerFill1 {
			-moz-animation-delay: 0.5s;
			-webkit-animation-delay: 0.5s;
			-ms-animation-delay: 0.5s;
			animation-delay: 0.5s;
		}
		#layerFill2 {
			-moz-animation-delay: 1s;
			-webkit-animation-delay: 1s;
			-ms-animation-delay: 1s;
			animation-delay: 1s;
		}
		#layerFill3 {
			-moz-animation-delay: 1.5s;
			-webkit-animation-delay: 1.5s;
			-ms-animation-delay: 1.5s;
			animation-delay: 1.5s;
		}
		#layerFill4 {
			-moz-animation-delay: 2s;
			-webkit-animation-delay: 2s;
			-ms-animation-delay: 2s;
			animation-delay: 2s;
		}
		#layerFill5 {
			-moz-animation-delay: 2.5s;
			-webkit-animation-delay: 2.5s;
			-ms-animation-delay: 2.5s;
			animation-delay: 2.5s;
		}
		#layerFill6 {
			-moz-animation-delay: 3s;
			-webkit-animation-delay: 3s;
			-ms-animation-delay: 3s;
			animation-delay: 3s;
		}
		#layerFill7 {
			-moz-animation-delay: 3.5s;
			-webkit-animation-delay: 3.5s;
			-ms-animation-delay: 3.5s;
			animation-delay: 3.5s;
		}
		#layerFill8 {
			-moz-animation-delay: 4s;
			-webkit-animation-delay: 4s;
			-ms-animation-delay: 4s;
			animation-delay: 4s;
		}
		#layerFill9 {
			-moz-animation-delay: 4.5s;
			-webkit-animation-delay: 4.5s;
			-ms-animation-delay: 4.5s;
			animation-delay: 4.5s;
		}
		#layerFill10 {
			-moz-animation-delay: 5s;
			-webkit-animation-delay: 5s;
			-ms-animation-delay: 5s;
			animation-delay: 5s;
		}
		@-moz-keyframes fill {
			0% { opacity: 0 }
			100% { opacity: 1 }
		}
		@-webkit-keyframes fill {
			0% { opacity: 0 }
			100% { opacity: 1 }
		}
		@-ms-keyframes fill {
			0% { opacity: 0 }
			100% { opacity: 1 }
		}
		@keyframes fill {
			0% { opacity: 0 }
			100% { opacity: 1 }
		}
		.vcard, #HTML2, #AdSense1, #BlogArchive1, #Label1, #AdSense2 {display:none;}.post {font-size:14px;}
		.footer, .post-footer, .feed-links, .sidebar,.fauxcolumn-right-outer,.column-right-outer, #HTML6 , .home-link, .banners {display:none !important;}
		.main-inner .columns{padding-right:0 !important;}.column-center-outer{width:95% !important;}
	</style>
</head>
<body>
	<div id="page-content">
	<div class='post-body entry-content'>
	<div id="cse" style="width: 100%;">
	<ul id="loadbar">
	<li><div class="bar" id="layerFill1"></div></li>
	<li><div class="bar" id="layerFill2"></div></li>
	<li><div class="bar" id="layerFill3"></div></li>
	<li><div class="bar" id="layerFill4"></div></li>
	<li><div class="bar" id="layerFill5"></div></li>
	<li><div class="bar" id="layerFill6"></div></li>
	<li><div class="bar" id="layerFill7"></div></li>
	<li><div class="bar" id="layerFill8"></div></li>
	<li><div class="bar" id="layerFill9"></div></li>
	<li><div class="bar" id="layerFill10"></div></li>
	</ul>
	</div>
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	<script type="text/javascript">
	google.load('search', '1', {language : 'en', style : google.loader.themes.V2_DEFAULT});
	google.setOnLoadCallback(function() {
	var customSearchOptions = {};
	var orderByOptions = {};
	orderByOptions['keys'] = [{label: 'Relevance', key: ''},{label: 'Date', key: 'date'}];
	customSearchOptions['enableOrderBy'] = true;
	customSearchOptions['orderByOptions'] = orderByOptions;
	var imageSearchOptions = {};
	imageSearchOptions['layout'] = google.search.ImageSearch.LAYOUT_COLUMN;
	customSearchOptions['enableImageSearch'] = true;
	customSearchOptions['imageSearchOptions'] = imageSearchOptions;
	var googleAnalyticsOptions = {};
	googleAnalyticsOptions['queryParameter'] = 's';
	googleAnalyticsOptions['categoryParameter'] = '';
	customSearchOptions['googleAnalyticsOptions'] = googleAnalyticsOptions; var customSearchControl = new google.search.CustomSearchControl(
	'007293532650698705660:bsthcrlbxqk', customSearchOptions);
	customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
	var options = new google.search.DrawOptions();
	options.setAutoComplete(true);
	options.enableSearchResultsOnly();
	customSearchControl.draw('cse', options);
	function parseParamsFromUrl() {
	var params = {};
	var parts = window.location.search.substr(1).split('\x26');
	for (var i = 0; i < parts.length; i++) {
	var keyValuePair = parts[i].split('=');
	var key = decodeURIComponent(keyValuePair[0]);
	params[key] = keyValuePair[1] ?
	decodeURIComponent(keyValuePair[1].replace(/\+/g, ' ')) :
	keyValuePair[1];
	}
	return params;
	}
	var urlParams = parseParamsFromUrl();
	var queryParamName = "s";
	if (urlParams[queryParamName]) {
	customSearchControl.execute(urlParams[queryParamName]);
	}
	}, true);
	</script>
	<div style='clear: both;'></div>
	</div>

</body>
</html>