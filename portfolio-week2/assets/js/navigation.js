var checkboxes = document.querySelectorAll('input[type="checkbox"]');
var next = document.querySelector('.next svg');

for (var i = 0; i < checkboxes.length; i++) {
	checkboxes[i].addEventListener("change", function(){

		//zero state
		if(checkboxes[0].checked == false && checkboxes[1].checked == false && checkboxes[2].checked == false) {
			document.body.className = "";

			next.classList = "";
			next.style.display = "none";
			next.parentElement.classList.add("noscrol");

			document.querySelector('#onderzoeken').style.display = "none";
			document.querySelector('#conceptueel').style.display = "none";
			document.querySelector('#tech').style.display = "none";
		}

		//state A
		if(checkboxes[0].checked == true && checkboxes[1].checked == false && checkboxes[2].checked == false) {
			document.body.className = "";
			document.body.classList.add('stateA');

			next.style.display = "block"
			next.classList = "";
			next.classList.add('stateA');
			next.parentElement.classList.remove("noscrol");

			next.parentElement.href = "#onderzoeken"
			document.querySelector('#onderzoeken').style.display = "block";
			document.querySelector('#conceptueel').style.display = "none";
			document.querySelector('#tech').style.display = "none";

			document.querySelector('#onderzoeken').classList = "";
			document.querySelector('#onderzoeken').classList.add('stateA', 'animsition');
		}

		//state B
		if(checkboxes[0].checked == false && checkboxes[1].checked == true && checkboxes[2].checked == false) {
			document.body.className = "";
			document.body.classList.add('stateB');

			next.style.display = "block"
			next.classList = "";
			next.classList.add('stateB');
			next.parentElement.classList.remove("noscrol");

			next.parentElement.href = "#conceptueel"
			document.querySelector('#onderzoeken').style.display = "none";
			document.querySelector('#conceptueel').style.display = "block";
			document.querySelector('#tech').style.display = "none";

			document.querySelector('#conceptueel').classList = "";
			document.querySelector('#conceptueel').classList.add('stateB', 'animsition');

		}

		//state C
		if(checkboxes[0].checked == false && checkboxes[1].checked == false && checkboxes[2].checked == true) {
			document.body.className = "";
			document.body.classList.add('stateC');

			next.style.display = "block"
			next.classList = "";
			next.classList.add('stateC');
			next.parentElement.classList.remove("noscrol");

			next.parentElement.href = "#tech"
			document.querySelector('#onderzoeken').style.display = "none";
			document.querySelector('#conceptueel').style.display = "none";
			document.querySelector('#tech').style.display = "block";

			document.querySelector('#tech').classList = "";
			document.querySelector('#tech').classList.add('stateC', 'animsition');

		}

		//state AB
		if(checkboxes[0].checked == true && checkboxes[1].checked == true && checkboxes[2].checked == false) {
			document.body.className = "";
			document.body.classList.add('stateAB');

			next.style.display = "block"
			next.classList = "";
			next.classList.add('stateAB');
			next.parentElement.classList.remove("noscrol");

			next.parentElement.href = "#onderzoeken"
			document.querySelector('#onderzoeken').style.display = "block";
			document.querySelector('#conceptueel').style.display = "block";
			document.querySelector('#tech').style.display = "none";

			document.querySelector('#conceptueel').classList = "";
			document.querySelector('#onderzoeken').classList = "";
			document.querySelector('#onderzoeken').classList.add('stateAB', 'animsition');
			document.querySelector('#conceptueel').classList.add('stateAB', 'animsition');
		}

		//state AC
		if(checkboxes[0].checked == true && checkboxes[1].checked == false && checkboxes[2].checked == true) {
			document.body.className = "";
			document.body.classList.add('stateAC');

			next.style.display = "block"
			next.classList = "";
			next.classList.add('stateAC');
			next.parentElement.classList.remove("noscrol");

			next.parentElement.href = "#onderzoeken"
			document.querySelector('#onderzoeken').style.display = "block";
			document.querySelector('#conceptueel').style.display = "none";
			document.querySelector('#tech').style.display = "block";

			document.querySelector('#onderzoeken').classList = "";
			document.querySelector('#tech').classList = "";
			document.querySelector('#onderzoeken').classList.add('stateAC', 'animsition');
			document.querySelector('#tech').classList.add('stateAC', 'animsition');

		}

		//state BC
		if (checkboxes[0].checked == false && checkboxes[1].checked == true && checkboxes[2].checked == true) {
			document.body.className = "";
			document.body.classList.add('stateBC');

			next.style.display = "block"
			next.classList = "";
			next.classList.add('stateBC');
			next.parentElement.classList.remove("noscrol");

			next.parentElement.href = "#conceptueel"
			document.querySelector('#onderzoeken').style.display = "none";
			document.querySelector('#conceptueel').style.display = "block";
			document.querySelector('#tech').style.display = "block";

			document.querySelector('#conceptueel').classList = "";
			document.querySelector('#tech').classList = "";
			document.querySelector('#conceptueel').classList.add('stateBC', 'animsition');
			document.querySelector('#tech').classList.add('stateBC', 'animsition');


		}

		//state ABC
		if (checkboxes[0].checked == true && checkboxes[1].checked == true && checkboxes[2].checked == true) {
			document.body.className = "";
			document.body.classList.add('stateABC');

			next.style.display = "block"
			next.classList = "";
			next.classList.add('stateABC');
			next.parentElement.classList.remove("noscrol");

			next.parentElement.href = "#onderzoeken"
			document.querySelector('#onderzoeken').style.display = "block";
			document.querySelector('#conceptueel').style.display = "block";
			document.querySelector('#tech').style.display = "block";

			document.querySelector('#onderzoeken').classList = "";
			document.querySelector('#conceptueel').classList = "";
			document.querySelector('#tech').classList = "";
			document.querySelector('#onderzoeken').classList.add('stateABC', 'animsition');
			document.querySelector('#conceptueel').classList.add('stateABC', 'animsition');
			document.querySelector('#tech').classList.add('stateABC', 'animsition');

		}

		//smooth scroll
		document.querySelectorAll('a[href^="#"]').forEach(anchor => {
				anchor.addEventListener('click', function (e) {
						e.preventDefault();

						document.querySelector(this.getAttribute('href')).scrollIntoView({
								behavior: 'smooth'
						});
				});
		});

	})
}
