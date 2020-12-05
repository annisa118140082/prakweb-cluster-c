 function ganti(id = i) {
     var edit = document.createElement("a");
     edit.setAttribute("onclick", "edit(" + id + ")");
     edit.append("Edit");
     return edit;
}

function apus(id = i) {
    var edit = document.createElement("a");
    edit.setAttribute("onclick", "hapus(" + id + ")");
    edit.append("Hapus");
    return edit;
}

function mTambah(li, nama, id) {
    li.append(nama + " | ");
    li.append(ganti(id));
    li.append(" | ");
    li.append(apus(id));
}

function add() {
    var nama = document.getElementById("new").value;
    var ul = document.getElementById("ul");
    var newel = document.createElement("li");
    newel.setAttribute("id", i);
    mTambah(newel, nama);
    ul.append(newel);
    i++;
}

function hapus(id) {
    document.getElementById(id).remove();
}

function edit(id) {
    var nama = prompt("Masukkan nama baru: ", document.getElementById(id).innerText.split(" | ")[0]);
    if (nama != null) {
        var li = document.getElementById(id);
        li.innerHTML = "";
        mTambah(li, nama, id);
    }
}