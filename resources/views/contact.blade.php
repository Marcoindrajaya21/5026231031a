<html>
    <head>
        <title>Pendaftaran ISE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <style>
            body {
                background-color: #f8f9fa;
                font-family: Arial, sans-serif;
            }
            .container {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .form-container {
                background-color: #ffffff;
                padding: 30px;
                border-radius: 12px;
                box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
                width: 50%;
                max-width: 600px;
            }
            .form-title {
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 20px;
            }
            .form-group {
                margin-bottom: 15px;
            }
            .btn-submit {
                background-color: #343a40;
                color: #ffffff;
                width: 100%;
            }
            .btn-submit:hover {
                background-color: #495057;
            }
        </style>
        <script>
            function validasi() {
                var nrp = document.getElementById("nrp").value;
                var nama = document.getElementById("nama").value;

                if (nrp.length == 0) {
                    Swal.fire({
                        title: "Kesalahan Input",
                        text: "NRP tidak boleh kosong",
                        icon: "error"
                    });
                    return false;
                }

                if (nama.length == 0) {
                    Swal.fire({
                        title: "Kesalahan Input",
                        text: "Nama tidak boleh kosong",
                        icon: "error"
                    });
                    return false;
                }

                if (nama.length < 2) {
                    Swal.fire({
                        title: "Kesalahan Input",
                        text: "Nama minimal 2 huruf",
                        icon: "error"
                    });
                    return false;
                }

                var regex = /\d/;
                if (regex.test(nama)) {
                    Swal.fire({
                        title: "Kesalahan Input",
                        text: "Nama harus semua huruf",
                        icon: "error"
                    });
                    return false;
                }

                return true;
            }
        </script>
    </head>
    <body>
        <div class="container">
            <div class="form-container">
                <div class="form-title">Love to hear from you, Get in touch 👋</div>
                <form action="https://google.co.id" method="get" onsubmit="return validasi();">
                    <div class="form-group">
                        <label for="nrp">Your NRP</label>
                        <input type="text" name="nrp" id="nrp" class="form-control" placeholder="Enter your NRP">
                    </div>
                    <div class="form-group">
                        <label for="nama">Your Name</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter subject">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control" placeholder="Let us know your project about" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-submit">Just Send</button>
                </form>
            </div>
        </div>
    </body>
</html>