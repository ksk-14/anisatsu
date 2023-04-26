fetch('/api/getIndex')
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