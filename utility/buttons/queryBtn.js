function queryBtn(q=0, t=0) {
    
    q++;
    let html = `
        <div class="query-wrapper" id="query-wrapper${q}">
            <label for="query">Query: </label>
            <input type="text" id="query${q}" class="query" name="query"><br><br>
        
                <div class="type-wrapper">
                    <label for="type">Type:</label>
                    <input type="text" id="type${q}-0" class="type" name="type"><br><br>
                </div>

                <button id="typeBtn${p}" onclick="typeBtn(${p},0)">Add Type</button>
        </div>
    `;

    let btn = document.getElementById(`queryBtn`);
    btn.addEventListener("click", () => {
        let parentDiv = btn.parentNode;
    parentDiv.insertBefore(html, btn);
    });
}