<style>
    .card {
        border: none;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .profile-img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #4e8cff;
    }

    .profile-username {
        color: #333;
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .text-muted {
        color: #666;
        font-size: 16px;
    }

    .badge-primary {
        background-color: #4e8cff;
    }

    .additional-info {
        margin-top: 20px;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }
</style>
</head>

<body>

    <div class="container">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img class="profile-user-img img-fluid img-circle" src="/img/motor.JPG"
                            alt="User profile picture">
                    </div>
                    <div class="col-md-8">
                        <h3 class="profile-username">Nina Mcintire</h3>
                        <p class="text-muted">Software Engineer</p>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Followers
                                <span class="badge badge-primary badge-pill">1,322</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Following
                                <span class="badge badge-primary badge-pill">543</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Friends
                                <span class="badge badge-primary badge-pill">13,287</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Additional Information -->
                <div class="additional-info">
                    <h4>Additional Information</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat et dolor dictum,
                        nec feugiat tortor sagittis.</p>
                    <p>Sed facilisis lectus nec velit luctus, eget fermentum erat varius. Vivamus tristique metus nec
                        dui tincidunt, a consequat metus tristique.</p>
                </div>
                <!-- /.Additional Information -->

            </div>
            <!-- /.card-body -->
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>