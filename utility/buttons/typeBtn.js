function typeBtn(q, t) {
    t++;
    let html = `
        <div class="type-wrapper">
            <label for="type">Type:</label>
            <input type="text" id="type${q}-${t}" class="type" name="type"><br><br>
        </div>
    `;
    
    let btn = document.getElementById(`typeBtn${q}`);
    let parentDiv = btn.parentNode;
    parentDiv.insertBefore(html, btn);
}
