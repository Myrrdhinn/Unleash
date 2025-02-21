@extends('amsterdam.main')

@section('title', 'Startups')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/amsterdam/startup.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/amsterdam/flipclock.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/amsterdam/common.css') }}">
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection


@section('maincontent')
	<!--Future of Work-->
	<section class="one futureofwork">
		<div class="wrp">
			<h2>Startup Zone</h2>
			<p>Startup Competition 5 finalists will compete and showcase what real disruptive technology looks like.
				Winner takes away a trophy and €10,000 worth of sponsorship!</p>
			<button class="startup-btn popup" data-popupdata="compete">Apply to compete</button>
		</div>
	</section>
	<!--Future of Work END-->
	<!--Keynote-->
	<section class="two keynote arianna">
		<div class="wrppr">
			<div class="fix-bg lastwinner"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<h2>Startup Exhibition</h2>
				<p class="pdg">The exhibition showcases Category Beta startups who are in late-stage growth and are max 5-years old.
Speaking slots are available to apply</p>
				<h3>Last years winner</h3>
				<p class="pdg">A profession still heaving with bureaucrats and administrators, politics and legacy systems. The global leadership crisis, the 4th industrial revolution and the speed at which technology is disrupting industries, companies and jobs is happening at an exponential pace never seen before. HR Tech World has become more important now than when it was born at the end of The Great Recession.</p>


			</div>
			<div class="schedule-wrp">
				<button class="white-btn popup" data-popupdata="compete">Apply to compete</button>
			</div>
		</div>
	</section>
	<section class="two clients">
		<div class="content">
			<div class="content-wrap">
				<h2>Investor/VC Network</h2>
				<p>We connect Startups and Investors/VC’s by providing them with a dedicated lounge and a matchmaking
tool to network!</p>
<div class="testim wdth">
					<img class="coma" src="{{ URL::asset('gfx/amsterdam/comaorange.png') }}" alt="coma">
					<span class="blck">I wanted to update you on some progress that we’ve made with Tandem and thank you for the part
						Unleash played in that. We have secured our seed round investment of €2m and have attracted a really
						great team of advisors, mentors and Board members. We have the ex CEO of Twitter, the CEO of Britebill
						and some high profile investors joining us to help us on our journey.</span>
					<p><strong class="strn">Aisling Teillard CEO of Tandem</strong></p>
				</div>
			</div>
			<button class="startup-btn popup" data-popupdata="compete">Apply to Compete</button>
		</div>
		<div class="wrppr">
			<div class="fix-bg investorsbg"></div>
		</div>
	</section>
	
	<!--Counter-->
	<section class="one-cntr counter">
		<div class="wrp">
			<h2>Hurry Up!</h2>
			<p>Unleash Yourself!  Book your place at the world’s leading and fastest growing show on the future of work.  Now is the time face the challenge of change and let your people loose to power your organization in the next decade of the 21st Century.</p>
			<div class="your-clock"></div>
			<button class="blue-btn popup" data-popupdata="booknow">Book now</button>
		</div>
	</section>
@endsection

@section('footerscripts')
<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
@endsection
