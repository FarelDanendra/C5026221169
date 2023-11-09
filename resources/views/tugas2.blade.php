<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <h2 style="color:blue;">Modal</h2>
        <h2>Nilai mata kuliah semester 1</h2>
        <p>Daftar nilai semester 1  </p>
        <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Open
        </button>

        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Semester 1</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Fisika : 80
                    </div>
                    <div class="modal-body">
                        Kimia : 90
                    </div>
                    <div class="modal-body">
                        Matematika : 90
                    </div>
                    <div class="modal-body">
                        KSI : 90
                    </div>
                    <div class="modal-body">
                        LSD : 85
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <h2 style="color: blue;">centered modal</h2>
        <h2>Fakultas Teknik Elektro dan Informatika cerdas "FTEIC"</h2>
        <p>Berikut daftar jurusan yang ada di FTEIC.</p>
        <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#jurusan">
            Open
        </button>

        <!-- The Modal -->
        <div class="modal fade" id="jurusan">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <!-- Modal body -->
                        <div class="modal-body">
                            Teknik Elektro
                        </div>
                        <div class="modal-body">
                            Teknik Komputer
                        </div>
                        <div class="modal-body">
                            Teknik Biomedik
                        </div>
                        <div class="modal-body">
                            Teknik Informatika
                        </div>
                        <div class="modal-body">
                            Sistem Informasi
                        </div>
                        <div class="modal-body">
                            Teknologi Informasi
                        </div>

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

    </div>

</body>

</html>