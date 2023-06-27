<div class="frame-description frame-description-application">

	<span href="#"><?= e(__('exception.stackFrames')) ?> (<?=count($frames)?>)</span>

	<div class="iconlist">
		<div class="icon-holder icon-print" onclick="javascript:window.print()">
			<div class="tooltip tooltip-print">
				<?= e(__('exception.print'))?>
			</div>
			<svg class="ico-print" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 554.625 554.625" style="enable-background:new 0 0 554.625 554.625;"
				xml:space="preserve">
				<g>
					<path d="M459,57.375c0-21.038-17.213-38.25-38.25-38.25H133.875c-21.038,0-38.25,17.212-38.25,38.25v114.75H459V57.375z"/>
					<path d="M497.25,191.25H57.375C24.862,191.25,0,216.112,0,248.625V420.75c0,32.513,24.862,57.375,57.375,57.375H76.5v-153h401.625
					v153h19.125c32.513,0,57.375-24.862,57.375-57.375V248.625C554.625,216.112,529.763,191.25,497.25,191.25z M439.875,286.875
					c-11.475,0-19.125-7.65-19.125-19.125c0-11.475,7.65-19.125,19.125-19.125S459,256.275,459,267.75
					C459,279.225,451.35,286.875,439.875,286.875z"/>
					<path d="M95.625,497.25c0,21.037,17.212,38.25,38.25,38.25H420.75c21.037,0,38.25-17.213,38.25-38.25v-153H95.625V497.25z
					M133.875,401.625H420.75v19.125H133.875V401.625z M133.875,459H420.75v19.125H133.875V459z"/>
				</g>
			</svg>			
		</div>      
		<div class="icon-holder icon-pdf">
			<div class="tooltip tooltip-pdf">
				<?= e(__('exception.openPDFReader'))?>
			</div>
			<svg class="ico-file-pdf" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 533.333 533.333" style="enable-background:new 0 0 533.333 533.333;" xml:space="preserve">
				<g>
					<path d="M438.548,307.021c-7.108-7.003-22.872-10.712-46.86-11.027c-16.238-0.179-35.782,1.251-56.339,4.129
					c-9.205-5.311-18.691-11.091-26.139-18.051c-20.033-18.707-36.755-44.673-47.175-73.226c0.679-2.667,1.257-5.011,1.795-7.403
					c0,0,11.284-64.093,8.297-85.763c-0.411-2.972-0.664-3.834-1.463-6.144l-0.98-2.518c-3.069-7.079-9.087-14.58-18.522-14.171
					l-5.533-0.176l-0.152-0.003c-10.521,0-19.096,5.381-21.347,13.424c-6.842,25.226,0.218,62.964,13.012,111.842l-3.275,7.961
					c-9.161,22.332-20.641,44.823-30.77,64.665l-1.317,2.581c-10.656,20.854-20.325,38.557-29.09,53.554l-9.05,4.785
					c-0.659,0.348-16.169,8.551-19.807,10.752c-30.862,18.427-51.313,39.346-54.706,55.946c-1.08,5.297-0.276,12.075,5.215,15.214
					l8.753,4.405c3.797,1.902,7.801,2.866,11.903,2.866c21.981,0,47.5-27.382,82.654-88.732
					c40.588-13.214,86.799-24.197,127.299-30.255c30.864,17.379,68.824,29.449,92.783,29.449c4.254,0,7.921-0.406,10.901-1.194
					c4.595-1.217,8.468-3.838,10.829-7.394c4.648-6.995,5.591-16.631,4.329-26.497C443.417,313.113,441.078,309.493,438.548,307.021z
					M110.233,423.983c4.008-10.96,19.875-32.627,43.335-51.852c1.475-1.196,5.108-4.601,8.435-7.762
					C137.47,403.497,121.041,419.092,110.233,423.983z M249.185,104.003c7.066,0,11.085,17.81,11.419,34.507
					c0.333,16.698-3.572,28.417-8.416,37.088c-4.012-12.838-5.951-33.073-5.951-46.304
					C246.237,129.294,245.942,104.003,249.185,104.003z M207.735,332.028c4.922-8.811,10.043-18.103,15.276-27.957
					c12.756-24.123,20.812-42.999,26.812-58.514c11.933,21.71,26.794,40.167,44.264,54.955c2.179,1.844,4.488,3.698,6.913,5.547
					C265.474,313.088,234.769,321.637,207.735,332.028z M431.722,330.027c-2.164,1.353-8.362,2.135-12.349,2.135
					c-12.867,0-28.787-5.883-51.105-15.451c8.575-0.635,16.438-0.957,23.489-0.957c12.906,0,16.729-0.056,29.349,3.163
					S433.885,328.674,431.722,330.027z M470.538,103.87L396.13,29.463C379.925,13.258,347.917,0,325,0H75
					C52.083,0,33.333,18.75,33.333,41.667v450c0,22.916,18.75,41.666,41.667,41.666h383.333c22.916,0,41.666-18.75,41.666-41.666V175
					C500,152.083,486.742,120.074,470.538,103.87z M446.968,127.44c1.631,1.631,3.255,3.633,4.833,5.893h-85.134V48.2
					c2.261,1.578,4.263,3.203,5.893,4.833L446.968,127.44z M466.667,491.667c0,4.517-3.816,8.333-8.333,8.333H75
					c-4.517,0-8.333-3.816-8.333-8.333v-450c0-4.517,3.817-8.333,8.333-8.333h250c2.517,0,5.341,0.318,8.334,0.887v132.446H465.78
					c0.569,2.993,0.887,5.816,0.887,8.333V491.667z"/>
				</g>
			</svg>
		</div>  
	</div>

</div>