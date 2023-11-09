<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        function validateForm() {
        //let x = document.forms["myForm"]["fname"].value;
        var x = document.getElementById("fname");
        var nrp = document.getElementById("nrp");
        //bahwa yang dicek cukup yang invaid
        //lakukan per jenis validasi, supaya user tahu salahnya apa
        if (x.value == "") { //isian kosong, berarti text box tidak diisi/kosong
            alert("Nama harus diisi..");
            x.focus();
            return false; //function ini ada return value, bukan void
            //stop, gak dikirim ke server
        }
        if (nrp.value == "") { //isian kosong, berarti text box tidak diisi/kosong
            alert("NRP harus diisi..");
            nrp.focus();
            return false; //function ini ada return value, bukan void
            //stop, gak dikirim ke server
        }
        if (isNaN(nrp.value) == true) {
            alert("NRP harus berupa angka.");
            nrp.focus();
            return false; //function ini ada return value, bukan void
        }

        //console.log(nrp.value.length);
        if (nrp.value.length != 10) {
            alert("Jumlah digit harus 10, Anda memasukkan" + nrp.value.length + "digit!");
            nrp.focus();
            return false; //function ini ada return value, bukan void
        }
        if (nrp.value.substring(0,4) != 5026) {
            alert("NRP bukan dari SI");
            nrp.focus();
            return false; //function ini ada return value, bukan void
        }
        if (!(nrp.value.substring(4,6) == 21 || nrp.value.substring(4,6) == 22)) {
            alert("NRP bukan dari angkatan 21/22");
            nrp.focus();
            return false; //function ini ada return value, bukan void
        }

        return true ; //boleh diberi boleh tidak, karena default function adalah true. Pencegahan nilai
        //ke false berfungsi supaya tidak jadi dikirimkan.
    }
    </script>
</head>
<body>

    <!-- <h2>JavaScript Validation</h2>
    <form name="myForm" action="https://google.com" onsubmit="return validateForm" method="post">
      Name: <input type="text" id="fname" name="fname" class="form-control" required>
      <input type="submit" value="Submit" class="btn btn-primary">
      <input type="reset" value="Kosong" class="btn btn-warning">
    </form>
    
    <p>If you click submit, without filling out the text field,
    your browser will display an error message.</p> -->
    
    <h2>Pendaftaran Asisten Lab Sistem Informasi</h2>
    <form name="myForm" action="https://google.com" onsubmit="return validateForm()" method="post">
        <label form="frame">Name:</label>
        <input type="text" id="fname" name="fname" class="form-control">
        <label fpr="nrp">NRP:</label>
        <input type="text" id="nrp" name="nrp" class="form-control">

        <input type="submit" value="Submit" class="btn btn-primary">
        <input type="reset" value="Kosongi" class="btn btn-warning">
    </form>
</body>
</html>
