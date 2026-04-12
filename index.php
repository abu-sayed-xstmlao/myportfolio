<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


	<title>DigitalMarketing</title>
</head>
<style>



:root {
	--colorPrimary: #00f;
	--colorSecondary: #fff;
}
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: Poppins;
		text-decoration: none;
	}

	a {
		text-decoration: none;
		display: inline-block;
	}
	ul, ol {
		padding: 0;
		margin: 0;
		list-style-type: none;
	}
	body {
		background: #f1f1f3;
		padding-top: 50px;
	}
	nav {
		display: flex;
		position: fixed;
		height: 50px;
		width: 100%;
		justify-content: space-around;
		background: #fff;
		box-shadow: 0 0 20px rgba(0,0,0,.2);
		align-items: center;
		left: 0;
		top: 0;
		z-index: 9999999;

	}

	nav .logo {
		font-weight: bolder;
		font-size: 1.6rem;
	}
	nav .logo span {
		color: var(--colorPrimary);
	}

	nav ul.links {
		display: flex;
		align-items: center;
		display: none;
	}

	nav ul.links li a {
		position: relative;
		color: #000;
		padding: 5px 7px;
	}


	nav .menu_button {
		font-size: 2rem;
		display: initial;
	}

@media (min-width: 768px) {
		nav .menu_button {
			display: none;
		}

		nav ul.links {
			display: flex;
		}
	}

	section.hero {
		position: relative;
		display: flex;
		align-items: center;
		background: url(hero.png);
		min-height: 400px;
		width: 100%;
		color: #fff;
		padding: 20px 15px;
	}

	section.hero h1 {
		font-size: 2.5rem;
	}
	
	section.hero h2 {
		margin: 10px auto;
	}
	
	button {
		display: inline-block;
		padding: 10px 12px;
		outline: none;
		border: none;
		background: var(--colorPrimary);
		color: var(--colorSecondary);
		border-radius: 4px;
		user-select: none;
	}
	
	
	.button_one {
		background: orange ;
	}
	
	
	.buttons {
		display: flex;
		margin-top: 20px;
	}
	.hero .buttons .button_one {
		margin-right: 10px;
	}
	
	
	.highlight {
		color: #f00;
	}
	
	.hero .sticker {
		position: absolute;
		background: #fff;
		border-radius: 5px;
		color: var(--colorPrimary);
		bottom: -20px;
		left: 50%;
		transform: translateX(-50%);
		box-shadow: 0 0 10px rgba(0 0 255 / 25%);
	}
	
	.hero .sticker ul {
		display: flex;
		align-items: center;
	}

	.hero .sticker ul li {
		padding: 10px 5px;
		white-space: nowrap;
		font-size: 10px;
		display: flex;
		align-items: center;
		border-left: 1px solid #ddd;
	}
	.hero .sticker ul li:nth-child(1){
		border-left: 0px solid #ddd;
	}
	
	.sticker ul li i {
		font-size: 1.5rem;
	}


</style>


<nav class="navigation_top">
	<div class="logo">
		Pva<span>Quantum</span>
	</div>

	<ul class="links">
		<li><a href="">Home</a></li>
		<li><a href="">Services</a></li>
		<li><a href="">Pricing</a></li>
		<li><a href="">FAQs</a></li>
		<li><a href="">Contact</a></li>

	</ul>

	<div class="menu_button">
		<i class="fab fa-apple"></i>
	</div>

</nav>


<section class="hero">
	<div class="info_container">
		<h1>Premium <span class="highlight">PVA Accounts</span> <br>
			for Your Success</h1>
		<h3>Buy Phone Verified Accounts-Gmal.ocial Media & More</h3>



		<div class="buttons">
			<button class="button_one">
				Get PVA Accounts
			</button>

			<button class="button_two">
				Speak to an Expert
			</button>

		</div>
	</div>
	<div class="sticker">
		<ul>
			<li>
				<i class="fab fa-envira"></i>
				100% Phone Verified
			</li>
			<li>
				<i class="fab fa-apple"></i>
				Fast Delivery
			</li>
			
			<li>
				<i class="fa fa-heart"></i>
				24/7 Support
			</li>
		</ul>
	</div>
</section>




