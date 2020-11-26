function typeBtn(q, t) {
    t++;
    let types = document.getElementById(`query-wrapper${q}`).getElementsByClassName('types-wrapper')[0].innerHTML;
    return types += `
        <div class="type-wrapper">
            <label for="type${q}-${t}">Type:</label>
            <input type="text" id="type${q}-${t}" class="type" name="type${q}-${t}"><br><br>
        </div>
    `;
}
