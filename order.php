<?php
session_start();
include 'koneksi.php';

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $query = mysqli_query($conn,"INSERT INTO tbtransaksi(name,email,phone,message) VALUES ('$name','$email','$phone','$message')");

    if ($query) {
            echo '<script>alert("Order Pemesanan Berhasil"); location.href = "index.php"</script>';
    } else {
            echo '<script>alert("Register Gagal: '.mysqli_error($conn) . '")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Mega Contact Modal Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>    
body {
    color: #566787;
    background: #f5f5f5;
    font-family: "Varela Round", sans-serif;
}
.form-control {
    border-color: #e5e5e5;
    box-shadow: none;
}
.form-control:focus {
    border-color: #0cb4aa;
}
.contact-modal {
    padding: 50px;
    margin: 30px auto;
}
.contact-modal h4 {
    font-size: 26px;
    display: inline-block;
}
.contact-modal .form-control, .contact-modal .btn  {
    min-height: 38px;
    border-radius: 1px;
    outline: none;
    border-radius: 2px;
    transition: all 0.5s;
}
.contact-modal textarea {
    height: 144px;
}
.contact-modal .btn-info {
    min-width: 120px;
}
.contact-modal .btn-link {
    color: #17a2b8;
}
.contact-modal label {
    opacity: 0.9;
    font-weight: normal;
    font-size: 95%;
}
.contact-modal textarea {
    resize: vertical;
}
.contact-modal .modal-header {
    padding: 20px 35px 15px;
}
.contact-modal .modal-content {
    border-radius: 1px;
}
.modal-footer {
    padding: 20px 35px;
}
.contact-modal .close {
    position: absolute;
    right: 35px;
    top: 25px;
}
.contact-modal .modal-body {
    padding: 25px 35px 15px;
}
.hint-text {
    opacity: 0.8;
}
.trigger-btn {
    display: inline-block;
    margin: 100px auto;
}
</style>
</head>
<body>
<div class="text-center">
	<!-- Button HTML (to Trigger Modal) -->
	<a href="#myModal" class="trigger-btn" data-toggle="modal">Click to Open Contact Modal</a>
</div>

<!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-lg contact-modal">
		<div class="modal-content">
            <form action="" method="post">
                <div class="modal-header">				
                    <h4 class="modal-title">Send Us a Message</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputName" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputEmail" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" id="inputMessage" placeholder="Message" required></textarea>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-link" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info" value="Send">
                </div>
            </form>
		</div>
	</div>
</div>
</body>
</html>