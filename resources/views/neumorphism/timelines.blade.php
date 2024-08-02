<x-app-layout title="Timelines">
	<x-grid title="Timelines">
		<x-slot name="description">
			Timelines are used to show a list of events in chronological order. They are useful for showing a list of events in chronological order. They are useful for showing a list of events in chronological order.
		</x-slot>

		<x-grid.item title="Basic Timeline">
			<div class="flex">
				<div class="rounded-sm p-0.5 shadow-neu-inset-xs dark:shadow-neu-dark-inset-xs"></div>
				<ol class="relative">
					<li class="mb-10 ms-4">
						<div class="bg-primary absolute -start-2 mt-1.5 h-3 w-3 rounded-full border border-light-secondary shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs"></div>
						<time class="text-secondary mb-1 font-karla text-sm font-normal leading-none tracking-wider">October 2002</time>
						<h3 class="text-primary font-playfair text-lg font-semibold tracking-wide">Naruto Begins</h3>
						<p class="text-secondary font-karla text-base font-normal tracking-wider">The journey of Naruto Uzumaki starts as he trains to become a powerful ninja and earn the title of Hokage.</p>
					</li>
					<li class="mb-10 ms-4">
						<div class="bg-primary absolute -start-2 mt-1.5 h-3 w-3 rounded-full border border-light-secondary shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs"></div>
						<time class="text-secondary mb-1 font-karla text-sm font-normal leading-none tracking-wider">April 2016</time>
						<h3 class="text-primary font-playfair text-lg font-semibold tracking-wide">My Hero Academia Debuts</h3>
						<p class="text-secondary font-karla text-base font-normal tracking-wider">Izuku Midoriya, a quirkless boy, dreams of becoming a hero in a world where superpowers are the norm.</p>
					</li>
					<li class="ms-4">
						<div class="bg-primary absolute -start-2 mt-1.5 h-3 w-3 rounded-full border border-light-secondary shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs"></div>
						<time class="text-secondary mb-1 font-karla text-sm font-normal leading-none tracking-wider">January 2015</time>
						<h3 class="text-primary font-playfair text-lg font-semibold tracking-wide">Assassination Classroom Premieres</h3>
						<p class="text-secondary font-karla text-base font-normal tracking-wider">Class 3-E must assassinate their powerful new teacher, Koro-sensei, before he destroys the Earth.</p>
					</li>
				</ol>
			</div>
		</x-grid.item>

		<x-grid.item title="Centered Timeline">
			<section class="relative flex min-h-screen flex-col justify-center overflow-hidden">
				<div class="mx-auto w-full max-w-6xl px-4 py-24 md:px-6">
					<!-- Timeline -->
					<div class="before:bg-primary relative space-y-8 before:absolute before:inset-0 before:ml-5 before:h-full before:w-0.5 before:-translate-x-px before:rounded-sm before:p-1 before:shadow-neu-inset-xs dark:before:shadow-neu-dark-inset-xs md:before:mx-auto md:before:translate-x-0">

						<!-- Item 1 -->
						<div class="is-active group relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse">
							<!-- Icon -->
							<div class="bg-primary group-[.is-active]:bg-secondary text-secondary group-[.is-active]:text-primary flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-light-secondary p-2 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
								<x-svg.naruto class="size-7" />
							</div>
							<!-- Card -->
							<div class="bg-primary w-[calc(100%-4rem)] rounded border border-light-secondary p-4 shadow-neu-inset-sm dark:border-dark-secondary dark:shadow-neu-dark-inset-sm md:w-[calc(50%-2.5rem)]">
								<div class="mb-1 flex items-center justify-between space-x-2">
									<div class="text-primary font-playfair font-bold tracking-wide">Naruto Becomes Hokage</div>
									<time class="text-highlight font-karla text-xs font-medium tracking-wider">27/03/2017</time>
								</div>
								<div class="text-secondary font-karla tracking-wide">Naruto Uzumaki finally achieves his dream of becoming the Hokage of the Hidden Leaf Village.</div>
							</div>
						</div>

						<!-- Item 2 -->
						<div class="is-active group relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse">
							<!-- Icon -->
							<div class="bg-primary group-[.is-active]:bg-secondary text-secondary group-[.is-active]:text-primary flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-light-secondary p-2 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
								<x-svg.deku class="size-7" />
							</div>
							<!-- Card -->
							<div class="bg-primary w-[calc(100%-4rem)] rounded border border-light-secondary p-4 shadow-neu-inset-sm dark:border-dark-secondary dark:shadow-neu-dark-inset-sm md:w-[calc(50%-2.5rem)]">
								<div class="mb-1 flex items-center justify-between space-x-2">
									<div class="text-primary font-playfair font-bold tracking-wide">Deku Enrolls in U.A. High</div>
									<time class="text-highlight font-karla text-xs font-medium tracking-wider">03/04/2016</time>
								</div>
								<div class="text-secondary font-karla tracking-wide">Izuku Midoriya, also known as Deku, starts his journey to become the world's greatest hero by enrolling in U.A. High School.</div>
							</div>
						</div>

						<!-- Item 3 -->
						<div class="is-active group relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse">
							<!-- Icon -->
							<div class="bg-primary group-[.is-active]:bg-secondary text-secondary group-[.is-active]:text-primary flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-light-secondary p-2 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
								<x-svg.gojo class="size-7" />
							</div>
							<!-- Card -->
							<div class="bg-primary w-[calc(100%-4rem)] rounded border border-light-secondary p-4 shadow-neu-inset-sm dark:border-dark-secondary dark:shadow-neu-dark-inset-sm md:w-[calc(50%-2.5rem)]">
								<div class="mb-1 flex items-center justify-between space-x-2">
									<div class="text-primary font-playfair font-bold tracking-wide">Koro-sensei's Arrival</div>
									<time class="text-highlight font-karla text-xs font-medium tracking-wider">09/01/2015</time>
								</div>
								<div class="text-secondary font-karla tracking-wide">Koro-sensei, a powerful and mysterious creature, becomes the homeroom teacher of Class 3-E and sets them a challenging task.</div>
							</div>
						</div>

						<!-- Item 4 -->
						<div class="is-active group relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse">
							<!-- Icon -->
							<div class="bg-primary group-[.is-active]:bg-secondary text-secondary group-[.is-active]:text-primary flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-light-secondary p-2 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
								<x-svg.brook class="size-7" />
							</div>
							<!-- Card -->
							<div class="bg-primary w-[calc(100%-4rem)] rounded border border-light-secondary p-4 shadow-neu-inset-sm dark:border-dark-secondary dark:shadow-neu-dark-inset-sm md:w-[calc(50%-2.5rem)]">
								<div class="mb-1 flex items-center justify-between space-x-2">
									<div class="text-primary font-playfair font-bold tracking-wide">Titan Attack</div>
									<time class="text-highlight font-karla text-xs font-medium tracking-wider">07/04/2013</time>
								</div>
								<div class="text-secondary font-karla tracking-wide">The Colossal Titan breaches the wall, marking the beginning of humanity's fight for survival against the Titans in Attack on Titan.</div>
							</div>
						</div>

						<!-- Item 5 -->
						<div class="group relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse">
							<!-- Icon -->
							<div class="bg-primary group-[.is-active]:bg-secondary text-secondary group-[.is-active]:text-primary flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-light-secondary p-2 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
								<x-svg.luffy class="size-7" />
							</div>
							<!-- Card -->
							<div class="bg-primary w-[calc(100%-4rem)] rounded border border-light-secondary p-4 shadow-neu-inset-sm dark:border-dark-secondary dark:shadow-neu-dark-inset-sm md:w-[calc(50%-2.5rem)]">
								<div class="mb-1 flex items-center justify-between space-x-2">
									<div class="text-primary font-playfair font-bold tracking-wide">Luffy Declares War</div>
									<time class="text-highlight font-karla text-xs font-medium tracking-wide">15/04/2006</time>
								</div>
								<div class="text-secondary font-karla tracking-wide">Luffy declares war on the World Government to save his crewmate, Robin, showcasing his unwavering determination in One Piece.</div>
							</div>
						</div>

					</div>
				</div>
			</section>
		</x-grid.item>

		<x-grid.item title="Centered Timeline Separated">
			<div class="mx-auto w-full max-w-6xl px-4 py-24 md:px-6">
				<ol class="relative space-y-6">
					<!-- Naruto Begins -->
					<li class="group relative flex justify-between md:justify-normal md:odd:flex-row-reverse">
						<div class="flex w-10 flex-col items-center md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
							<div class="bg-primary size-10 mt-2 rounded-full border border-light-secondary shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs"></div>
							<div class="flex h-full">
								<div class="after:absolute after:mt-4 after:h-[calc(100%-3rem)] after:-translate-x-1/2 after:rounded after:p-1 after:shadow-neu-inset-xs after:dark:shadow-neu-dark-inset-xs"></div>
							</div>
						</div>
						<div class="w-[calc(100%-4rem)] p-4 shadow-neu-inset-sm dark:shadow-neu-dark-inset-sm md:w-[calc(50%-2.5rem)]">
							<time class="text-secondary mb-1 font-karla text-sm font-normal leading-none tracking-wider">October 2002</time>
							<h3 class="text-primary font-playfair text-lg font-semibold tracking-wide">Naruto Begins</h3>
							<p class="text-secondary font-karla text-base font-normal tracking-wider">
								The journey of Naruto Uzumaki begins as he starts his training to become a powerful ninja and earn the title of Hokage. Naruto, an orphan with a mysterious past, struggles to gain the recognition and respect of his village, Konoha. Despite his mischievous behavior and lack of talent, he is determined to prove himself. His journey is filled with trials and adventures, as he makes friends and faces formidable enemies. Naruto's dream is not just about personal glory; he wants to protect his village and create bonds with those around him. His story is one of perseverance, friendship, and unwavering determination. As he trains under the guidance of his mentor, Kakashi, and alongside his friends, Sasuke and Sakura, Naruto learns the true meaning of strength and leadership. His journey is a testament to the power of hard work, resilience, and the belief that anyone can achieve greatness, regardless of their background or circumstances. Naruto's story inspires many, teaching that with enough determination, even the most unlikely individuals can achieve their dreams and make a significant impact on the world.
							</p>
						</div>
					</li>

					<!-- Deku Enrolls in U.A. High -->
					<li class="group relative flex justify-between md:justify-normal md:odd:flex-row-reverse">
						<div class="flex w-10 flex-col items-center md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
							<div class="bg-primary size-10 mt-2 rounded-full border border-light-secondary shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs"></div>
							<div class="flex h-full">
								<div class="after:absolute after:mt-4 after:h-[calc(100%-3rem)] after:-translate-x-1/2 after:rounded after:p-1 after:shadow-neu-inset-xs after:dark:shadow-neu-dark-inset-xs"></div>
							</div>
						</div>
						<div class="w-[calc(100%-4rem)] p-4 shadow-neu-inset-sm dark:shadow-neu-dark-inset-sm md:w-[calc(50%-2.5rem)]">
							<time class="text-secondary mb-1 font-karla text-sm font-normal leading-none tracking-wider">April 2016</time>
							<h3 class="text-primary font-playfair text-lg font-semibold tracking-wide">Deku Enrolls in U.A. High</h3>
							<p class="text-secondary font-karla text-base font-normal tracking-wider">
								Izuku Midoriya, also known as Deku, starts his journey to become the world's greatest hero by enrolling in U.A. High School. Born without a quirk in a world where superpowers are the norm, Izuku's dream of becoming a hero seemed impossible. However, his unwavering determination and pure heart catch the attention of the world's greatest hero, All Might. Recognizing Izuku's potential, All Might chooses him as his successor and bestows upon him the powerful quirk, One For All. Enrolling in U.A. High School, the top academy for aspiring heroes, Izuku faces numerous challenges and fierce competition. He must not only master his new abilities but also prove himself to his classmates and teachers. Through intense training, battles, and the support of his friends, Izuku grows stronger and more confident. His journey is marked by his courage, compassion, and a relentless drive to save others, embodying the true spirit of a hero. Izuku's story inspires those who feel powerless, showing that with determination and the right mindset, anyone can achieve their dreams and make a difference.
							</p>
						</div>
					</li>

					<!-- Koro-sensei's Arrival -->
					<li class="group relative flex justify-between md:justify-normal md:odd:flex-row-reverse">
						<div class="flex w-10 flex-col items-center md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
							<div class="bg-primary size-10 mt-2 rounded-full border border-light-secondary shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs"></div>
							<div class="flex h-full">
								<div class="after:absolute after:mt-4 after:h-[calc(100%-3rem)] after:-translate-x-1/2 after:rounded after:p-1 after:shadow-neu-inset-xs after:dark:shadow-neu-dark-inset-xs"></div>
							</div>
						</div>
						<div class="w-[calc(100%-4rem)] p-4 shadow-neu-inset-sm dark:shadow-neu-dark-inset-sm md:w-[calc(50%-2.5rem)]">
							<time class="text-secondary mb-1 font-karla text-sm font-normal leading-none tracking-wider">January 2015</time>
							<h3 class="text-primary font-playfair text-lg font-semibold tracking-wide">Koro-sensei's Arrival</h3>
							<p class="text-secondary font-karla text-base font-normal tracking-wider">
								Koro-sensei, a powerful and mysterious creature, becomes the homeroom teacher of Class 3-E and sets them a challenging task. He threatens to destroy the Earth within a year unless his students can assassinate him. Despite his menacing declaration, Koro-sensei proves to be a kind and effective teacher, dedicated to helping his students succeed in both their academic and assassination goals. His unique teaching methods and superhuman abilities make him a formidable opponent and an inspiring mentor. The students of Class 3-E, once considered the failures of their school, begin to excel under his guidance. They develop skills, confidence, and camaraderie, transforming into capable and determined individuals. Koro-sensei's arrival brings a mix of comedy, action, and heartfelt moments, as the students strive to overcome their own limitations and understand the true nature of their enigmatic teacher. His story explores themes of redemption, growth, and the impact a dedicated mentor can have on their students' lives. Through their journey, the students of Class 3-E learn valuable lessons about resilience, teamwork, and the importance of striving for greatness, no matter the odds.
							</p>
						</div>
					</li>

					<!-- Titan Attack -->
					<li class="group relative flex justify-between md:justify-normal md:odd:flex-row-reverse">
						<div class="flex w-10 flex-col items-center md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
							<div class="bg-primary size-10 mt-2 rounded-full border border-light-secondary shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs"></div>
							<div class="flex h-full">
								<div class="after:absolute after:mt-4 after:h-[calc(100%-3rem)] after:-translate-x-1/2 after:rounded after:p-1 after:shadow-neu-inset-xs after:dark:shadow-neu-dark-inset-xs"></div>
							</div>
						</div>
						<div class="w-[calc(100%-4rem)] p-4 shadow-neu-inset-sm dark:shadow-neu-dark-inset-sm md:w-[calc(50%-2.5rem)]">
							<time class="text-secondary mb-1 font-karla text-sm font-normal leading-none tracking-wider">April 2013</time>
							<h3 class="text-primary font-playfair text-lg font-semibold tracking-wide">Titan Attack</h3>
							<p class="text-secondary font-karla text-base font-normal tracking-wider">
								The Colossal Titan breaches the wall, marking the beginning of humanity's fight for survival against the Titans in Attack on Titan. On that fateful day, humanity's worst nightmare becomes reality as the massive Titan shatters the protective barrier of Wall Maria, allowing hordes of smaller Titans to invade and wreak havoc. Eren Yeager, a young boy who witnesses the destruction and the death of his mother, vows to eradicate every Titan and avenge the loss of his loved ones. This event sparks a desperate and brutal battle for humanity's survival, leading to the formation of the Survey Corps, an elite group of soldiers dedicated to fighting Titans. As Eren and his friends, Mikasa and Armin, join the corps, they uncover dark secrets about the Titans and the history of their world. The series explores themes of freedom, sacrifice, and the relentless human spirit. The Titan attack sets off a chain of events that challenge the characters' beliefs, test their resolve, and reveal the true nature of their enemies. Through intense battles, strategic warfare, and emotional trials, humanity fights to reclaim their world and uncover the truth behind the Titans' existence.
							</p>
						</div>
					</li>

					<!-- Luffy Declares War -->
					<li class="group relative flex justify-between md:justify-normal md:odd:flex-row-reverse">
						<div class="flex w-10 flex-col items-center md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
							<div class="bg-primary size-10 mt-2 rounded-full border border-light-secondary shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs"></div>
							<div class="flex h-full">
								<div class="after:absolute after:mt-4 after:h-[calc(100%-3rem)] after:-translate-x-1/2 after:rounded after:p-1 after:shadow-neu-inset-xs after:dark:shadow-neu-dark-inset-xs"></div>
							</div>
						</div>
						<div class="w-[calc(100%-4rem)] p-4 shadow-neu-inset-sm dark:shadow-neu-dark-inset-sm md:w-[calc(50%-2.5rem)]">
							<time class="text-secondary mb-1 font-karla text-sm font-normal leading-none tracking-wider">April 2006</time>
							<h3 class="text-primary font-playfair text-lg font-semibold tracking-wide">Luffy Declares War</h3>
							<p class="text-secondary font-karla text-base font-normal tracking-wider">
								In a bold move, Monkey D. Luffy declares war on the World Government to save his crewmate, Nico Robin. During the Enies Lobby arc, Robin is captured by the government for her knowledge of the ancient and forbidden Poneglyphs. Determined to rescue her and prove that no one can take away his friends, Luffy and his crew launch a daring assault on the government stronghold, Enies Lobby. This act of defiance marks a turning point in their journey, showcasing Luffy's unwavering commitment to his crew and his belief in freedom. Luffy's declaration of war is not just a fight for Robin's freedom but a stand against oppression and the abuse of power. The battle at Enies Lobby is intense, filled with epic fights, strategic maneuvers, and emotional moments. Luffy's crew, the Straw Hat Pirates, face formidable opponents and overcome tremendous odds, displaying their growth and unity. This event solidifies their reputation as a force to be reckoned with and sets the stage for their future adventures. Luffy's declaration is a testament to his indomitable spirit and the unbreakable bonds of friendship that drive the Straw Hats forward on their quest to find the One Piece and become the
								Pirate King.
							</p>
						</div>
					</li>
				</ol>
			</div>
		</x-grid.item>

		<x-grid.item title="Centered Timeline With Icons">
			<div class="mx-auto w-full max-w-6xl px-4 py-24 md:px-6">
				<ol class="relative space-y-6">
					<!-- Naruto Begins -->
					<li class="group relative flex justify-between md:justify-normal md:odd:flex-row-reverse">
						<div class="flex w-10 flex-col items-center md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
							<div class="bg-primary flex-center text-secondary mt-2 rounded-full border border-light-secondary p-2 shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs">
								<x-svg.naruto class="size-7" />
							</div>
							<div class="flex h-full">
								<div class="after:absolute after:mt-4 after:h-[calc(100%-3.2rem)] after:-translate-x-1/2 after:rounded after:p-1 after:shadow-neu-inset-xs after:dark:shadow-neu-dark-inset-xs"></div>
							</div>
						</div>
						<div class="w-[calc(100%-4rem)] p-4 shadow-neu-inset-sm dark:shadow-neu-dark-inset-sm md:w-[calc(50%-2.5rem)]">
							<time class="text-secondary mb-1 font-karla text-sm font-normal leading-none tracking-wider">October 2002</time>
							<h3 class="text-primary font-playfair text-lg font-semibold tracking-wide">Naruto Begins</h3>
							<p class="text-secondary font-karla text-base font-normal tracking-wider">
								The journey of Naruto Uzumaki begins as he starts his training to become a powerful ninja and earn the title of Hokage. Naruto, an orphan with a mysterious past, struggles to gain the recognition and respect of his village, Konoha. Despite his mischievous behavior and lack of talent, he is determined to prove himself. His journey is filled with trials and adventures, as he makes friends and faces formidable enemies. Naruto's dream is not just about personal glory.
							</p>
						</div>
					</li>

					<!-- Deku Enrolls in U.A. High -->
					<li class="group relative flex justify-between md:justify-normal md:odd:flex-row-reverse">
						<div class="flex w-10 flex-col items-center md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
							<div class="bg-primary flex-center text-secondary mt-2 rounded-full border border-light-secondary p-2 shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs">
								<x-svg.deku class="size-7" />
							</div>
							<div class="flex h-full">
								<div class="after:absolute after:mt-4 after:h-[calc(100%-3.2rem)] after:-translate-x-1/2 after:rounded after:p-1 after:shadow-neu-inset-xs after:dark:shadow-neu-dark-inset-xs"></div>
							</div>
						</div>
						<div class="w-[calc(100%-4rem)] p-4 shadow-neu-inset-sm dark:shadow-neu-dark-inset-sm md:w-[calc(50%-2.5rem)]">
							<time class="text-secondary mb-1 font-karla text-sm font-normal leading-none tracking-wider">April 2016</time>
							<h3 class="text-primary font-playfair text-lg font-semibold tracking-wide">Deku Enrolls in U.A. High</h3>
							<p class="text-secondary font-karla text-base font-normal tracking-wider">
								Izuku Midoriya, also known as Deku, starts his journey to become the world's greatest hero by enrolling in U.A. High School. Born without a quirk in a world where superpowers are the norm, Izuku's dream of becoming a hero seemed impossible. However, his unwavering determination and pure heart catch the attention of the world's greatest hero, All Might. Recognizing Izuku's potential, All Might chooses him as his successor and bestows upon him the powerful quirk, One For All. Enrolling in U.A.
							</p>
						</div>
					</li>

					<!-- Koro-sensei's Arrival -->
					<li class="group relative flex justify-between md:justify-normal md:odd:flex-row-reverse">
						<div class="flex w-10 flex-col items-center md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
							<div class="bg-primary flex-center text-secondary mt-2 rounded-full border border-light-secondary p-2 shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs">
								<x-svg.venom class="size-7" />
							</div>
							<div class="flex h-full">
								<div class="after:absolute after:mt-4 after:h-[calc(100%-3.2rem)] after:-translate-x-1/2 after:rounded after:p-1 after:shadow-neu-inset-xs after:dark:shadow-neu-dark-inset-xs"></div>
							</div>
						</div>
						<div class="w-[calc(100%-4rem)] p-4 shadow-neu-inset-sm dark:shadow-neu-dark-inset-sm md:w-[calc(50%-2.5rem)]">
							<time class="text-secondary mb-1 font-karla text-sm font-normal leading-none tracking-wider">January 2015</time>
							<h3 class="text-primary font-playfair text-lg font-semibold tracking-wide">Koro-sensei's Arrival</h3>
							<p class="text-secondary font-karla text-base font-normal tracking-wider">
								Koro-sensei, a powerful and mysterious creature, becomes the homeroom teacher of Class 3-E and sets them a challenging task. He threatens to destroy the Earth within a year unless his students can assassinate him. Despite his menacing declaration, Koro-sensei proves to be a kind and effective teacher, dedicated to helping his students succeed in both their academic and assassination goals. His unique teaching methods and superhuman abilities make him a formidable opponent and an inspiring mentor.
						</div>
					</li>

					<!-- Titan Attack -->
					<li class="group relative flex justify-between md:justify-normal md:odd:flex-row-reverse">
						<div class="flex w-10 flex-col items-center md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
							<div class="bg-primary flex-center text-secondary mt-2 rounded-full border border-light-secondary p-2 shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs">
								<x-svg.brook class="size-7" />
							</div>
							<div class="flex h-full">
								<div class="after:absolute after:mt-4 after:h-[calc(100%-3.2rem)] after:-translate-x-1/2 after:rounded after:p-1 after:shadow-neu-inset-xs after:dark:shadow-neu-dark-inset-xs"></div>
							</div>
						</div>
						<div class="w-[calc(100%-4rem)] p-4 shadow-neu-inset-sm dark:shadow-neu-dark-inset-sm md:w-[calc(50%-2.5rem)]">
							<time class="text-secondary mb-1 font-karla text-sm font-normal leading-none tracking-wider">April 2013</time>
							<h3 class="text-primary font-playfair text-lg font-semibold tracking-wide">Titan Attack</h3>
							<p class="text-secondary font-karla text-base font-normal tracking-wider">
								The Colossal Titan breaches the wall, marking the beginning of humanity's fight for survival against the Titans in Attack on Titan. On that fateful day, humanity's worst nightmare becomes reality as the massive Titan shatters the protective barrier of Wall Maria, allowing hordes of smaller Titans to invade and wreak havoc. Eren Yeager, a young boy who witnesses the destruction and the death of his mother, vows to eradicate every Titan and avenge the loss of his loved ones.
							</p>
						</div>
					</li>

					<!-- Luffy Declares War -->
					<li class="group relative flex justify-between md:justify-normal md:odd:flex-row-reverse">
						<div class="flex w-10 flex-col items-center md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
							<div class="bg-primary flex-center text-secondary mt-2 rounded-full border border-light-secondary p-2 shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs">
								<x-svg.one-piece-anime class="size-7" />
							</div>
							<div class="flex h-full">
								<div class="after:absolute after:mt-4 after:h-[calc(100%-3.2rem)] after:-translate-x-1/2 after:rounded after:p-1 after:shadow-neu-inset-xs group-last:after:h-[calc(100%-4.3rem)] after:dark:shadow-neu-dark-inset-xs"></div>
							</div>
						</div>
						<div class="w-[calc(100%-4rem)] p-4 shadow-neu-inset-sm dark:shadow-neu-dark-inset-sm md:w-[calc(50%-2.5rem)]">
							<time class="text-secondary mb-1 font-karla text-sm font-normal leading-none tracking-wider">April 2006</time>
							<h3 class="text-primary font-playfair text-lg font-semibold tracking-wide">Luffy Declares War</h3>
							<p class="text-secondary font-karla text-base font-normal tracking-wider">
								In a bold move, Monkey D. Luffy declares war on the World Government to save his crewmate, Nico Robin. During the Enies Lobby arc, Robin is captured by the government for her knowledge of the ancient and forbidden Poneglyphs. Determined to rescue her and prove that no one can take away his friends, Luffy and his crew launch a daring assault on the government stronghold, Enies Lobby.
							</p>
						</div>
					</li>
				</ol>
			</div>
		</x-grid.item>

		<x-grid.item title="Horizontal Timeline">
			<ol class="items-center sm:flex">
				<li class="relative mb-6 sm:mb-0">
					<div class="flex items-center">
						<div class="bg-primary size-8 text-secondary z-10 flex shrink-0 items-center justify-center rounded-full p-1 shadow-neu-inset-xs ring-0 ring-light-primary dark:shadow-neu-dark-inset-xs dark:ring-dark-primary sm:ring-8">
							<x-svg.naruto class="size-7" />
						</div>
						<div class="bg-primary hidden w-full p-0.5 shadow-neu-inset-xs dark:shadow-neu-dark-inset-xs sm:flex"></div>
					</div>
					<div class="mt-3 sm:h-44 sm:pe-8">
						<h3 class="text-primary font-alegreya text-lg font-semibold tracking-wide">Naruto Begins</h3>
						<time class="text-tertiary mb-2 block font-karla text-sm font-normal leading-none tracking-wide">October 2002</time>
						<p class="text-secondary font-karla text-base font-normal tracking-wide">Naruto Uzumaki starts his journey to become Hokage.</p>
					</div>
				</li>
				<li class="relative mb-6 sm:mb-0">
					<div class="flex items-center">
						<div class="bg-primary size-8 text-secondary z-10 flex shrink-0 items-center justify-center rounded-full p-1 shadow-neu-inset-xs ring-0 ring-light-primary dark:shadow-neu-dark-inset-xs dark:ring-dark-primary sm:ring-8">
							<x-svg.naruto class="size-7" />
						</div>
						<div class="bg-primary hidden w-full p-0.5 shadow-neu-inset-xs dark:shadow-neu-dark-inset-xs sm:flex"></div>
					</div>
					<div class="mt-3 sm:h-44 sm:pe-8">
						<h3 class="text-primary font-alegreya text-lg font-semibold tracking-wide">Sasuke's Vengeance</h3>
						<time class="text-tertiary mb-2 block font-karla text-sm font-normal leading-none tracking-wide">November 2002</time>
						<p class="text-secondary font-karla text-base font-normal tracking-wide">Sasuke Uchiha seeks revenge against his brother.</p>
					</div>
				</li>
				<li class="relative mb-6 sm:mb-0">
					<div class="flex items-center">
						<div class="bg-primary size-8 text-secondary z-10 flex shrink-0 items-center justify-center rounded-full p-1 shadow-neu-inset-xs ring-0 ring-light-primary dark:shadow-neu-dark-inset-xs dark:ring-dark-primary sm:ring-8">
							<x-svg.naruto class="size-7" />
						</div>
						<div class="bg-primary hidden w-full p-0.5 shadow-neu-inset-xs dark:shadow-neu-dark-inset-xs sm:flex"></div>
					</div>
					<div class="mt-3 sm:h-44 sm:pe-8">
						<h3 class="text-primary font-alegreya text-lg font-semibold tracking-wide">Sakura's Growth</h3>
						<time class="text-tertiary mb-2 block font-karla text-sm font-normal leading-none tracking-wide">December 2002</time>
						<p class="text-secondary font-karla text-base font-normal tracking-wide">Sakura Haruno trains to become a skilled medical ninja.</p>
					</div>
				</li>
				<li class="relative mb-6 sm:mb-0">
					<div class="flex items-center">
						<div class="bg-primary size-8 text-secondary z-10 flex shrink-0 items-center justify-center rounded-full p-1 shadow-neu-inset-xs ring-0 ring-light-primary dark:shadow-neu-dark-inset-xs dark:ring-dark-primary sm:ring-8">
							<x-svg.gojo class="size-7" />
						</div>
						<div class="bg-primary hidden w-full p-0.5 shadow-neu-inset-xs dark:shadow-neu-dark-inset-xs sm:flex"></div>
					</div>
					<div class="mt-3 sm:h-44 sm:pe-8">
						<h3 class="text-primary font-alegreya text-lg font-semibold tracking-wide">Kakashi's Leadership</h3>
						<time class="text-tertiary mb-2 block font-karla text-sm font-normal leading-none tracking-wide">January 2003</time>
						<p class="text-secondary font-karla text-base font-normal tracking-wide">Kakashi Hatake becomes the mentor of Team 7.</p>
					</div>
				</li>
			</ol>
		</x-grid.item>
	</x-grid>

	<x-slot name="rightSidenav">
		<x-sidenav-list>Basic Timeline</x-sidenav-list>
		<x-sidenav-list>Centered Timeline</x-sidenav-list>
		<x-sidenav-list>Centered Timeline Separated</x-sidenav-list>
		<x-sidenav-list>Centered Timeline With Icons</x-sidenav-list>
		<x-sidenav-list>Horizontal Timeline</x-sidenav-list>
	</x-slot>

</x-app-layout>
