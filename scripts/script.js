let inputs = document.getElementsByClassName('input-form');
	for (let input of inputs) {
		input.addEventListener("blur", function() {
			if(input.value.trim() != ""){
				input.classList.add("has-val");
			} else {
				input.classList.remove("has-val");
			}
		})
	}

function update() {
	var select = document.getElementById('language');
	var option = select.options[select.selectedIndex];

	document.getElementById('value').value = option.value;
}
