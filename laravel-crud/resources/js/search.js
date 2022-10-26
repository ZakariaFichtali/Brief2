let search_inp = document.querySelector('#search');

search_inp.addEventListener('keyup', () => {
    fetch('search/' + search_inp.value, {
        method: 'GET'
    }).then((res)=> {
        return res.text();
    }).then((data) => {
        document.getElementById('data').innerHTML = data;
    })
})
