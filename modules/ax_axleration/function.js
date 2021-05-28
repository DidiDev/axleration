function init() {
	// Create a request variable and assign a new XMLHttpRequest object to it.
	var request = new XMLHttpRequest()

	// Open a new connection, using the GET request on the URL endpoint
	request.open('GET', 'https://rickandmortyapi.com/api/character', true)
	
	request.onload = function () {
		// Begin accessing JSON data here
		var data = JSON.parse(this.response)
		setCharacters(data);
	}

	// Send request
	request.send()
}

function setCharacters(data){
	var block = document.getElementById('block-content');
	var section = document.createElement("SECTION");
	section.setAttribute("id", "rick-morty");
	section.setAttribute("class", "rick-container");

	for (let i = 0; i < 5; i++) {
		var character = document.createElement('div'); // For characters
		character.setAttribute("class", "character"); 

		var imageCharacter = document.createElement('div'); // For images
		imageCharacter.setAttribute("class", "image");
		createImg(imageCharacter, data.results[i].image);
		character.appendChild(imageCharacter);
		
		var info = document.createElement('div'); // For characters information
		info.setAttribute("class", "info");

		createDiv(info, data.results[i].name, "name");
		createDiv(info, data.results[i].status, "status");
		createDiv(info, data.results[i].species, "species");
		createDiv(info, data.results[i].gender, "gender");
		character.appendChild(info);
		
		var movies = document.createElement('div'); // For character episodes
		movies.setAttribute("class", "movies");
		var listEpisodes = document.createElement('ul');
		var episodes = data.results[i].episode;
		for (var j = 0; j < episodes.length; j++) {
			var episode = document.createElement('li');
			episode.textContent = episodes[j];
			listEpisodes.appendChild(episode);
		}
		movies.appendChild(listEpisodes);
		character.appendChild(movies);
		section.appendChild(character);
	}
	block.appendChild(section);
}

function createDiv(parent, text) {
	var div = document.createElement('div');
	div.textContent = text;
	parent.appendChild(div);
}

function createImg(parent, link, id) {
	var img = new Image();
	img.src = link;
	img.class = id;
	parent.appendChild(img);
}