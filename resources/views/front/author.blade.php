<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="{{asset('output.css')}}" rel="stylesheet" />
	<link href="{{asset('main.css')}}" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
		rel="stylesheet" />
</head>

<body class="font-[Poppins] pb-[83px]">
	<nav id="Navbar" class="max-w-[1130px] mx-auto flex justify-between items-center mt-[30px]">
		<div class="logo-container flex gap-[30px] items-center">
			<a href="index.html" class="flex shrink-0">
				<img src="assets/images/logos/logo.svg" alt="logo" />
			</a>
			<div class="h-12 border border-[#E8EBF4]"></div>
			<form action="searchPage.html"
				class="w-[450px] flex items-center rounded-full border border-[#E8EBF4] p-[12px_20px] gap-[10px] focus-within:ring-2 focus-within:ring-[#FF6B18] transition-all duration-300">
				<button type="submit" class="w-5 h-5 flex shrink-0">
					<img src="assets/images/icons/search-normal.svg" alt="icon" />
				</button>
				<input type="text" name="" id=""
					class="appearance-none outline-none w-full font-semibold placeholder:font-normal placeholder:text-[#A3A6AE]"
					placeholder="Search hot trendy news today..." />
			</form>
		</div>
		<div class="flex items-center gap-3">
			<a href=""
				class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18]">Upgrade
				Pro</a>
			<a href=""
				class="rounded-full p-[12px_22px] flex gap-[10px] font-bold transition-all duration-300 bg-[#FF6B18] text-white hover:shadow-[0_10px_20px_0_#FF6B1880]">
				<div class="w-6 h-6 flex shrink-0">
					<img src="assets/images/icons/favorite-chart.svg" alt="icon" />
				</div>
				<span>Post Ads</span>
			</a>
		</div>
	</nav>
	<nav id="Category" class="max-w-[1130px] mx-auto flex justify-center items-center gap-4 mt-[30px]">
		<a href="categoryPage.html"
			class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18]">
			<div class="w-6 h-6 flex shrink-0">
				<img src="assets/images/icons/heart.svg" alt="icon" />
			</div>
			<span>Health</span>
		</a>
		<a href="categoryPage.html"
			class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18]">
			<div class="w-6 h-6 flex shrink-0">
				<img src="assets/images/icons/status-up.svg" alt="icon" />
			</div>
			<span>Business</span>
		</a>
		<a href="categoryPage.html"
			class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18]">
			<div class="w-6 h-6 flex shrink-0">
				<img src="assets/images/icons/car.svg" alt="icon" />
			</div>
			<span>Automotive</span>
		</a>
		<a href="categoryPage.html"
			class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18]">
			<div class="w-6 h-6 flex shrink-0">
				<img src="assets/images/icons/global.svg" alt="icon" />
			</div>
			<span>Entertainment</span>
		</a>
		<a href="categoryPage.html"
			class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18]">
			<div class="w-6 h-6 flex shrink-0">
				<img src="assets/images/icons/coffee.svg" alt="icon" />
			</div>
			<span>Foods</span>
		</a>
		<a href="categoryPage.html"
			class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18]">
			<div class="w-6 h-6 flex shrink-0">
				<img src="assets/images/icons/courthouse.svg" alt="icon" />
			</div>
			<span>Politic</span>
		</a>
		<a href="categoryPage.html"
			class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18]">
			<div class="w-6 h-6 flex shrink-0">
				<img src="assets/images/icons/cup.svg" alt="icon" />
			</div>
			<span>Sport</span>
		</a>
	</nav>
	<section id="author" class="max-w-[1130px] mx-auto flex items-center flex-col gap-[30px] mt-[70px]">
		<div id="title" class="flex items-center gap-[30px]">
			<h1 class="text-4xl leading-[45px] font-bold">Author News</h1>
			<h1 class="text-4xl leading-[45px] font-bold">/</h1>
			<div class="flex gap-3 items-center">
				<div class="w-[60px] h-[60px] flex shrink-0 rounded-full overflow-hidden">
					<img src="{{Storage::url($author->avatar)}}" alt="profile photo" />
				</div>
				<div class="flex flex-col">
					<p class="text-lg leading-[27px] font-semibold">{{$author->name}}</p>
					<span class="text-[#A3A6AE]">{{$author->occupation}}</span>
				</div>
			</div>
		</div>
		<div id="content-cards" class="grid grid-cols-3 gap-[30px]">
			<a href="details.html" class="card">
				<div
					class="flex flex-col gap-4 p-[26px_20px] transition-all duration-300 ring-1 ring-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18] rounded-[20px] overflow-hidden bg-white">
					<div class="thumbnail-container h-[200px] relative rounded-[20px] overflow-hidden">
						<div
							class="badge absolute left-5 top-5 bottom-auto right-auto flex p-[8px_18px] bg-white rounded-[50px]">
							<p class="text-xs leading-[18px] font-bold">ENTERTAINMENT</p>
						</div>
						<img src="assets/images/thumbnails/th-building.png" alt="thumbnail photo"
							class="w-full h-full object-cover" />
					</div>
					<div class="flex flex-col gap-[6px]">
						<h3 class="text-lg leading-[27px] font-bold">Beberapa artis ini merayakan ultah di tengah hutan
							raya</h3>
						<p class="text-sm leading-[21px] text-[#A3A6AE]">12 Jun, 2024</p>
					</div>
				</div>
			</a>
			<a href="details.html" class="card">
				<div
					class="flex flex-col gap-4 p-[26px_20px] transition-all duration-300 ring-1 ring-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18] rounded-[20px] overflow-hidden bg-white">
					<div class="thumbnail-container h-[200px] relative rounded-[20px] overflow-hidden">
						<div
							class="badge absolute left-5 top-5 bottom-auto right-auto flex p-[8px_18px] bg-white rounded-[50px]">
							<p class="text-xs leading-[18px] font-bold">ENTERTAINMENT</p>
						</div>
						<img src="assets/images/thumbnails/th-sunbathe.png" alt="thumbnail photo"
							class="w-full h-full object-cover" />
					</div>
					<div class="flex flex-col gap-[6px]">
						<h3 class="text-lg leading-[27px] font-bold">Terjadi demo pada ibu kota jakarta membuat macet
							parah</h3>
						<p class="text-sm leading-[21px] text-[#A3A6AE]">12 Jun, 2024</p>
					</div>
				</div>
			</a>
			<a href="details.html" class="card">
				<div
					class="flex flex-col gap-4 p-[26px_20px] transition-all duration-300 ring-1 ring-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18] rounded-[20px] overflow-hidden bg-white">
					<div class="thumbnail-container h-[200px] relative rounded-[20px] overflow-hidden">
						<div
							class="badge absolute left-5 top-5 bottom-auto right-auto flex p-[8px_18px] bg-white rounded-[50px]">
							<p class="text-xs leading-[18px] font-bold">ENTERTAINMENT</p>
						</div>
						<img src="assets/images/thumbnails/th-cyclist.png" alt="thumbnail photo"
							class="w-full h-full object-cover" />
					</div>
					<div class="flex flex-col gap-[6px]">
						<h3 class="text-lg leading-[27px] font-bold">Bersepeda dapat membuat diri menjadi lebih baik
							lagi</h3>
						<p class="text-sm leading-[21px] text-[#A3A6AE]">12 Jun, 2024</p>
					</div>
				</div>
			</a>
			<a href="details.html" class="card">
				<div
					class="flex flex-col gap-4 p-[26px_20px] transition-all duration-300 ring-1 ring-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18] rounded-[20px] overflow-hidden bg-white">
					<div class="thumbnail-container h-[200px] relative rounded-[20px] overflow-hidden">
						<div
							class="badge absolute left-5 top-5 bottom-auto right-auto flex p-[8px_18px] bg-white rounded-[50px]">
							<p class="text-xs leading-[18px] font-bold">ENTERTAINMENT</p>
						</div>
						<img src="assets/images/thumbnails/th-bulldozer.png" alt="thumbnail photo"
							class="w-full h-full object-cover" />
					</div>
					<div class="flex flex-col gap-[6px]">
						<h3 class="text-lg leading-[27px] font-bold">Bersepeda dapat membuat diri menjadi lebih baik
							lagi</h3>
						<p class="text-sm leading-[21px] text-[#A3A6AE]">12 Jun, 2024</p>
					</div>
				</div>
			</a>
			<a href="details.html" class="card">
				<div
					class="flex flex-col gap-4 p-[26px_20px] transition-all duration-300 ring-1 ring-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18] rounded-[20px] overflow-hidden bg-white">
					<div class="thumbnail-container h-[200px] relative rounded-[20px] overflow-hidden">
						<div
							class="badge absolute left-5 top-5 bottom-auto right-auto flex p-[8px_18px] bg-white rounded-[50px]">
							<p class="text-xs leading-[18px] font-bold">ENTERTAINMENT</p>
						</div>
						<img src="assets/images/thumbnails/th-key.png" alt="thumbnail photo"
							class="w-full h-full object-cover" />
					</div>
					<div class="flex flex-col gap-[6px]">
						<h3 class="text-lg leading-[27px] font-bold">Beberapa artis ini merayakan ultah di tengah hutan
							raya</h3>
						<p class="text-sm leading-[21px] text-[#A3A6AE]">12 Jun, 2024</p>
					</div>
				</div>
			</a>
		</div>
	</section>
	<section id="Advertisement" class="max-w-[1130px] mx-auto flex justify-center mt-[70px]">
		<div class="flex flex-col gap-3 shrink-0 w-fit">
			<a href="#">
				<div class="w-[900px] h-[120px] flex shrink-0 border border-[#EEF0F7] rounded-2xl overflow-hidden">
					<img src="assets/images/iklans/bannerWide.png" class="object-cover w-full h-full" alt="ads" />
				</div>
			</a>
			<p class="font-medium text-sm leading-[21px] text-[#A3A6AE] flex gap-1">
				Our Advertisement <a href="#" class="w-[18px] h-[18px]"><img
						src="assets/images/icons/message-question.svg" alt="icon" /></a>
			</p>
		</div>
	</section>
</body>

</html>