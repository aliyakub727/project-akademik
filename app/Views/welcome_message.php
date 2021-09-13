<?= $this->extend('template/template'); ?>

<?= $this->section('content'); ?>
<style>
	body {
		background-image: url(/img/Asset1.png);
		background-position: top;
		background-repeat: no-repeat;
		background-size: 100vmax;
	}
</style>

<div class="custom-cover">
	<div class="container kotak">
		<div class="row kata justify-content-center">
			<div class="col-sm-10">
				<h1>Sekolahan</h1>
				<p>
					Sekolah ini adalah salah satu sekolah yang bergengsi di sekitar wilayah jakarta, yang berlokasi di sekitar jl halim xxxx yang memiliki beberapa jurusan yang terdiri dari teknologi komunikasi dan jaringan,Multi Media,Administrasi perkantoran,Akuntansi dan Rekayasa Perangkat Lunax
				</p>
				<a href="<?= base_url(); ?>/login" class="tombol">Get Started</a>
			</div>
		</div>
	</div>
</div>
<?= $this->endsection(); ?>