
window.onload = function(){
    const selectElement = document.getElementById('pd-episode');
    
    console.log(selectElement)
    selectElement.addEventListener('change', (event) => {
        if (event.target.value) {
            const selectedOption = event.target.value;
            console.log(`Selected option: ${selectedOption}`);
        }
    });
}
