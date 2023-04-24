
window.onload = function(){
    const selectElement = document.getElementById('pd-episode');
    
    console.log(selectElement)
    selectElement.addEventListener('change', (event) => {
        if (event.target.value) {
            const selectedOption = event.target.value.split('_');
            console.log(`Selected option: ${selectedOption}`);
            const workId = selectedOption[0];
            const episodeId = selectedOption[1];

            fetch(`/api/rooms/${workId}/${episodeId}`)
            .then(response => response.json())
            .then(data => {
                data.works.forEach(work => {
                const worksList = document.getElementById('works-list');
                const li = document.createElement('li');
                li.classList.add('work');

                const a = document.createElement('a');
                a.href = `/works/${work.id}`;
                a.classList.add('work-link');
                a.setAttribute('data-work-id', work.id);
                a.setAttribute('href', `/api/works/${work.id}`);
                // a.setAttribute('onclick', 'showWork(event)');

                const imageContainer = document.createElement('div');
                imageContainer.classList.add('work-image');

                const image = document.createElement('img');
                image.src = work.images.facebook.og_image_url;
                image.alt = work.title;

                const titleContainer = document.createElement('div');
                titleContainer.classList.add('work-title');
                titleContainer.textContent = work.title;

                imageContainer.appendChild(image);
                a.appendChild(imageContainer);
                a.appendChild(titleContainer);
                li.appendChild(a);

                worksList.appendChild(li);
                });
            })
            .catch(error => console.error(error));
        }
    });
}
