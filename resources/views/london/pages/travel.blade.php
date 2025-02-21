@extends('london.main')

@section('meta')
 <meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018.">
 
	  <!-- Open Graph data -->
	<meta property="og:site_name" content="UNLEASH London - Travel"/>
	<meta property="og:title" content="UNLEASH London - Travel"/>
	<meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018."/>
	<meta property="og:url" content="http://www.unleashgroup.io/london/travel">
	<meta property="og:type" content="website"/>
	<meta property="og:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}" />
	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@hrtechworld">
	<meta name="twitter:creator" content="@hrneurope">
	<meta name="twitter:title" content="UNLEASH London - Travel">
	<meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018." />
	<meta name="twitter:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}">
		
@endsection

@section('title', 'London - Venue')

@section('headercss')

	<link rel="stylesheet" type="text/css" href="{{ mix('css/london/travel.css') }}">
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection

@section('maincontent')

	<section class="two keynote arianna">
		<div class="wrppr">
			<div class="img-bg travelbg"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<div class="h4wrp">
					<h2 class="aloft">Moxy London ExCeL</h2>
				</div>
				<p class="pdg">In a city that is known for bright lights and constant activity, MOXY London Excel has arrived to add guts to this high powered community. Marrying smart service and technology with contemporary style, Moxy is do-it-yourself made easy.</p>
			</div>
			<div class="content-wrap pdg">
				<h3>Moxy London ExCeL</h3>
				<!--<span>Booking Code:<p class="code">UNLEASH18</p></span>-->
				<span>Single Occupancy: &pound;179 per night</span>
				<span>Double Occupancy: &pound;189 per night</span>
				<p>Rates: Inclusive of VAT, WIFI &amp; Breakfast.</p>
			<!--	<p><strong>Booking via telephone:</strong> 00 44 207 290 7575<br>
<strong>via mail:</strong> reservations.aloftlondonexcel@alofthotels.com<br>
<strong>Booking name:</strong> UNLEASH18 (Please quote if calling in or emailing the hotel)</p> -->
				
			</div>
			<div class="pdg btm">
				<div class="h4wrp">
					<a href="http://www.marriott.com/meeting-event-hotels/group-corporate-travel/groupCorp.mi?resLinkData=HR%20Tech%20World%202018%5ELONOR%60HRNHRNA%60179%60GBP%60false%602%603/17/18%603/22/18%6003/02/18&app=resvlink&stop_mobi=yes" target="_blank"><button class="red-btn">Book now</button></a>
					<a href="https://www.google.hu/maps/place/MOXY+London+Excel/@51.508499,0.0390773,17z/data=!3m1!4b1!4m5!3m4!1s0x47d8a87c6b7b8d3f:0xb816048defc063cd!8m2!3d51.508499!4d0.041266" target="_blank"><button class="red-btn">Show on Map</button></a>
				</div>
			</div>
		</div>
	</section>

	<section class="speakers-grid hotels">
		<h2>Preferred Hotels</h2>
		<div class="speakers-wrap">
		<div class="speaker">
				<img src="{{ URL::asset('gfx/london/hampton.jpg') }}" alt="Hampton by Hilton">
				<div class="dtls-wrap">
					<h6 class="name">Hampton by Hilton</h6>
						<div class="booking-code"><span>Booking Name: UNLEASH18</span></div>
					<p>Booking via telephone: 00 44 (0) 203 002 2972<br>
Via email: reservations@hbhlondondocklands.co.uk
						 </p>
					<p>Queen Room: 17<sup>th</sup>, 19<sup>th</sup>, 20<sup>th</sup> &amp; 21<sup>st</sup> March 2018</p>
					<span>Single Occupancy: &pound;119 / night</span>
					<span>Double Occupancy: &pound;119 / night</span>
					<p>Standard Room: 18<sup>th</sup> March 2018</p>
					<span>Single Occupancy: &pound;90 / night</span>
					<span>Double Occupancy: &pound;90 / night</span>
					<p>Rates: Inclusive of VAT, WIFI &amp; Breakfast.</p>
					<p class="code">The hotel requires a minimum nights’ stay of 2 nights.</p>
					<a href="http://group.hamptoninn.com/Unleash18" target="_blank"><button class="topaz-btn">Book now</button></a>
				</div>
			</div>
		
		
		
			<div class="speaker">
				<img src="{{ URL::asset('gfx/london/doubletree.jpg') }}" alt="Doubletree by Hilton">
				<div class="dtls-wrap">
					<h6 class="name">Doubletree by Hilton</h6>
					<div class="booking-wrp">
						<div class="booking-code"><span>Booking Name: UNLEASH18</span></div>
						<p class="code">* Please quote if calling in or emailing the hotel.</p>
						<p>Booking via telephone:00 44 207 540 48 35<br>
via mail: irene.ortiz@dtexcel.com
 
					</p>
					</div>
					<p>Standard Room: 17<sup>th</sup>, 18<sup>th</sup> &amp; 21<sup>st</sup> March 2018</p>
					<span>Single Occupancy: &pound;160 / night</span>
					<span>Double Occupancy: &pound;175 / night</span>
					<p>Standard Room: 19<sup>th</sup>, 20<sup>th</sup> March 2018</p>
					<span>Single Occupancy: &pound;180 / night</span>
					<span>Double Occupancy: &pound;195 / night</span>
					<p>Rates: Inclusive of VAT, WIFI &amp; Breakfast.</p>
					<p class="code">The hotel requires a minimum nights’ stay of 2 nights on Monday 19th &amp; Tuesday 20th March 2018.</p>
					<a href="http://doubletree.hilton.com/en/dt/groups/personalized/L/LONEXDI-CHRN-20180317/index.jhtml" target="_blank"><button class="topaz-btn">Book now</button></a>
					
				</div>
			</div>
			<div class="speaker">
				<img src="{{ URL::asset('gfx/london/moxy.jpg') }}" alt="Moxy">
				<div class="dtls-wrap">
					<h6 class="name">Aloft ExCel</h6>
					<div class="booking-wrp">
						<div class="booking-code"><span>Booking Name: UNLEASH18</span></div>
						<p class="code">* Please quote if calling in or emailing the hotel.</p>
						<p>Booking via telephone: 00 44 207 290 7575<br>
Via email: aloftlondonexcel@alofthotels.com
					</p>
						
					</div>
					<p>Standard Room:</p>
					<span>Single Occupancy: &pound;230 / night</span>
					<span>Double Occupancy: &pound;240 / night</span>
					<p>Rates: Inclusive of VAT, WIFI &amp; Breakfast.</p>
					<a href="https://www.starwoodmeeting.com/events/start.action?id=1709223927&key=18A2CFB" target="_blank"><button class="topaz-btn">Book now</button></a>
				</div>
			</div>
			<div class="speaker">
				<img src="{{ URL::asset('gfx/london/novotel.jpg') }}" alt="Novotel">
				<div class="dtls-wrap">
					<h6 class="name">Novotel London ExCeL</h6>
					<div class="booking-wrp">
						<div class="booking-code"><span>Booking Name: UNLEASH18</span></div>
						<p class="code">* Please quote if calling in or emailing the hotel.</p>
					</div>
					<p>Standard Room:</p>
					<span>Single Occupancy: &pound;175 / night</span>
					<span>Double Occupancy: &pound;185 / night</span>
					<p>Rates: Inclusive of VAT, WIFI &amp; Breakfast.</p>
					<a href="http://www.accorhotels.com/gb/promotions-offers/hot-deals-offers/owm004847-001-hr-tech-world.shtml" target="_blank"><button class="topaz-btn">Book now</button></a>
				</div>
			</div>
			
			<div class="speaker holiday">
				<img src="{{ URL::asset('gfx/london/holiday-inn.jpg') }}" alt="Holiday Inn Express">
				<div class="dtls-wrap">
					<h6 class="name">Holiday Inn Express</h6>
						<div class="booking-code"><span>Booking Name: UNLEASH18</span></div>
					<p>Booking via email:  reservations@hiexpresslondonexcel.co.uk
 </p>
					<p>Standard Room: 17<sup>th</sup>, 20<sup>th</sup> &amp; 21<sup>st</sup> March 2018</p>
					<span>Single Occupancy: &pound;149 / night</span>
					<span>Double Occupancy: &pound;154 / night</span>
					<p>Standard Room: 18<sup>th</sup>, 19<sup>th</sup> March 2018</p>
					<span>Single Occupancy: &pound;99 / night</span>
					<span>Double Occupancy: &pound;104 / night</span>
					<p>Rates: Inclusive of VAT, WIFI &amp; Breakfast.</p>
					<button class="topaz-btn popup" data-popupdata="reservation">Book now</button>
				</div>
			</div>
		</div>
	</section>

	<section class="two keynote arianna flights">
		<div class="content">
			<div class="content-wrap">
				<h2>Flights</h2>
				<p class="pdg">We would like to provide you the best experience possible as you arrive to London. That’s why HR Tech World and British Airways have partnered to give you 20% off of your round-trip airfare! For you to receive the discounted airfare, please click below to be directed to the British Airways’ website where you can purchase your flight to London. <br /><br />Please note, to be eligible for the 20% discount, HR Tech World London attendees must be flying to London City Airport from Amsterdam, Edinburgh, Dublin, Dusseldorf, Frankfurt, Geneva, Glasgow, Isle of Man, Madrid, Rotterdam or Zurich.</p>
			</div>
		</div>
		<div class="wrppr">
			<div class="img-bg floorplancitybg"></div>
		</div>
	</section>
	<!--Expo END-->

	<section class="two keynote arianna right">
		<div class="content">
			<div class="content-wrap">
				<h2>Excel - London</h2>
				<p class="pdg">ExCeL London, where great connections happen every day, will host Unleash 18. ExCeL London is a leading venue taking every event to heart with exhibitions, conferences, and much more. It is an unparalleled location for our unparalleled show.</p>
			</div>
		</div>
		<div class="wrppr">
			<div class="img-bg floorplanbg"></div>
		</div>
	</section>
	<section class="one-cntr vhcls">
		<div class="wrp">
			<h2>How to get there</h2>
			
			<div class="vehicles-wrp">
				<!-- <a href="https://www.excel.london/organiser/visitor-experience/elizabeth-line" target="_blank">
					<div class="eliz">
						<p>Elizabeth Line</p>
						<span>Connecting Reading and Heathrow with East London, reaching ExCeL London hasn’t been easier.</span>
					</div>
				</a> -->
				<a href="https://tfl.gov.uk/dlr/timetable/dlr?FromId=940GZZDLCGT&fromText=Canning+Town+DLR+Station&toText=Prince+Regent+DLR+Station&ToId=940GZZDLPRE&SelectedTime=8" target="_blank">
					<div class="tube">
						<p>Tube</p>
						<span>The Jubilee Line is recommended as the quickest route to ExCeL London. Alight at Canning Town and change onto a Beckton-bound DLR train, for the quick 3-stop journey to Prince Regent for ExCeL (East) entrance.</span>
					</div>
				</a>
				<a href="https://www.google.com/maps/place/ExCeL+London/@51.5173734,0.0006612,13z/data=!3m1!5s0x47d8a8716fa1509d:0x342201ee325a678c!4m5!3m4!1s0x47d8a80ce609e50d:0xa0de5f705d7aec7!8m2!3d51.5084601!4d0.029846" target="_blank">
					<div class="car">
						<p>Car</p>
						<span>When driving to ExCeL London follow signs for Royal Docks, City Airport and ExCeL. There is easy access from the M25, M11, A406 and A13.</span>
					</div>
				</a>
				<a href="https://www.excel.london/visitor/getting-here/driving-and-parking" target="_blank">
					<div class="park">
						<p>Parking</p>
						<span>All on-site parking is pay and display. Three pay points located within the car park (on level two and level zero) at the end of your visit. All machines accept cash and credit card. Parking in the orange undercroft car park and the east car park is £20 per day. Parking in the Royal Victoria multi-storey car park is £15 per day. Motorcycles can be parked free of charge in the designated motorcycle parking area.</span>
					</div>
				</a>				
			</div>

		</div>
	</section>

	<section id="map" class="map">
		<iframe src="https://snazzymaps.com/embed/27565" width="100%" height="600px" style="border:none;"></iframe>
		<div class="content">
			<div class="mapcont-wrp">
				<!-- Google API for MAP -->
				<div class="content-wrap">
					<h2>Venue</h2>
					<p>ExCeL London, will host UNLEASH in March 2018. ExCeL is London and the UK's leading venue for exhibitions and conferences.</p>
				</div>
				<button class="darkgreen-btn popup" data-popupdata="joinourcommunity">Join Our Community</button>
			</div>
			<div class="map-pic">
			</div>
		</div>
	</section>
	<!--Map END-->
	<!--<section class="one-cntr">
		<div class="wrp">
			<h2>Register Now!</h2>
			<p>Unleash Your People!<br />Be inspired by the industry’s top influencers; source the best solutions and services available for your organization; and have fun meeting like-minded industry leaders and pioneers. Reward yourself and your team by joining the world’s largest community on the Future of Work and Technology. </p>
			<a href="{{ route('london.tickets') }}" target="_blank"><button class="red-btn">Register Now</button></a>
		</div>
	</section>-->
@endsection