<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Tech Shop</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #263548;
        }

        .navbar-brand, .nav-link {
            color: #fff !important;
        }

        .carousel-inner img {
            width: 100%;
            height: 400px;
        }

        .carousel-indicators li {
            background-color: #007bff;
        }

        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .highlight {
            background-color: #d4edda;
            color: #155724;
        }

        footer {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        /* Button text changes */
        #changeTextButton:hover {
            cursor: pointer;
        }

        
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="index.html">Tech Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="careers.php">Careers</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
            </ul>
        </div>
    </nav>

    <!-- Carousel Section -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/image1.jpg"d-block w-100" alt="Welcome to Tech Shop">
            </div>
            <div class="carousel-item">
                <img src="images/image2.jpg"d-block w-100" alt="Innovative Solutions">
            </div>
            <div class="carousel-item">
                <img src="images/image3.jpg"d-block w-100" alt="Quality Services">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

     <!-- Feature Section -->
     <div class="container my-5">
        <h1 class="text-center">Welcome to Tech Shop</h1>
        <p class="text-center">Explore the best tech solutions for your business and personal needs.</p>

        <div class="row my-5">
            <!-- Web Development -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/webdeveloper.jpg"card-img-top" alt="Web Development">
                    <div class="card-body">
                        <h5 class="card-title">Web Development</h5>
                        <p class="card-text details" style="display: none;">We provide state-of-the-art web solutions using the latest technologies.</p>
                        <button class="btn btn-primary toggle-details">Toggle Details</button>
                    </div>
                </div>
            </div>

            <!-- App Development -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/appdeveloper.jpg"card-img-top" alt="App Development">
                    <div class="card-body">
                        <h5 class="card-title">App Development</h5>
                        <p class="card-text">Build native and cross-platform apps.</p>
                        <button class="btn btn-primary" id="appDevBtn">More Details</button>
                    </div>
                </div>
            </div>

            <!-- Cloud Services -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/clouddeveloper.jpg"card-img-top" alt="Cloud Services">
                    <div class="card-body">
                        <h5 class="card-title">Cloud Services</h5>
                        <p class="card-text">Migrate and secure your data in the cloud.</p>
                        <button class="btn btn-primary" id="cloudBtn">Highlight Text</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <button id="changeTextButton" class="btn btn-info">Change Text Content</button>
        </div>
    </div>

    <!-- App Development Modal -->
    <div class="modal fade" id="appDevModal" tabindex="-1" role="dialog" aria-labelledby="appDevModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="appDevModalLabel">App Development Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    We specialize in building apps for Android and iOS, ensuring high performance and scalability for your business.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Include existing content here -->

    <!-- Members Section -->
    <div class="container table-container">
        <h2 class="text-center">Tech Shop Academy Members</h2>
        <button class="btn btn-success mb-3" data-toggle="modal" data-target="#addMemberModal">Add Member</button>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Member ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Mobile Number</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="membersTable">
                <!-- Populated via JSON -->
            </tbody>
        </table>
    </div>

    <!-- Add Member Modal -->
    <div class="modal fade" id="addMemberModal" tabindex="-1" role="dialog" aria-labelledby="addMemberModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addMemberModalLabel">Add Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addMemberForm">
                        <div class="form-group">
                            <label for="memberName">Name</label>
                            <input type="text" class="form-control" id="memberName" required>
                        </div>
                        <div class="form-group">
                            <label for="memberAddress">Address</label>
                            <input type="text" class="form-control" id="memberAddress" required>
                        </div>
                        <div class="form-group">
                            <label for="memberMobile">Mobile Number</label>
                            <input type="text" class="form-control" id="memberMobile" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Member</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Update Member Modal -->
    <div class="modal fade" id="updateMemberModal" tabindex="-1" role="dialog" aria-labelledby="updateMemberModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateMemberModalLabel">Update Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="updateMemberForm">
                        <input type="hidden" id="updateMemberId">
                        <div class="form-group">
                            <label for="updateMemberName">Name</label>
                            <input type="text" class="form-control" id="updateMemberName" required>
                        </div>
                        <div class="form-group">
                            <label for="updateMemberAddress">Address</label>
                            <input type="text" class="form-control" id="updateMemberAddress" required>
                        </div>
                        <div class="form-group">
                            <label for="updateMemberMobile">Mobile Number</label>
                            <input type="text" class="form-control" id="updateMemberMobile" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Member</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>


    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script>
        $(document).ready(function () {
            // Load members data
            function loadMembers() {
                $.getJSON('server/members.json', function (data) {
                    let rows = '';
                    data.forEach(member => {
                        rows += `
                            <tr>
                                <td>${member.id}</td>
                                <td>${member.name}</td>
                                <td>${member.address}</td>
                                <td>${member.mobile}</td>
                                <td>
                                    <button class="btn btn-warning btn-sm update-member" data-id="${member.id}" data-name="${member.name}" data-address="${member.address}" data-mobile="${member.mobile}">Update</button>
                                    <button class="btn btn-danger btn-sm delete-member" data-id="${member.id}">Delete</button>
                                </td>
                            </tr>
                        `;
                    });
                    $('#membersTable').html(rows);
                });
            }

            loadMembers();

            // Add Member
            $('#addMemberForm').submit(function (e) {
                e.preventDefault();
                const newMember = {
                    id: Date.now(),
                    name: $('#memberName').val(),
                    address: $('#memberAddress').val(),
                    mobile: $('#memberMobile').val()
                };

                $.post('server/add_member.php', newMember, function (response) {
                    alert(response.message);
                    loadMembers();
                    $('#addMemberModal').modal('hide');
                }, 'json');
            });

            // Delete Member
            $(document).on('click', '.delete-member', function () {
                const id = $(this).data('id');
                $.post('server/delete_member.php', { id }, function (response) {
                    alert(response.message);
                    loadMembers();
                }, 'json');
            });

            // Show Update Member Modal
            $(document).on('click', '.update-member', function () {
                $('#updateMemberId').val($(this).data('id'));
                $('#updateMemberName').val($(this).data('name'));
                $('#updateMemberAddress').val($(this).data('address'));
                $('#updateMemberMobile').val($(this).data('mobile'));
                $('#updateMemberModal').modal('show');
            });

            // Update Member
            $('#updateMemberForm').submit(function (e) {
                e.preventDefault();
                const updatedMember = {
                    id: $('#updateMemberId').val(),
                    name: $('#updateMemberName').val(),
                    address: $('#updateMemberAddress').val(),
                    mobile: $('#updateMemberMobile').val()
                };

                $.post('server/update_member.php', updatedMember, function (response) {
                    alert(response.message);
                    loadMembers();
                    $('#updateMemberModal').modal('hide');
                }, 'json');
            });
        });

        //previous week
        $(document).ready(function () {
            // Web Development: Toggle details
            $('.toggle-details').click(function () {
                $(this).siblings('.details').slideToggle();
            });

            // App Development: Show popup
            $('#appDevBtn').click(function () {
                $('#appDevModal').modal('show'); // 
            });

            // Cloud Services: Highlight text //trv
            $('#cloudBtn').click(function () {
                const cardText = $(this).siblings('.card-text'); 
                cardText.toggleClass('highlight'); 
            });

            // Change Button Text  //mod
            $('#changeTextButton').click(function () {
                $(this).text('Exploring...');
                setTimeout(function () {
                    $('#changeTextButton').text('Change Text Content');
                    alert('Text has been successfully changed!');
                }, 1000);
            });

            // Hover effect on Ready to Explore button
            $('#changeTextButton').hover(
                function () {
                    $(this).text('Ready to Explore!');
                },
                function () {
                    $(this).text('Change Text Content');
                }
            ).click(function () {
                alert('Let’s Explore New Opportunities!');
            });
        });
    </script>
</body>

</html>
