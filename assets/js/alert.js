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

const success = $('.d-success').text(), error = $('.d-error').text(), warning = $('.d-warning').text(), message = $('.d-message').text();;
const success_cs_admin = $('.d-success').text();

const messageObj = {
 title: "Berhasil!",
 text: message,
 icon: "success"
}

const successObj = {
 title: "Berhasil!",
 text: "Data berhasil " + success,
 icon: "success",
 timer : 1500,
 buttons : false
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
 icon: "warning"
}

const errorObj = {
 title: "Error!",
 text:  error,
 icon: "error"
}

if (message != '') {
  swal(messageObj)
}
if (success != '') {
  swal(successObj)
}
if (success_cs_admin != '') {
  swal(successObjRemind)
}
if (warning != '') {
  swal(warningObj)
}
if (error != '') {
  swal(errorObj)
}