	<div class="footer_outer_container">
	<div class=" col-sm-12 col-xs-12" id="footer">
		<div class="container-fluid">
			<ul class="footer_links">
				<li><?= anchor('/', 'Home') ?></li>
				<li><?= anchor('home/about_us', 'About') ?></li>
				<li><?= anchor('home/contact_us', 'Contact') ?></li>
				<li><?= anchor('home/partners_sponsors', 'Sponsors') ?></li>
			</ul>
		</div>
		<div class="container text-center">
			<div class="col-sm-12 col-xs-12 footer_logo" >
				<img src="<?= base_url("assets/images/mog_logo.png")?>" style="background:grey;"/>
			</div>
			<div class="col-sm-12 col-xs-12 icons_block">
				<a href="https://www.instagram.com/affordableartfest/" target="_new">
					<i class="fa fa-instagram"></i>
				</a>
				<a href="https://www.facebook.com/affordableartfest/" target="_new">
					<i class="fa fa-facebook"></i>
				</a>
				<a href="https://twitter.com/GAAFofficial/" target="_new">
					<i class="fa fa-twitter"></i>
				</a>
			</div>
			<div class="col-sm-12 col-xs-12 block">
				<i class="fa fa-envelope-o"></i>&nbsp;goaaffordableartfest@gmail.com
			</div>
			<div class="col-sm-12 col-xs-12 block">
				<i class="fa fa-phone"></i>&nbsp;9823768906
			</div>
			<div class="col-sm-12 col-xs-12 block">
				<i class="fa fa-map-marker"></i>&nbsp;Museum of Goa, Plot no 79, Pilerne Industrial estate, Pilerne, Bardez, Goa India 403511
			</div>
		</div>
		<div class="container-fluid copyright_footer">
			Copyright &copy; MOG 2018
		</div>
	</div>
	</div>
	<!-- Bootstrap core JavaScript-->
	<script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
	<script src="<?=base_url('assets/js/index.js')?>"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>