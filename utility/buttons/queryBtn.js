function queryBtn(q=0, t=0) {
    q++;
    let queries = document.getElementById("queries-wraper").innerHTML;
    return queries += `
        <div class="query-wrapper" id="query-wrapper${q}">
            <label for="query${q}">Query</label>
            <input type="text" id="query${q}" class="query" name="query${q}"><br><br>
        
            <div class="types-wrapper">
                <div class="type-wrapper">
                    <label for="type${q}-${t}">Type:</label>
                    <input type="text" id="type${q}-${t}" class="type" name="type${q}-${t}><br><br>
                </div>
            </div>
            
            <button href="#" id="typeBtn${p}" onclick="typeBtn(${p},${t})">Add Type</button>
        </div>
    `;
}
