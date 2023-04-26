<style type="text/css">
	header{
		margin: 0;
		margin-bottom: 1rem;
		padding: 1rem;
		height: fit-content;
		width: 100%;
		background-color: #dfefde;
		border-radius: .4rem;
	}
	img{
		width: 100%;
		border-radius: .4rem;
	}
	a{
		text-decoration: none;
		padding: .4rem;
		margin: .4rem;
		border: 1px solid #dfefff;
		border-radius: .4rem;
	}
	.disabled{
		color: #000;
	}
	.selected{
		color: #1951ff;
	}
</style>

@php
	function check($path){
		return preg_match("/$path/", url() -> full());
	}
@endphp

<header>
	<a href="/invoke-view/accueil" class={{check("accueil") ? "selected" : "disabled"}}>
		accueil
	</a>

	<a href="/invoke-view/presentation" class={{check("presentation") ? "selected" : "disabled"}}>
		présentation
	</a>

	<a href={{route("markAll")}} class={{check("mark") ? "selected" : "disabled"}}>
		résultats
	</a>

	<a href="/invoke-view/contact" class={{check("contact") ? "selected" : "disabled"}}>
		contact
	</a>
</header>

@if($showImg ?? false)
	<img src="https://picsum.photos/1600/300">
@endif