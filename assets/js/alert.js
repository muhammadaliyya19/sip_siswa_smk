 function hapus(href){
  swal({
    title: "Apakah anda yakin?",
    text: "Data yang dihapus tidak dapat dikembalikan!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      window.location = href
    }
  });
}

let success = $('.d-success').text(), error = $('.d-error').text(), warning = $('.d-warning').text(), message = $('.d-message').text();;
let success_cs_admin = $('.d-successadmin').text();

const messageObj = {
  title: "Berhasil!",
  text: message,
  icon: "success",
  buttons: true
}

const successObj = {
  title: "Berhasil!",
  text: "Data berhasil " + success,
  icon: "success",
  timer : 1500,
  buttons: true
}

var content_reminder = document.createElement('div');
content_reminder.innerHTML = 'Data berhasil ditambahkan!<br> Mohon informasikan : <br>Calon siswa dapat login mengunakan <strong>NISN</strong> sebagai <b>Username dan Password</b>.';

const successObjRemind = {
  title: "Berhasil!",
  content: content_reminder,
  icon: "success",
  buttons: true,
  // html: "Data berhasil " + success + "<br> Mohon informasikan : <br>Calon siswa dapat login mengunakan <strong>NISN</strong> sebagai <b>Username dan Password</b>.",
  // text: "Data berhasil " + success + "<br> Mohon informasikan : <br>Calon siswa dapat login mengunakan <strong>NISN</strong> sebagai <b>Username dan Password</b>.",
}

const warningObj = {
  title: "Perhatian!",
  text: warning,
  icon: "warning",
  buttons: true
}

const errorObj = {
  title: "Error!",
  text:  error,
  icon: "error",
  buttons: true
}

if (message != '') {
  console.log("masuk sini if (message !=")
  swal(messageObj)
}
if (success != '') {
  console.log("masuk sini swal(successObj)")
  swal(successObj)
}
if (success_cs_admin != '') {
  console.log("masuk sini swal(successObjRemind)")
  swal(successObjRemind)
}
if (warning != '') {
  console.log("masuk sini if (warning !=")
  swal(warningObj)
}
if (error != '') {
  console.log("masuk sini if (error !=")
  swal(errorObj)
}