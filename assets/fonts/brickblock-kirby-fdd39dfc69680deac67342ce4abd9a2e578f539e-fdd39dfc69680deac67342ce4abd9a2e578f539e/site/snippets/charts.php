<!-- begin section charts -->
<div class="section charts">
  <div class="section__in">
	<div class="charts__block charts__block_first">
	  <h3 class="charts__title"><?php echo $page->pie()->html() ?></h3>
	  <div class="charts__elem">
		<!-- <div class="chart" style="background-image: url('img/pie-chart.png')"></div> -->
		<div class="chart js-chart-simple">
		  <div class="chart__image pie-chart">
			<svg width="290px" height="290px" viewBox="-17 -17 327 327" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			  <defs>
				<linearGradient x1="32.8900298%" y1="8.17782793%" x2="70.7320602%" y2="98.0772569%" id="linearGradient-1">
				  <stop stop-color="#4291E2" offset="0%"></stop>
				  <stop stop-color="#1372D2" offset="100%"></stop>
				</linearGradient>
				<linearGradient x1="4.37101979%" y1="80.218921%" x2="74.2879225%" y2="24.0653583%" id="linearGradient-2">
				  <stop stop-color="#00E5F5" offset="0%"></stop>
				  <stop stop-color="#00CCDB" offset="100%"></stop>
				</linearGradient>
				<path d="M139.982857,297.66206 C139.982857,297.66206 231.057762,191.752209 231.057762,191.75221 C207.137955,169.621386 175.139881,156.096314 139.982857,156.096314 L139.982857,297.66206 Z" id="path-3"></path>
				<filter x="-17.6%" y="-8.5%" width="139.5%" height="125.4%" filterUnits="objectBoundingBox" id="filter-4">
				  <feOffset dx="2" dy="6" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
				  <feGaussianBlur stdDeviation="5" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
				  <feColorMatrix values="0 0 0 0 0.30984409   0 0 0 0 0.213263618   0 0 0 0 0.34375  0 0 0 0.113224638 0" type="matrix" in="shadowBlurOuter1"></feColorMatrix>
				</filter>
				<linearGradient x1="90.2058083%" y1="43.655126%" x2="0%" y2="50.958076%" id="linearGradient-5">
				  <stop stop-color="#00B2F6" offset="0%"></stop>
				  <stop stop-color="#00A7E7" offset="100%"></stop>
				</linearGradient>
				<path d="M170.441601,242.344376 C170.441601,242.344376 292.348236,160.754227 292.348236,160.754225 C267.386044,119.556195 222.128964,92.0248786 170.441601,92.0248786 L170.441601,242.344376 Z" id="path-6"></path>
				<filter x="-13.1%" y="-8.0%" width="129.5%" height="123.9%" filterUnits="objectBoundingBox" id="filter-7">
				  <feOffset dx="2" dy="6" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
				  <feGaussianBlur stdDeviation="5" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
				  <feColorMatrix values="0 0 0 0 0.30984409   0 0 0 0 0.213263618   0 0 0 0 0.34375  0 0 0 0.113224638 0" type="matrix" in="shadowBlurOuter1"></feColorMatrix>
				</filter>
				<linearGradient x1="32.8900298%" y1="8.17782793%" x2="50%" y2="72.0736084%" id="linearGradient-8">
				  <stop stop-color="#DA73F6" offset="0%"></stop>
				  <stop stop-color="#B860DE" offset="100%"></stop>
				</linearGradient>
				<path d="M135,159 C135,159 263.94638,72.6982631 263.94638,72.6982607 C237.542696,29.1211683 189.672155,0 135,0 L135,159 Z" id="path-9"></path>
				<filter x="-12.4%" y="-7.5%" width="127.9%" height="122.6%" filterUnits="objectBoundingBox" id="filter-10">
				  <feOffset dx="2" dy="6" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
				  <feGaussianBlur stdDeviation="5" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
				  <feColorMatrix values="0 0 0 0 0.30984409   0 0 0 0 0.213263618   0 0 0 0 0.34375  0 0 0 0.113224638 0" type="matrix" in="shadowBlurOuter1"></feColorMatrix>
				</filter>
			  </defs>
			  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
				<g id="Graph" transform="translate(-194.000000, -204.000000)">
				  <g id="Graph-1" transform="translate(194.000000, 208.000000)">
					<circle class="el js-part" data-color="dark-blue" id="Oval-2" fill="url(#linearGradient-1)" cx="135" cy="159" r="135"></circle>
					<g id="Oval-2-Copy" transform="translate(185.520309, 226.879187) rotate(111.000000) translate(-185.520309, -226.879187) ">
					  <use fill="black" fill-opacity="1" filter="url(#filter-4)" xlink:href="#path-3"></use>
					  <use class="el js-part" data-color="light-blue" fill="url(#linearGradient-2)" fill-rule="evenodd" xlink:href="#path-3"></use>
					</g>
					<g id="Oval-2-Copy" transform="translate(231.394918, 167.184627) rotate(56.000000) translate(-231.394918, -167.184627) ">
					  <use fill="black" fill-opacity="1" filter="url(#filter-7)" xlink:href="#path-6"></use>
					  <use class="el js-part" data-color="middle-blue" fill="url(#linearGradient-5)" fill-rule="evenodd" xlink:href="#path-6"></use>
					</g>
					<g id="Oval-2-Copy">
					  <use fill="black" fill-opacity="1" filter="url(#filter-10)" xlink:href="#path-9"></use>
					  <use class="el js-part" data-color="purple" fill="url(#linearGradient-8)" fill-rule="evenodd" xlink:href="#path-9"></use>
					</g>
					<text class="chart__percentage" id="58%" font-family="SourceSansPro-Regular, Source Sans Pro" font-size="20" font-weight="normal" letter-spacing="0.352941185" fill="#FFFFFF">
					  <tspan x="22" y="171">58%</tspan>
					</text>
					<text class="chart__percentage" id="15%" font-family="SourceSansPro-Regular, Source Sans Pro" font-size="20" font-weight="normal" letter-spacing="0.352941185" fill="#FFFFFF">
					  <tspan x="175" y="53">15%</tspan>
					</text>
					<text class="chart__percentage" id="12%" font-family="SourceSansPro-Regular, Source Sans Pro" font-size="20" font-weight="normal" letter-spacing="0.352941185" fill="#FFFFFF">
					  <tspan x="202" y="238">12%</tspan>
					</text>
					<text class="chart__percentage" id="15%" font-family="SourceSansPro-Regular, Source Sans Pro" font-size="20" font-weight="normal" letter-spacing="0.352941185" fill="#FFFFFF">
					  <tspan x="237" y="153">15%</tspan>
					</text>
				  </g>
				</g>
			  </g>
			</svg>
		  </div>
		  <div class="legend">
			<div class="legend__item legend__item_dark-blue js-legend-item" data-part="dark-blue">Development</div>
			<div class="legend__item legend__item_purple js-legend-item" data-part="purple">Operations</div>
			<div class="legend__item legend__item_middle-blue js-legend-item" data-part="middle-blue">Legal</div>
			<div class="legend__item legend__item_light-blue js-legend-item" data-part="light-blue">Marketing</div>
		  </div>
		</div>
	  </div>
	</div>
	<div class="charts__block">
	  <h3 class="charts__title"><?php echo $page->col()->html() ?></h3>
	  <div class="charts__elem">
		<!-- <div class="chart" style="background-image: url('img/col-chart.png'); margin-top: 45px"></div> -->
		<div class="chart js-chart-simple">
		  <div class="chart__image col-chart">
			<svg width="270px" height="270px" viewBox="0 -20 270 273" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			  <defs>
				<linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
				  <stop stop-color="#4291E2" offset="0%"></stop>
				  <stop stop-color="#1674D3" offset="100%"></stop>
				</linearGradient>
				<linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-16">
				  <stop stop-color="#DA73F6" offset="0%"></stop>
				  <stop stop-color="#B861DE" offset="100%"></stop>
				</linearGradient>
				<linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-3">
				  <stop stop-color="#01A9EA" offset="0%"></stop>
				  <stop stop-color="#00A2EB" offset="97.7957589%"></stop>
				</linearGradient>
			  </defs>
			  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
				<g id="Graph" transform="translate(-584.000000, -248.000000)">
				  <g id="Graph-2" transform="translate(584.000000, 248.000000)">
					<rect class="el js-part" data-color="dark-blue" id="Rectangle-26" fill="url(#linearGradient-1)" x="0" y="0" width="70" height="249" rx="5"></rect>
					<rect class="el js-part" data-color="purple" id="Rectangle-26-Copy" fill="url(#linearGradient-16)" x="100" y="78" width="70" height="170.955449" rx="5"></rect>
					<rect class="el js-part" data-color="middle-blue" id="Rectangle-26-Copy-3" fill="url(#linearGradient-3)" x="200" y="150" width="70" height="98.5356416" rx="5"></rect>
					<text id="51%" font-family="SourceSansPro-Regular, Source Sans Pro" font-size="20" font-weight="normal" letter-spacing="0.352941185" fill="#FFFFFF">
					  <tspan x="16" y="27">51%</tspan>
					</text>
					<text id="35%" font-family="SourceSansPro-Regular, Source Sans Pro" font-size="20" font-weight="normal" letter-spacing="0.352941185" fill="#FFFFFF">
					  <tspan x="116" y="105">35%</tspan>
					</text>
					<text id="14%" font-family="SourceSansPro-Regular, Source Sans Pro" font-size="20" font-weight="normal" letter-spacing="0.352941185" fill="#FFFFFF">
					  <tspan x="216" y="176">14%</tspan>
					</text>
				  </g>
				</g>
			  </g>
			</svg>
		  </div>
		  <div class="legend">
			<div class="legend__item legend__item_dark-blue js-legend-item" data-part="dark-blue">Sale</div>
			<div class="legend__item legend__item_purple js-legend-item" data-part="purple">Company lockdown</div>
			<div class="legend__item legend__item_wide legend__item_middle-blue js-legend-item" data-part="middle-blue">Early backers, Bounties, Founders</div>
		  </div>
		</div>
	  </div>
	</div>
	<div class="charts__block charts__block_last">
	  <h3 class="charts__title"><?php echo $page->area()->html() ?></h3>
	  <div class="charts__elem">
		<!-- <div class="chart" style="background-image: url('img/area-chart.png')"></div> -->
		<div class="chart js-area-chart js-tab">
		  <div class="chart__info chart__info_lighten">Brickblock tokens per ETH</div>
		  <div class="chart__image area-chart js-tab-content" data-content="1">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 311 295"><path d="M4.7 8.3h1v259.9h-1V8.3zm60 0h1v259.9h-1V8.3zm60 0h1v259.9h-1V8.3zm60 0h1v259.9h-1V8.3zm60 0h1v259.9h-1V8.3zm60 0h1v259.9h-1V8.3zm-300 260h301v1H4.7v-1z" fill="#EBEBEB"/><path d="M305.1 218.1C267 216 230 205 194 192c-28-11-54-23-80-40C67 120 31 82 6 34.1" fill="none" stroke="#01A6EB"/><linearGradient id="c" gradientUnits="userSpaceOnUse" x1="-124.564" y1="565.21" x2="-124.631" y2="564.677" gradientTransform="matrix(329.5 0 0 -234.2 41204.3 132500.5)"><stop offset="0" stop-color="#01A8EA" stop-opacity=".361"/><stop offset="1" stop-color="#D8D8D8" stop-opacity="0"/></linearGradient><path class="chart__path" d="M306.7 266.7v-48.1c-27.3-.8-74.7-8.2-143.4-39.1C58.5 132.4 13.8 50.5 5.7 34.1v234.2h301.2c-.1-.5-.2-1-.2-1.6z" fill="url(#c)"/><g fill="#2A81DA" font-family="SourceSansPro-Regular, Source Sans Pro" font-size="20"><text transform="translate(0 -28)"></text><text transform="translate(15 38)">1000</text><text transform="translate(56.9 38)"></text><text transform="translate(1.7 -37.9)"></text><text transform="translate(77.7 106.1)">975</text><text transform="translate(112.1 106.1)"></text><text transform="translate(1.7 -35.8)"></text><text transform="translate(138.7 151.2)">950</text><text transform="translate(173.1 151.2)"></text><text transform="translate(1.7 -32)"></text><text transform="translate(197.7 183)">925</text><text transform="translate(232.2 183)"></text><text transform="translate(2.7 -28)"></text><text transform="translate(259.7 203)">900</text><text transform="translate(294.1 203)"></text></g><g fill="#A3B5C2" font-family="SourceSansPro-Regular, Source Sans Pro" font-size="15"><text transform="translate(14.4 -23.8)"></text><text transform="translate(15.4 290.3)">Aug 2</text><text transform="translate(56 290.3)"></text><text transform="translate(14.4 -23.8)"></text><text transform="translate(75.4 290.3)">Aug 3</text><text transform="translate(116 290.3)"></text><text transform="translate(14.4 -23.8)"></text><text transform="translate(135.4 290.3)">Aug 4</text><text transform="translate(176 290.3)"></text><text transform="translate(14.4 -23.8)"></text><text transform="translate(195.4 290.3)">Aug 5</text><text transform="translate(236 290.3)"></text><text transform="translate(14.4 -23.8)"></text><text transform="translate(255.4 290.3)">Aug 6</text><text transform="translate(296 290.3)"></text></g></svg>
		  </div>
		  <div class="chart__image area-chart js-tab-content" data-content="2">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 311 295"><path d="M5.7 4.3h1v259.9h-1V4.3zm77 0h1v259.9h-1V4.3zm76 0h1v259.9h-1V4.3zm74 0h1v259.9h-1V4.3zm73 0h1v259.9h-1V4.3zm-300 260h301v1H5.7v-1z" fill="#EBEBEB"/><path d="M306 214c-38.1-2.1-75.1-13.1-111.1-26.1-28-11-54-23-80-40-47-32-83-70-108-117.9" fill="none" stroke="#01A6EB"/><linearGradient id="b" gradientUnits="userSpaceOnUse" x1="-123.565" y1="561.21" x2="-123.632" y2="560.677" gradientTransform="matrix(329.5 0 0 -234.2 40875.8 131559.7)"><stop offset="0" stop-color="#01A8EA" stop-opacity=".361"/><stop offset="1" stop-color="#D8D8D8" stop-opacity="0"/></linearGradient><path d="M307.6 262.6v-48.1c-27.3-.8-74.7-8.2-143.4-39.1C59.4 128.3 14.7 46.4 6.6 30v234.2h301.2c-.1-.5-.2-1-.2-1.6z" fill="url(#b)"/><g fill="#2A81DA" font-family="SourceSansPro-Regular, Source Sans Pro" font-size="20"><text transform="translate(16 -27.7)"></text><text transform="translate(27 38.3)">800</text><text transform="translate(61.4 38.3)"></text><text transform="translate(19.2 -34)"></text><text transform="translate(105.2 120)">775</text><text transform="translate(139.6 120)"></text><text transform="translate(15.8 -29.7)"></text><text transform="translate(179.8 167.3)">750</text><text transform="translate(214.2 167.3)"></text><text transform="translate(16 -29.5)"></text><text transform="translate(254 195.5)">725</text><text transform="translate(288.4 195.5)"></text></g><g fill="#A3B5C2" font-family="SourceSansPro-Regular, Source Sans Pro" font-size="15"><text transform="translate(20.6 -24.8)"></text><text transform="translate(21.6 289.3)">Week 1</text><text transform="translate(73.8 289.3)"></text><text transform="translate(20.6 -24.8)"></text><text transform="translate(96.6 289.3)">Week 2</text><text transform="translate(148.8 289.3)"></text><text transform="translate(20.6 -24.8)"></text><text transform="translate(171.6 289.3)">Week 3</text><text transform="translate(223.8 289.3)"></text><text transform="translate(20.6 -24.8)"></text><text transform="translate(246.6 289.3)">Week 4</text><text transform="translate(298.8 289.3)"></text></g></svg>
		  </div>
		  <div class="chart__tabs">
			<button class="chart__tab js-tab-link" data-target-content="1">Presale</button>
			<button class="chart__tab js-tab-link" data-target-content="2">Token Sale</button>
		  </div>
		  <div class="chart__info">Presale starting August 2, 2017</div>
		</div>
	  </div>
	</div>
  </div>
</div>
<!-- end section charts -->
