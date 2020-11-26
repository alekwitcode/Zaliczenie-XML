function typeBtn(q, t) {
    t++;
    let wrapper = document.getElementById(`query-wrapper${q}`).getElementsByClassName('types-wrapper')[0].innerHTML;
    wrapper += `
        <div class="type-wrapper">
            <label for="type">Type:</label>
            <input type="text" id="type${q}-${t}" class="type" name="type"><br><br>
        </div>
    `;
    console.log(wrapper);
}
