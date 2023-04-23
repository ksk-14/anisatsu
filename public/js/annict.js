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
            a.setAttribute('onclick', 'showWork(event)');

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

function showWork(event) {
    event.preventDefault();
    // const id = event.target.dataset.workId;
    const id = event.target.closest('a').dataset.workId;
    fetch(`/api/works/${id}`)
    .then(response => response.json())
    .then(data => {
        data.works.forEach(work =>{
            const title = work.title;
            const url = work.official_site_url;
            const season = work.season_name_text;
            console.log(work)
    
          // 作品詳細を表示するためのHTMLを組み立てる
            const detailHtml = `
            <h2>${title}</h2>
            <a href='${url}'>公式サイト</a>
            <p>${season}</p>
            `;
    
          // 作品詳細を表示するための要素を作成し、HTMLを挿入する
            const detailElement = document.createElement('div');
            detailElement.innerHTML = detailHtml;
    
          // 作品リストの要素を非表示にする
            const worksElement = document.getElementById('works-list');
            console.log(worksElement)
            worksElement.style.display = 'none';
    
          // 作品詳細の要素を表示する
            const detailContainer = document.getElementById('work-detail');
            detailContainer.style.display = 'block';
            detailContainer.appendChild(detailElement);
        })
    })
    .catch(error => console.error(error));
}