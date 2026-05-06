// KONFIRMASI HAPUS
function konfirmasiHapus(){
    return confirm("Yakin ingin menghapus data?");
}

// NOTIFIKASI SEDERHANA
function sukses(msg){
    alert(msg);
}

// VALIDASI FORM
function validasiForm(){
    let inputs = document.querySelectorAll("input");

    for(let i = 0; i < inputs.length; i++){
        if(inputs[i].value === ""){
            alert("Semua field harus diisi!");
            return false;
        }
    }
    return true;
}