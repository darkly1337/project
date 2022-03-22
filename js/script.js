var allArticales = [
    { title: 'Abu Simbel, Egipt',img: 'img/abo-simbel.jpg' , text: 'Mutate din locatia originala, cele doua temple de la Abu Simbel reprezinta un punct de atractie unde trebuie obligatoriu ajuns. Ele au fost sculptate in stanca,langa fluviul Nil, cu mai bine de trei milenii in urma,in timpul domniei faraonului Ramses al II-lea. Templele au fost construite in onoarea faraonului si a zeitatilor egiptene.'},
    { title: 'Muntele Kilimanjaro, Tanzania' ,img:'img/kilimanjaro.jpg', text: 'O ascensiune pe Muntele Masa nu e o plimbare de dupa-amiaza; Muntele Kilimanjaro (Kili cum mai este numit) e cel mai inalt munte din Africa, iar inaltimea sa de 5895 metri face din ascensiunea lui o sarcina dificila si uneori imposibila. Cel mai inalt varf, Uhuru, poate fi urcat de cei cu o conditie fizica buna spre foarte buna.'},
    { title: 'Marile Piramide de la Gizeh, Egipt' ,img:'img/piramide.jpg', text: 'Egiptenii au o istorie culturala bogata si decadenta, iar Piramidele sunt un jalon important al acesteia. Arhitectura triunghiulara a Piramidelor a devenit un simbol sinonim cu Egiptul, iar majoritatea (sunt peste 100) au fost construite drept morminte pentru a conserva mumiile faraonilor si a membrilor familiilor acestora.'}
];
appendArticals(allArticales);

function searchFunction() {
    var searchTitle = document.getElementById("searchText").value.toLowerCase();
    
    var filteredArticals = allArticales.filter(article => article.title.toLowerCase().includes(searchTitle));
    
    appendArticals(filteredArticals);
}

function appendArticals(articales) {
    var container = document.getElementById('myArticales');
    container.innerHTML = '';
    
    for (article of articales) {
        container.insertAdjacentHTML('beforeend', `
            <div class = "center"><h1>${article.title}</h1></div>
            <div class= "center"><img src = ${article.img} width = "800px" height = "500px" ></div>
            <div class = "center"><p>${article.text}?</p></div>
            <br/>
        `);
    }
}