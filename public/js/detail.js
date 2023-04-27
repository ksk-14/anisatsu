
window.onload = function(){
    const selectElement = document.getElementById('pd-episode');
    const ul_th = document.getElementById('think-thread');

    selectElement.addEventListener('change', (event) => {
        const a_th = document.getElementsByClassName('room-link');
        if (a_th.length > 0) {
        Array.from(a_th).forEach((a) => {
            ul_th.removeChild(a);
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
            data.forEach(room => {
                const li = document.createElement('li');
                const a = document.createElement('a');
                const p = document.createElement('p');

                a.setAttribute('href', `/api/room/${room.id}`);
                a.classList.add('room-link');

                li.classList.add('thread-li');
                li.id = 'think-thread-li';
                li.appendChild(document.createTextNode(room.room_title));
                
                p.classList.add('thread-p');
                const date = new Date(room.created_at);
                const formattedDate = `${date.getFullYear()}/${date.getMonth() + 1}/${date.getDate()} ${date.getHours()}:${date.getMinutes()}`;
                p.appendChild(document.createTextNode(formattedDate));

                li.appendChild(p);
                a.appendChild(li);
                ul_th.appendChild(a);
            });
        })
        .catch(error => console.error(error));
    });
}
