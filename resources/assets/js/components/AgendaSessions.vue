<template>
	<div v-if="dataready">
	<!-- Main Stage -->
	<div v-for="sess in agendasession" class="cnt-wrp" :class="trackClass(sess)">
		<div class="left-side">
			<div class="upper-side">
				<div class="date">
					<h4 v-if="timesyntax == 'us'">{{sess.start_time.month_name}} {{sess.start_time.day}}. </h4>
					<h4 v-else>{{sess.start_time.day}}. {{sess.start_time.month_name}}</h4>
				</div>
				<div class="time">
					<h2 v-if="timesyntax == 'us'">{{ usTime(sess.start_time.time) }} - {{ usTime(sess.end_time.time) }}</h2>
					<h2 v-else>{{sess.start_time.time}} - {{sess.end_time.time}}</h2>
					
				</div>
				<div class="session-name">
					<h3 v-if="sess.category_id == 2"></h3>
					<h3 v-else-if="sess.tracks[1]">ALL STAGES</h3>
					<h3 v-else >{{sess.tracks[0].track_name}}</h3>
				</div>
			</div>
<!-- 			<div class="shares">
				<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
				<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
				<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
			</div> -->
		</div>
		<div class="right-side">
			<div class="header">
				<div class="place">
					<h4 v-if="sess.category_id == 2">Entrance</h4>
					<h4 v-else-if="sess.tracks[1]">Catering Points</h4>
					<h4 v-else>{{sess.tracks[0].room}}</h4>
				</div>
				<div class="duration" v-if="sess.category_id != 2">
					<i class="fa fa-clock-o"></i> {{ duration(sess) }}
				</div>
			</div>
			<div class="body">
				<div class="title">
					<h2>{{sess.session_title}}</h2>
				</div>
				<div class="content">
					<p v-html="sess.session_description"></p>
				</div>
				<div class='SpeakerListContainer'>
					<ul>
					  <li v-if="sess.speakers[0]" v-for="speakers in sess.speakers">
					  	<a :href="eventRoute()+speakers.slug">
					  	<div class="SpeakerImgContainer">
					  		<img class="SpeakerImage" :alt="speakers.full_name" :src="'/storage/speakers/'+speakers.img_url">
					  	</div>
					  	<div class="SpeakerContent">
					  		<h6>{{speakers.full_name}}</h6>
					  		<p>{{speakers.job_title}} | <span>{{speakers.company}}</span></p>
					  	</div>
					  	</a>	
					  </li>
					</ul>	
				</div>	
			</div>
		</div>
	</div>
	<!-- END Main Stage -->
 </div>	
</template>

<script>

export default {
    aSessions: null,
    dataReady: false,	
  data() {
	return {
		agendasession: null,
		dataready: false,
		eventid: null,
		eventcode: null,
		day: null,
		timesyntax: null
		
 
	};
  
  },

 props: ['agendadata'],

//TODO: Reload the selected grid when we edit a speaker

  methods: {

 	trackClass (sessData){
 		 if(typeof sessData.tracks[1] != "undefined"){
 		 	return 'Coffee';
 		 }else{
 		 	return sessData.tracks[0].color_class;
 		 }
 		
 	},
	
	usTime(timevar){
		let times = timevar.split(':');
		let timeword = '';
		
		if(times[0] > 11){
			timeword = 'PM';
			if(times[0] != '12'){
			  times[0] = (parseInt(times[0]) - 12);
			}
			
		} else {
			timeword = 'AM';
		}
		
		
		return times[0]+':'+times[1]+' '+timeword;
	},
	
	eventRoute(){
		switch(this.eventid){
		 case 2:
		  return '/london/speaker/';
			break;
		 case 3:
		 return '/america/speaker/';
			break;
		};
		return '/london/speaker/';
	},

	
	duration(sessData){
	   let start = new Date(sessData.start_time.month+"/"+sessData.start_time.day+"/"+sessData.start_time.year+" "+sessData.start_time.time+":00" );
	   let end = new Date(sessData.end_time.month+"/"+sessData.end_time.day+"/"+sessData.end_time.year+" "+sessData.end_time.time+":00" );
	   let diff = end.getTime() - start.getTime();
	   
	   let msec = diff;
	   let mm = Math.floor(msec / 1000 / 60);
		return mm+" mins";
	}


  },

  // Fetches posts when the component is created.
  async mounted() {

  	axios.get('/api/agenda/search?eventid='+default_event_id+'&day='+default_day)
  	   .then((response) => {
  			this.agendasession = response.data;
       		this.dataready = true;
  	});

  	this.eventid = default_event_id;
  	this.eventcode = default_event_code;
  	this.day = default_day;
	this.timesyntax = timesyntax;

  },

  watch: {

  	agendadata: function (val){
  		this.agendasession = val;
		

  	},

  },



}
</script>