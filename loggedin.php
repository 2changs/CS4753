<?php
include('sessionwithlogout.php');
?>
<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>FPM</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/solidstate/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/phantom/css/main.css" />
		<link rel="stylesheet" href="assets/solidstate/css/main.css" />
		<link rel="stylesheet" href="assets/header.css" />
		<link rel="stylesheet" href="assets/style.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/solidstate/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/solidstate/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<script>
			var thingToChangeRed;
			function showForm() {
				var form = document.getElementById("edit_form");
				form.style = "display:block";

			}
			function hideForm() {
				var form = document.getElementById("edit_form");
				form.style = "display:none";
			}

				function validateInputs() {
						var first_name = document.getElementById("first_name");
						var last_name = document.getElementById("last_name");
						var address = document.getElementById("address");
						var city = document.getElementById("city");
						var state = document.getElementById("state");
						var zip = document.getElementById("zip");
						var phone_number = document.getElementById("phone_number");
						var error_message = document.getElementById("error_message");
						var form = document.getElementById("edit_form");
						var phpError = document.getElementById("php_error");

						error_message.innerHTML = "";
						if(phpError) {
							phpError.innerHTML = "";
						}

						if (thingToChangeRed) {
							thingToChangeRed.style = "";
							thingToChangeRed = null;
						}
						if (!isAllAlpha(first_name.value) && !thingToChangeRed) {
								error_message.innerHTML = "First name must contain only letters.";
								thingToChangeRed = first_name;
						}
						if (!isAllAlpha(last_name.value) && !thingToChangeRed) {
								error_message.innerHTML = "Last name must contain only letters.";
								thingToChangeRed = last_name;
						}
						if (!isValidAddress(address.value) && !thingToChangeRed) {
							error_message.innerHTML = "Address must only contain letters, numbers, '#', or '.'";
							thingToChangeRed = address;
						}
						if (!isAllAlpha(city.value) && !thingToChangeRed) {
								error_message.innerHTML = "City must contain only letters.";
								thingToChangeRed = city;
						}
						if (!isAllNumeric(zip.value) && !thingToChangeRed) {
								error_message.innerHTML = "Zip code must contain only numbers.";
								thingToChangeRed = zip;
						}
						if (zip.value.length != 5 && !thingToChangeRed) {
							error_message.innerHTML = "Zip code must contain only 5 numbers.";
							thingToChangeRed = zip;
						}
						if (!isAllNumeric(phone_number.value) && !thingToChangeRed) {
								error_message.innerHTML = "Phone number must contain only numbers.";
								thingToChangeRed = phone_number;
						}
						if (phone_number.value.length != 10 && !thingToChangeRed) {
							error_message.innerHTML = "Phone number must contain only 10 numbers.";
							thingToChangeRed = phone_number;
						}

					if(thingToChangeRed) {
						thingToChangeRed.style = "border-color: red";
						return false;
					}
					form.submit();
				}

				function isValidAddress(str) {
					return /^[a-zA-Z0-9#. ]*$/.test(str);
				}

				function isAllAlpha(str) {
						return /^[a-zA-Z]+$/.test(str);
				}

				function isAllNumeric(str) {
						return /^\d+$/.test(str);
				}
		</script>
		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<div id="header" class="">
              <h1><a href="index.php">Home</a></h1>
              <h1><a href="shop.php">Shop Now</a></h1>
              <h1><a href="about.php">About Us</a></h1>
              <h1><a href="contact.php">Contact Us</a></h1>
                <?php
                if ($_SESSION['loggedin'] == true) {
                ?>
                <h1 style="color: silver"><a href="loggedin.php">My Account</a></h1>
                <div id="rightbutton">
                    <h1><a href="logout.php">Log Out</a></h1>
                </div>
                <?php
                } else {
                ?>
                <div id="rightbutton">
                    <h1><a href="register.php">Sign Up/Login</a></h1>
                </div>
                <?php
                }
                ?>
					</div>

				<!-- Wrapper -->
					<section id="wrapper">
						<!-- Content -->

							<div class="wrapper">
								<div class="inner">
									<div><image class="logo" src="img/logo.png"></div>
									<br>
									<h1 style="font-size: 2em">Welcome, <i><?php echo $login_session_name; ?></i></h1>
									<br>
									<blockquote>
										There are two types of people in this world - someone with fidget spinners & someone who gets new fidget spinners every month.
									</blockquote>
									<br>

									<!-- <h2 style="font-size: 1.5em">Your current plan is:</h2> -->
									<div>
										<h3>Your Personal Info </h3>

										<?php
											$first_name = "";
											$last_name = "";
											$address = "";
											$city = "";
											$state = "";
											$zip = "";
											$phone_number = "";

											include('db.php');
											$sql = "select email, first_name, last_name, address, city, state, zip, phone_number from customers where email='".$_SESSION['email']."'";
											$result = $connection->query($sql);
											if (count($result) > 0) {
											    while($row = $result->fetch_assoc()) {
														$first_name = $row[first_name];
														$last_name = $row[last_name];
														$address = $row[address];
														$city = $row[city];
														$state = $row[state];
														$zip = $row[zip];
														$phone_number = $row[phone_number];

														echo "<div>  <b>" . $row[first_name] . " " . $row[last_name] . "</b></div>";
														echo "<div>" . $row[address] . "</div>";
														echo "<div>" . $row[city] . ", " . $row[state] . " " . $row[zip] . "</div>";
														echo "<div>" . $row[phone_number] . "</div>";
										?>
										<br />
										<button style="height:px;" onclick="showForm();">Edit Info </button>
										<br /> <br />
										<p id="error_message" class="submission_message_error"> </p>
										<?php
																}
													} else {
														echo "Error";
													} ?>
													<form style="display:none;" id="edit_form" method="post" action="" onsubmit="event.preventDefault(); validateInputs();">
			                        <div class="field">
			                            <label for="first_name">First Name</label>
			                            <input name="first_name" id="first_name" type="text" value="<?php echo $first_name; ?>" required ></input>
			                        </div>
			                        <div class="field">
			                            <label for="last_name">Last Name</label>
			                            <input name="last_name" id="last_name" type="text" value="<?php echo $last_name; ?>" required ></input>
			                        </div>
			                        <div class="field">
			                            <label for="address">Address</label>
			                            <input name="address" id="address" type="text" value="<?php echo $address; ?>" required ></input>
			                        </div>
			                        <div class="field">
			                            <label for="city">City</label>
			                            <input name="city" id="city" type="text" value="<?php echo $city; ?>" required ></input>
			                        </div>
			                        <div class="field">
			                            <label for="state">State</label>
			                            <select name="state">
																		<option value="AL">Alabama</option>
																		<option value="AK">Alaska</option>
																		<option value="AZ">Arizona</option>
																		<option value="AR">Arkansas</option>
																		<option value="CA">California</option>
																		<option value="CO">Colorado</option>
																		<option value="CT">Connecticut</option>
																		<option value="DE">Delaware</option>
																		<option value="DC">District Of Columbia</option>
																		<option value="FL">Florida</option>
																		<option value="GA">Georgia</option>
																		<option value="HI">Hawaii</option>
																		<option value="ID">Idaho</option>
																		<option value="IL">Illinois</option>
																		<option value="IN">Indiana</option>
																		<option value="IA">Iowa</option>
																		<option value="KS">Kansas</option>
																		<option value="KY">Kentucky</option>
																		<option value="LA">Louisiana</option>
																		<option value="ME">Maine</option>
																		<option value="MD">Maryland</option>
																		<option value="MA">Massachusetts</option>
																		<option value="MI">Michigan</option>
																		<option value="MN">Minnesota</option>
																		<option value="MS">Mississippi</option>
																		<option value="MO">Missouri</option>
																		<option value="MT">Montana</option>
																		<option value="NE">Nebraska</option>
																		<option value="NV">Nevada</option>
																		<option value="NH">New Hampshire</option>
																		<option value="NJ">New Jersey</option>
																		<option value="NM">New Mexico</option>
																		<option value="NY">New York</option>
																		<option value="NC">North Carolina</option>
																		<option value="ND">North Dakota</option>
																		<option value="OH">Ohio</option>
																		<option value="OK">Oklahoma</option>
																		<option value="OR">Oregon</option>
																		<option value="PA">Pennsylvania</option>
																		<option value="RI">Rhode Island</option>
																		<option value="SC">South Carolina</option>
																		<option value="SD">South Dakota</option>
																		<option value="TN">Tennessee</option>
																		<option value="TX">Texas</option>
																		<option value="UT">Utah</option>
																		<option value="VT">Vermont</option>
																		<option value="VA">Virginia</option>
																		<option value="WA">Washington</option>
																		<option value="WV">West Virginia</option>
																		<option value="WI">Wisconsin</option>
																		<option value="WY">Wyoming</option>
																	</select>
			                        </div>
			                        <div class="field">
			                            <label for="zip">Zip Code</label>
			                            <input name="zip" id="zip" type="text" value="<?php echo $zip; ?>"required ></input>
			                        </div>
			                        <div class="field">
			                            <label for="phone_number">Phone Number</label>
			                            <input name="phone_number" id="phone_number" type="text" value="<?php echo $phone_number; ?>"></input>
			                        </div>
			                        <ul class="actions">
																	<input name="action" type="hidden" value="save" /></p>
			                            <li><input type="submit" value="Save" action="Save"/></li>
																	<li><button onclick="hideForm();"> Cancel </button>
			                        </ul>
			                    </form>
											<?php
											if(isset($_POST['action']))
													{
															if($_POST['action']=="save")
															{
																		$first_name = mysqli_real_escape_string($connection,$_POST['first_name']);
																		$last_name = mysqli_real_escape_string($connection,$_POST['last_name']);
																		$address = mysqli_real_escape_string($connection,$_POST['address']);
																		$city = mysqli_real_escape_string($connection,$_POST['city']);
																		$state = mysqli_real_escape_string($connection,$_POST['state']);
																		$zip = mysqli_real_escape_string($connection,$_POST['zip']);
																		$phone_number = mysqli_real_escape_string($connection,$_POST['phone_number']);

																		$update_sql = "UPDATE customers SET first_name='".$_POST['first_name']."', last_name ='".$_POST['last_name']."', address='".$_POST['address']."', city='".$_POST['city']."', state='".$_POST['state']."', zip=".$_POST['zip'].", phone_number=".$_POST['phone_number']." WHERE email='".$_SESSION['email']."'";
																		mysqli_query($connection, $update_sql);
																		$message = "Updated sucessfully! Please refresh the page.";
																		echo("<p class='submission_message_success'>".$message."</p>");
																}
													}
												?>
									</div>
								</div>

							</div>





					</section>





			</div>

		<!-- Scripts -->
			<script src="assets/solidstate/js/skel.min.js"></script>
			<script src="assets/solidstate/js/jquery.min.js"></script>
			<script src="assets/solidstate/js/jquery.scrollex.min.js"></script>
			<script src="assets/solidstate/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/solidstate/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/solidstate/js/main.js"></script>

	</body>
</html>
