<?php
/**
 * The Front (Splash) Page Template
 *
 * @package alignable
**/
get_header();
?>

<style>

	.emphasis{
		font-weight: 800; 
		text-decoration: underline; 
		/*font-style:italic;*/
	}

	strong{
		font-weight: 800;
	}

</style>

<main class="splash-content">
	<section class="about-ac">
		<div class="inner">
			<h1>Alignable Capital</h1>
			<p style="margin-bottom:20px;">Do you have a <span class="emphasis">DEAL UNDER CONTRACT</span>, but you do not have the funding to see it through? Look no further!</p>
			
			<p><strong>Alignable Capital, LLC</strong> is <span class="emphasis">YOUR SOURCE FOR PRIVATE MONEY</span> for this deal and <span class="emphasis">ALL</span> of your future deals. We have <strong>GREAT TERMS</strong> and <strong>RATES</strong> that are hard to beat and sure to fit your budget. So, start today and apply <strong>NOW</strong>!</p>
		</div>
	</section>
	<section class="content">
		<div class="container content-container">
			<section class="cta">
				<ul>
					<h1 class="title">It's simple</h1>
					<li>
						<svg class="icon icon-laptop">
							<use xlink:href="#icon-laptop"><symbol id="icon-laptop" viewBox="0 0 32 32"><title>laptop</title><path d="M28 22v-16c0-1.1-0.9-2-2-2h-20c-1.1 0-2 0.9-2 2v16h-4v6h32v-6h-4zM20 26h-8v-2h8v2zM26 22h-20v-15.996c0.001-0.001 0.002-0.003 0.004-0.004h19.993c0.001 0.001 0.003 0.002 0.004 0.004v15.996z"></path></symbol></use>
						</svg>
						<h2>Apply Online</h2>
						<p>Fill in our form provided on this page.</p>
					</li>
					<li>
						<svg class="icon icon-checkmark">
							<use xlink:href="#icon-checkmark"><symbol id="icon-checkmark" viewBox="0 0 32 32"><title>checkmark</title><path d="M27 4l-15 15-7-7-5 5 12 12 20-20z"></path></symbol></use>
						</svg>
						<h2>Get Approved</h2>
						<p>Recieve assistance with the remainer of the process towards getting approved.</p>
					</li>
					<li>
						<svg class="icon icon-coin-dollar">
							<use xlink:href="#icon-coin-dollar"><symbol id="icon-coin-dollar" viewBox="0 0 32 32"><title>coin-dollar</title><path d="M15 2c-8.284 0-15 6.716-15 15s6.716 15 15 15c8.284 0 15-6.716 15-15s-6.716-15-15-15zM15 29c-6.627 0-12-5.373-12-12s5.373-12 12-12c6.627 0 12 5.373 12 12s-5.373 12-12 12zM16 16v-4h4v-2h-4v-2h-2v2h-4v8h4v4h-4v2h4v2h2v-2h4l-0-8h-4zM14 16h-2v-4h2v4zM18 22h-2v-4h2v4z"></path></symbol></use>
						</svg>
						<h2>Get Your Cash</h2>
						<p>Receive the funding for your next project!</p>
					</li>
				</ul>
			</section>
			<section class="form" id="apply-form">
				<h1>Apply Now</h1>
				<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]');?>
			</section>
		</div>
	</section>
</main>

<?php

get_footer();

?>