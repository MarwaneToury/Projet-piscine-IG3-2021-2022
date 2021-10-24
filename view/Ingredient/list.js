const searchInput = document.getElementById('searchInput');

searchInput.addEventListener('keyup', function() {
    const input = searchInput.value;

    const result = TabI.filter(item => item.includes(input))
    
    console.log(result);

    let suggest = '';

    if (input !='') {
    result.forEach(resultItem => 
        suggest +=`
            <div class="suggestion">${resultItem}</div>
        `
    ) }

    document.getElementById('suggestions').innerHTML = suggest;
})