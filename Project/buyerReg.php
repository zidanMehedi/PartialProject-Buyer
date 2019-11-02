<?php 

if (!isset($_COOKIE['id'])) { ?>

<!DOCTYPE html>
<html>
<head>
	<title>Accessoy Store</title>
</head>

<body>
	<table border="0px" width="100%" cellpadding="0px" cellspacing="0px" bgcolor="#f1f1f1">
						<tr>
							<td width="20%" height="80px" align="center"><font size="20px" color="dodgerblue"><b>TITLE</b></font></td>
							<td width="">
								<input size="30px" type="text" value="" placeholder="Search"><input type="submit" value="Search">
							</td>
							<td width="20%">
								<?php
									if (isset($_COOKIE['id'])) {
										echo '<a href="Profile/buyerDashboard.php"><font color="tomato">My Account</font></a>&emsp;&emsp;';
									}
									else
										echo '<a href="buyerLogin.php"><font color="tomato">Sign In</font></a>&emsp;&emsp;';
								?>
								<a href="cart.php"><font color="#8F2792">Cart</font></a>
							</td>
						</tr>
					</table>
					<table border="0px" width="100%" cellpadding="0px" cellspacing="0px">
						<tr>
							<td height="30px" bgcolor="dodgerblue">
								<nav>
									&emsp;&emsp;&emsp;&ensp;
									<a href="index.php"><font color="white">Home</font></a>
									&emsp;&emsp;&emsp;
									<a href="Product/smartphone.php"><font color="white">Smartphone</font></a>
									&emsp;&emsp;&emsp;
									<a href="Product/computer.php"><font color="white">Computer</font></a>
									&emsp;&emsp;&emsp;
									<a href="Product/camera.php"><font color="white">Camera</font></a>
									&emsp;&emsp;&emsp;
									<a href="Product/lifestyle.php"><font color="white">Lifestyle</font></a>
								</nav>
							</td>
						</tr>
					</table>
					<table>
						<tr><hr></tr>
					</table>
					<table border="0px" width="100%" cellpadding="0px" cellspacing="0px">
						<tr>
							<td width="30%"></td>
							
							<td bgcolor="#E8EBEC" align="center">
								<table border="0px" width="100%" cellpadding="0px" cellspacing="0px">
									<form action="buyerRegCheck.php" method="post">
									<tr>
										<td>
											
												<table border="0px" width="100%" cellpadding="0px" cellspacing="0px">
													<tr>
														<td bgcolor="dodgerblue" height="5px" colspan="4"></td>
													</tr>
													<tr>
														<th height="30%" align="center" colspan="4"><h2><font color="tomato">Registration</font></h2></th>
													</tr>
													<tr><td height="40px" colspan="4"></td></tr>
													<tr>
														<td width="100px"></td>
														<td>Name :</td>
														<td>
															<input type="text" name="name" placeholder="Name">
														</td>
														<td width="70px"></td>
													</tr>
													<tr><td height="20px" colspan="4"></td></tr>
													<tr>
														<td width="100px"></td>
														<td>Email :</td>
														<td>
															<input type="text" name="email" placeholder="youremail@example.com">
														</td>
														<td width="70px"></td>
													</tr>
													<tr><td height="20px" colspan="4"></td></tr>
													<tr>
														<td width="100px"></td>
														<td>Date Of Birth :</td>
														<td>
															<input type="date" name="dob">
														</td>
														<td width="70px"></td>
													</tr>
													<tr><td height="20px" colspan="4"></td></tr>
													<tr>
														<td width="100px"></td>
														<td>Address :</td>
														<td>
															<textarea name="address" cols="22" rows="5" placeholder="Address"></textarea>
														</td>
														<td width="70px"></td>
													</tr>
													<tr><td height="17px" colspan="4"></td></tr>
													<tr>
														<td width="100px"></td>
														<td>Contact No :</td>
														<td>
															<input type="text" name="phnNo" placeholder="01XXXXXXXXX">
														</td>
														<td width="70px"></td>
													</tr>
													<tr><td height="20px" colspan="4"></td></tr>
													<tr>
														<td width="100px"></td>
														<td>Gender :</td>
														<td>
															<input type="radio" name="gender" value="Male">Male
															&emsp;&emsp;&ensp;
															<input type="radio" name="gender" value="Female">Female
														</td>
														<td width="70px"></td>
													</tr>
													<tr><td height="20px" colspan="4"></td></tr>
													<tr>
														<td width="100px"></td>
														<td>Username :</td>
														<td>
															<input type="text" name="username" placeholder="Username">
														</td>
														<td width="70px"></td>
													</tr>
													<tr><td height="20px" colspan="4"></td></tr>
													<tr>
													<tr>
														<td width="100px"></td>
														<td>Password :</td>
														<td>
															<input type="password" name="userPass" placeholder="Password">
														</td>
														<td width="70px"></td>
													</tr>
													<tr><td height="20px" colspan="4"></td></tr>
													<tr>
														<td width="100px"></td>
														<td>Confirm Password :</td>
														<td>
															<input type="password" name="confPass" placeholder="Confirm Password">
														</td>
														<td width="70px"></td>
													</tr>
													<tr><td height="40px" colspan="4"></td></tr>
													<tr>
														<td align="center" colspan="4"><input type="submit" name="userreg" value="Register">
															<br><br>
														</td>
													</tr>
													<tr><td height="20px" colspan="4"></td></tr>
													<tr>
														<td align="center" colspan="4">Have an Account | Want to Log in <br></td>
													</tr>
													<tr><td align="center" colspan="4"><a href="buyerLogin.php"><font color="tomato">Sign In</font></a> <br><br></td></tr>
												</table>
											
										</td>
									</tr>
								</table>
							</td>
							<td width="30%"></td>
						</tr>
					</table>
					<table>
						<tr><hr></tr>
					</table>
				</form>
					<table border="0px" width="100%" cellpadding="0px" cellspacing="0px" bgcolor="#f1f1f1">
						<tr>
							<td width="10%"></td>
							<td align="center">
								<h4>KNOW US</h4>
								<a href="FooterInfo/aboutus.php"><font color="black">About Us</font></a> <br><br>
								<a href="FooterInfo/privacypolicy.php"><font color="black">Privacy Policy</font></a> <br><br>
								<a href="FooterInfo/cookiepolicy.php"><font color="black">Cookie Ploicy</font></a> <br><br>
								<a href="FooterInfo/warrentypolicy.php"><font color="black">Warrenty Policy</font></a> <br><br>
								<a href="FooterInfo/shippingpolicy.php"><font color="black">Shipping Policy</font></a> <br><br>
								<a href="FooterInfo/whyshopping.php"><font color="black">Why Shopping Here</font></a> <br><br>
								<a href="FooterInfo/termspolicy.php"><font color="black">Terms & Conditions</font></a> <br><br>
							</td>
							<td width="10%"></td>
							<td align="center" valign="top">
								<h4>YOUR CONCERN</h4>
								<a href="Profile/buyerDashboard.php"><font color="black">Your Account</font></a> <br><br>
								<a href="Profile/buyerOrder.php"><font color="black">Your Orders</font></a> <br><br>
								<a href="FooterInfo/howorder.php"><font color="black">How to make an Order</font></a> <br><br>
							</td>
							<td width="10%"></td>
							<td align="center" valign="top">
								<h4>GET IN TOUCH US</h4>
								<a href="FooterInfo/contactus.php"><font color="black">Contact Us</font></a> <br><br>
								<h4>PAYMENT METHODS</h4>
								<a href="FooterInfo/cod.php"><font color="black">Cash On Delivery</font></a>&emsp;
								<a href="FooterInfo/bkash.php"><font color="black">bKash</font></a> <br><br>
							</td>
							<td width="10%"></td>
							<td align="center" valign="top">
								<h4>LOCATION</h4>
								Dhaka, Bangladesh
							</td>
							<td width="10%"></td>
						</tr>
						<tr>
							<td colspan="9" bgcolor="#222222" height="60px" valign="middle"><font color="#787878" size="2px">&emsp;&emsp;&emsp;&emsp;&copy;2019 blah blah | All rights reserved</font></td>
						</tr>
					</table>
</body>
</html>

<?php
}
	else
		header('location: index.php');

?>


