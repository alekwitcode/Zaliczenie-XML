function queryBtn(q=0, t=0) {
    q++;
    
    let wrapper = document.getElementById(`query${q}`).getElementsByClassName(`types-wraper`)[0].innerHTML;
    
    wrapper += `
        <div class="query-wrapper" id="query-wrapper${q}">
            <label for="query">Query: </label>
            <input type="text" id="query${q}" class="query" name="query"><br><br>
        
            <div class="types-wrapper">
                <div class="type-wrapper">
                    <label for="type">Type:</label>
                    <input type="text" id="type${q}-0" class="type" name="type"><br><br>
                </div>
            </div>

                <button href="#" id="typeBtn${p}">Add Type</button>
        </div>
    `;
    console.log(wrapper);
}
