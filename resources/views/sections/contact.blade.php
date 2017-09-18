<div id="contact">

	<section class="section">
		<div class="container">
			<h1 class="title has-text-centered">CONTACTEER ONS</h1>
			<h2 class="subtitle  has-text-centered"><i class="fa fa-circle dot-seperator"></i> <br> We helpen je graag verder! Vul dit formulier in en we contacteren je van zodra mogelijk.</h2>
			<div class="columns">
				<div class="column">
					<img src="images/icon.jpg" alt="akcelon" class="form-logo">
				</div>

				<div class="column">

					<div class="notification is-primary" v-if="success">
						Het formulier werd successvol verzonden!
					</div>

					<form action="#" @submit.prevent="sendForm">
						<div class="field">
							<label class="label">Naam</label>
							<div class="control">
								<input class="input" type="text" placeholder="Naam" name="name" v-model="formdata.name" required>
							</div>
							<p class="help is-danger">{{ $errors->first('name') }}</p>
						</div>

						<div class="field">
							<label class="label">Email</label>
							<div class="control">
								<input class="input" type="email" placeholder="Email" name="email"  v-model="formdata.email" required>
							</div>
							<p class="help is-danger">{{ $errors->first('email') }}</p>
						</div>

						<div class="field">
							<label class="label">Onderwerp</label>
							<div class="control">
								<input class="input" type="text" placeholder="Onderwerp" name="subject" v-model="formdata.subject" required>
							</div>
							<p class="help is-danger">{{ $errors->first('subject') }}</p>
						</div>

						<div class="field">
							<label class="label">Bericht</label>
							<div class="control">
								<div class="control">
									<textarea class="textarea" placeholder="Bericht" name="message"  v-model="formdata.message" required></textarea>
								</div>
								<p class="help is-danger">{{ $errors->first('message') }}</p>
							</div>
						</div>

						<div class="field">
							<div class="control">
								<button class="button is-primary">Verzenden</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<p>

			</p>
		</div>
	</section>
</div>