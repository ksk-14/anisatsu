
window.onload = function(){
    const selectElement = document.getElementById('pd-episode');
    const ul_th = document.getElementById('think-thread');

    selectElement.addEventListener('change', (event) => {
        const li_th = document.getElementsByClassName('thread-li');
        if (li_th.length > 0) {
        Array.from(li_th).forEach((li) => {
            ul_th.removeChild(li);
        });
        }
        
        const selectedOption = event.target.value.split('_');
        console.log(`Selected option: ${selectedOption}`);
        const workId = selectedOption[0];
        const episodeId = selectedOption[1];

        let url;
        if(!event.target.value){
            url = `/api/rooms/${workId}`;
        }else{
            url = `/api/rooms/${workId}/${episodeId}`;
        }
        fetch(url)
        .then(response => response.json())
        .then(data => {
            console.log(data)
            data.forEach(work => {
                const li = document.createElement('li');
                li.classList.add('thread-li');
                li.id = 'think-thread-li';
                li.appendChild(document.createTextNode(work.room_title));
                const p = document.createElement('p');
                p.classList.add('thread-p');
                const date = new Date(work.created_at);
                const formattedDate = `${date.getFullYear()}/${date.getMonth() + 1}/${date.getDate()} ${date.getHours()}:${date.getMinutes()}`;
                p.appendChild(document.createTextNode(formattedDate));
                li.appendChild(p);
                ul_th.appendChild(li);
            });
        })
        .catch(error => console.error(error));
    });
}
