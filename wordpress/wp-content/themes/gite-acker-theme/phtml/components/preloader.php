<style>	
	header, #page, footer{
		display: none;
		opacity: 0;
	}
	.preloader{
		display: block ;
		opacity: 1 ;
		z-index: 0;
		position : fixed;
	    width: 100%;
	    height: 100%;
	}
	.preloader svg, .preloader img{
		position: absolute;
	  	width: 100px;
	  	height: 100px;
		left: 50%;
		top: 50%;
	  	margin: 20px;
	  	display:inline-block;
		transform: translateX(-65px);
	}
</style>
<div class="preloader">
	<img src="../src-theme/img/logo_brun.png" alt="">
	<svg width="38" height="38" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg">
	    <defs>
	        <linearGradient x1="8.042%" y1="0%" x2="65.682%" y2="23.865%" id="a">
	            <stop stop-color="#974908" stop-opacity="0" offset="0%"/>
	            <stop stop-color="#974908" stop-opacity=".631" offset="63.146%"/>
	            <stop stop-color="#974908" offset="100%"/>
	        </linearGradient>
	    </defs>
	    <g fill="none" fill-rule="evenodd">
	        <g transform="translate(1 1)">
	            <path d="M36 18c0-9.94-8.06-18-18-18" id="Oval-2" stroke="url(#a)" stroke-width="2">
	                <animateTransform
	                    attributeName="transform"
	                    type="rotate"
	                    from="0 18 18"
	                    to="360 18 18"
	                    dur="0.9s"
	                    repeatCount="indefinite" />
	            </path>
	            <circle fill="#fff" cx="36" cy="18" r="1">
	                <animateTransform
	                    attributeName="transform"
	                    type="rotate"
	                    from="0 18 18"
	                    to="360 18 18"
	                    dur="0.9s"
	                    repeatCount="indefinite" />
	            </circle>
	        </g>
	    </g>
	</svg>
</div>