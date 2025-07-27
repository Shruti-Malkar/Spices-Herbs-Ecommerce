<!DOCTYPE html>
<html>
<head>
<title>Contact - Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="text-center">
			<h1>Contact Us</h1>
			<div>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
				eiusmod tempor incididunt ut labore <div>et dolore magra aliqua.
				Ut enim ad minim veniam.</div>
			</div>
		</div>
		<div class="content">
			<div class="col-1">
				<div class="address-line">
					<img alt="location" src="images/i1.jpg" class="icon">
					<div class="contact-info">
						<div class="contact-info-title">Address</div>
						<div>GRWP, </div>
						<div>Barshi Road, Latur,</div>
						<div>413512.</div>
					</div>
				</div>
				<div class="address-line">
					<img alt="location" src="images/i2.png" class="icon">
					<div class="contact-info">
						<div class="contact-info-title">Phone</div>
						<div>12523-4566-8954-8956.</div>
					</div>
				</div>
				<div class="address-line">
					<img alt="location" src="images/i3.png" class="icon">
					<div class="contact-info">
						<div class="contact-info-title">Email</div>
						<div>passs12345@gmail.com</div>
					</div>
				</div>
			</div>
			<div class="col-2">
				<form method="POST" action="concat_script.php">
					<div class="form-container">
						<h2>Send Message</h2>
						<div class="form-row">
							<label>Full Name</label>
							<div>
								<input type="text" name='fname' required class="form-field">
							</div>
						</div>
						<div class="form-row">
							<label>Email</label>
							<div>
								<input type="text" name='email' class="form-field required">
							</div>
						</div>
						<div class="form-row">
							<label>Type your message...</label>
							<div>
								<input type="text" name='msg' class="form-field" required>
							</div>
						</div>
						<button type="submit" name="btn" class="send-btn">Send</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<div class="google-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2990.274257380938!2d-70.56068388481569!3d41.45496659976631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e52963ac45bbcb%3A0xf05e8d125e82af10!2sDos%20Mas!5e0!3m2!1sen!2sus!4v1671220374408!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
	
</body>
</html>