<header>
	<div class="margins">
		<div class="container">
			<div class="space">
				<nav>
					<ul>
						<li>
							<div class="container-title">
								<svg viewBox="0 0 100 100">
									<path d="M50.049 9.51a4.725 2.593 0 0 0-3.39.76L1.382 35.115a4.725 2.593 0 0 0 0 3.668L46.658 63.63a4.725 2.593 0 0 0 6.684 
											0l45.275-24.846a4.725 2.593 0 0 0 0-3.668L53.342 10.27a4.725 2.593 0 0 0-3.293-.76zM50 15.77l38.596 21.18L50 
											58.128l-38.594-21.18zM4.727 46.332l-3.344 1.834a4.725 2.593 0 0 0 0 3.668L46.658 76.68a4.725 2.593 0 0 0 6.684 
											0l45.275-24.846a4.725 2.593 0 0 0-.002-3.668l-3.342-1.834l-6.683 3.666l.004.002L50 71.18L11.404 50l.004-.002zm0 
											13.05l-3.344 1.835a4.725 2.593 0 0 0 0 3.668L46.658 89.73a4.725 2.593 0 0 0 6.684 0l45.275-24.846a4.725 2.593 
											0 0 0-.002-3.668l-3.342-1.834l-6.683 3.666l.004.002L50 84.23L11.404 63.05l.004-.002z">
									</path>
								</svg>
								<a href="#stack" target="_self" class="">
									<?= e(__('exception.stack')) ?>
								</a>
							</div>
						</li>
						<li>
							<div class="container-title">
								<svg viewBox="0 0 52 52">
									<g>
										<g>
											<path d="M44.4,19H33.2c-2.6,0-4.2-1.6-4.2-4.2V3.6C29,2.7,28.3,2,27.4,2H10.8C8.2,2,6,4.2,6,6.8v38.4 
													c0,2.6,2.2,4.8,4.8,4.8h30.4c2.6,0,4.8-2.2,4.8-4.8V20.6C46,19.7,45.3,19,44.4,19z"/>
										</g>
										<g>
											<path d="M45.7,12.9L35.1,2.3C34.9,2.1,34.5,2,34.2,2l0,0C33.6,2,33,2.5,33,3.1v8.5c0,1.8,1.6,3.4,3.4,
													3.4h8.5 c0.6,0,1.1-0.6,1.1-1.2l0,0C46,13.5,45.9,13.1,45.7,12.9z"/>
										</g>
									</g>
								</svg>
								<a href="#detail-request" target="_self" class="">
									<?= e(__('exception.details')) ?>
								</a>
							</div>
						</li>
					</ul>
				</nav>
				<nav>
					<ul>
						<li>
							<div class="container-title">
								<a href='#' target="_self">
									<svg viewBox="0 0 32 32">
										<path d="M27.526,18.036L27,17.732c-0.626-0.361-1-1.009-1-1.732s0.374-1.371,1-1.732l0.526-0.304  c1.436-0.83,
												1.927-2.662,1.098-4.098l-1-1.732c-0.827-1.433-2.666-1.925-4.098-1.098L23,7.339c-0.626,0.362-1.375,
												0.362-2,0  c-0.626-0.362-1-1.009-1-1.732V5c0-1.654-1.346-3-3-3h-2c-1.654,0-3,1.346-3,3v0.608c0,
												0.723-0.374,1.37-1,1.732  c-0.626,0.361-1.374,0.362-2,0L8.474,7.036C7.042,6.209,5.203,6.701,4.375,
												8.134l-1,1.732c-0.829,1.436-0.338,3.269,1.098,4.098  L5,14.268C5.626,14.629,6,15.277,6,16s-0.374,1.371-1,
												1.732l-0.526,0.304c-1.436,0.829-1.927,2.662-1.098,4.098l1,1.732  c0.828,1.433,2.667,1.925,4.098,1.098L9,
												24.661c0.626-0.363,1.374-0.361,2,0c0.626,0.362,1,1.009,1,1.732V27c0,1.654,1.346,3,3,3h2  c1.654,0,
												3-1.346,3-3v-0.608c0-0.723,0.374-1.37,1-1.732c0.625-0.361,1.374-0.362,2,0l0.526,0.304  c1.432,0.826,3.271,
												0.334,4.098-1.098l1-1.732C29.453,20.698,28.962,18.865,27.526,18.036z M16,21c-2.757,0-5-2.243-5-5s2.243-5,
												5-5  s5,2.243,5,5S18.757,21,16,21z"/>
									</svg>
								</a>
							</div>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="time">
			<div class="message">
				<div class="container">
					<a href="#top"><?= ucfirst($template->escape($message)) ?></a>
				</div>
			</div>
		</div>
	</div>
</header>