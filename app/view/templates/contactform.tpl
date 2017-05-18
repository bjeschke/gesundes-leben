<div class="contactbox" id="contactbox">
	<div class="close"><span>Schlie&szlig;en</span></div>
	<div class="contactform" id="contactform">
		<div class="contactformtitle">
			<span class="text message">Hier können Sie uns eine Nachricht schreiben.</span>
			<span class="text ratingmsg">Hier können Sie eine Bewertung schreiben.</span>
		</div>
		<div class="ratingsection">
			<div class="rating">
				<span class="fa" id="star5"></span>
				<span class="fa" id="star4"></span>
				<span class="fa" id="star3"></span>
				<span class="fa" id="star2"></span>
				<span class="fa" id="star1"></span>
			</div>
			<input type="hidden" name="rating" id="contactrating" class="contactrating"/>
		</div>
		<div class="line">
			<input type="text" name="name" placeholder="Ihr Name" id="contactname" class="contactname" />
		</div>
		<div class="line">
			<input type="email" name="email" placeholder="Ihre Emailadresse" id="contactemail" class="contactemail" />
		</div>
		<div class="line">
			<textarea name="message" placeholder="Ihre Nachricht an uns...." id="contactmsg" class="contactmsg"></textarea>	
		</div>
		<div class="contacterror"></div>
		<div class="line">
			<input type="submit" value="absenden" id="contactsend" />
		</div>
	</div>
	<div class="contactconfirmation">
		<span class="text message">Ihre Nachricht wurde erfolgreich an uns verschickt.<br /><br /> Vielen Dank.</span>
		<span class="text ratingmsg">Ihre Bewertung wurde erfolgreich abgegeben.<br /><br /> Vielen Dank.</span>
	</div>	
</div>

<script type="text/javascript">
	$( document ).ready(function() {
		$('.reviewbutton').click(function(){
			C$().openContactForm('review','contactbox');
		});		
		$('.contactbutton').click(function(){
			C$().openContactForm('contact','contactbox');
		});	
		$('#contactsend').click(function(){
			C$().sendData();
		});	
		$('#contactbox .close').click(function(){
			C$().closeForm();
		});		
		$('.rating span').click(function(){
			$('.rating span').removeClass('active');
			var id = $(this).attr('id').replace('star','');
			$('#contactrating').val(id);
			
			for(var i = 1; i <= id;i++)
				$('.rating #star' + i).addClass('active');
		});				
	}); 
</script>