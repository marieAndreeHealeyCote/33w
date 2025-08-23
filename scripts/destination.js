/* scripts.destination.js */
(function () {
    const domaine = document.querySelector('base').href;
    const list_categories = document.querySelectorAll(".list_categories li");
    console.log("F.length", list_categories.length);
    list_categories.forEach((categorie) => {
        categorie.addEventListener("click", (e) => {
            console.log(categorie.dataset.id);
            const categoryId = categorie.dataset.id;
            const categoryIdAExclure = categorie.dataset.catIdExclure;
            mon_fetch(categoryId, categoryIdAExclure);
        });
    });

    document.querySelector(".list_categories li").click();

    function mon_fetch(categoryId, categoryIdAExclure) {
        const apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}&categories_exclude=${categoryIdAExclure}`;
        console.log("apiUrl = ", apiUrl);
        fetch(apiUrl)
            .then((response) => response.json())
            .then((data) => {
                const destinationList = document.querySelector(".destination__list");
                destinationList.innerHTML = "";
                data.forEach((article) => {
                    const articleElement = document.createElement("div");
                    articleElement.innerHTML = `
          <input type="checkbox" class="accordeon__chk"  id="accordeon__chk__${article.id}">        
          <label class="accordeon" for="accordeon__chk__${article.id}">
                    <h3>${article.title.rendered}</h3>
          </label>  
          <div class="accordeon__excerpt">${article.excerpt.rendered}
          <a href="${article.link}">Lire plus</a>
          </div>
          
          `;
                    destinationList.appendChild(articleElement);
                });
            })
            .catch((error) =>
                console.error("Erreur lors de la récupération des articles:", error)
            );
    }
})();