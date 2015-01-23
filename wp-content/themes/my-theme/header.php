<?php
/**
 * The Header for our theme.
 *
 * @package Customer-Blvd
 */
?>

<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

	<!-- 	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
	<!-- 	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/materialize/dist/css/materialize.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/main.css" />
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/bower_components/materialize/dist/js/materialize.js"></script>
	<!--	<script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/dist/jquery.js"></script> -->


	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<nav class="top-nav">
		<div class="container">
			<div class="nav-wrapper"><a class="">

				<svg class="page-title" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 200 " style="enable-background:new 0 0 248.556 60;" xml:space="preserve">
				<g>
					<path style="fill:#12A86F;" d="M154,40H6c-3.3,0-6-2.7-6-6V6c0-3.3,2.7-6,6-6h148V40z"/>
					<path style="fill:#12A86F;" d="M164.556,60l15.75-20h62.25c3.3,0,6-2.7,6-6V6c0-3.3-2.7-6-6-6l-78,0V60z"/>
					<g>
						<path style="fill:#FFFFFF;" d="M22.484,30.396c-1.013,0.982-2.384,1.472-4.112,1.472c-1.237,0-2.315-0.299-3.232-0.896
						c-0.917-0.597-1.675-1.413-2.272-2.448c-0.598-1.034-1.04-2.256-1.328-3.664c-0.288-1.408-0.432-2.912-0.432-4.512
						c0-1.621,0.149-3.136,0.448-4.544c0.298-1.408,0.752-2.635,1.36-3.68c0.608-1.045,1.371-1.866,2.288-2.464
						c0.917-0.597,1.995-0.896,3.232-0.896c0.96,0,1.787,0.144,2.48,0.432c0.693,0.288,1.291,0.683,1.792,1.184
						c0.501,0.502,0.917,1.099,1.248,1.792c0.331,0.694,0.603,1.446,0.816,2.256l-3.744,1.216c-0.299-1.024-0.63-1.76-0.992-2.208
						c-0.363-0.448-0.917-0.672-1.664-0.672c-1.088,0-1.888,0.656-2.4,1.968c-0.512,1.312-0.768,3.163-0.768,5.552
						c0,2.39,0.267,4.251,0.8,5.584c0.533,1.333,1.344,2,2.432,2c0.341,0,0.645-0.053,0.912-0.16c0.267-0.106,0.512-0.282,0.736-0.528
						c0.224-0.245,0.437-0.571,0.64-0.976c0.203-0.405,0.411-0.917,0.624-1.536l3.456,1.472C24.27,27.996,23.497,29.415,22.484,30.396z
						"/>
						<path style="fill:#FFFFFF;" d="M40.772,26.46c-0.235,1.152-0.613,2.128-1.136,2.928c-0.523,0.8-1.206,1.414-2.048,1.84
						s-1.883,0.64-3.12,0.64c-1.195,0-2.214-0.219-3.056-0.656c-0.843-0.437-1.531-1.061-2.064-1.872
						c-0.534-0.811-0.923-1.787-1.168-2.928c-0.246-1.141-0.368-2.405-0.368-3.792V9.116h4.032v13.527c0,1.945,0.216,3.312,0.648,4.103
						c0.432,0.791,1.101,1.186,2.007,1.186c0.927,0,1.591-0.395,1.992-1.186c0.4-0.791,0.601-2.158,0.601-4.103V9.116h4.032v13.44
						C41.124,24.007,41.007,25.308,40.772,26.46z"/>
						<path style="fill:#FFFFFF;" d="M57.284,25.468c0,0.939-0.153,1.797-0.46,2.576c-0.307,0.779-0.746,1.451-1.317,2.016
						c-0.571,0.565-1.271,1.008-2.1,1.329c-0.828,0.319-1.765,0.479-2.811,0.479c-1.515,0-2.816-0.347-3.904-1.04
						c-1.088-0.693-2.016-1.52-2.784-2.48l2.72-2.912c0.683,0.875,1.371,1.52,2.064,1.936c0.693,0.416,1.381,0.624,2.064,0.624
						c0.832,0,1.456-0.218,1.872-0.656c0.416-0.437,0.624-1.029,0.624-1.776c0-0.64-0.247-1.237-0.739-1.792
						c-0.492-0.554-1.391-1.173-2.697-1.856c-0.835-0.426-1.584-0.864-2.249-1.312c-0.664-0.448-1.226-0.949-1.686-1.504
						c-0.46-0.555-0.814-1.179-1.06-1.872c-0.246-0.693-0.369-1.509-0.369-2.448c0-0.832,0.148-1.616,0.444-2.352
						c0.296-0.736,0.714-1.376,1.254-1.92c0.54-0.544,1.196-0.971,1.972-1.28c0.774-0.309,1.631-0.464,2.57-0.464
						c1.408,0,2.576,0.272,3.504,0.816c0.928,0.544,1.797,1.339,2.608,2.384l-2.656,2.656c-0.32-0.362-0.614-0.672-0.88-0.928
						c-0.267-0.256-0.534-0.464-0.8-0.624c-0.267-0.16-0.549-0.272-0.848-0.336c-0.299-0.064-0.64-0.096-1.024-0.096
						c-0.64,0-1.152,0.187-1.536,0.56c-0.384,0.374-0.576,0.837-0.576,1.392c0,0.342,0.054,0.651,0.161,0.928
						c0.107,0.277,0.283,0.555,0.53,0.832c0.246,0.277,0.573,0.555,0.979,0.832c0.407,0.277,0.92,0.576,1.542,0.896
						c0.963,0.512,1.799,1.008,2.505,1.488c0.707,0.48,1.29,1.003,1.75,1.568s0.798,1.195,1.012,1.888
						C57.176,23.713,57.284,24.53,57.284,25.468z"/>
						<path style="fill:#FFFFFF;" d="M67.652,12.956v18.561h-4.032V12.956h-4.64v-3.84h13.312v3.84H67.652z"/>
						<path style="fill:#FFFFFF;" d="M89.22,20.284c0,1.622-0.144,3.136-0.432,4.544s-0.736,2.635-1.344,3.68
						c-0.608,1.045-1.381,1.867-2.32,2.464c-0.939,0.597-2.059,0.896-3.36,0.896c-1.302,0-2.421-0.299-3.36-0.896
						c-0.939-0.597-1.707-1.413-2.304-2.448c-0.598-1.034-1.04-2.256-1.328-3.664c-0.288-1.408-0.432-2.912-0.432-4.512
						c0-1.621,0.144-3.136,0.432-4.544c0.288-1.408,0.736-2.635,1.344-3.68c0.608-1.045,1.386-1.866,2.336-2.464
						c0.949-0.597,2.074-0.896,3.376-0.896c1.301,0,2.416,0.299,3.344,0.896c0.928,0.598,1.691,1.414,2.288,2.448
						c0.597,1.035,1.04,2.256,1.328,3.664C89.076,17.18,89.22,18.684,89.22,20.284z M85.123,20.348c0-2.389-0.261-4.25-0.784-5.584
						c-0.523-1.333-1.381-2-2.576-2c-1.216,0-2.075,0.656-2.576,1.968c-0.501,1.312-0.752,3.163-0.752,5.552
						c0,2.39,0.261,4.251,0.784,5.584c0.522,1.333,1.392,2,2.608,2c1.194,0,2.042-0.656,2.544-1.968
						C84.872,24.588,85.123,22.738,85.123,20.348z"/>
						<path style="fill:#FFFFFF;" d="M105.251,31.517v-7.232c0-1.344,0.005-2.603,0.016-3.776c0.01-1.173,0.026-2.176,0.048-3.008
						c-0.235,0.811-0.523,1.803-0.864,2.976c-0.342,1.173-0.726,2.4-1.152,3.68l-2.592,7.937l-2.592-7.937
						c-0.406-1.28-0.784-2.507-1.136-3.68c-0.352-1.173-0.646-2.165-0.88-2.976c0.021,0.832,0.037,1.835,0.048,3.008
						s0.016,2.432,0.016,3.776v7.232h-3.584v-22.4h4.032l2.656,8.288c0.341,1.045,0.65,2.016,0.928,2.912s0.469,1.611,0.576,2.144
						c0.106-0.554,0.304-1.285,0.592-2.192c0.288-0.906,0.592-1.861,0.912-2.864l2.656-8.288h3.968v22.4H105.251z"/>
						<path style="fill:#FFFFFF;" d="M113.059,31.517v-22.4h11.52v3.84h-7.488v4.736h5.024v3.776h-5.024v6.208h7.776v3.84H113.059z"/>
						<path style="fill:#FFFFFF;" d="M137.106,31.517l-3.476-8.513h-1.308v8.513h-4.032v-22.4h5.952c2.176,0,3.909,0.582,5.2,1.744
						c1.29,1.163,1.936,2.907,1.936,5.232c0,1.579-0.36,2.864-1.081,3.856c-0.721,0.992-1.63,1.744-2.727,2.256l3.872,9.312H137.106z
						M137.347,16.172c0-1.018-0.248-1.793-0.743-2.324s-1.343-0.796-2.543-0.796h-1.738v6.208h1.959
						C136.325,19.26,137.347,18.231,137.347,16.172z"/>
					</g>
					<g>
						<path style="fill:#FFFFFF;" d="M190.394,24.556c0,2.326-0.636,4.064-1.904,5.216c-1.27,1.152-3.109,1.728-5.521,1.728h-5.823V9.1
						h6.048c2.068,0,3.696,0.528,4.88,1.584s1.776,2.523,1.776,4.4c0,0.96-0.235,1.835-0.704,2.624c-0.47,0.79-1.152,1.376-2.048,1.76
						c0.896,0.363,1.669,0.955,2.319,1.776C190.068,22.065,190.394,23.169,190.394,24.556z M185.882,15.26
						c0-0.768-0.197-1.371-0.592-1.808c-0.395-0.437-1.083-0.656-2.063-0.656h-2.177v4.896h2.272c0.98,0,1.653-0.245,2.016-0.736
						C185.7,16.466,185.882,15.9,185.882,15.26z M186.426,24.636c0-1.173-0.267-2.032-0.8-2.576s-1.387-0.816-2.56-0.816h-2.017v6.56
						h2.145c1.151,0,1.979-0.293,2.479-0.88S186.426,25.575,186.426,24.636z"/>
						<path style="fill:#FFFFFF;" d="M193.561,31.517v-22.4h4.032V27.58h7.008v3.937H193.561z"/>
						<path style="fill:#FFFFFF;" d="M215.833,31.517h-3.903l-5.408-22.4h4.128l2.176,10.816c0.085,0.427,0.182,0.912,0.288,1.456
						s0.213,1.088,0.32,1.632c0.106,0.544,0.197,1.051,0.271,1.52c0.075,0.47,0.134,0.832,0.177,1.088
						c0.021-0.256,0.074-0.618,0.159-1.088c0.086-0.469,0.182-0.981,0.288-1.536c0.106-0.554,0.213-1.104,0.32-1.648
						c0.106-0.544,0.202-1.019,0.288-1.424l2.144-10.816h4.097L215.833,31.517z"/>
						<path style="fill:#FFFFFF;" d="M237.722,20.284c0,1.963-0.203,3.653-0.608,5.072c-0.405,1.419-0.987,2.587-1.744,3.504
						c-0.758,0.917-1.669,1.589-2.736,2.016c-1.066,0.428-2.251,0.641-3.552,0.641h-4.96v-22.4h5.057c1.344,0,2.544,0.213,3.6,0.64
						s1.952,1.093,2.688,2c0.736,0.907,1.297,2.064,1.681,3.472C237.529,16.636,237.722,18.322,237.722,20.284z M233.625,20.348
						c0-1.02-0.063-1.976-0.19-2.868c-0.128-0.892-0.355-1.667-0.685-2.325c-0.329-0.659-0.779-1.174-1.352-1.546
						c-0.573-0.371-1.305-0.557-2.195-0.557h-1.05V27.58h1.05c0.891,0,1.622-0.186,2.195-0.558c0.572-0.372,1.022-0.881,1.352-1.529
						s0.557-1.413,0.685-2.294C233.561,22.318,233.625,21.368,233.625,20.348z"/>
					</g>
				</g>
			</svg>

		</a></div>
	</div>
</nav>