// mengubah objek menjadi json
let mahasiswa = {
    nama: "Aditiya Permana",
    nim: "151098654",
    email: 'adit@mail.com'
};

console.log(JSON.stringify(mahasiswa));

// json ke objek
let xhr = new XMLHttpRequest();

xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
        // json ke objek
        let mahasiswa = JSON.parse(this.responseText);
        console.log(mahasiswa);
    }
}

xhr.open('GET', 'test.json', true);
xhr.send();